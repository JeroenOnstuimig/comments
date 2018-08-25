<?php
namespace verbb\comments\controllers;

use verbb\comments\Comments;
use verbb\comments\elements\Comment;
use verbb\comments\models\Flag;
use verbb\comments\models\Vote;

use Craft;
use craft\web\Controller;

use yii\web\Response;

class CommentsController extends Controller
{
    // Properties
    // =========================================================================

    protected $allowAnonymous = ['actionSave'];

    
    // Public Methods
    // =========================================================================

    //
    // Control Panel
    //

    public function actionEditTemplate($commentId)
    {
        $comment = Comments::$plugin->getComments()->getCommentById($commentId);

        return $this->renderTemplate('comments/comments/_edit', [
            'comment' => $comment,
        ]);
    }

    public function actionSaveComment()
    {
        $this->requirePostRequest();

        $request = Craft::$app->getRequest();
        $session = Craft::$app->getSession();

        $commentId = $request->getParam('commentId');
        $siteId = $request->getParam('siteId');

        // Ensure we only set a selection of attributes from the CP
        $comment = Comments::$plugin->comments->getCommentById($commentId, $siteId);
        $comment->status = $request->getParam('status', $comment->status);
        $comment->comment = $request->getParam('comment', $comment->comment);

        if (!Craft::$app->getElements()->saveElement($comment, false, false)) {
            $session->setError($comment->getErrors());
        }

        $session->setNotice(Craft::t('comments', 'Comment saved successfully.'));

        return $this->redirectToPostedUrl($comment);
    }

    public function actionDeleteComment()
    {
        $this->requirePostRequest();

        $request = Craft::$app->getRequest();
        $session = Craft::$app->getSession();

        $commentId = $request->getParam('commentId');

        if (!Craft::$app->getElements()->deleteElementById($commentId)) {
            $session->setError($comment->getErrors());
        }

        $session->setNotice(Craft::t('comments', 'Comment deleted.'));

        return $this->redirectToPostedUrl($comment);
    }

    //
    // Comments Front-End
    //

    public function actionSave()
    {
        $this->requirePostRequest();

        $request = Craft::$app->getRequest();

        $comment = $this->_setCommentFromPost();

        if (!Craft::$app->getElements()->saveElement($comment, true, false)) {
            if ($request->getAcceptsJson()) {
                return $this->asJson([
                    'success' => false,
                    'errors' => $comment->getErrors(),
                ]);
            }

            Craft::$app->getUrlManager()->setRouteParams([
                'errors' => $comment->getErrors(),
            ]);

            return null;
        }

        if ($request->getAcceptsJson()) {
            // Return some HTML with the template generated
            $html = Comments::$plugin->getComments()->renderComment($comment);
            $notice = '';

            if ($comment->status == Comment::STATUS_PENDING) {
                $notice = Craft::t('comments', 'Your comment has been posted and is under review.');
            }

            return $this->asJson([
                'success' => true,
                'id' => $comment->id,
                'html' => $html,
                'notice' => $notice,
            ]);
        }

        return $this->redirectToPostedUrl();
    }

    public function actionFlag()
    {
        $currentUser = Craft::$app->getUser()->getIdentity();
        $request = Craft::$app->getRequest();

        $commentId = $request->getParam('commentId');

        $flag = Comments::$plugin->getFlags()->getFlagByCommentId($commentId) ?? new Flag();
        $flag->commentId = $commentId;

        // Okay if no user here, although required, the model validation will pick it up
        $flag->userId = $currentUser->id ?? null;

        if (!Comments::$plugin->getFlags()->toggleFlag($flag)) {
            if ($request->getAcceptsJson()) {
                return $this->asJson([
                    'success' => false,
                    'errors' => $flag->getErrors(),
                ]);
            }

            Craft::$app->getUrlManager()->setRouteParams([
                'errors' => $flag->getErrors(),
            ]);

            return $this->redirect($request->referrer);
        }

        if ($request->getAcceptsJson()) {
            return $this->asJson([
                'success' => true,
            ]);
        }

        return $this->redirect($request->referrer);
    }

    public function actionVote()
    {
        $currentUser = Craft::$app->getUser()->getIdentity();
        $request = Craft::$app->getRequest();

        $upvote = $request->getParam('upvote');
        $downvote = $request->getParam('downvote');
        $commentId = $request->getParam('commentId');

        $vote = Comments::$plugin->getVotes()->getVoteByCommentId($commentId) ?? new Vote();
        $vote->commentId = $commentId;

        if ($upvote) {
            // Reset like no votes were taken!
            if ($vote->downvote) {
                $vote->downvote = null;
                $vote->upvote = null;
            } else {
                $vote->downvote = null;
                $vote->upvote = '1';
            }
        } else {
            // Reset like no votes were taken!
            if ($vote->upvote) {
                $vote->downvote = null;
                $vote->upvote = null;
            } else {
                $vote->downvote = '1';
                $vote->upvote = null;
            }
        }

        // Okay if no user here, although required, the model validation will pick it up
        $vote->userId = $currentUser->id ?? null;

        if (!Comments::$plugin->getVotes()->saveVote($vote)) {
            if ($request->getAcceptsJson()) {
                return $this->asJson([
                    'success' => false,
                    'errors' => $vote->getErrors(),
                ]);
            }

            Craft::$app->getUrlManager()->setRouteParams([
                'errors' => $vote->getErrors(),
            ]);

            return $this->redirect($request->referrer);
        }

        if ($request->getAcceptsJson()) {
            return $this->asJson([
                'success' => true,
            ]);
        }

        return $this->redirect($request->referrer);
    }

    public function actionTrash()
    {
        $request = Craft::$app->getRequest();

        $comment = $this->_setCommentFromPost();
        $comment->status = Comment::STATUS_TRASHED;

        if (!Craft::$app->getElements()->saveElement($comment, false, false)) {
            if ($request->getAcceptsJson()) {
                return $this->asJson([
                    'success' => false,
                    'errors' => $comment->getErrors(),
                ]);
            }

            Craft::$app->getUrlManager()->setRouteParams([
                'errors' => $comment->getErrors(),
            ]);

            return $this->redirect($request->referrer);
        }

        if ($request->getAcceptsJson()) {
            return $this->asJson([
                'success' => true,
                'id' => $comment->id,
            ]);
        }

        return $this->redirect($request->referrer);
    }


    // Private Methods
    // =========================================================================

    private function _setCommentFromPost(): Comment
    {
        $currentUser = Craft::$app->getUser()->getIdentity();
        $request = Craft::$app->getRequest();
        $session = Craft::$app->getSession();
        $settings = Comments::$plugin->getSettings();

        $commentId = $request->getParam('commentId');
        $newParentId = $request->getParam('newParentId');
        $siteId = $request->getParam('siteId');

        if ($commentId) {
            $comment = Comments::$plugin->comments->getCommentById($commentId, $siteId);

            if (!$comment) {
                throw new Exception(Craft::t('comments', 'No comment with the ID “{id}”', ['id' => $commentId]));
            }
        } else {
            $comment = new Comment();
        }

        // Backward compatibility
        $ownerId = $request->getParam('ownerId');
        $elementId = $request->getParam('elementId');

        $comment->ownerId = $ownerId ?? $elementId ?? $comment->ownerId;
        $comment->siteId = $request->getParam('siteId', $comment->siteId);
        $comment->userId = ($currentUser) ? $currentUser->id : null;
        
        // Other handy stuff
        $comment->url = $request->referrer;
        $comment->ipAddress = $request->getUserIP();
        $comment->userAgent = $request->getUserAgent();
            
        // Handle the fields
        $comment->name = $request->getParam('fields.name', $comment->name);
        $comment->email = $request->getParam('fields.email', $comment->email);
        $comment->comment = $request->getParam('fields.comment', $comment->comment);

        // Set any new comment to be pending if requireModeration is true
        if ($settings->requireModeration) {
            $comment->status = Comment::STATUS_PENDING;
        } else {
            $comment->status = Comment::STATUS_APPROVED;
        }

        if ($newParentId) {
            $comment->newParentId = $newParentId;
        }

        return $comment;
    }


}
