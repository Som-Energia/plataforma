<?php

$english = array(
	// core
	'access:friends:label' => 'Following',
	'friends' => "Following",
	'friends:yours' => "You are following",
	'friends:owned' => "Following %s",
	'friend:add' => "Follow this person",
	'friend:remove' => "Stop Following",
	'friends:add:successful' => "You are now following %s.",
	'friends:add:failure' => "Error. You could not follow %s.",
	'friends:remove:successful' => "You are no longer following %s.",
	'friends:remove:failure' => "Error. You cannot stop following %s.",
	'friends:none' => "This user isn't following anyone yet.",
	'friends:none:you' => "You aren't following anyone yet. Search for your interests to find people to follow.",
	'friends:none:found' => "No followers were found.",
	'friends:of:none' => "Nobody is following you yet.",
	'friends:of:none:you' => "Nobody is following you yet. Start adding content and fill in your profile to let people find you!",
	'friends:of' => "Followers",
	'friends:of:owned' => "People who are following %s",
	'friends:num_display' => "Number of people to display",
	'friends:collections' => "Member collections",
	'friends:collections:add' => "New collection",
	'friends:addfriends' => "Add to collection",
	'friends:collectionname' => "Collection name",
	'friends:collectionfriends' => "Members in collection",
	'friend:newfriend:subject' => "%s is now following you",
	'friend:newfriend:body' => "%s is now following you on $CONFIG->sitename

To view their profile, click here:

%s

Please do not reply to this email.",
	'userpicker:only_friends' => 'Only those you are following',

	'friends:river:add' => "%s is now following",
	'river:relationship:friend' => 'is now following',

	// blogs
	'blog:user:friends' => "%s's following blogs",
	'blog:friends' => "Following blogs",
	'blog:yourfriends' => "Latest following blogs",

	// bookmarks
	'bookmarks:friends' => "Following bookmarks",
	'bookmarks:bookmarklet:description' =>
		"The bookmarks bookmarklet allows you to share any resource you find on the web with others, or just bookmark it for yourself. To use it, simply drag the following button to your browser's links bar:",

	// event calendar - none needed

	// file
	'file:yours:friends' => "Following files",
	'file:friends' => "%s's following files",
	'file:friends:type:video' => "Following videos",
	'file:friends:type:document' => "Following documents",
	'file:friends:type:audio' => "Following audio",
	'file:friends:type:image' => "Following pictures",
	'file:friends:type:general' => "Following general files",

	// friends widget
	'friends:widget:description' => "Display who you are following.",
	'friends:num_display' => "Number to display",

	// groups
	'groups:invite' => "Invite someone",
	'groups:inviteto' => "Invite someone to '%s'",
	'groups:nofriends' => "You have no one left whom you are following that has not been invited to this group.",

	// invitefriends
	'friends:invite' => "Invite someone",
	'invitefriends:introduction' => "To invite people to join you on this network, enter their email addresses below (one per line):",
	'invitefriends:success' => "Invitation success.",
	'invitefriends:failure' => "Invitation failure.",
	'invitefriends:email' => "You have been invited to join %s by %s. They included the following message:

%s

To join, click the following link:

	%s

You will automatically follow them when you create your account.",

	// izap video
	'izap_videos:frnd' => "Following videos",
	'izap_videos:userfrnd' => "%s's following videos",

	// notifications
	'friends:all' => 'Everyone you are following',
	'notifications:subscriptions:collections:title' => 'Collection Notifications',
	'notifications:subscriptions:collections:description' => 'To toggle settings for members of your collections, click the icons below.',
	'notifications:subscriptions:collections:edit' => 'To edit your collections, click here.',
	'notifications:subscriptions:description' => 'To receive notifications when new content is created by the people you are following, find them below and select the notification method you would like to use.',

	// riverdashboard
	'river:widget:description' => "Display your activity or the activity of those you are following.",
	'river:widgets:friends' => "Following",
	'river:widget:type' => "Do you want to display your activity or the activity of those you are following?",

	// tidypics
	'album:yours:friends' => "Following photo albums",
	'album:friends' => "%s's following photo albums",
	
	// the wire
	'thewire:friendsdesc' => 'This widget will show the latest from those you following on the wire',
	'thewire:friends' => 'Following activity on the wire',
);

add_translation("en", $english);
