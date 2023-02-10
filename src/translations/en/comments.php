<?php

return [
    //
    // Email Messages
    //
    'comments_author_notification_heading' => 'When a comment is received:',
    'comments_author_notification_subject' => '"{{element.title}}" has received a comment on {{siteName}}.',
    'comments_author_notification_body' => "Hi {{user.friendlyName}},\n\n" .
        "A new comment on the post \"{{ element.title }}\" has been made.\n\n" .
        "{{element.url}}#comment-{{comment.id}}.",

    'comments_reply_notification_heading' => 'When someone replies to another comment:',
    'comments_reply_notification_subject' => 'Someone has replied to your comment on {{siteName}}.',
    'comments_reply_notification_body' => "Hi {{user.friendlyName}},\n\n" .
        "A new reply to your comment on the post \"{{ element.title }}\" has been made.\n\n" .
        "{{element.url}}#comment-{{comment.id}}.",

    'comments_subscriber_notification_element_heading' => 'When a comment is made on a subscribed element:',
    'comments_subscriber_notification_element_subject' => 'A new comment has been made on {{ element.title }}',
    'comments_subscriber_notification_element_body' => "Hi {{user.friendlyName}},\n\n" .
        "A new comment on the post \"{{ element.title }}\" has been made.\n\n" .
        "{{element.url}}#comment-{{comment.id}}.",

    'comments_subscriber_notification_comment_heading' => 'When someone replies to another comment they have subscribed to:',
    'comments_subscriber_notification_comment_subject' => 'A new reply has been made on {{ element.title }}',
    'comments_subscriber_notification_comment_body' => "Hi {{user.friendlyName}},\n\n" .
        "A new reply on the post \"{{ element.title }}\" has been made.\n\n" .
        "{{element.url}}#comment-{{comment.id}}.",

    'comments_moderator_notification_comment_heading' => 'When a comment has been made, and awaits moderation:',
    'comments_moderator_notification_comment_subject' => 'A new comment requires moderation on {{ siteName }}',
    'comments_moderator_notification_comment_body' => "Hi {{user.friendlyName}},\n\n" .
        "A new comment on the post \"{{ element.title }}\" has been made and requires moderation.\n\n" .
        "{{comment.cpEditUrl}}.",

    'comments_moderator_approved_notification_comment_heading' => 'When a comment has been approved via moderation:',
    'comments_moderator_approved_notification_comment_subject' => 'Your comment has been approved on {{ siteName }}',
    'comments_moderator_approved_notification_comment_body' => "Hi {{user.friendlyName}},\n\n" .
        "Your comment has been approved on the post \"{{ element.title }}\".\n\n" .
        "{{element.url}}#comment-{{comment.id}}.",

    'comments_admin_notification_heading' => 'When a comment is received:',
    'comments_admin_notification_subject' => '"{{element.title}}" has received a comment on {{siteName}}.',
    'comments_admin_notification_body' => "Hi,\n\n" .
        "A new comment on the post \"{{ element.title }}\" has been made.\n\n" .
        "{{comment.cpEditUrl}}.",

    'comments_flag_notification_heading' => 'When a comment is received:',
    'comments_flag_notification_subject' => '"{{element.title}}" has received a comment flag on {{siteName}}.',
    'comments_flag_notification_body' => "Hi,\n\n" .
        "A comment has been flagged on the post \"{{ element.title }}\".\n\n" .
        "{{comment.cpEditUrl}}.",

    //  
    // Email templates
    //

    'Your name' => 'Your name',
    'Your email' => 'Your email',
    'Add a comment...' => 'Add a comment...',
    'Post comment' => 'Post comment',

    //
    // Validation
    //

    'Form validation failed. Marked as spam.' => 'Oops, comment validation failed. Marked as spam.',
    'Comment blocked due to security policy.' => 'Comment blocked due to security policy.',
    'Comment must be shorter than 1000 characters.' => 'Comment must be shorter than 1000 characters.',
    'Must be logged in to comment.' => 'Must be logged in to comment.',
    'Name is required.' => 'Name is required.',
    'Email is required.' => 'Email is required.',
    'Unable to modify another users comment.' => 'Unable to modify another users comment.',
    'Comment must not be blank.' => 'Comment must not be blank.',
    'Comments are disabled for this element.' => 'Comments are disabled for this element.',
    'Delete' => 'Delete',
    'The number of seconds between commenting. Helps to prevent comment flooding.' => 'The number of seconds between commenting. Helps to prevent comment flooding.',
    'Enable Spam Checks' => 'Enable Spam Checks',
    'Edit' => 'Edit',
    'Create comments' => 'Create comments',
    'View comments' => 'View comments',
    'The UID for the internal structure used by Comments.' => 'The UID for the internal structure used by Comments.',
    'Flagged Comments Threshold' => 'Flagged Comments Threshold',
    'reCAPTCHA Site Key' => 'reCAPTCHA Site Key',
    'reCAPTCHA Secret Key' => 'reCAPTCHA Secret Key',
    'Moderated Keywords' => 'Moderated Keywords',
    'Trashed' => 'Trashed',
    'The default templates are what is used when calling `craft.comments.render()`, and automatically outputs CSS and JS code in your templates. If you want full control over your templates, use [Custom Templates]({link}).' => 'The default templates are what is used when calling `craft.comments.render()`, and automatically outputs CSS and JS code in your templates. If you want full control over your templates, use [Custom Templates]({link}).',
    'Show comments for certain status.' => 'Show comments for certain status.',
    'Status' => 'Status',
    'Auto-Subscribe Users to all Comments' => 'Auto-Subscribe Users to all Comments',
    'Select the user group that should be classified as moderators. The will determine who notifications should be sent to.' => 'Select the user group that should be classified as moderators. The will determine who notifications should be sent to.',
    'Authors receive an email for every new comment. Edit the content of this email through [System Messages]({link}).' => 'Authors receive an email for every new comment. Edit the content of this email through [System Messages]({link}).',
    'Comment Options' => 'Comment Options',
    'Sub-Heading' => 'Sub-Heading',
    'Whether to enable spam checks for form-based comments.' => 'Whether to enable spam checks for form-based comments.',
    'Set the number of comments each user is allowed for each owner element. Leave empty for no restrictions.' => 'Set the number of comments each user is allowed for each owner element. Leave empty for no restrictions.',
    'General Settings' => 'General Settings',
    'Allow Guest Comments' => 'Allow Guest Comments',
    'Close' => 'Close',
    'Updated Date' => 'Updated Date',
    'Your comment has been posted and is under review.' => 'Your comment has been posted and is under review.',
    'Comment marked as inappropriate' => 'Comment marked as inappropriate',
    'No replies for this comment' => 'No replies for this comment',
    'Voting' => 'Voting',
    'Auto-Subscribe Users to Replies only on their Comments' => 'Auto-Subscribe Users to Replies only on their Comments',
    'Enable Author Notifications' => 'Enable Author Notifications',
    'Whether to show how long ago a comment was made.' => 'Whether to show how long ago a comment was made.',
    'Votes' => 'Votes',
    'Template Folder Override' => 'Template Folder Override',
    'Comment must be shorter than {limit} characters.' => 'Comment must be shorter than {limit} characters.',
    'If a comment contains any of these words in its content, name, email, or IP, it will not be submitted. One word or IP per line. Case insensitive.' => 'If a comment contains any of these words in its content, name, email, or IP, it will not be submitted. One word or IP per line. Case insensitive.',
    'Hide Voting for Threshold' => 'Hide Voting for Threshold',
    'Comments Form' => 'Comments Form',
    'No comments.' => 'No comments.',
    'Edit other users’ comments' => 'Edit other users’ comments',
    'If disabling any of these options, you‘ll need to supply your own CSS or JS in order for the form and comments functionality to look and work correctly.' => 'If disabling any of these options, you‘ll need to supply your own CSS or JS in order for the form and comments functionality to look and work correctly.',
    'Enabled' => 'Enabled',
    'Show Avatar' => 'Show Avatar',
    'Enter the minimum score needed to pass the reCAPTCHA test.' => 'Enter the minimum score needed to pass the reCAPTCHA test.',
    'Administrators' => 'Administrators',
    'Reply' => 'Reply',
    'Allow Subscriber Notifications' => 'Allow Subscriber Notifications',
    'Email' => 'Email',
    'Couldn’t save comment.' => 'Couldn’t save comment.',
    'Show Flagged Comments' => 'Show Flagged Comments',
    'Allow guest users to upvote or downvote other users comments.' => 'Allow guest users to upvote or downvote other users comments.',
    'Templates' => 'Templates',
    'Whether to show an avatar for comments. Craft users who comment will have their user profile image shown, while guests will show a placeholder (be sure to add one below).' => 'Whether to show an avatar for comments. Craft users who comment will have their user profile image shown, while guests will show a placeholder (be sure to add one below).',
    'Status updated.' => 'Status updated.',
    'Moderators' => 'Moderators',
    'Whether to enable Gravatar support. We‘ll try and fetch the users‘ Gravatar, based on their email. If they don‘t have a Gravatar, their user profile or placeholder avatar will be used.' => 'Whether to enable Gravatar support. We‘ll try and fetch the users‘ Gravatar, based on their email. If they don‘t have a Gravatar, their user profile or placeholder avatar will be used.',
    'Default Templates' => 'Default Templates',
    'Name' => 'Name',
    'Allow Per-Comment Subscriber Notifications' => 'Allow Per-Comment Subscriber Notifications',
    'List Items' => 'List Items',
    'Comment Administrators' => 'Comment Administrators',
    'Security & Spam' => 'Security & Spam',
    'IP Address' => 'IP Address',
    'Set the number of levels (depth) replies to comments can have. Leave empty for no restrictions, 0 to disable replies, or any number to limit how many levels of replies can be made.' => 'Set the number of levels (depth) replies to comments can have. Leave empty for no restrictions, 0 to disable replies, or any number to limit how many levels of replies can be made.',
    'Permissions' => 'Permissions',
    'Replies' => 'Replies',
    'Enable Voting' => 'Enable Voting',
    'Whether custom fields should show their field names as labels.' => 'Whether custom fields should show their field names as labels.',
    'Guest users can post a comment.' => 'Guest users can post a comment.',
    'Approved' => 'Approved',
    'Show Time Ago' => 'Show Time Ago',
    'CSS/JS Resources' => 'CSS/JS Resources',
    'Enable Flagging' => 'Enable Flagging',
    'Whether to automatically subscribe to notifications on comments that the user owns. This means, any time another user replies to a comment they own, they\'ll receive a notification.' => 'Whether to automatically subscribe to notifications on comments that the user owns. This means, any time another user replies to a comment they own, they\'ll receive a notification.',
    'If a comment contains any of these words in its content, name, email, or IP, it will be marked as pending. One word or IP per line. Case insensitive.' => 'If a comment contains any of these words in its content, name, email, or IP, it will be marked as pending. One word or IP per line. Case insensitive.',
    'Could not update statuses due to validation errors.' => 'Could not update statuses due to validation errors.',
    'Voting is not allowed.' => 'Voting is not allowed.',
    'Enable Flagged Notifications' => 'Enable Flagged Notifications',
    'Are you sure you want to delete the selected comments?' => 'Are you sure you want to delete the selected comments?',
    'Users can flag a comment as inappropriate. After the provided amount of flags are received for a comment, the \'isFlagged\' property for the comment will be true. You can then decide how to handle a flagged comment.' => 'Users can flag a comment as inappropriate. After the provided amount of flags are received for a comment, the \'isFlagged\' property for the comment will be true. You can then decide how to handle a flagged comment.',
    'If a guest is making a comment, this will be shown as their avatar.' => 'If a guest is making a comment, this will be shown as their avatar.',
    'Select which element collections should have commenting enabled on by default.' => 'Select which element collections should have commenting enabled on by default.',
    'Whether to use reCAPTCHA to protect against spam submissions.' => 'Whether to use reCAPTCHA to protect against spam submissions.',
    'Output Default JS' => 'Output Default JS',
    'Save comments' => 'Save comments',
    'Element' => 'Element',
    'Delete comments' => 'Delete comments',
    'Users receive an email when someone replies to their comment. Edit the content of this email through [System Messages]({link}).' => 'Users receive an email when someone replies to their comment. Edit the content of this email through [System Messages]({link}).',
    'Banned Keywords' => 'Banned Keywords',
    'Sending comment notification.' => 'Sending comment notification.',
    'Moderator User Group' => 'Moderator User Group',
    'Enable Guest Flagging' => 'Enable Guest Flagging',
    'Guest Notice' => 'Guest Notice',
    'Comments can be automatically closed on elements older than the provided amount of days. This uses the "Post Date" of an element. Leave empty to disable.' => 'Comments can be automatically closed on elements older than the provided amount of days. This uses the "Post Date" of an element. Leave empty to disable.',
    ' Elements' => ' Elements',
    'Enable comments' => 'Enable comments',
    'Are you sure you want to delete this comment?' => 'Are you sure you want to delete this comment?',
    'Unable to update subscribe status.' => 'Unable to update subscribe status.',
    'Allow your users to flag a comment as inappropriate, spam, or any other reason.' => 'Allow your users to flag a comment as inappropriate, spam, or any other reason.',
    'Users can subscribe to any comment made on an element. This will display a \'Subscribe\' button at the top of your comments thread. Shown only for logged in users.' => 'Users can subscribe to any comment made on an element. This will display a \'Subscribe\' button at the top of your comments thread. Shown only for logged in users.',
    'Select which elements to enable commenting on by default' => 'Select which elements to enable commenting on by default',
    'Comment hidden due to low rating' => 'Comment hidden due to low rating',
    'Maximum Reply Depth' => 'Maximum Reply Depth',
    'Subscribe to get email updates for this discussion' => 'Subscribe to get email updates for this discussion',
    'Show Custom Field Names' => 'Show Custom Field Names',
    '[Deleted element]' => '[Deleted element]',
    'Subscribing' => 'Subscribing',
    'The template Comments will use for HTML emails.' => 'The template Comments will use for HTML emails.',
    'Auto-close Comments' => 'Auto-close Comments',
    'Flagged' => 'Flagged',
    'Trash other users’ comments' => 'Trash other users’ comments',
    'For greater control over your comments and how they are displayed, you can provide a path to your own templates in the below folder.' => 'For greater control over your comments and how they are displayed, you can provide a path to your own templates in the below folder.',
    '[Deleted User]' => '[Deleted User]',
    'Admins will receive an email whenever someone flags a comment. Edit the content of this email through [System Messages]({link}).' => 'Admins will receive an email whenever someone flags a comment. Edit the content of this email through [System Messages]({link}).',
    'Subscribe' => 'Subscribe',
    'Security' => 'Security',
    'Enable Moderator-Approved Notifications' => 'Enable Moderator-Approved Notifications',
    'Output Default CSS' => 'Output Default CSS',
    'Edit Comment' => 'Edit Comment',
    'Spam Keywords' => 'Spam Keywords',
    'Create the layout for your users to make comments on.' => 'Create the layout for your users to make comments on.',
    'Placeholder Avatar' => 'Placeholder Avatar',
    'Settings' => 'Settings',
    'All comments require manual approval before being publicly visible.' => 'All comments require manual approval before being publicly visible.',
    'Whether to use Craft‘s queue system to trigger emails. This is highly recommended to prevent slow comment submission for your users.' => 'Whether to use Craft‘s queue system to trigger emails. This is highly recommended to prevent slow comment submission for your users.',
    'This text will be shown to guests, informing that they are unable to comment.' => 'This text will be shown to guests, informing that they are unable to comment.',
    'Must be logged in to flag comments.' => 'Must be logged in to flag comments.',
    'Downvote Comments Threshold' => 'Downvote Comments Threshold',
    'User]' => 'User]',
    'Enable Reply Notifications' => 'Enable Reply Notifications',
    'The ID for the internal structure used by Comments.' => 'The ID for the internal structure used by Comments.',
    'Whether a nominated user group should receive an email when a new comment has been made, and needs to be moderated. Note this will override author notifications, who shouldn\'t receive the notification until its been approved.' => 'Whether a nominated user group should receive an email when a new comment has been made, and needs to be moderated. Note this will override author notifications, who shouldn\'t receive the notification until its been approved.',
    'HTML Email Template' => 'HTML Email Template',
    'Enable reCAPTCHA?' => 'Enable reCAPTCHA?',
    'Whether to output the default JS for the form.' => 'Whether to output the default JS for the form.',
    'Warning' => 'Warning',
    'Heading' => 'Heading',
    'If a comment contains any of these words in its content, name, email, or IP, it will be marked as spam. One word or IP per line. Case insensitive.' => 'If a comment contains any of these words in its content, name, email, or IP, it will be marked as spam. One word or IP per line. Case insensitive.',
    'Select which users are able to make comments, site-wide.' => 'Select which users are able to make comments, site-wide.',
    'Unable to modify another user’s comment.' => 'Unable to modify another user’s comment.',
    'Choose placeholder avatar' => 'Choose placeholder avatar',
    'URL' => 'URL',
    'Spam' => 'Spam',
    'Enter the email address of any administrators, used for the below settings.' => 'Enter the email address of any administrators, used for the below settings.',
    'Enable Admin Notifications' => 'Enable Admin Notifications',
    'Unsubscribed from discussion.' => 'Unsubscribed from discussion.',
    'Comments deleted.' => 'Comments deleted.',
    'Comment deleted.' => 'Comment deleted.',
    'Toggle whether comments should be allowed for this {element} or not.' => 'Toggle whether comments should be allowed for this {element} or not.',
    'Guests are required to enter their name and email. Only applicable for guest comments.' => 'Guests are required to enter their name and email. Only applicable for guest comments.',
    'Whether custom fields should show their instruction text underneath labels.' => 'Whether custom fields should show their instruction text underneath labels.',
    'Whether to enable exact keyword matching. With this turned on, it will no longer match words within other words (eg. ‘craft’ will not match ‘crafty’).' => 'Whether to enable exact keyword matching. With this turned on, it will no longer match words within other words (eg. ‘craft’ will not match ‘crafty’).',
    'Structure Info' => 'Structure Info',
    'You can only vote on a comment once.' => 'You can only vote on a comment once.',
    'None' => 'None',
    'All' => 'All',
    'Comments Require Moderation' => 'Comments Require Moderation',
    'All comments' => 'All comments',
    'Created Date' => 'Created Date',
    'Users can subscribe to a specific thread of comments made on an element. This will display a \'Subscribe\' button for each comment. Shown only for logged in users.' => 'Users can subscribe to a specific thread of comments made on an element. This will display a \'Subscribe\' button for each comment. Shown only for logged in users.',
    'Maximum Comments per-user' => 'Maximum Comments per-user',
    'Per-comment subscriptions are not allowed.' => 'Per-comment subscriptions are not allowed.',
    'Comment Form' => 'Comment Form',
    'Authors receive an email when the moderator has approved a comment.' => 'Authors receive an email when the moderator has approved a comment.',
    '[Deleted' => '[Deleted',
    'When the downvoting threshold is met, should the voting controls be hidden?' => 'When the downvoting threshold is met, should the voting controls be hidden?',
    'Could not update status due to a validation error.' => 'Could not update status due to a validation error.',
    'No comment with the ID “{id}”' => 'No comment with the ID “{id}”',
    'Enable Moderator Notifications' => 'Enable Moderator Notifications',
    'Enable Gravatar Support' => 'Enable Gravatar Support',
    'Maximum Comment Length' => 'Maximum Comment Length',
    'Structure UID' => 'Structure UID',
    'Show Email and Name for Guests' => 'Show Email and Name for Guests',
    'Enable Exact Keyword Matching' => 'Enable Exact Keyword Matching',
    'Unable to delete comment.' => 'Unable to delete comment.',
    'Guest' => 'Guest',
    'Status updated, with some failures due to validation errors.' => 'Status updated, with some failures due to validation errors.',
    'Require Email and Name for Guests' => 'Require Email and Name for Guests',
    'Enable Guest Voting' => 'Enable Guest Voting',
    'Statuses updated.' => 'Statuses updated.',
    'User Agent' => 'User Agent',
    'You must be logged in to change your settings.' => 'You must be logged in to change your settings.',
    'Whether to output the default CSS for the form.' => 'Whether to output the default CSS for the form.',
    'Comment saved successfully.' => 'Comment saved successfully.',
    'Flag' => 'Flag',
    'Allow your users to upvote or downvote other users comments.' => 'Allow your users to upvote or downvote other users comments.',
    'Comment not allowed.' => 'Comment not allowed.',
    'Flagging' => 'Flagging',
    'All {elements}' => 'All {elements}',
    'For more fine-grained control over specific elements, create a Comment Options fieldtype, and add to your elements custom fields.' => 'For more fine-grained control over specific elements, create a Comment Options fieldtype, and add to your elements custom fields.',
    'Use Queue for Notifications' => 'Use Queue for Notifications',
    'Show Custom Field Instructions' => 'Show Custom Field Instructions',
    'Save' => 'Save',
    'Notifications' => 'Notifications',
    'Email Address' => 'Email Address',
    'Structure ID' => 'Structure ID',
    'These values should not be altered manually. If for some reason they are empty, you can run the following commend to re-generate these values: <code>php craft comments/base/resave-structure</code>' => 'These values should not be altered manually. If for some reason they are empty, you can run the following commend to re-generate these values: <code>php craft comments/base/resave-structure</code>',
    'User' => 'User',
    'Whether to automatically subscribe users to notifications after they have commented, whenever a comment in made on an element. For example, any time another user makes a comment on an entry, all users who have also commented will receive a notification.' => 'Whether to automatically subscribe users to notifications after they have commented, whenever a comment in made on an element. For example, any time another user makes a comment on an entry, all users who have also commented will receive a notification.',
    'Form Layout' => 'Form Layout',
    'Must be logged in to vote.' => 'Must be logged in to vote.',
    'Flagging is not allowed.' => 'Flagging is not allowed.',
    'Custom Templates' => 'Custom Templates',
    'Subscribed to discussion.' => 'Subscribed to discussion.',
    'Minimum Score' => 'Minimum Score',
    'Limit the number of characters a comment can have.' => 'Limit the number of characters a comment can have.',
    'Minimum Time Between Comments' => 'Minimum Time Between Comments',
    'Comment' => 'Comment',
    'You may only delete your own comments.' => 'You may only delete your own comments.',
    'Comments' => 'Comments',
    'Users can downvote a comment, which reflects if they agree or disagree with it. After the provided amount of downvotes are received for a comment, the ‘isPoorlyRated’ property for the comment will be true. You can then decide how to handle a comment with a poor rating.' => 'Users can downvote a comment, which reflects if they agree or disagree with it. After the provided amount of downvotes are received for a comment, the ‘isPoorlyRated’ property for the comment will be true. You can then decide how to handle a comment with a poor rating.',
    'Guests are shown fields to enter their name and email. Only applicable for guest comments.' => 'Guests are shown fields to enter their name and email. Only applicable for guest comments.',
    'Date' => 'Date',
    'Admins will receive an email whenever someone makes a comment on an element. Edit the content of this email through [System Messages]({link}).' => 'Admins will receive an email whenever someone makes a comment on an element. Edit the content of this email through [System Messages]({link}).',
    'Limit' => 'Limit',
    'Allow guest (guest) users to flag a comment as inappropriate, spam, or any other reason.' => 'Allow guest (guest) users to flag a comment as inappropriate, spam, or any other reason.',
    'Set status' => 'Set status',
    'Pending' => 'Pending'
];
