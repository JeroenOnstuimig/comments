<?php
namespace verbb\comments\elements\db;

use verbb\comments\elements\Comment;

use craft\elements\db\ElementQuery;
use craft\helpers\Db;

class CommentQuery extends ElementQuery
{
    // Public Properties
    // =========================================================================

    public $withStructure = true;

    public $ownerId;
    public $userId;
    public $status = Comment::STATUS_APPROVED;
    public $name;
    public $email;
    public $comment;
    public $url;
    public $ipAddress;
    public $userAgent;

    public $parentId;


    // Public Methods
    // =========================================================================

    protected function beforePrepare(): bool
    {
        $this->joinElementTable('comments_comments');

        $this->query->select([
            'comments_comments.id',
            'comments_comments.ownerId',
            'comments_comments.userId',
            'comments_comments.status',
            'comments_comments.name',
            'comments_comments.email',
            'comments_comments.url',
            'comments_comments.comment',
            'comments_comments.ipAddress',
            'comments_comments.userAgent',
            'comments_comments.dateCreated',
            'comments_comments.dateUpdated',
        ]);

        if ($this->ownerId) {
            $this->subQuery->andWhere(Db::parseParam('comments_comments.ownerId', $this->ownerId));
        }

        if ($this->userId) {
            $this->subQuery->andWhere(Db::parseParam('comments_comments.userId', $this->userId));
        }

        if ($this->status) {
            $this->subQuery->andWhere(Db::parseParam('comments_comments.status', $this->status));
        }

        if ($this->name) {
            $this->subQuery->andWhere(Db::parseParam('comments_comments.name', $this->name));
        }

        if ($this->email) {
            $this->subQuery->andWhere(Db::parseParam('comments_comments.email', $this->email));
        }

        if ($this->comment) {
            $this->subQuery->andWhere(Db::parseParam('comments_comments.comment', $this->comment));
        }

        if ($this->url) {
            $this->subQuery->andWhere(Db::parseParam('comments_comments.url', $this->url));
        }

        if ($this->ipAddress) {
            $this->subQuery->andWhere(Db::parseParam('comments_comments.ipAddress', $this->ipAddress));
        }

        if ($this->userAgent) {
            $this->subQuery->andWhere(Db::parseParam('comments_comments.userAgent', $this->userAgent));
        }

        if ($this->dateCreated) {
            $this->subQuery->andWhere(Db::parseDateParam('comments_comments.dateCreated', $this->dateCreated));
        }

        return parent::beforePrepare();
    }

    protected function statusCondition(string $status)
    {
        switch ($status) {
            case Comment::STATUS_APPROVED:
                return [
                    'comments_comments.status' => Comment::STATUS_APPROVED,
                ];
            case Comment::STATUS_PENDING:
                return [
                    'comments_comments.status' => Comment::STATUS_PENDING,
                ];
            case Comment::STATUS_SPAM:
                return [
                    'comments_comments.status' => Comment::STATUS_SPAM,
                ];
            case Comment::STATUS_TRASHED:
                return [
                    'comments_comments.status' => Comment::STATUS_TRASHED,
                ];
            default:
                return parent::statusCondition($status);
        }
    }
}
