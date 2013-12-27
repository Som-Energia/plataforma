<?php

	$english = array(
		'spam_throttle' => "Spam Throttle",
		'spam_throttle:ban' => "Ban",
		'spam_throttle:ban:explained' => "The user is banned from the site, cannot log in, cannot view non-public content, cannot create content",
		'spam_throttle:banned' => "Possible spam detected, an administrator will review your account. Until then, you are banned.",
		'spam_throttle:comment' => "Comments",
		'spam_throttle:consequence:explanation' => "If a user breaks the limit, it will be reported, but you can also select what happens to the user.",
		'spam_throttle:consequence:title' => "Consequences of breaking the %s limit",
		'spam_throttle:delete' => "Delete",
		'spam_throttle:delete:explained' => "The user account is deleted along with all of their content.  Use with care as the deletion cannot be undone, and a false positive wouldn't be fun...",
		'spam_throttle:deleted' => "You have been identified as a spammer. Your account and all of your content has been deleted.",
		'spam_throttle:exemptions' => "Make Users Exempt",
		'spam_throttle:explanation' => "Here you can set limits for the amount and type of content a user
		can create.  The global limits cover all listed content types.  For example, if a user creates 2 blog
		posts, 2 bookmarks, and 2 comments in 4 minutes, then they have exceeded a global limit of 5
		creations in 5 minutes and will suffer the consequences.  Set the global
		setting fairly leniently, and use the specific content type limits to be more vigilant on
		certain types of spam to reduce the number of false positives.  Each site is different, and it will
		probably be a trial-and-error approach to finding the right settings.
		Each time a user exceeds the limit they will be reported to administrators
		via the reported_content plugin.  Below you can set what happens to a user that exceeds the set limits.
		If a setting is left blank or set to 0, then the limit will default to the global setting (if that is set).",
		'spam_throttle:helptext:exemptions' => "Administrators will not be throttled.  Select other users you wish to unthrottle.  Once exempted, you cannot re-throttle a user, so treat with care. If you use the speak_freely plugin you should make the anonymous user exempt.",
		'spam_throttle:global' => "Global",
		'spam_throttle:helptext:limit' => "Maximum number of %s allowed",
		'spam_throttle:helptext:reporttime' => "Report users only once in this many hours (helps keep the reported content manageable if limit is repeatedly broken by the same user).  To receive a report of every instance set this to 0.",
		'spam_throttle:helptext:time' => "Time interval in minutes",
		'spam_throttle:helptext:suspensiontime' => "Length of time (in hours) for a suspension.",
		'spam_throttle:invalid:id' => "Invalid user ID",
		'spam_throttle:new_content' => "new content item",
		'spam_throttle:nothing' => "Nothing",
		'spam_throttle:nothing:explained' => "The user is still able to log in and create content",
		'spam_throttle:reported' => "This user exceeded the %s limit by creating %s entries in %s minutes",
		'spam_throttle:reporttime' => "Reporting Period",
		'spam_throttle:settings' => "Spam Throttle Settings",
		'spam_throttle:settings:comment' => "Comment Limit",
		'spam_throttle:settings:global' => "Global Limit",
		'spam_throttle:settings:notint' => "The value for %s must be a positive integer, this setting has not been saved.",
		'spam_throttle:settings:success' => "Settings successfully saved",
		'spam_throttle:settings:subtype' => "%s Limit",
		'spam_throttle:suspend' => "Suspend",
		'spam_throttle:suspend:explained' => "The user can log in and view content with their normal permissions, but cannot create new content for a set amount of time.",
		'spam_throttle:suspended' => "You are temporarily suspended from posting new content. Your suspension will end in %s hours, %s minutes",
		'spam_throttle:suspensiontime' => "Suspension Length",
		'spam_throttle:unsuspend' => "Unsuspend",
		'spam_throttle:unsuspend:confirm' => "Are you sure?",
		'spam_throttle:unsuspended' => "User has been unsuspended.",
	);
					
	add_translation("en",$english);