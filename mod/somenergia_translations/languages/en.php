<?php

/**
 * Core English Language
 *
 * @package Elgg.Core
 * @subpackage Languages.English
 */
return array(
    'group_tools:add_users' => "Add users",
    'group_tools:delete_selected' => "Delete selected",
    'group_tools:clear_selection' => "Clear selection",
    'group_tools:all_members' => "All members",
    'group_tools:explain' => "Explanation",
    'group_tools:default:access:group' => "Group members only",
    'group_tools:joinrequest:already' => "Revoke membership request",
    'group_tools:joinrequest:already:tooltip' => "You already requested to join this group, click here to revoke this request",
    'group_tools:join:already:tooltip' => "You were invited to this group so you can join right now.",
    'item:object:group_tools_group_mail' => "Group mail",
    // menu
    'group_tools:menu:mail' => "Mail Members",
    'group_tools:menu:invitations' => "Manage invitations",
    'admin:administer_utilities:group_bulk_delete' => "Group bulk delete",
    'admin:groups:admin_approval' => "Approval needed",
    'admin:appearance:group_tool_presets' => "Group tool presets",
    // plugin settings
    'group_tools:settings:default_off' => "Yes, default off",
    'group_tools:settings:default_on' => "Yes, default on",
    'group_tools:settings:required' => "Yes, required",
    'group_tools:settings:admin_only' => "Admin only",
    'group_tools:settings:edit:title' => "Group edit settings",
    'group_tools:settings:simple_access_tab' => "Simplified group access selection",
    'group_tools:settings:simple_access_tab:help' => "Replaces group access options when creating groups with a simplified choice between 'Open' and 'Closed'",
    'group_tools:settings:simple_create_form' => "Simple group create form",
    'group_tools:settings:simple_create_form:help' => "Enabling this will change the way how the 'New Group' form is displayed",
    'group_tools:settings:allow_hidden_groups:help' => "Who can create hidden groups. This setting will overrule the groups plugin setting.",
    'group_tools:settings:invite:title' => "Group invitation options",
    'group_tools:settings:management:title' => "General group options",
    'group_tools:settings:default_access:title' => "Default group access",
    'group_tools:settings:admin_transfer' => "Allow group owner transfer",
    'group_tools:settings:admin_transfer:admin' => "Site admin only",
    'group_tools:settings:admin_transfer:owner' => "Group owners and site admins",
    'group_tools:settings:multiple_admin' => "Allow multiple group admins",
    'group_tools:settings:auto_suggest_groups' => "Auto suggest groups on the 'Suggested' groups page based on profile information. Will be completed with the predefined suggested groups. Setting this to 'No' will only show the predefined suggested groups (if there are any).",
    'group_tools:settings:notifications:title' => "Group notification settings",
    'group_tools:settings:notifications:notification_toggle' => "Show notification settings on group join",
    'group_tools:settings:notifications:notification_toggle:description' => "This will show a system message where to user can toggle the notification settings, and add a link in the e-mail notification to the group notification settings.",
    'group_tools:settings:invite' => "Allow all users to be invited (not just friends)",
    'group_tools:settings:invite_friends' => "Allow friends to be invited",
    'group_tools:settings:invite_email' => "Allow all users to be invited by e-mail address",
    'group_tools:settings:invite_email:match' => "Try to match e-mail addresses to existing users",
    'group_tools:settings:invite_csv' => "Allow all users to be invited by CSV-file",
    'group_tools:settings:invite_members' => "Allow group members to invite new users",
    'group_tools:settings:invite_members:description' => "Group owners/admins can enable/disable this for their group",
    'group_tools:settings:domain_based' => "Enable domain based groups",
    'group_tools:settings:domain_based:description' => "Users can join a group based on their e-mail domain. During registration they will auto join groups based on their e-mail domain.",
    'group_tools:settings:join_motivation' => "Joining closed groups requires a motivation",
    'group_tools:settings:join_motivation:description' => "When a user wants to join a closed group, a motivation is required. Group owners can change this setting, if not set to 'no' or 'required'.",
    'group_tools:settings:mail' => "Allow group mail (allows group admins to send a message to all members)",
    'group_tools:settings:mail:members' => "Allow group admins to enable group mail for their members",
    'group_tools:settings:mail:members:description' => "This requires group mail to be enabled",
    'group_tools:settings:listing:title' => "Group listing settings",
    'group_tools:settings:listing:description' => "Here you can configure which tabs will be visible on the group listing page, which tab will be the default landing page and what the default sorting will be per tab.",
    'group_tools:settings:listing:enabled' => "Enabled",
    'group_tools:settings:listing:default_short' => "Default tab",
    'group_tools:settings:listing:default' => "Default group listing tab",
    'group_tools:settings:listing:available' => "Available group listing tabs",
    'group_tools:settings:content:title' => "Group content settings",
    'group_tools:settings:default_access' => "What should be the default access for content in the groups of this site",
    'group_tools:settings:stale_timeout' => "Groups become stale if no content is created within a number of days",
    'group_tools:settings:stale_timeout:help' => "If no new content is created in a group within the given number of days, the group is shown as stale. The group owner will receive a notification on the day the group becomes stale. A group owner/admin can tell the group is still relevant. 0 or empty to not enable this feature.",
    'group_tools:settings:search_index' => "Allow closed groups to be indexed by search engines",
    'group_tools:settings:auto_notification' => "Automatically enable group notification on group join",
    'group_tools:settings:show_membership_mode' => "Show open/closed membership status on group profile and owner block",
    'group_tools:settings:show_hidden_group_indicator' => "Show an indicator if a group is hidden",
    'group_tools:settings:show_hidden_group_indicator:group_acl' => "Yes, if group is members only",
    'group_tools:settings:show_hidden_group_indicator:logged_in' => "Yes, for all non public groups",
    'group_tools:settings:special_states' => "Groups with a special state",
    'group_tools:settings:special_states:featured:description' => "The site administrators have chosen to feature the following groups.",
    'group_tools:settings:special_states:auto_join' => "Auto join",
    'group_tools:settings:special_states:auto_join:description' => "New users will automaticly join the following groups.",
    'group_tools:settings:special_states:suggested' => "Suggested",
    'group_tools:settings:special_states:suggested:description' => "The following groups are suggested to (new) users. It is possible to auto suggest groups, if no groups are automaticly detected or too few, the list will be appended by these groups.",
    'group_tools:settings:fix:title' => "Fix group access problems",
    'group_tools:settings:fix:missing' => "There are %d users who are a member of a group but don't have access to the content shared with the group.",
    'group_tools:settings:fix:excess' => "There are %d users who have access to group content of groups where they are no longer a member off.",
    'group_tools:settings:fix:without' => "There are %d groups without the possibility to share content with their members.",
    'group_tools:settings:fix:all:description' => "Fix all off the above problems at once.",
    'group_tools:settings:fix_it' => "Fix this",
    'group_tools:settings:fix:all' => "Fix all problems",
    'group_tools:settings:member_export' => "Allow group admins to export member information",
    'group_tools:settings:member_export:description' => "This includes the name, username and email address of the user.",
    'group_tools:settings:admin_approve' => "Site administrators need to approve new groups",
    'group_tools:settings:admin_approve:description' => "Any user can create a group, but a site administrator has to approve the new group",
    // simplified access
    'group_tools:edit:access_simplified:open' => 'Open Group',
    'group_tools:edit:access_simplified:open:description' => '<ul><li>Any user may join</li><li>Content can be shared with anyone</li></ul>',
    'group_tools:edit:access_simplified:closed' => 'Closed Group',
    'group_tools:edit:access_simplified:closed:description' => '<ul><li>Membership needs to be approved</li><li>Content can only be shared with group members</li></ul>',
    // group tool presets
    'group_tools:admin:group_tool_presets:description' => "Here you can configure group tool presets.
When a user creates a group he/she gets to choose one of the presets in order to quickly get the correct tools. A blank option is also offered to the user to allow his/her own choices.",
    'group_tools:admin:group_tool_presets:header' => "Existing presets",
    'group_tools:create_group:tool_presets:description' => "You can select a group tool preset here. If you do so, you will get a set of tools which are configured for the selected preset. You can always chose to add additional tools to a preset, or remove the ones you do not like.",
    'group_tools:create_group:tool_presets:active_header' => "Tools for this preset",
    'group_tools:create_group:tool_presets:more_header' => "Extra tools",
    'group_tools:create_group:tool_presets:select' => "Select a group type",
    'group_tools:create_group:tool_presets:show_more' => "More tools",
    'group_tools:create_group:tool_presets:blank:title' => "Blank group",
    'group_tools:create_group:tool_presets:blank:description' => "Choose this group to select your own tools.",
    // group invite message
    'group_tools:groups:invite:body' => "Hi %s,

%s invited you to join the '%s' group.
%s

Click below to view your invitations:
%s",
    // group add message
    'group_tools:groups:invite:add:subject' => "You've been added to the group %s",
    'group_tools:groups:invite:add:body' => "Hi %s,

%s added you to the group %s.
%s

To view the group click on this link
%s",
    // group invite by email
    'group_tools:groups:invite:email:subject' => "You've been invited for the group %s",
    'group_tools:groups:invite:email:body' => "Hi,

%s invited you to join the group %s on %s.
%s

If you don't have an account on %s please register here
%s

If you already have an account or after you registered, please click on the following link to accept the invitation
%s

You can also go to All site groups -> Group invitations and enter the following code:
%s",
    // group transfer notification
    'group_tools:notify:transfer:subject' => "Administration of the group %s has been appointed to you",
    'group_tools:notify:transfer:message' => "Hi %s,

%s has appointed you as the new administrator of the group %s.

To visit the group please click on the following link:
%s",
    // deline membeship request notification
    'group_tools:notify:membership:declined:subject' => "Your membership request for '%s' was declined",
    'group_tools:notify:membership:declined:message' => "Hi %s,

Your membership request for the group '%s' was declined.

You can find the group here:
%s",
    'group_tools:notify:membership:declined:message:reason' => "Hi %s,

Your membership request for the group '%s' was declined, because of:

%s

You can find the group here:
%s",
    // group edit tabbed
    'group_tools:group:edit:profile' => "Profile",
    'group_tools:group:edit:access' => "Access",
    'group_tools:group:edit:tools' => "Tools",
    'group_tools:group:edit:other' => "Other options",
    // admin transfer - form
    'group_tools:admin_transfer:current' => "Keep current owner: %s",
    'group_tools:admin_transfer:myself' => "Myself",
    // special states form
    'group_tools:special_states:title' => "Group special states",
    'group_tools:special_states:description' => "A group can have several special states, here is an overview of the special states and their current value.",
    'group_tools:special_states:featured' => "Is this group featured",
    'group_tools:special_states:auto_join' => "Will users automaticly join this group",
    'group_tools:special_states:auto_join:fix' => "To make all site members a member of this group, please %sclick here%s.",
    'group_tools:special_states:suggested' => "Is this group suggested to (new) users",
    // group admins
    'group_tools:multiple_admin:group_admins' => "Group admins",
    'group_tools:multiple_admin:profile_actions:remove' => "Remove group admin",
    'group_tools:multiple_admin:profile_actions:add' => "Add group admin",
    'group_tools:multiple_admin:group_tool_option' => "Enable group admins to assign other group admins",
    // cleanup options
    'group_tools:cleanup:title' => "Group sidebar cleanup",
    'group_tools:cleanup:description' => "Cleanup the sidebar of the group. This will have no effect for the group admins.",
    'group_tools:cleanup:extras_menu' => "Hide the Extras menu",
    'group_tools:cleanup:extras_menu:explain' => "The extras menu can be found at the top of the sidebar, some links can be posted in this area (example: RSS links).",
    'group_tools:cleanup:actions' => "Hide the Join group/Request membership button",
    'group_tools:cleanup:actions:explain' => "Depending on your group setting, users can directly join the group or request membership.",
    'group_tools:cleanup:menu' => "Hide side menu items",
    'group_tools:cleanup:menu:explain' => "Hide the menu links to the different group tools. The users will only be able to get access to the group tools by using the group widgets.",
    'group_tools:cleanup:members' => "Hide the group members",
    'group_tools:cleanup:members:explain' => "On the group profile page a list of the group members can be found in the sidebar. You can choose to hide this list.",
    'group_tools:cleanup:search' => "Hide the search in group",
    'group_tools:cleanup:search:explain' => "On the group profile page a search box is available. You can choose to hide this.",
    'group_tools:cleanup:featured' => "Show featured groups in the sidebar",
    'group_tools:cleanup:featured:explain' => "You can choose to show a list of featured groups in the sidebar on the group profile page",
    'group_tools:cleanup:featured_sorting' => "How to sort featured groups",
    'group_tools:cleanup:featured_sorting:time_created' => "Newest first",
    'group_tools:cleanup:my_status' => "Hide the My Status sidebar",
    'group_tools:cleanup:my_status:explain' => "In the sidebar on the group profile page there is an item which shows you your current membership status and some other status information. You can choose to hide this.",
    // group default access
    'group_tools:default_access:title' => "Group default access",
    'group_tools:default_access:description' => "Here you can control what the default access of new content in your group should be.",
    // group admin approve
    'group_tools:group:admin_approve:notice' => "New groups need to be approved by a site administrator. You can make/edit the group, but it won't be visible to other users until approved by a site administrator.",
    'group_tools:group:admin_approve:decline:confirm' => "Are you sure you wish to decline this group? This will delete the group.",
    'group_tools:group:admin_approve:admin:description' => "Here is a list of groups which need to be approved by the site administrators before they can be used.

When you approve a group the owner will receive a notification that his/her group is now ready for use.
If you decline a group, the owner will receive a notification that his/her group was removed and the group will be removed.",
    'group_tools:group:admin_approve:approve:success' => "The group can now be used on the site",
    'group_tools:group:admin_approve:decline:success' => "The group was removed",
    'group_tools:group:admin_approve:approve:subject' => "Your group '%s' was approved",
    'group_tools:group:admin_approve:approve:summary' => "Your group '%s' was approved",
    'group_tools:group:admin_approve:approve:message' => "Hi %s,

your group '%s' was approved by a site administrator. You can now use it.

To visit the group click here:
%s",
    'group_tools:group:admin_approve:admin:subject' => "A new group '%s' was created which requires approval",
    'group_tools:group:admin_approve:admin:summary' => "A new group '%s' was created which requires approval",
    'group_tools:group:admin_approve:admin:message' => "Hi %s,

%s created a group '%s' which need to be approved by a site administrator.

To visit the group click here:
%s

To view all groups which need action click here:
%s",
    'group_tools:group:admin_approve:decline:subject' => "Your group '%s' was declined",
    'group_tools:group:admin_approve:decline:summary' => "Your group '%s' was declined",
    'group_tools:group:admin_approve:decline:message' => "Hi %s,

your group '%s' was declined and removed by a site administrator.",
    // group notification
    'group_tools:notifications:title' => "Group notifications",
    'group_tools:notifications:description' => "This group has %s members, of those %s have enabled notifications on activity in this group. Below you can change this for all users of the group.",
    'group_tools:notifications:disclaimer' => "With large groups this could take a while.",
    'group_tools:notifications:enable' => "Enable notifications for everyone",
    'group_tools:notifications:disable' => "Disable notifications for everyone",
    'group_tools:notifications:toggle:email:enabled' => "Currently you are receiving notifications about activity in this group. If you don't want to receive notifications, change the settings here %s",
    'group_tools:notifications:toggle:email:disabled' => "Currently you are not receiving notifications about activity in this group. If you want to receive notifications, change the settings here %s",
    'group_tools:notifications:toggle:site:enabled' => "Currently you are receiving notifications about activity in this group. If you don't want to receive notifications, click here %s",
    'group_tools:notifications:toggle:site:enabled:link' => "disable notifications",
    'group_tools:notifications:toggle:site:disabled' => "Currently you are not receiving notifications about activity in this group. If you want to receive notifications, click here %s",
    'group_tools:notifications:toggle:site:disabled:link' => "enable notifications",
    // group mail
    'group_tools:tools:mail_members' => "Allow group members to mail other group members",
    'mail_members:group_tool_option:description' => "This will allow normal group members to send an e-mail to other group members. By default this is limited to group admins.",
    'group_tools:mail:message:from' => "From group",
    'group_tools:mail:title' => "Send a mail to the group members",
    'group_tools:mail:form:recipients' => "Number of recipients",
    'group_tools:mail:form:members:selection' => "Select individual members",
    'group_tools:mail:form:title' => "Subject",
    'group_tools:mail:form:description' => "Body",
    'group_tools:mail:form:js:members' => "Please select at least one member to send the message to",
    'group_tools:mail:form:js:description' => "Please enter a message",
    // group invite
    'group_tools:groups:invite:error' => "No invitation options are available",
    'group_tools:groups:invite:title' => "Invite users to this group",
    'group_tools:groups:invite' => "Invite users",
    'group_tools:groups:invite:user_already_member' => "User is already a member of the group",
    'group_tools:group:invite:friends:select_all' => "Select all friends",
    'group_tools:group:invite:friends:deselect_all' => "Deselect all friends",
    'group_tools:group:invite:users' => "Find user(s)",
    'group_tools:group:invite:users:description' => "Enter a name or username of a site member and select him/her from the list",
    'group_tools:group:invite:users:all' => "Invite all site members to this group",
    'group_tools:group:invite:email' => "Using e-mail address",
    'group_tools:group:invite:email:description' => "Enter a valid e-mail address and select it from the list",
    'group_tools:group:invite:csv' => "Using CSV upload",
    'group_tools:group:invite:csv:description' => "You can upload a CSV file with users to invite.<br />The format must be: displayname;e-mail address. There shouldn't be a header line.",
    'group_tools:group:invite:text' => "Personal note (optional)",
    'group_tools:group:invite:add:confirm' => "Are you sure you wish to add these users directly?",
    'group_tools:group:invite:resend' => "Resend invitations to users who already have been invited",
    'group_tools:groups:invitation:code:title' => "Group invitation by e-mail",
    'group_tools:groups:invitation:code:description' => "If you have received an invitation to join a group by e-mail, you can enter the invitation code here to accept the invitation. If you click on the link in the invitation e-mail the code will be entered for you.",
    // group membership requests
    'group_tools:groups:membershipreq:requests' => "Membership requests",
    'group_tools:groups:membershipreq:invitations' => "Invited users",
    'group_tools:groups:membershipreq:invitations:none' => "No pending user invitations",
    'group_tools:groups:membershipreq:email_invitations' => "Invited e-mail addresses",
    'group_tools:groups:membershipreq:email_invitations:none' => "No pending e-mail invitations",
    'group_tools:groups:membershipreq:invitations:revoke:confirm' => "Are you sure you wish to revoke this invitation",
    'group_tools:groups:membershipreq:kill_request:prompt' => "Optionaly you can tell the user why you declined the request.",
    // group invitations
    'group_tools:group:invitations:request' => "Outstanding membership requests",
    'group_tools:group:invitations:request:revoke:confirm' => "Are you sure you wish to revoke your membership request?",
    'group_tools:group:invitations:request:non_found' => "There are no outstanding membership requests at this time",
    // group listing
    'group_tools:groups:sorting:open' => "Open",
    'group_tools:groups:sorting:closed' => "Closed",
    'group_tools:groups:sorting:ordered' => "Ordered",
    'group_tools:groups:sorting:suggested' => "Suggested",
    // allow group members to invite
    'group_tools:invite_members:title' => "Group members can invite",
    'group_tools:invite_members:description' => "Allow the members of this group to invite new members",
    'group_tools:invite_members:disclaimer' => "Please note that for closed groups allowing your users to invite new members means they don't require approval by the group owner/admin(s).",
    // group tool option descriptions
    'activity:group_tool_option:description' => "Show an activity feed about group related content.",
    // actions
    // group edit
    'group_tools:action:group:edit:error:default_access' => "The chosen default access level was more public than the group content access, therefore default access has been lowered to group members.",
    // group admins - action
    'group_tools:action:toggle_admin:error:group' => "The given input doesn't result in a group or you can't edit this group or the user is not a member",
    'group_tools:action:toggle_admin:error:remove' => "An unknown error occured while removing the user as a group admin",
    'group_tools:action:toggle_admin:error:add' => "An unknown error occured while adding the user as a group admin",
    'group_tools:action:toggle_admin:success:remove' => "The user was successfully removed as a group admin",
    'group_tools:action:toggle_admin:success:add' => "The user was successfully added as a group admin",
    // group mail - action
    'group_tools:action:mail:success' => "Message succesfully send",
    // group - invite - action
    'group_tools:action:invite:error:invite' => "No users were invited (%s already invited, %s already a member)",
    'group_tools:action:invite:error:add' => "No users were invited (%s already invited, %s already a member)",
    'group_tools:action:invite:success:invite' => "Successfully invited %s users (%s already invited and %s already a member)",
    'group_tools:action:invite:success:add' => "Successfully added %s users (%s already invited and %s already a member)",
    // group - invite - accept e-mail
    'group_tools:action:groups:email_invitation:error:code' => "The entered invitation code is no longer valid",
    'group_tools:action:groups:email_invitation:error:join' => "An unknown error occured while joining the group %s, maybe you're already a member",
    'group_tools:action:groups:email_invitation:success' => "You've successfully joined the group",
    // group - invite - decline e-mail
    'group_tools:action:groups:decline_email_invitation:error:delete' => "An error occured while deleting the invitation",
    // suggested groups
    'group_tools:suggested_groups:info' => "The following groups might be interesting for you. Click the join buttons to join them immediately or click the title to view more information about the group.",
    'group_tools:suggested_groups:none' => "We can't suggest a group for you. This can happen if we have to little information about you, or that you are already a member of the groups we like you to join. Use the search to find more groups.",
    // group toggle auto join
    'group_tools:action:toggle_special_state:error:auto_join' => "An error occured while saving the new auto join settings",
    'group_tools:action:toggle_special_state:error:suggested' => "An error occured while saving the new suggested settings",
    'group_tools:action:toggle_special_state:error:state' => "Invalid state provided",
    'group_tools:action:toggle_special_state:auto_join' => "The new auto join settings were saved successfully",
    'group_tools:action:toggle_special_state:suggested' => "The new suggested settings were saved successfully",
    // group fix auto_join
    'group_tools:action:fix_auto_join:success' => "Group membership fixed: %s new members, %s were already a member and %s failures",
    // group cleanup
    'group_tools:actions:cleanup:success' => "The cleanup settings were saved successfully",
    // group notifications
    'group_tools:action:notifications:error:toggle' => "Invalid toggle option",
    'group_tools:action:notifications:success:disable' => "Successfully disabled notifications for every member",
    'group_tools:action:notifications:success:enable' => "Successfully enabled notifications for every member",
    // fix group problems
    'group_tools:action:fix_acl:error:input' => "Invalid option you can't fix: %s",
    'group_tools:action:fix_acl:error:missing:nothing' => "No missing users found in the group ACLs",
    'group_tools:action:fix_acl:error:excess:nothing' => "No excess users found in the groups ACLs",
    'group_tools:action:fix_acl:error:without:nothing' => "No groups found without an ACL",
    'group_tools:action:fix_acl:success:missing' => "Successfully added %d users to group ACLs",
    'group_tools:action:fix_acl:success:excess' => "Successfully removed %d users from group ACLs",
    'group_tools:action:fix_acl:success:without' => "Successfully created %d group ACLs",
    // Widgets
    // Group River Widget
    'widgets:group_river_widget:title' => "Group activity",
    'widgets:group_river_widget:description' => "Shows the activity of a group in a widget",
    'widgets:group_river_widget:edit:num_display' => "Number of activities",
    'widgets:group_river_widget:edit:group' => "Select a group",
    'widgets:group_river_widget:edit:no_groups' => "You need to be a member of at least one group to use this widget",
    'widgets:group_river_widget:view:not_configured' => "This widget is not yet configured",
    'widgets:group_river_widget:view:noactivity' => "We could not find any activity.",
    // Group Members
    'widgets:group_members:title' => "Group members",
    'widgets:group_members:description' => "Shows the members of this group",
    'widgets:group_members:view:no_members' => "No group members found",
    // Group Invitations
    'widgets:group_invitations:title' => "Group invitations",
    'widgets:group_invitations:description' => "Shows the outstanding group invitations for the current user",
    // index_groups
    'widgets:index_groups:description' => "List groups from your community",
    'widgets:index_groups:show_members' => "Show members count",
    'widgets:index_groups:featured' => "Show only featured groups",
    'widgets:index_groups:sorting' => "How to sort the groups",
    'widgets:index_groups:filter:field' => "Filter groups based on group field",
    'widgets:index_groups:filter:value' => "with value",
    'widgets:index_groups:filter:no_filter' => "No filter",
    // Featured Groups
    'widgets:featured_groups:description' => "Shows a random list of featured groups",
    'widgets:featured_groups:edit:show_random_group' => "Show a random non-featured group",
    // group_news widget
    "widgets:group_news:title" => "Group News",
    "widgets:group_news:description" => "Shows latest 5 blogs from various groups",
    "widgets:group_news:no_projects" => "No groups configured",
    "widgets:group_news:no_news" => "No blogs for this group",
    "widgets:group_news:settings:project" => "Group",
    "widgets:group_news:settings:no_project" => "Select a group",
    "widgets:group_news:settings:blog_count" => "Max number of blogs",
    "widgets:group_news:settings:group_icon_size" => "Group icon size",
    'groups:search:title' => "Search for groups matching '%s'",
    // welcome message
    'group_tools:welcome_message:title' => "Group welcome message",
    'group_tools:welcome_message:description' => "You can configure a welcome message for new users who join this group. If you don't want to send a welcome message leave this field blank.",
    'group_tools:welcome_message:explain' => "In order to personalize the message you can use the following placeholders:
[name]: the name of the new user (eg. %s)
[group_name]: the name of this group (eg. %s)
[group_url]: the URL to this group (eg. %s)",
    'group_tools:action:welcome_message:success' => "The welcome message was saved",
    'group_tools:welcome_message:subject' => "Welcome to %s",
    // email invitations
    'group_tools:action:revoke_email_invitation:error' => "An error occured while revoking the invitation, please try again",
    'group_tools:action:revoke_email_invitation:success' => "The invitation was revoked",
    // domain based groups
    'group_tools:join:domain_based:tooltip' => "Because of a matching e-mail domain, you can join this group.",
    'group_tools:domain_based:title' => "Configure e-mail domains",
    'group_tools:domain_based:description' => "When you configure one (or more) e-mail domains, users with that e-mail domain will automaticly join your group upon registration. Also if you have a closed group user with a matching e-mail domain can join without requesting membership. You can configure multipe domains by using a comma. Don't include the @ sign",
    'group_tools:action:domain_based:success' => "The new e-mail domains were saved",
    // related groups
    'groups_tools:related_groups:tool_option' => "Show related groups",
    'groups_tools:related_groups:widget:title' => "Related groups",
    'groups_tools:related_groups:widget:description' => "Display a list of groups you added as related to this group.",
    'groups_tools:related_groups:none' => "No related groups found.",
    'group_tools:related_groups:title' => "Related groups",
    'group_tools:related_groups:form:placeholder' => "Search for a new related group",
    'group_tools:related_groups:form:description' => "You can search for a new related group, select it from the list and click Add.",
    'group_tools:action:related_groups:error:same' => "You can't related this group to itself",
    'group_tools:action:related_groups:error:already' => "The selected group is already related",
    'group_tools:action:related_groups:error:add' => "An unknown error occured while adding the relationship, please try again",
    'group_tools:action:related_groups:success' => "The group is now related",
    'group_tools:related_groups:notify:owner:subject' => "A new related group was added",
    'group_tools:related_groups:notify:owner:message' => "Hi %s,
	
%s added your group %s as a related group to %s.",
    'group_tools:related_groups:entity:remove' => "Remove related group",
    'group_tools:action:remove_related_groups:error:not_related' => "The group is not related",
    'group_tools:action:remove_related_groups:error:remove' => "An unknown error occured while removing the relationship, please try again",
    'group_tools:action:remove_related_groups:success' => "The group is no longer related",
    'group_tools:action:group_tool:presets:saved' => "New group tool presets saved",
    'group_tools:forms:members_search:members_search:placeholder' => "Enter the name or username of the user to search for",
    // group member export
    'group_tools:member_export:title_button' => "Export members",
    // csv exporter
    'group_tools:csv_exporter:group_admin:name' => "Group admin(s) name",
    'group_tools:csv_exporter:group_admin:email' => "Group admin(s) e-mail address",
    'group_tools:csv_exporter:group_admin:url' => "Group admin(s) profile url",
    'group_tools:csv_exporter:user:group_admin:name' => "Groups administrated name",
    'group_tools:csv_exporter:user:group_admin:url' => "Groups administrated url",
    // group bulk delete
    'group_tools:action:bulk_delete:success' => "The selected groups were deleted",
    'group_tools:action:bulk_delete:error' => "An error occured while deleting the groups, please try again",
    // group toggle notifications
    'group_tools:action:toggle_notifications:disabled' => "The notifications for the group '%s' have been disabled",
    'group_tools:action:toggle_notifications:enabled' => "The notfications for the group '%s' have been enabled",
    // group join motivation
    'group_tools:join_motivation:edit:option:label' => "Joining this closed group requires motivation",
    'group_tools:join_motivation:edit:option:description' => "Closed groups can require that new users supply a motivation why they want to join.",
    'group_tools:join_motivation:title' => "Why do you wish to join '%s'?",
    'group_tools:join_motivation:description' => "The owner of '%s' has indicated that a motivation is required to join this group. Please provide a motivation below so the owner can judge your membership request.",
    'group_tools:join_motivation:label' => "My motivation for joining this group",
    'group_tools:join_motivation:notification:subject' => "%s has requested to join %s",
    'group_tools:join_motivation:notification:summary' => "%s has requested to join %s",
    'group_tools:join_motivation:notification:body' => "Hi %s,

%s has requested to join the '%s' group.

Their motivation for joining is:
%s

Click below to view their profile:
%s

Click below to view the group's join requests:
%s",
    'group_tools:join_motivation:toggle' => "Show motivation",
    'group_tools:join_motivation:listing' => "Reason for joining:",
    // stale groups
    'group_tools:stale_info:description' => "This group has been inactive for a while. The content may no longer be relevant.",
    'group_tools:stale_info:link' => "This group is still relevant",
    'group_tools:csv_exporter:stale_info:is_stale' => "Stale group",
    'group_tools:csv_exporter:stale_info:timestamp' => "Stale timestamp",
    'group_tools:csv_exporter:stale_info:timestamp:readable' => "Stale timestamp (readable)",
    'groups_tools:state_info:notification:subject' => "Your group '%s' has been inactive for a while",
    'groups_tools:state_info:notification:summary' => "Your group '%s' has been inactive for a while",
    'groups_tools:state_info:notification:message' => "Hi %s,

Your group '%s' has been inactive for a while.

Please check on the group here:
%s",
    'mentions:notification:subject' => '%s mentioned you in %s',
    'mentions:notification:body' => '%s mentioned you in %s.

To see the full post, click on the link below:
%s
',
    'mentions:notification_types:object:blog' => 'a blog post',
    'mentions:notification_types:object:bookmarks' => 'a bookmark',
    'mentions:notification_types:object:groupforumtopic' => 'a group discussion post',
    'mentions:notification_types:object:discussion_reply' => 'a group discussion reply',
    'mentions:notification_types:object:thewire' => 'a wire post',
    'mentions:notification_types:object:comment' => 'a comment',
    'mentions:settings:send_notification' => 'Send a notification when someone @mentions you in a post?',
    // admin
    'mentions:named_links' => 'Replace @username with a user\'s display name',
    'mentions:fancy_links' => 'Add a small picture of the user to next to user\'s name',
    'mentions:restrict_group_search' => 'In group context, restrict autocomplete suggestions to group members only',
    'mentions:friends_only_search' => 'Restrict autocomplete suggestions to friends only',
    'mentions:settings:failed' => 'Could not save mentions settings.',
    
    'file_tools' => "File Tools",
    'file_tools:file:actions' => 'Actions',
    'file_tools:list:sort:type' => 'Type',
    'file_tools:list:sort:time_created' => 'Time created',
    'file_tools:list:sort:asc' => 'Ascending',
    'file_tools:list:sort:desc' => 'Descending',
    // object name
    'item:object:folder' => "File Folder",
    // menu items
    'file_tools:menu:mine' => "Your folders",
    'file_tools:menu:user' => "%s's folders",
    'file_tools:menu:group' => "Group file folders",
    // group tool option
    'file_tools:group_tool_option:structure_management' => "Allow management of folders by members",
    // views
    // object
    'file_tools:object:files' => "%s file(s) in this folder",
    'file_tools:object:no_files' => "No files in this folder",
    // input - folder select
    'file_tools:input:folder_select:main' => "Main folder",
    // list
    'file_tools:list:title' => "List file folders",
    'file_tools:list:folder:main' => "Main folder",
    'file_tools:list:files:none' => "No files found in this folder",
    'file_tools:list:select_all' => 'Select all',
    'file_tools:list:deselect_all' => 'Deselect all',
    'file_tools:list:download_selected' => 'Download selected',
    'file_tools:list:delete_selected' => 'Delete selected',
    'file_tools:list:alert:not_all_deleted' => 'Not all files could be deleted',
    'file_tools:list:alert:none_selected' => 'No items selected',
    'file_tools:list:tree:info' => "Did you know?",
    'file_tools:list:tree:info:1' => "You can drag and drop files on to the folders to organize them!",
    'file_tools:list:tree:info:2' => "You can double click on any folder to expand all of its subfolders!",
    'file_tools:list:tree:info:3' => "You can reorder folders by dragging them to their new place in the tree!",
    'file_tools:list:tree:info:4' => "You can move complete folder structures!",
    'file_tools:list:tree:info:5' => "If you delete a folder, you can optionally choose to delete all files!",
    'file_tools:list:tree:info:6' => "When you delete a folder, all subfolders will also be deleted!",
    'file_tools:list:tree:info:7' => "This message is random!",
    'file_tools:list:tree:info:8' => "When you remove a folder, but not it's files, the files will appear at the top level folder!",
    'file_tools:list:tree:info:9' => "A newly added folder can be placed directly in the correct subfolder!",
    'file_tools:list:tree:info:10' => "When uploading or editing a file you can choose in which folder it should appear!",
    'file_tools:list:tree:info:11' => "Dragging of files is only available in the list view, not in the gallery view!",
    'file_tools:list:tree:info:12' => "You can update the access level on all subfolders and even (optional) on all files when editing a folder!",
    'file_tools:list:files:options:sort_title' => 'Sorting',
    'file_tools:list:files:options:view_title' => 'View',
    'file_tools:usersettings:time' => 'Time display',
    'file_tools:usersettings:time:description' => 'Change the way the file/folder time is displayed ',
    'file_tools:usersettings:time:default' => 'Default time display',
    'file_tools:usersettings:time:date' => 'Date',
    'file_tools:usersettings:time:days' => 'Days ago',
    // new/edit
    'file_tools:new:title' => "New file folder",
    'file_tools:edit:title' => "Edit file folder",
    'file_tools:forms:edit:title' => "Title",
    'file_tools:forms:edit:description' => "Description",
    'file_tools:forms:edit:parent' => "Select a parent folder",
    'file_tools:forms:edit:change_children_access' => "Update access on all subfolders",
    'file_tools:forms:edit:change_files_access' => "Update access on all files in this folder (and all subfolders if selected)",
    'file_tools:forms:browse' => 'Browse..',
    'file_tools:forms:empty_queue' => 'Empty queue',
    'file_tools:folder:delete:confirm_files' => "Do you also wish to delete all files in the removed (sub)folders",
    // actions
    // edit
    'file_tools:action:edit:error:input' => "Incorrect input to create/edit a file folder",
    'file_tools:action:edit:error:owner' => "Could not find the owner of the file folder",
    'file_tools:action:edit:error:folder' => "No folder to create/edit",
    'file_tools:action:edit:error:save' => "Unknown error occured while saving the file folder",
    'file_tools:action:edit:success' => "File folder successfully created/edited",
    'file_tools:action:move:parent_error' => "Can\'t drop the folder in itself.",
    // delete
    'file_tools:actions:delete:error:input' => "Invalid input to delete a file folder",
    'file_tools:actions:delete:error:entity' => "The given GUID could not be found",
    'file_tools:actions:delete:error:subtype' => "The given GUID is not a file folder",
    'file_tools:actions:delete:error:delete' => "An unknown error occured while deleting the file folder",
    'file_tools:actions:delete:success' => "The file folder was deleted successfully",
    'file_tools:upload:new' => 'Upload zip file',
    'file_tools:upload:form:choose' => 'Choose file',
    'file_tools:upload:form:info' => 'Click browse to upload (multiple) files',
    'file_tools:upload:form:zip:info' => "You can upload a zip file. It will be extracted and each file will be separately imported. Also if you have folders in your zip they will be imported into each specific folder. File types that are not allowed will be skipped.",
    //errors
    'file_tools:error:pageowner' => 'Error retrieving page owner.',
    'file_tools:error:nofilesextracted' => 'There were no allowed files found to extract.',
    'file_tools:error:cantopenfile' => 'Zip file couldn\'t be opened (check if the uploaded file is a .zip file).',
    'file_tools:error:nozipfilefound' => 'Uploaded file is not a .zip file.',
    'file_tools:error:nofilefound' => 'Choose a file to upload.',
    //messages
    'file_tools:error:fileuploadsuccess' => 'Zip file uploaded and extracted successfully.',
    // move
    'file_tools:action:move:success:file' => "The file was moved successfully",
    'file_tools:action:move:success:folder' => "The folder was moved successfully",
    // buld delete
    'file_tools:action:bulk_delete:success:files' => "Successfully removed %s files",
    'file_tools:action:bulk_delete:error:files' => "There was an error while removing some files",
    'file_tools:action:bulk_delete:success:folders' => "Successfully removed %s folders",
    'file_tools:action:bulk_delete:error:folders' => "There was an error while removing some folders",
    // reorder
    'file_tools:action:folder:reorder:success' => "Successfully reordered the folder(s)",
    //settings
    'file_tools:settings:allowed_extensions' => 'Allowed extensions (comma seperated)',
    'file_tools:settings:user_folder_structure' => 'Use folder structure',
    'file_tools:settings:sort:default' => 'Default folder sorting options',
    'file:type:application' => 'Application',
    'file:type:text' => 'Text',
    // widgets
    // file tree
    'widgets:file_tree:title' => "Folders",
    'widgets:file_tree:description' => "Showcase your File folders",
    'widgets:file_tree:edit:select' => "Select which folder(s) to display",
    'widgets:file_tree:edit:show_content' => "Show the content of the folder(s)",
    'widgets:file_tree:no_folders' => "No folders configured",
    'widgets:file_tree:no_files' => "No files configured",
    'widgets:file_tree:more' => "More file folders",
    'widget:file:edit:show_only_featured' => 'Show only featured files',
    'widget:file_tools:show_file' => 'Feature file (widget)',
    'widget:file_tools:hide_file' => 'Unfeature file',
    'widgets:file_tools:more_files' => 'More files',
    // Group files
    'widgets:group_files:description' => "Show the latest group files",
    // index_file
    'widgets:index_file:description' => "Show the latest files on your community",
    'comments' => "Comments",
    'comment:notification:settings' => 'Comment notifications',
    'comment:notification:settings:description' => 'Notify when comments are posted to items you have subscribed to.',
    'comment:notification:settings:how' => 'Select your method of notification',
    'comment:notification:settings:linktext' => 'View all items to which you are subscribed',
    'comment:subscriptions' => 'Subscriptions',
    'comment:subscriptions:none' => 'No current subscriptions',
    'comment:subscribe:tooltip' => 'Subscribe to receive notifications when comments are made on this content',
    'allow:comment:notification' => 'Do you want to enable notification? ',
    'email:content:type' => 'Do you want to support HTML Email? ',
    'text:email' => 'No',
    'html:email' => 'Yes',
    'comment:subscribe' => 'Subscribe',
    'comment:unsubscribe' => 'Unsubscribe',
    'comment:subscribe:long' => 'Subscribe to comment notifications',
    'comment:unsubscribe:long' => 'Unsubscribe from comment notifications',
    'comment_tracker:setting:autosubscribe' => "Auto-subscribe to content you comment on?",
    'show:subscribers' => 'Show Subscribers',
    'comment:subscribe:success' => 'You have successfully subscribed to this post or topic.',
    'comment:subscribe:failed' => "Sorry! You couldn't subscribe this post or topic.",
    'comment:subscribe:entity:not:access' => "Sorry! we couldn't find the post or topic for some reason.",
    'comment:unsubscribe:success' => 'You have successfully unsubscribed from this post or topic.',
    'comment:unsubscribe:failed' => "Sorry! You couldn't unsubscribe from this post or topic.",
    'comment:unsubscribe:not:valid:url' => 'Sorry! This is not a valid url to unsubscribe from this post or topic.',
    'comment:unsubscribe:entity:not:access' => "Sorry! we couldn't find the post or topic.",
    'comment_tracker:setting:show_button' => "Show subscribe/unsubscribe button above comments view? ",
    'comment_tracker:item' => "item",
    'comment:notify:subject:groupforumtopic' => '%s added to the discussion %s in the group %s',
    'comment:notify:subject:comment' => '%s commented on the %s "%s"',
    'comment:notify:subject:comment:group' => '%s commented on the %s "%s" in the group %s',
    /* Legacy stuff - @TODO - see what's safe to delete */
    'comment:notify:subject' => 'There is a new comment on %s',
    'comment:notify:group:subject' => 'There is a new post in the thread %s',
    'comment:notify:body:web' => 'Hi %s,
<br/>There is a new comment on %s
<br/>%s wrote: %s
<br/>%s
<br/>
<font color="#888888" size="2">
You have received this notification because you have subscribed to it, or are involved in it.<br/>
To change your notification preferences, please click here: %s<br/>
</font>
		',
    'comment:notify:group:body:web' => 'Hi %s,
<br/>There is a new post in the thread %s
<br/>%s wrote: %s
<br/>%s
<br/>
<font color="#888888" size="2">
You have received this notification because you have subscribed to it, or are involved in it.<br/>
To change your notification preferences, please click here: %s<br/>
</font>
		',
    'comment:notify:body:email:text' => 'Hi %s,

There is a new comment on %s

%s wrote: %s

%s

Regards,
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Please note you may have to login before viewing the post or topic.

You have received this notification because you have subscribed to it, or are involved in it.

To change your notification preferences for all such messages, please click here: %s
</font>
		',
    'comment:notify:group:body:email:text' => 'Hi %s,

There is a new post in the thread %s

%s wrote: %s

%s

Regards,
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Please note you may have to login before viewing the post or topic.

You have received this notification because you have subscribed to it, or are involved in it.

To change your notification preferences for all such messages, please click here: %s
</font>
		',
    'comment:notify:body:email:html' => '
<div>
	<div>Hi %s,</div>
	<div>There is a new comment on %s</div>
	<div>%s wrote: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Regards,</div></div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Please note you may have to login before viewing the post or topic.</div>
		<div>You have received this notification because you have subscribed to it, or are involved in it.</div>
		<div>To change your notification preferences for all such messages, please click here: %s</div>
	</div>
</div>
		',
    'comment:notify:group:body:email:html' => '
<div>
	<div>Hi %s,</div>
	<div>There is a new post in the thread %s</div>
	<div>%s wrote: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Regards,</div>
	<div>%s</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Please note you may have to login before viewing the post or topic.</div>
		<div>You have received this notification because you have subscribed to it, or are involved in it.</div>
		<div>To change your notification preferences for all such messages, please click here: %s</div>
	</div>
</div>
		',
    'au_subgroups' => "Sub-Groups",
    'au_subgroups:subgroup' => "Sub-Group",
    'au_subgroups:subgroups' => "Sub-Groups",
    'au_subgroups:parent' => "Parent Group",
    'au_subgroups:add:subgroup' => 'Create a Sub-Group',
    'au_subgroups:nogroups' => 'No Sub-Groups have been created',
    'au_subgroups:error:notparentmember' => "Users cannot join a sub-group if they are not a member of the parent group",
    'au_subtypes:error:create:disabled' => "Subgroup creation has been disabled for this group",
    'au_subgroups:noedit' => "Cannot edit this group",
    'au_subgroups:subgroups:delete' => "Delete Group",
    'au_subgroups:delete:label' => "What should happen to the content of this group?  Any option selected will also apply to any subgroups that will be deleted.",
    'au_subgroups:deleteoption:delete' => 'Delete all content within this group',
    'au_subgroups:deleteoption:owner' => 'Transfer all content to the original creators',
    'au_subgroups:deleteoption:parent' => 'Transfer all content to the parent group',
    'au_subgroups:subgroup:of' => "Sub-Group of %s",
    'au_subgroups:setting:display_alphabetically' => "Display personal group listings alphabetically?",
    'au_subgroups:setting:display_subgroups' => 'Show subgroups in standard group listings?',
    'au_subgroups:setting:display_featured' => 'Show featured groups sidebar on personal group listings?',
    'au_subgroups:error:invite' => "Action has been cancelled - the following users are not members of the parent group and cannot be invited/added.",
    'au_subgroups:option:parent:members' => "Members of the parent group",
    'au_subgroups:subgroups:more' => "View all Sub-Groups",
    // group options
    'au_subgroups:group:enable' => "Subgroups: Enable Sub-Groups for this group?",
    'au_subgroups:group:memberspermissions' => "Subgroups: Enable any member to create subgroups? (if no, only group admins will be able to create subgroups)",
    /*
     * Widget
     */
    'au_subgroups:widget:order' => 'Order results by',
    'au_subgroups:option:default' => 'Time Created',
    'au_subgroups:option:alpha' => 'Alphabetical',
    'au_subgroups:widget:numdisplay' => 'Number of subgroups to display',
    'au_subgroups:widget:description' => 'List subgroups for this group',
    /**
     * Menu items and titles
     */
    'groups:enablelongcolumn' => "Enable three columns discussions module?",
    'groups' => "Groups",
    'groups:owned' => "Groups I own",
    'groups:owned:user' => 'Groups %s owns',
    'groups:yours' => "My groups",
    'groups:user' => "%s's groups",
    'groups:all' => "All groups",
    'groups:add' => "Create a new group",
    'groups:edit' => "Edit group",
    'groups:delete' => 'Delete group',
    'groups:membershiprequests' => 'Manage join requests',
    'groups:membershiprequests:pending' => 'Manage join requests (%s)',
    'groups:invitations' => 'Group invitations',
    'groups:invitations:pending' => 'Group invitations (%s)',
    'groups:icon' => 'Group icon (leave blank to leave unchanged)',
    'groups:name' => 'Group name',
    'groups:username' => 'Group short name (displayed in URLs, alphanumeric characters only)',
    'groups:description' => 'Description',
    'groups:briefdescription' => 'Brief description',
    'groups:interests' => 'Tags',
    'groups:website' => 'Website',
    'groups:members' => 'Group members',
    'groups:my_status' => 'My status',
    'groups:my_status:group_owner' => 'You own this group',
    'groups:my_status:group_member' => 'You are in this group',
    'groups:subscribed' => 'Group notifications on',
    'groups:unsubscribed' => 'Group notifications off',
    'groups:members:title' => 'Members of %s',
    'groups:members:more' => "View all members",
    'groups:membership' => "Group membership permissions",
    'groups:access' => "Access permissions",
    'groups:owner' => "Owner",
    'groups:owner:warning' => "Warning: if you change this value, you will no longer be the owner of this group.",
    'groups:widget:num_display' => 'Number of groups to display',
    'groups:widget:membership' => 'Group membership',
    'groups:widgets:description' => 'Display the groups you are a member of on your profile',
    'groups:noaccess' => 'No access to group',
    'groups:permissions:error' => 'You do not have the permissions for this',
    'groups:ingroup' => 'in the group',
    'groups:cantcreate' => 'You can not create a group. Only admins can.',
    'groups:cantedit' => 'You can not edit this group',
    'groups:saved' => 'Group saved',
    'groups:featured' => 'Featured groups',
    'groups:makeunfeatured' => 'Unfeature',
    'groups:makefeatured' => 'Make featured',
    'groups:featuredon' => '%s is now a featured group.',
    'groups:unfeatured' => '%s has been removed from the featured groups.',
    'groups:featured_error' => 'Invalid group.',
    'groups:joinrequest' => 'Request membership',
    'groups:join' => 'Join group',
    'groups:leave' => 'Leave group',
    'groups:invite' => 'Invite friends',
    'groups:invite:title' => 'Invite friends to this group',
    'groups:inviteto' => "Invite friends to '%s'",
    'groups:nofriends' => "You have no friends left who have not been invited to this group.",
    'groups:nofriendsatall' => 'You have no friends to invite!',
    'groups:viagroups' => "via groups",
    'groups:group' => "Group",
    'groups:search:tags' => "tag",
    'groups:search:title' => "Search for groups tagged with '%s'",
    'groups:search:none' => "No matching groups were found",
    'groups:search_in_group' => "Search in this group",
    'groups:acl' => "Group: %s",
    'discussion:notification:topic:subject' => 'New group discussion post',
    'groups:notification' =>
    '%s added a new discussion topic to %s:

%s
%s

View and reply to the discussion:
%s
',
    'discussion:notification:reply:body' =>
    '%s replied to the discussion topic %s in the group %s:

%s

View and reply to the discussion:
%s
',
    'groups:activity' => "Group activity",
    'groups:enableactivity' => 'Enable group activity',
    'groups:activity:none' => "There is no group activity yet",
    'groups:notfound' => "Group not found",
    'groups:notfound:details' => "The requested group either does not exist or you do not have access to it",
    'groups:requests:none' => 'There are no current membership requests.',
    'groups:invitations:none' => 'There are no current invitations.',
    'item:object:groupforumtopic' => "Discussion topics",
    'groupforumtopic:new' => "Add discussion post",
    'groups:count' => "groups created",
    'groups:open' => "open group",
    'groups:closed' => "closed group",
    'groups:member' => "members",
    'groups:searchtag' => "Search for groups by tag",
    'groups:more' => 'More groups',
    'groups:none' => 'No groups',
    /*
     * Access
     */
    'groups:access:private' => 'Closed - Users must be invited',
    'groups:access:public' => 'Open - Any user may join',
    'groups:access:group' => 'Group members only',
    'groups:closedgroup' => 'This group has a closed membership.',
    'groups:closedgroup:request' => 'To ask to be added, click the "request membership" menu link.',
    'groups:visibility' => 'Who can see this group?',
    /*
      Group tools
     */
    'groups:enableforum' => 'Enable group discussion',
    'groups:yes' => 'yes',
    'groups:no' => 'no',
    'groups:lastupdated' => 'Last updated %s by %s',
    'groups:lastcomment' => 'Last comment %s by %s',
    /*
      Group discussion
     */
    'discussion' => 'Discussion',
    'discussion:add' => 'Add discussion topic',
    'discussion:latest' => 'Latest discussion',
    'discussion:group' => 'Group discussion',
    'discussion:none' => 'No discussion',
    'discussion:reply:title' => 'Reply by %s',
    'discussion:topic:created' => 'The discussion topic was created.',
    'discussion:topic:updated' => 'The discussion topic was updated.',
    'discussion:topic:deleted' => 'Discussion topic has been deleted.',
    'discussion:topic:notfound' => 'Discussion topic not found',
    'discussion:error:notsaved' => 'Unable to save this topic',
    'discussion:error:missing' => 'Both title and message are required fields',
    'discussion:error:permissions' => 'You do not have permissions to perform this action',
    'discussion:error:notdeleted' => 'Could not delete the discussion topic',
    'discussion:reply:deleted' => 'Discussion reply has been deleted.',
    'discussion:reply:error:notdeleted' => 'Could not delete the discussion reply',
    'reply:this' => 'Reply to this',
    'group:replies' => 'Replies',
    'groups:forum:created' => 'Created %s with %d comments',
    'groups:forum:created:single' => 'Created %s with %d reply',
    'groups:forum' => 'Discussion',
    'groups:addtopic' => 'Add a topic',
    'groups:forumlatest' => 'Latest discussion',
    'groups:latestdiscussion' => 'Latest discussion',
    'groups:newest' => 'Newest',
    'groups:popular' => 'Popular',
    'groupspost:success' => 'Your reply was succesfully posted',
    'groups:alldiscussion' => 'Latest discussion',
    'groups:edittopic' => 'Edit topic',
    'groups:topicmessage' => 'Topic message',
    'groups:topicstatus' => 'Topic status',
    'groups:reply' => 'Post a comment',
    'groups:topic' => 'Topic',
    'groups:posts' => 'Posts',
    'groups:lastperson' => 'Last person',
    'groups:when' => 'When',
    'grouptopic:notcreated' => 'No topics have been created.',
    'groups:topicopen' => 'Open',
    'groups:topicclosed' => 'Closed',
    'groups:topicresolved' => 'Resolved',
    'grouptopic:created' => 'Your topic was created.',
    'groupstopic:deleted' => 'The topic has been deleted.',
    'groups:topicsticky' => 'Sticky',
    'groups:topicisclosed' => 'This discussion is closed.',
    'groups:topiccloseddesc' => 'This discussion is closed and is not accepting new comments.',
    'grouptopic:error' => 'Your group topic could not be created. Please try again or contact a system administrator.',
    'groups:forumpost:edited' => "You have successfully edited the forum post.",
    'groups:forumpost:error' => "There was a problem editing the forum post.",
    'groups:privategroup' => 'This group is closed. Requesting membership.',
    'groups:notitle' => 'Groups must have a title',
    'groups:cantjoin' => 'Can not join group',
    'groups:cantleave' => 'Could not leave group',
    'groups:removeuser' => 'Remove from group',
    'groups:cantremove' => 'Cannot remove user from group',
    'groups:removed' => 'Successfully removed %s from group',
    'groups:addedtogroup' => 'Successfully added the user to the group',
    'groups:joinrequestnotmade' => 'Could not request to join group',
    'groups:joinrequestmade' => 'Requested to join group',
    'groups:joined' => 'Successfully joined group!',
    'groups:left' => 'Successfully left group',
    'groups:notowner' => 'Sorry, you are not the owner of this group.',
    'groups:notmember' => 'Sorry, you are not a member of this group.',
    'groups:alreadymember' => 'You are already a member of this group!',
    'groups:userinvited' => 'User has been invited.',
    'groups:usernotinvited' => 'User could not be invited.',
    'groups:useralreadyinvited' => 'User has already been invited',
    'groups:invite:subject' => "%s you have been invited to join %s!",
    'groups:updated' => "Last reply by %s %s",
    'groups:started' => "Started by %s",
    'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
    'groups:invite:remove:check' => 'Are you sure you want to remove this invitation?',
    'groups:invite:body' => "Hi %s,

%s invited you to join the '%s' group. Click below to view your invitations:

%s",
    'groups:welcome:subject' => "Welcome to the %s group!",
    'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' group! Click below to begin posting!

%s",
    'groups:request:subject' => "%s has requested to join %s",
    'groups:request:body' => "Hi %s,

%s has requested to join the '%s' group. Click below to view their profile:

%s

or click below to view the group's join requests:

%s",
    /*
      Forum river items
     */
    'river:create:group:default' => '%s created the group %s',
    'river:join:group:default' => '%s joined the group %s',
    'river:create:object:groupforumtopic' => '%s added a new discussion topic %s',
    'river:reply:object:groupforumtopic' => '%s replied on the discussion topic %s',
    'groups:nowidgets' => 'No widgets have been defined for this group.',
    'groups:widgets:members:title' => 'Group members',
    'groups:widgets:members:description' => 'List the members of a group.',
    'groups:widgets:members:label:displaynum' => 'List the members of a group.',
    'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',
    'groups:widgets:entities:title' => "Objects in group",
    'groups:widgets:entities:description' => "List the objects saved in this group",
    'groups:widgets:entities:label:displaynum' => 'List the objects of a group.',
    'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',
    'groups:forumtopic:edited' => 'Forum topic successfully edited.',
    'groups:allowhiddengroups' => 'Do you want to allow private (invisible) groups?',
    'groups:whocancreate' => 'Who can create new groups?',
    /**
     * Action messages
     */
    'group:deleted' => 'Group and group contents deleted',
    'group:notdeleted' => 'Group could not be deleted',
    'group:notfound' => 'Could not find the group',
    'grouppost:deleted' => 'Group posting successfully deleted',
    'grouppost:notdeleted' => 'Group posting could not be deleted',
    'groupstopic:deleted' => 'Topic deleted',
    'groupstopic:notdeleted' => 'Topic not deleted',
    'grouptopic:blank' => 'No topic',
    'grouptopic:notfound' => 'Could not find the topic',
    'grouppost:nopost' => 'Empty post',
    'groups:deletewarning' => "Are you sure you want to delete this group? There is no undo!",
    'groups:invitekilled' => 'The invite has been deleted.',
    'groups:joinrequestkilled' => 'The join request has been deleted.',
    // ecml
    'groups:ecml:discussion' => 'Group Discussions',
    'groups:ecml:groupprofile' => 'Group profiles',
    /**
     * Sites
     */
    'item:site' => 'Sites',
    /**
     * Sessions
     */
    'login' => "Log in",
    'loginok' => "You have been logged in.",
    'loginerror' => "We couldn't log you in. Please check your credentials and try again.",
    'login:empty' => "Username/email and password are required.",
    'login:baduser' => "Unable to load your user account.",
    'auth:nopams' => "Internal error. No user authentication method installed.",
    'logout' => "Log out",
    'logoutok' => "You have been logged out.",
    'logouterror' => "We couldn't log you out. Please try again.",
    'loggedinrequired' => "You must be logged in to view that page.",
    'adminrequired' => "You must be an administrator to view that page.",
    'membershiprequired' => "You must be a member of this group to view that page.",
    /**
     * Errors
     */
    'exception:title' => "Fatal Error.",
    'exception:contact_admin' => 'An unrecoverable error has occurred and has been logged. Contact the site administrator with the following information:',
    'actionundefined' => "The requested action (%s) was not defined in the system.",
    'actionnotfound' => "The action file for %s was not found.",
    'actionloggedout' => "Sorry, you cannot perform this action while logged out.",
    'actionunauthorized' => 'You are unauthorized to perform this action',
    'InstallationException:SiteNotInstalled' => 'Unable to handle this request. This site '
    . ' is not configured or the database is down.',
    'InstallationException:MissingLibrary' => 'Could not load %s',
    'InstallationException:CannotLoadSettings' => 'Elgg could not load the settings file. It does not exist or there is a file permissions issue.',
    'SecurityException:Codeblock' => "Denied access to execute privileged code block",
    'DatabaseException:WrongCredentials' => "Elgg couldn't connect to the database using the given credentials. Check the settings file.",
    'DatabaseException:NoConnect' => "Elgg couldn't select the database '%s', please check that the database is created and you have access to it.",
    'SecurityException:FunctionDenied' => "Access to privileged function '%s' is denied.",
    'DatabaseException:DBSetupIssues' => "There were a number of issues: ",
    'DatabaseException:ScriptNotFound' => "Elgg couldn't find the requested database script at %s.",
    'DatabaseException:InvalidQuery' => "Invalid query",
    'DatabaseException:InvalidDBLink' => "Connection to database was lost.",
    'IOException:FailedToLoadGUID' => "Failed to load new %s from GUID:%d",
    'InvalidParameterException:NonElggObject' => "Passing a non-ElggObject to an ElggObject constructor!",
    'InvalidParameterException:UnrecognisedValue' => "Unrecognised value passed to constuctor.",
    'InvalidClassException:NotValidElggStar' => "GUID:%d is not a valid %s",
    'PluginException:MisconfiguredPlugin' => "%s (guid: %s) is a misconfigured plugin. It has been disabled. Please search the Elgg wiki for possible causes (http://docs.elgg.org/wiki/).",
    'PluginException:CannotStart' => '%s (guid: %s) cannot start and has been deactivated.  Reason: %s',
    'PluginException:InvalidID' => "%s is an invalid plugin ID.",
    'PluginException:InvalidPath' => "%s is an invalid plugin path.",
    'PluginException:InvalidManifest' => 'Invalid manifest file for plugin %s',
    'PluginException:InvalidPlugin' => '%s is not a valid plugin.',
    'PluginException:InvalidPlugin:Details' => '%s is not a valid plugin: %s',
    'PluginException:NullInstantiated' => 'ElggPlugin cannot be null instantiated. You must pass a GUID, a plugin ID, or a full path.',
    'ElggPlugin:MissingID' => 'Missing plugin ID (guid %s)',
    'ElggPlugin:NoPluginPackagePackage' => 'Missing ElggPluginPackage for plugin ID %s (guid %s)',
    'ElggPluginPackage:InvalidPlugin:MissingFile' => 'The required file "%s" is missing.',
    'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Its manifest contains an invalid dependency type "%s".',
    'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Its manifest contains an invalid provides type "%s".',
    'ElggPluginPackage:InvalidPlugin:CircularDep' => 'There is an invalid %s dependency "%s" in plugin %s.  Plugins cannot conflict with or require something they provide!',
    'ElggPlugin:Exception:CannotIncludeFile' => 'Cannot include %s for plugin %s (guid: %s) at %s.',
    'ElggPlugin:Exception:CannotRegisterViews' => 'Cannot open views dir for plugin %s (guid: %s) at %s.',
    'ElggPlugin:Exception:CannotRegisterLanguages' => 'Cannot register languages for plugin %s (guid: %s) at %s.',
    'ElggPlugin:Exception:NoID' => 'No ID for plugin guid %s!',
    'PluginException:ParserError' => 'Error parsing manifest with API version %s in plugin %s.',
    'PluginException:NoAvailableParser' => 'Cannot find a parser for manifest API version %s in plugin %s.',
    'PluginException:ParserErrorMissingRequiredAttribute' => "Missing required '%s' attribute in manifest for plugin %s.",
    'ElggPlugin:Dependencies:Requires' => 'Requires',
    'ElggPlugin:Dependencies:Suggests' => 'Suggests',
    'ElggPlugin:Dependencies:Conflicts' => 'Conflicts',
    'ElggPlugin:Dependencies:Conflicted' => 'Conflicted',
    'ElggPlugin:Dependencies:Provides' => 'Provides',
    'ElggPlugin:Dependencies:Priority' => 'Priority',
    'ElggPlugin:Dependencies:Elgg' => 'Elgg version',
    'ElggPlugin:Dependencies:PhpExtension' => 'PHP extension: %s',
    'ElggPlugin:Dependencies:PhpIni' => 'PHP ini setting: %s',
    'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',
    'ElggPlugin:Dependencies:Priority:After' => 'After %s',
    'ElggPlugin:Dependencies:Priority:Before' => 'Before %s',
    'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s is not installed',
    'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Missing',
    'ElggPlugin:Dependencies:ActiveDependent' => 'There are other plugins that list %s as a dependency.  You must disable the following plugins before disabling this one: %s',
    'ElggPlugin:InvalidAndDeactivated' => '%s is an invalid plugin and has been deactivated.',
    'InvalidParameterException:NonElggUser' => "Passing a non-ElggUser to an ElggUser constructor!",
    'InvalidParameterException:NonElggSite' => "Passing a non-ElggSite to an ElggSite constructor!",
    'InvalidParameterException:NonElggGroup' => "Passing a non-ElggGroup to an ElggGroup constructor!",
    'IOException:UnableToSaveNew' => "Unable to save new %s",
    'InvalidParameterException:GUIDNotForExport' => "GUID has not been specified during export, this should never happen.",
    'InvalidParameterException:NonArrayReturnValue' => "Entity serialisation function passed a non-array returnvalue parameter",
    'ConfigurationException:NoCachePath' => "Cache path set to nothing!",
    'IOException:NotDirectory' => "%s is not a directory.",
    'IOException:BaseEntitySaveFailed' => "Unable to save new object's base entity information!",
    'InvalidParameterException:UnexpectedODDClass' => "import() passed an unexpected ODD class",
    'InvalidParameterException:EntityTypeNotSet' => "Entity type must be set.",
    'ClassException:ClassnameNotClass' => "%s is not a %s.",
    'ClassNotFoundException:MissingClass' => "Class '%s' was not found, missing plugin?",
    'InstallationException:TypeNotSupported' => "Type %s is not supported. This indicates an error in your installation, most likely caused by an incomplete upgrade.",
    'ImportException:ImportFailed' => "Could not import element %d",
    'ImportException:ProblemSaving' => "There was a problem saving %s",
    'ImportException:NoGUID' => "New entity created but has no GUID, this should not happen.",
    'ImportException:GUIDNotFound' => "Entity '%d' could not be found.",
    'ImportException:ProblemUpdatingMeta' => "There was a problem updating '%s' on entity '%d'",
    'ExportException:NoSuchEntity' => "No such entity GUID:%d",
    'ImportException:NoODDElements' => "No OpenDD elements found in import data, import failed.",
    'ImportException:NotAllImported' => "Not all elements were imported.",
    'InvalidParameterException:UnrecognisedFileMode' => "Unrecognised file mode '%s'",
    'InvalidParameterException:MissingOwner' => "File %s (file guid:%d) (owner guid:%d) is missing an owner!",
    'IOException:CouldNotMake' => "Could not make %s",
    'IOException:MissingFileName' => "You must specify a name before opening a file.",
    'ClassNotFoundException:NotFoundNotSavedWithFile' => "Unable to load filestore class %s for file %u",
    'NotificationException:NoNotificationMethod' => "No notification method specified.",
    'NotificationException:NoHandlerFound' => "No handler found for '%s' or it was not callable.",
    'NotificationException:ErrorNotifyingGuid' => "There was an error while notifying %d",
    'NotificationException:NoEmailAddress' => "Could not get the email address for GUID:%d",
    'NotificationException:MissingParameter' => "Missing a required parameter, '%s'",
    'DatabaseException:WhereSetNonQuery' => "Where set contains non WhereQueryComponent",
    'DatabaseException:SelectFieldsMissing' => "Fields missing on a select style query",
    'DatabaseException:UnspecifiedQueryType' => "Unrecognised or unspecified query type.",
    'DatabaseException:NoTablesSpecified' => "No tables specified for query.",
    'DatabaseException:NoACL' => "No access control was provided on query",
    'InvalidParameterException:NoEntityFound' => "No entity found, it either doesn't exist or you don't have access to it.",
    'InvalidParameterException:GUIDNotFound' => "GUID:%s could not be found, or you can not access it.",
    'InvalidParameterException:IdNotExistForGUID' => "Sorry, '%s' does not exist for guid:%d",
    'InvalidParameterException:CanNotExportType' => "Sorry, I don't know how to export '%s'",
    'InvalidParameterException:NoDataFound' => "Could not find any data.",
    'InvalidParameterException:DoesNotBelong' => "Does not belong to entity.",
    'InvalidParameterException:DoesNotBelongOrRefer' => "Does not belong to entity or refer to entity.",
    'InvalidParameterException:MissingParameter' => "Missing parameter, you need to provide a GUID.",
    'InvalidParameterException:LibraryNotRegistered' => '%s is not a registered library',
    'InvalidParameterException:LibraryNotFound' => 'Could not load the %s library from %s',
    'APIException:ApiResultUnknown' => "API Result is of an unknown type, this should never happen.",
    'ConfigurationException:NoSiteID' => "No site ID has been specified.",
    'SecurityException:APIAccessDenied' => "Sorry, API access has been disabled by the administrator.",
    'SecurityException:NoAuthMethods' => "No authentication methods were found that could authenticate this API request.",
    'SecurityException:ForwardFailedToRedirect' => 'Redirect could not be issued due to headers already being sent. Halting execution for security. Output started in file %s at line %d. Search http://docs.elgg.org/ for more information.',
    'InvalidParameterException:APIMethodOrFunctionNotSet' => "Method or function not set in call in expose_method()",
    'InvalidParameterException:APIParametersArrayStructure' => "Parameters array structure is incorrect for call to expose method '%s'",
    'InvalidParameterException:UnrecognisedHttpMethod' => "Unrecognised http method %s for api method '%s'",
    'APIException:MissingParameterInMethod' => "Missing parameter %s in method %s",
    'APIException:ParameterNotArray' => "%s does not appear to be an array.",
    'APIException:UnrecognisedTypeCast' => "Unrecognised type in cast %s for variable '%s' in method '%s'",
    'APIException:InvalidParameter' => "Invalid parameter found for '%s' in method '%s'.",
    'APIException:FunctionParseError' => "%s(%s) has a parsing error.",
    'APIException:FunctionNoReturn' => "%s(%s) returned no value.",
    'APIException:APIAuthenticationFailed' => "Method call failed the API Authentication",
    'APIException:UserAuthenticationFailed' => "Method call failed the User Authentication",
    'SecurityException:AuthTokenExpired' => "Authentication token either missing, invalid or expired.",
    'CallException:InvalidCallMethod' => "%s must be called using '%s'",
    'APIException:MethodCallNotImplemented' => "Method call '%s' has not been implemented.",
    'APIException:FunctionDoesNotExist' => "Function for method '%s' is not callable",
    'APIException:AlgorithmNotSupported' => "Algorithm '%s' is not supported or has been disabled.",
    'ConfigurationException:CacheDirNotSet' => "Cache directory 'cache_path' not set.",
    'APIException:NotGetOrPost' => "Request method must be GET or POST",
    'APIException:MissingAPIKey' => "Missing API key",
    'APIException:BadAPIKey' => "Bad API key",
    'APIException:MissingHmac' => "Missing X-Elgg-hmac header",
    'APIException:MissingHmacAlgo' => "Missing X-Elgg-hmac-algo header",
    'APIException:MissingTime' => "Missing X-Elgg-time header",
    'APIException:MissingNonce' => "Missing X-Elgg-nonce header",
    'APIException:TemporalDrift' => "X-Elgg-time is too far in the past or future. Epoch fail.",
    'APIException:NoQueryString' => "No data on the query string",
    'APIException:MissingPOSTHash' => "Missing X-Elgg-posthash header",
    'APIException:MissingPOSTAlgo' => "Missing X-Elgg-posthash_algo header",
    'APIException:MissingContentType' => "Missing content type for post data",
    'SecurityException:InvalidPostHash' => "POST data hash is invalid - Expected %s but got %s.",
    'SecurityException:DupePacket' => "Packet signature already seen.",
    'SecurityException:InvalidAPIKey' => "Invalid or missing API Key.",
    'NotImplementedException:CallMethodNotImplemented' => "Call method '%s' is currently not supported.",
    'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC method call '%s' not implemented.",
    'InvalidParameterException:UnexpectedReturnFormat' => "Call to method '%s' returned an unexpected result.",
    'CallException:NotRPCCall' => "Call does not appear to be a valid XML-RPC call",
    'PluginException:NoPluginName' => "The plugin name could not be found",
    'SecurityException:authenticationfailed' => "User could not be authenticated",
    'CronException:unknownperiod' => '%s is not a recognised period.',
    'SecurityException:deletedisablecurrentsite' => 'You can not delete or disable the site you are currently viewing!',
    'RegistrationException:EmptyPassword' => 'The password fields cannot be empty',
    'RegistrationException:PasswordMismatch' => 'Passwords must match',
    'LoginException:BannedUser' => 'You have been banned from this site and cannot log in',
    'LoginException:UsernameFailure' => 'We could not log you in. Please check your username/email and password.',
    'LoginException:PasswordFailure' => 'We could not log you in. Please check your username/email and password.',
    'LoginException:AccountLocked' => 'Your account has been locked for too many log in failures.',
    'LoginException:ChangePasswordFailure' => 'Failed current password check.',
    'LoginException:Unknown' => 'We could not log you in due to an unknown error.',
    'deprecatedfunction' => 'Warning: This code uses the deprecated function \'%s\' and is not compatible with this version of Elgg',
    'pageownerunavailable' => 'Warning: The page owner %d is not accessible!',
    'viewfailure' => 'There was an internal failure in the view %s',
    'changebookmark' => 'Please change your bookmark for this page',
    'noaccess' => 'You need to login to view this content or the content has been removed or you do not have permission to view it.',
    'error:missing_data' => 'There was some data missing in your request',
    'error:default' => 'Oops...something went wrong.',
    'error:404' => 'Sorry. We could not find the page that you requested.',
    /**
     * API
     */
    'system.api.list' => "List all available API calls on the system.",
    'auth.gettoken' => "This API call lets a user obtain a user authentication token which can be used for authenticating future API calls. Pass it as the parameter auth_token",
    /**
     * User details
     */
    'name' => "Display name",
    'email' => "Email address",
    'username' => "Username",
    'loginusername' => "Username or email",
    'password' => "Password",
    'passwordagain' => "Password (again for verification)",
    'admin_option' => "Make this user an admin?",
    /**
     * Access
     */
    'PRIVATE' => "Private",
    'LOGGED_IN' => "Logged in users",
    'PUBLIC' => "Public",
    'access:friends:label' => "Friends",
    'access' => "Access",
    'access:limited:label' => "Limited",
    'access:help' => "The access level",
    /**
     * Dashboard and widgets
     */
    'dashboard' => "Dashboard",
    'dashboard:nowidgets' => "Your dashboard lets you track the activity and content on this site that matters to you.",
    'widgets:add' => 'Add widgets',
    'widgets:add:description' => "Click on any widget button below to add it to the page.",
    'widgets:position:fixed' => '(Fixed position on page)',
    'widget:unavailable' => 'You have already added this widget',
    'widget:numbertodisplay' => 'Number of items to display',
    'widget:delete' => 'Remove %s',
    'widget:edit' => 'Customize this widget',
    'widgets' => "Widgets",
    'widget' => "Widget",
    'item:object:widget' => "Widgets",
    'widgets:save:success' => "The widget was successfully saved.",
    'widgets:save:failure' => "We could not save your widget.",
    'widgets:add:success' => "The widget was successfully added.",
    'widgets:add:failure' => "We could not add your widget.",
    'widgets:move:failure' => "We could not store the new widget position.",
    'widgets:remove:failure' => "Unable to remove this widget",
    /**
     * Groups
     */
    'group' => "Group",
    'item:group' => "Groups",
    /**
     * Users
     */
    'user' => "User",
    'item:user' => "Users",
    /**
     * Friends
     */
    'friends' => "Friends",
    'friends:yours' => "Your friends",
    'friends:owned' => "%s's friends",
    'friend:add' => "Add friend",
    'friend:remove' => "Remove friend",
    'friends:add:successful' => "You have successfully added %s as a friend.",
    'friends:add:failure' => "We couldn't add %s as a friend.",
    'friends:remove:successful' => "You have successfully removed %s from your friends.",
    'friends:remove:failure' => "We couldn't remove %s from your friends.",
    'friends:none' => "No friends yet.",
    'friends:none:you' => "You don't have any friends yet.",
    'friends:none:found' => "No friends were found.",
    'friends:of:none' => "Nobody has added this user as a friend yet.",
    'friends:of:none:you' => "Nobody has added you as a friend yet. Start adding content and fill in your profile to let people find you!",
    'friends:of:owned' => "People who have made %s a friend",
    'friends:of' => "Friends of",
    'friends:collections' => "Friend collections",
    'collections:add' => "New collection",
    'friends:collections:add' => "New friends collection",
    'friends:addfriends' => "Select friends",
    'friends:collectionname' => "Collection name",
    'friends:collectionfriends' => "Friends in collection",
    'friends:collectionedit' => "Edit this collection",
    'friends:nocollections' => "You do not have any collections yet.",
    'friends:collectiondeleted' => "Your collection has been deleted.",
    'friends:collectiondeletefailed' => "We were unable to delete the collection. Either you don't have permission, or some other problem has occurred.",
    'friends:collectionadded' => "Your collection was successfully created",
    'friends:nocollectionname' => "You need to give your collection a name before it can be created.",
    'friends:collections:members' => "Collection members",
    'friends:collections:edit' => "Edit collection",
    'friends:collections:edited' => "Saved collection",
    'friends:collection:edit_failed' => 'Could not save collection.',
    'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    'avatar' => 'Avatar',
    'avatar:noaccess' => "You're not allowed to edit this user's avatar",
    'avatar:create' => 'Create your avatar',
    'avatar:edit' => 'Edit avatar',
    'avatar:preview' => 'Preview',
    'avatar:upload' => 'Upload a new avatar',
    'avatar:current' => 'Current avatar',
    'avatar:remove' => 'Remove your avatar and set the default icon',
    'avatar:crop:title' => 'Avatar cropping tool',
    'avatar:upload:instructions' => "Your avatar is displayed throughout the site. You can change it as often as you'd like. (File formats accepted: GIF, JPG or PNG)",
    'avatar:create:instructions' => 'Click and drag a square below to match how you want your avatar cropped. A preview will appear in the box on the right. When you are happy with the preview, click \'Create your avatar\'. This cropped version will be used throughout the site as your avatar.',
    'avatar:upload:success' => 'Avatar successfully uploaded',
    'avatar:upload:fail' => 'Avatar upload failed',
    'avatar:resize:fail' => 'Resize of the avatar failed',
    'avatar:crop:success' => 'Cropping the avatar succeeded',
    'avatar:crop:fail' => 'Avatar cropping failed',
    'avatar:remove:success' => 'Removing the avatar succeeded',
    'avatar:remove:fail' => 'Avatar remove failed',
    'profile:edit' => 'Edit profile',
    'profile:aboutme' => "About me",
    'profile:description' => "About me",
    'profile:briefdescription' => "Brief description",
    'profile:location' => "Location",
    'profile:skills' => "Skills",
    'profile:interests' => "Interests",
    'profile:contactemail' => "Contact email",
    'profile:phone' => "Telephone",
    'profile:mobile' => "Mobile phone",
    'profile:website' => "Website",
    'profile:twitter' => "Twitter username",
    'profile:saved' => "Your profile was successfully saved.",
    'profile:field:text' => 'Short text',
    'profile:field:longtext' => 'Large text area',
    'profile:field:tags' => 'Tags',
    'profile:field:url' => 'Web address',
    'profile:field:email' => 'Email address',
    'profile:field:location' => 'Location',
    'profile:field:date' => 'Date',
    'admin:appearance:profile_fields' => 'Edit Profile Fields',
    'profile:edit:default' => 'Edit profile fields',
    'profile:label' => "Profile label",
    'profile:type' => "Profile type",
    'profile:editdefault:delete:fail' => 'Removed default profile item field failed',
    'profile:editdefault:delete:success' => 'Profile field deleted',
    'profile:defaultprofile:reset' => 'Profile fields reset to the system default',
    'profile:resetdefault' => 'Reset profile fields to system defaults',
    'profile:resetdefault:confirm' => 'Are you sure you want to delete your custom profile fields?',
    'profile:explainchangefields' => "You can replace the existing profile fields with your own using the form below. \n\n Give the new profile field a label, for example, 'Favorite team', then select the field type (eg. text, url, tags), and click the 'Add' button. To re-order the fields drag on the handle next to the field label. To edit a field label - click on the label's text to make it editable. \n\n At any time you can revert back to the default profile set up, but you will lose any information already entered into custom fields on profile pages.",
    'profile:editdefault:success' => 'New profile field added',
    'profile:editdefault:fail' => 'Default profile could not be saved',
    'profile:field_too_long' => 'Cannot save your profile information because the "%s" section is too long.',
    'profile:noaccess' => "You do not have permission to edit this profile.",
    /**
     * Feeds
     */
    'feed:rss' => 'RSS feed for this page',
    /**
     * Links
     */
    'link:view' => 'view link',
    'link:view:all' => 'View all',
    /**
     * River
     */
    'river' => "River",
    'river:friend:user:default' => "%s is now a friend with %s",
    'river:update:user:avatar' => '%s has a new avatar',
    'river:update:user:profile' => '%s has updated their profile',
    'river:noaccess' => 'You do not have permission to view this item.',
    'river:posted:generic' => '%s posted',
    'riveritem:single:user' => 'a user',
    'riveritem:plural:user' => 'some users',
    'river:ingroup' => 'in the group %s',
    'river:none' => 'No activity',
    'river:update' => 'Update for %s',
    'river:delete:success' => 'River item has been deleted',
    'river:delete:fail' => 'River item could not be deleted',
    'river:widget:title' => "Activity",
    'river:widget:description' => "Display latest activity",
    'river:widget:type' => "Type of activity",
    'river:widgets:friends' => 'Friends activity',
    'river:widgets:all' => 'All site activity',
    /**
     * Notifications
     */
    'notifications:usersettings' => "Notification settings",
    'notifications:methods' => "Select your notification methods.",
    'notification:method:email' => 'Email',
    'notifications:usersettings:save:ok' => "Your notification settings were successfully saved.",
    'notifications:usersettings:save:fail' => "There was a problem saving your notification settings.",
    'user.notification.get' => 'Return the notification settings for a given user.',
    'user.notification.set' => 'Set the notification settings for a given user.',
    /**
     * Search
     */
    'search' => "Search",
    'searchtitle' => "Search: %s",
    'users:searchtitle' => "Searching for users: %s",
    'groups:searchtitle' => "Searching for groups: %s",
    'advancedsearchtitle' => "%s with results matching %s",
    'notfound' => "No results found.",
    'next' => "Next",
    'previous' => "Previous",
    'viewtype:change' => "Change list type",
    'viewtype:list' => "List view",
    'viewtype:gallery' => "Gallery",
    'tag:search:startblurb' => "Items with tags matching '%s':",
    'user:search:startblurb' => "Users matching '%s':",
    'user:search:finishblurb' => "To view more, click here.",
    'group:search:startblurb' => "Groups matching '%s':",
    'group:search:finishblurb' => "To view more, click here.",
    'search:go' => 'Go',
    'userpicker:only_friends' => 'Only friends',
    /**
     * Account
     */
    'account' => "Account",
    'settings' => "Settings",
    'tools' => "Tools",
    'settings:edit' => 'Edit settings',
    'register' => "Register",
    'registerok' => "You have successfully registered for %s.",
    'registerbad' => "Your registration was unsuccessful because of an unknown error.",
    'registerdisabled' => "Registration has been disabled by the system administrator",
    'register:fields' => 'All fields are required',
    'registration:notemail' => 'The email address you provided does not appear to be a valid email address.',
    'registration:userexists' => 'That username already exists',
    'registration:usernametooshort' => 'Your username must be a minimum of %u characters long.',
    'registration:usernametoolong' => 'Your username is too long. It can have a maximum of %u characters.',
    'registration:passwordtooshort' => 'The password must be a minimum of %u characters long.',
    'registration:dupeemail' => 'This email address has already been registered.',
    'registration:invalidchars' => 'Sorry, your username contains the character %s which is invalid. The following characters are invalid: %s',
    'registration:emailnotvalid' => 'Sorry, the email address you entered is invalid on this system',
    'registration:passwordnotvalid' => 'Sorry, the password you entered is invalid on this system',
    'registration:usernamenotvalid' => 'Sorry, the username you entered is invalid on this system',
    'adduser' => "Add User",
    'adduser:ok' => "You have successfully added a new user.",
    'adduser:bad' => "The new user could not be created.",
    'user:set:name' => "Account name settings",
    'user:name:label' => "My display name",
    'user:name:success' => "Successfully changed your name on the system.",
    'user:name:fail' => "Could not change your name on the system.  Please make sure your name isn't too long and try again.",
    'user:set:password' => "Account password",
    'user:current_password:label' => 'Current password',
    'user:password:label' => "Your new password",
    'user:password2:label' => "Your new password again",
    'user:password:success' => "Password changed",
    'user:password:fail' => "Could not change your password on the system.",
    'user:password:fail:notsame' => "The two passwords are not the same!",
    'user:password:fail:tooshort' => "Password is too short!",
    'user:password:fail:incorrect_current_password' => 'The current password entered is incorrect.',
    'user:resetpassword:unknown_user' => 'Invalid user.',
    'user:resetpassword:reset_password_confirm' => 'Resetting your password will email a new password to your registered email address.',
    'user:set:language' => "Language settings",
    'user:language:label' => "Your language",
    'user:language:success' => "Your language settings have been updated.",
    'user:language:fail' => "Your language settings could not be saved.",
    'user:username:notfound' => 'Username %s not found.',
    'user:password:lost' => 'Lost password',
    'user:password:resetreq:success' => 'Successfully requested a new password, email sent',
    'user:password:resetreq:fail' => 'Could not request a new password.',
    'user:password:text' => 'To request a new password, enter your username or email address below and click the Request button.',
    'user:persistent' => 'Remember me',
    'walled_garden:welcome' => 'Welcome to',
    /**
     * Administration
     */
    'menu:page:header:administer' => 'Administer',
    'menu:page:header:configure' => 'Configure',
    'menu:page:header:develop' => 'Develop',
    'menu:page:header:default' => 'Other',
    'admin:view_site' => 'View site',
    'admin:loggedin' => 'Logged in as %s',
    'admin:menu' => 'Menu',
    'admin:configuration:success' => "Your settings have been saved.",
    'admin:configuration:fail' => "Your settings could not be saved.",
    'admin:configuration:dataroot:relative_path' => 'Cannot set "%s" as the dataroot because it is not an absolute path.',
    'admin:unknown_section' => 'Invalid Admin Section.',
    'admin' => "Administration",
    'admin:description' => "The admin panel allows you to control all aspects of the system, from user management to how plugins behave. Choose an option below to get started.",
    'admin:statistics' => "Statistics",
    'admin:statistics:overview' => 'Overview',
    'admin:statistics:server' => 'Server Info',
    'admin:appearance' => 'Appearance',
    'admin:administer_utilities' => 'Utilities',
    'admin:develop_utilities' => 'Utilities',
    'admin:users' => "Users",
    'admin:users:online' => 'Currently Online',
    'admin:users:newest' => 'Newest',
    'admin:users:admins' => 'Administrators',
    'admin:users:add' => 'Add New User',
    'admin:users:description' => "This admin panel allows you to control user settings for your site. Choose an option below to get started.",
    'admin:users:adduser:label' => "Click here to add a new user...",
    'admin:users:opt:linktext' => "Configure users...",
    'admin:users:opt:description' => "Configure users and account information. ",
    'admin:users:find' => 'Find',
    'admin:settings' => 'Settings',
    'admin:settings:basic' => 'Basic Settings',
    'admin:settings:advanced' => 'Advanced Settings',
    'admin:site:description' => "This admin panel allows you to control global settings for your site. Choose an option below to get started.",
    'admin:site:opt:linktext' => "Configure site...",
    'admin:site:access:warning' => "Changing the access setting only affects the permissions on content created in the future.",
    'admin:site:secret:intro' => 'Elgg uses a key to create security tokens for various purposes.',
    'admin:site:secret_regenerated' => "Your site secret has been regenerated.",
    'admin:site:secret:regenerate' => "Regenerate site secret",
    'admin:site:secret:regenerate:help' => "Note: Regenerating your site secret may inconvenience some users by invalidating tokens used in \"remember me\" cookies, e-mail validation requests, invitation codes, etc.",
    'site_secret:current_strength' => 'Key Strength',
    'site_secret:strength:weak' => "Weak",
    'site_secret:strength_msg:weak' => "We strongly recommend that you regenerate your site secret.",
    'site_secret:strength:moderate' => "Moderate",
    'site_secret:strength_msg:moderate' => "We recommend you regenerate your site secret for the best site security.",
    'site_secret:strength:strong' => "Strong",
    'site_secret:strength_msg:strong' => "Your site secret is sufficiently strong. There is no need to regenerate it.",
    'admin:dashboard' => 'Dashboard',
    'admin:widget:online_users' => 'Online users',
    'admin:widget:online_users:help' => 'Lists the users currently on the site',
    'admin:widget:new_users' => 'New users',
    'admin:widget:new_users:help' => 'Lists the newest users',
    'admin:widget:content_stats' => 'Content statistics',
    'admin:widget:content_stats:help' => 'Keep track of the content created by your users',
    'widget:content_stats:type' => 'Content type',
    'widget:content_stats:number' => 'Number',
    'admin:widget:admin_welcome' => 'Welcome',
    'admin:widget:admin_welcome:help' => "A short introduction to Elgg's admin area",
    'admin:widget:admin_welcome:intro' =>
    'Welcome to Elgg! Right now you are looking at the administration dashboard. It\'s useful for tracking what\'s happening on the site.',
    'admin:widget:admin_welcome:admin_overview' =>
    "Navigation for the administration area is provided by the menu to the right. It is organized into"
    . " three sections:
	<dl>
		<dt>Administer</dt><dd>Everyday tasks like monitoring reported content, checking who is online, and viewing statistics.</dd>
		<dt>Configure</dt><dd>Occasional tasks like setting the site name or activating a plugin.</dd>
		<dt>Develop</dt><dd>For developers who are building plugins or designing themes. (Requires a developer plugin.)</dd>
	</dl>
	",
    // argh, this is ugly
    'admin:widget:admin_welcome:outro' => '<br />Be sure to check out the resources available through the footer links and thank you for using Elgg!',
    'admin:widget:control_panel' => 'Control panel',
    'admin:widget:control_panel:help' => "Provides easy access to common controls",
    'admin:cache:flush' => 'Flush the caches',
    'admin:cache:flushed' => "The site's caches have been flushed",
    'admin:footer:faq' => 'Administration FAQ',
    'admin:footer:manual' => 'Administration Manual',
    'admin:footer:community_forums' => 'Elgg Community Forums',
    'admin:footer:blog' => 'Elgg Blog',
    'admin:plugins:category:all' => 'All plugins',
    'admin:plugins:category:active' => 'Active plugins',
    'admin:plugins:category:inactive' => 'Inactive plugins',
    'admin:plugins:category:admin' => 'Admin',
    'admin:plugins:category:bundled' => 'Bundled',
    'admin:plugins:category:nonbundled' => 'Non-bundled',
    'admin:plugins:category:content' => 'Content',
    'admin:plugins:category:development' => 'Development',
    'admin:plugins:category:enhancement' => 'Enhancements',
    'admin:plugins:category:api' => 'Service/API',
    'admin:plugins:category:communication' => 'Communication',
    'admin:plugins:category:security' => 'Security and Spam',
    'admin:plugins:category:social' => 'Social',
    'admin:plugins:category:multimedia' => 'Multimedia',
    'admin:plugins:category:theme' => 'Themes',
    'admin:plugins:category:widget' => 'Widgets',
    'admin:plugins:category:utility' => 'Utilities',
    'admin:plugins:sort:priority' => 'Priority',
    'admin:plugins:sort:alpha' => 'Alphabetical',
    'admin:plugins:sort:date' => 'Newest',
    'admin:plugins:markdown:unknown_plugin' => 'Unknown plugin.',
    'admin:plugins:markdown:unknown_file' => 'Unknown file.',
    'admin:notices:could_not_delete' => 'Could not delete notice.',
    'item:object:admin_notice' => 'Admin notice',
    'admin:options' => 'Admin options',
    /**
     * Plugins
     */
    'plugins:disabled' => 'Plugins are not being loaded because a file named "disabled" is in the mod directory.',
    'plugins:settings:save:ok' => "Settings for the %s plugin were saved successfully.",
    'plugins:settings:save:fail' => "There was a problem saving settings for the %s plugin.",
    'plugins:usersettings:save:ok' => "User settings for the %s plugin were saved successfully.",
    'plugins:usersettings:save:fail' => "There was a problem saving  user settings for the %s plugin.",
    'item:object:plugin' => 'Plugins',
    'admin:plugins' => "Plugins",
    'admin:plugins:activate_all' => 'Activate All',
    'admin:plugins:deactivate_all' => 'Deactivate All',
    'admin:plugins:activate' => 'Activate',
    'admin:plugins:deactivate' => 'Deactivate',
    'admin:plugins:description' => "This admin panel allows you to control and configure tools installed on your site.",
    'admin:plugins:opt:linktext' => "Configure tools...",
    'admin:plugins:opt:description' => "Configure the tools installed on the site. ",
    'admin:plugins:label:author' => "Author",
    'admin:plugins:label:copyright' => "Copyright",
    'admin:plugins:label:categories' => 'Categories',
    'admin:plugins:label:licence' => "License",
    'admin:plugins:label:website' => "URL",
    'admin:plugins:label:repository' => "Code",
    'admin:plugins:label:bugtracker' => "Report issue",
    'admin:plugins:label:donate' => "Donate",
    'admin:plugins:label:moreinfo' => 'more info',
    'admin:plugins:label:version' => 'Version',
    'admin:plugins:label:location' => 'Location',
    'admin:plugins:label:dependencies' => 'Dependencies',
    'admin:plugins:warning:elgg_version_unknown' => 'This plugin uses a legacy manifest file and does not specify a compatible Elgg version. It probably will not work!',
    'admin:plugins:warning:unmet_dependencies' => 'This plugin has unmet dependencies and cannot be activated. Check dependencies under more info.',
    'admin:plugins:warning:invalid' => 'This plugin is invalid: %s',
    'admin:plugins:warning:invalid:check_docs' => 'Check <a href="http://docs.elgg.org/Invalid_Plugin">the Elgg documentation</a> for troubleshooting tips.',
    'admin:plugins:cannot_activate' => 'cannot activate',
    'admin:plugins:set_priority:yes' => "Reordered %s.",
    'admin:plugins:set_priority:no' => "Could not reorder %s.",
    'admin:plugins:set_priority:no_with_msg' => "Could not reorder %s. Error: %s",
    'admin:plugins:deactivate:yes' => "Deactivated %s.",
    'admin:plugins:deactivate:no' => "Could not deactivate %s.",
    'admin:plugins:deactivate:no_with_msg' => "Could not deactivate %s. Error: %s",
    'admin:plugins:activate:yes' => "Activated %s.",
    'admin:plugins:activate:no' => "Could not activate %s.",
    'admin:plugins:activate:no_with_msg' => "Could not activate %s. Error: %s",
    'admin:plugins:categories:all' => 'All categories',
    'admin:plugins:plugin_website' => 'Plugin website',
    'admin:plugins:author' => '%s',
    'admin:plugins:version' => 'Version %s',
    'admin:plugin_settings' => 'Plugin Settings',
    'admin:plugins:warning:unmet_dependencies_active' => 'This plugin is active but has unmet dependencies. You may encounter problems. See "more info" below for details.',
    'admin:plugins:dependencies:type' => 'Type',
    'admin:plugins:dependencies:name' => 'Name',
    'admin:plugins:dependencies:expected_value' => 'Expected Value',
    'admin:plugins:dependencies:local_value' => 'Actual value',
    'admin:plugins:dependencies:comment' => 'Comment',
    'admin:statistics:description' => "This is an overview of statistics on your site. If you need more detailed statistics, a professional administration feature is available.",
    'admin:statistics:opt:description' => "View statistical information about users and objects on your site.",
    'admin:statistics:opt:linktext' => "View statistics...",
    'admin:statistics:label:basic' => "Basic site statistics",
    'admin:statistics:label:numentities' => "Entities on site",
    'admin:statistics:label:numusers' => "Number of users",
    'admin:statistics:label:numonline' => "Number of users online",
    'admin:statistics:label:onlineusers' => "Users online now",
    'admin:statistics:label:admins' => "Admins",
    'admin:statistics:label:version' => "Elgg version",
    'admin:statistics:label:version:release' => "Release",
    'admin:statistics:label:version:version' => "Version",
    'admin:statistics:groups' => "Groups activity",
    'admin:server:label:php' => 'PHP',
    'admin:server:label:web_server' => 'Web Server',
    'admin:server:label:server' => 'Server',
    'admin:server:label:log_location' => 'Log Location',
    'admin:server:label:php_version' => 'PHP version',
    'admin:server:label:php_ini' => 'PHP ini file location',
    'admin:server:label:php_log' => 'PHP Log',
    'admin:server:label:mem_avail' => 'Memory available',
    'admin:server:label:mem_used' => 'Memory used',
    'admin:server:error_log' => "Web server's error log",
    'admin:server:label:post_max_size' => 'POST maximum size',
    'admin:server:label:upload_max_filesize' => 'Upload maximum size',
    'admin:server:warning:post_max_too_small' => '(Note: post_max_size must be larger than this value to support uploads of this size)',
    'admin:user:label:search' => "Find users:",
    'admin:user:label:searchbutton' => "Search",
    'admin:user:ban:no' => "Can not ban user",
    'admin:user:ban:yes' => "User banned.",
    'admin:user:self:ban:no' => "You cannot ban yourself",
    'admin:user:unban:no' => "Can not unban user",
    'admin:user:unban:yes' => "User unbanned.",
    'admin:user:delete:no' => "Can not delete user",
    'admin:user:delete:yes' => "The user %s has been deleted",
    'admin:user:self:delete:no' => "You cannot delete yourself",
    'admin:user:resetpassword:yes' => "Password reset, user notified.",
    'admin:user:resetpassword:no' => "Password could not be reset.",
    'admin:user:makeadmin:yes' => "User is now an admin.",
    'admin:user:makeadmin:no' => "We could not make this user an admin.",
    'admin:user:removeadmin:yes' => "User is no longer an admin.",
    'admin:user:removeadmin:no' => "We could not remove administrator privileges from this user.",
    'admin:user:self:removeadmin:no' => "You cannot remove your own administrator privileges.",
    'admin:appearance:menu_items' => 'Menu Items',
    'admin:menu_items:configure' => 'Configure main menu items',
    'admin:menu_items:description' => 'Select which menu items you want to show as featured links.  Unused items will be added as "More" at the end of the list.',
    'admin:menu_items:hide_toolbar_entries' => 'Remove links from tool bar menu?',
    'admin:menu_items:saved' => 'Menu items saved.',
    'admin:add_menu_item' => 'Add a custom menu item',
    'admin:add_menu_item:description' => 'Fill out the Display name and URL to add custom items to your navigation menu.',
    'admin:appearance:default_widgets' => 'Default Widgets',
    'admin:default_widgets:unknown_type' => 'Unknown widget type',
    'admin:default_widgets:instructions' => 'Add, remove, position, and configure default widgets for the selected widget page.'
    . '  These changes will only affect new users on the site.',
    /**
     * User settings
     */
    'usersettings:description' => "The user settings panel allows you to control all your personal settings, from user management to how plugins behave. Choose an option below to get started.",
    'usersettings:statistics' => "Your statistics",
    'usersettings:statistics:opt:description' => "View statistical information about users and objects on your site.",
    'usersettings:statistics:opt:linktext' => "Account statistics",
    'usersettings:user' => "Your settings",
    'usersettings:user:opt:description' => "This allows you to control user settings.",
    'usersettings:user:opt:linktext' => "Change your settings",
    'usersettings:plugins' => "Tools",
    'usersettings:plugins:opt:description' => "Configure settings (if any) for your active tools.",
    'usersettings:plugins:opt:linktext' => "Configure your tools",
    'usersettings:plugins:description' => "This panel allows you to control and configure the personal settings for the tools installed by your system administrator.",
    'usersettings:statistics:label:numentities' => "Your content",
    'usersettings:statistics:yourdetails' => "Your details",
    'usersettings:statistics:label:name' => "Full name",
    'usersettings:statistics:label:email' => "Email",
    'usersettings:statistics:label:membersince' => "Member since",
    'usersettings:statistics:label:lastlogin' => "Last logged in",
    /**
     * Activity river
     */
    'river:all' => 'All Site Activity',
    'river:mine' => 'My Activity',
    'river:friends' => 'Friends Activity',
    'river:select' => 'Show %s',
    'river:comments:more' => '+%u more',
    'river:generic_comment' => 'commented on %s %s',
    'friends:widget:description' => "Displays some of your friends.",
    'friends:num_display' => "Number of friends to display",
    'friends:icon_size' => "Icon size",
    'friends:tiny' => "tiny",
    'friends:small' => "small",
    /**
     * Generic action words
     */
    'save' => "Save",
    'reset' => 'Reset',
    'publish' => "Publish",
    'cancel' => "Cancel",
    'saving' => "Saving ...",
    'update' => "Update",
    'preview' => "Preview",
    'edit' => "Edit",
    'delete' => "Delete",
    'accept' => "Accept",
    'load' => "Load",
    'upload' => "Upload",
    'ban' => "Ban",
    'unban' => "Unban",
    'banned' => "Banned",
    'enable' => "Enable",
    'disable' => "Disable",
    'request' => "Request",
    'complete' => "Complete",
    'open' => 'Open',
    'close' => 'Close',
    'reply' => "Reply",
    'more' => 'More',
    'comments' => 'Comments',
    'import' => 'Import',
    'export' => 'Export',
    'untitled' => 'Untitled',
    'help' => 'Help',
    'send' => 'Send',
    'post' => 'Post',
    'submit' => 'Submit',
    'comment' => 'Comment',
    'upgrade' => 'Upgrade',
    'sort' => 'Sort',
    'filter' => 'Filter',
    'new' => 'New',
    'add' => 'Add',
    'create' => 'Create',
    'remove' => 'Remove',
    'revert' => 'Revert',
    'site' => 'Site',
    'activity' => 'Activity',
    'members' => 'Members',
    'up' => 'Up',
    'down' => 'Down',
    'top' => 'Top',
    'bottom' => 'Bottom',
    'back' => 'Back',
    'invite' => "Invite",
    'resetpassword' => "Reset password",
    'makeadmin' => "Make admin",
    'removeadmin' => "Remove admin",
    'option:yes' => "Yes",
    'option:no' => "No",
    'unknown' => 'Unknown',
    'active' => 'Active',
    'total' => 'Total',
    'learnmore' => "Click here to learn more.",
    'unknown_error' => 'Unknown error',
    'content' => "content",
    'content:latest' => 'Latest activity',
    'content:latest:blurb' => 'Alternatively, click here to view the latest content from across the site.',
    'link:text' => 'view link',
    /**
     * Generic questions
     */
    'question:areyousure' => 'Are you sure?',
    /**
     * Generic data words
     */
    'title' => "Title",
    'description' => "Description",
    'tags' => "Tags",
    'spotlight' => "Spotlight",
    'all' => "All",
    'mine' => "Mine",
    'by' => 'by',
    'none' => 'none',
    'annotations' => "Annotations",
    'relationships' => "Relationships",
    'metadata' => "Metadata",
    'tagcloud' => "Tag cloud",
    'tagcloud:allsitetags' => "All site tags",
    'on' => 'On',
    'off' => 'Off',
    /**
     * Entity actions
     */
    'edit:this' => 'Edit this',
    'delete:this' => 'Delete this',
    'comment:this' => 'Comment on this',
    /**
     * Input / output strings
     */
    'deleteconfirm' => "Are you sure you want to delete this item?",
    'deleteconfirm:plural' => "Are you sure you want to delete these items?",
    'fileexists' => "A file has already been uploaded. To replace it, select it below:",
    /**
     * User add
     */
    'useradd:subject' => 'User account created',
    'useradd:body' => '
%s,

A user account has been created for you at %s. To log in, visit:

%s

And log in with these user credentials:

Username: %s
Password: %s

Once you have logged in, we highly recommend that you change your password.
',
    /**
     * System messages
     * */
    'systemmessages:dismiss' => "click to dismiss",
    /**
     * Import / export
     */
    'importsuccess' => "Import of data was successful",
    'importfail' => "OpenDD import of data failed.",
    /**
     * Time
     */
    'friendlytime:justnow' => "just now",
    'friendlytime:minutes' => "%s minutes ago",
    'friendlytime:minutes:singular' => "a minute ago",
    'friendlytime:hours' => "%s hours ago",
    'friendlytime:hours:singular' => "an hour ago",
    'friendlytime:days' => "%s days ago",
    'friendlytime:days:singular' => "yesterday",
    'friendlytime:date_format' => 'j F Y @ g:ia',
    'date:month:01' => 'January %s',
    'date:month:02' => 'February %s',
    'date:month:03' => 'March %s',
    'date:month:04' => 'April %s',
    'date:month:05' => 'May %s',
    'date:month:06' => 'June %s',
    'date:month:07' => 'July %s',
    'date:month:08' => 'August %s',
    'date:month:09' => 'September %s',
    'date:month:10' => 'October %s',
    'date:month:11' => 'November %s',
    'date:month:12' => 'December %s',
    /**
     * System settings
     */
    'installation:sitename' => "The name of your site:",
    'installation:sitedescription' => "Short description of your site (optional):",
    'installation:wwwroot' => "The site URL:",
    'installation:path' => "The full path of the Elgg installation:",
    'installation:dataroot' => "The full path of the data directory:",
    'installation:dataroot:warning' => "You must create this directory manually. It should be in a different directory to your Elgg installation.",
    'installation:sitepermissions' => "The default access permissions:",
    'installation:language' => "The default language for your site:",
    'installation:debug' => "Debug mode provides extra information which can be used to diagnose faults. However, it can slow your system down so should only be used if you are having problems:",
    'installation:debug:none' => 'Turn off debug mode (recommended)',
    'installation:debug:error' => 'Display only critical errors',
    'installation:debug:warning' => 'Display errors and warnings',
    'installation:debug:notice' => 'Log all errors, warnings and notices',
    // Walled Garden support
    'installation:registration:description' => 'User registration is enabled by default. Turn this off if you do not want new users to be able to register on their own.',
    'installation:registration:label' => 'Allow new users to register',
    'installation:walled_garden:description' => 'Enable the site to run as a private network. This will not allow non logged-in users to view any site pages other than those specifically marked as public.',
    'installation:walled_garden:label' => 'Restrict pages to logged-in users',
    'installation:httpslogin' => "Enable this to have user logins performed over HTTPS. You will need to have https enabled on your server for this to work.",
    'installation:httpslogin:label' => "Enable HTTPS logins",
    'installation:view' => "Enter the view which will be used as the default for your site or leave this blank for the default view (if in doubt, leave as default):",
    'installation:siteemail' => "Site email address (used when sending system emails):",
    'installation:disableapi' => "Elgg provides an API for building web services so that remote applications can interact with your site.",
    'installation:disableapi:label' => "Enable Elgg's web services API",
    'installation:allow_user_default_access:description' => "If checked, individual users will be allowed to set their own default access level that can over-ride the system default access level.",
    'installation:allow_user_default_access:label' => "Allow user default access",
    'installation:simplecache:description' => "The simple cache increases performance by caching static content including some CSS and JavaScript files. Normally you will want this on.",
    'installation:simplecache:label' => "Use simple cache (recommended)",
    'installation:systemcache:description' => "The system cache decreases the loading time of the Elgg engine by caching data to files.",
    'installation:systemcache:label' => "Use system cache (recommended)",
    'upgrading' => 'Upgrading...',
    'upgrade:db' => 'Your database was upgraded.',
    'upgrade:core' => 'Your Elgg installation was upgraded.',
    'upgrade:unlock' => 'Unlock upgrade',
    'upgrade:unlock:confirm' => "The database is locked for another upgrade. Running concurrent upgrades is dangerous. You should only continue if you know there is not another upgrade running. Unlock?",
    'upgrade:locked' => "Cannot upgrade. Another upgrade is running. To clear the upgrade lock, visit the Admin section.",
    'upgrade:unlock:success' => "Upgrade unlocked successfully.",
    'upgrade:unable_to_upgrade' => 'Unable to upgrade.',
    'upgrade:unable_to_upgrade_info' =>
    'This installation cannot be upgraded because legacy views
		were detected in the Elgg core views directory. These views have been deprecated and need to be
		removed for Elgg to function correctly. If you have not made changes to Elgg core, you can
		simply delete the views directory and replace it with the one from the latest
		package of Elgg downloaded from <a href="http://elgg.org">elgg.org</a>.<br /><br />

		If you need detailed instructions, please visit the <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Upgrading Elgg documentation</a>.  If you require assistance, please post to the
		<a href="http://community.elgg.org/pg/groups/discussion/">Community Support Forums</a>.',
    'update:twitter_api:deactivated' => 'Twitter API (previously Twitter Service) was deactivated during the upgrade. Please activate it manually if required.',
    'update:oauth_api:deactivated' => 'OAuth API (previously OAuth Lib) was deactivated during the upgrade.  Please activate it manually if required.',
    'upgrade:site_secret_warning:moderate' => "You are encouraged to regenerate your site key to improve system security. See Configure &gt; Settings &gt; Advanced",
    'upgrade:site_secret_warning:weak' => "You are strongly encouraged to regenerate your site key to improve system security. See Configure &gt; Settings &gt; Advanced",
    'deprecated:function' => '%s() was deprecated by %s()',
    /**
     * Welcome
     */
    'welcome' => "Welcome",
    'welcome:user' => 'Welcome %s',
    /**
     * Emails
     */
    'email:settings' => "Email settings",
    'email:address:label' => "Your email address",
    'email:save:success' => "New email address saved.",
    'email:save:fail' => "Your new email address could not be saved.",
    'friend:newfriend:subject' => "%s has made you a friend!",
    'friend:newfriend:body' => "%s has made you a friend!

To view their profile, click here:

%s

You cannot reply to this email.",
    'email:resetpassword:subject' => "Password reset!",
    'email:resetpassword:body' => "Hi %s,

Your password has been reset to: %s",
    'email:resetreq:subject' => "Request for new password.",
    'email:resetreq:body' => "Hi %s,

Somebody (from the IP address %s) has requested a new password for their account.

If you requested this, click on the link below. Otherwise ignore this email.

%s
",
    /**
     * user default access
     */
    'default_access:settings' => "Your default access level",
    'default_access:label' => "Default access",
    'user:default_access:success' => "Your new default access level was saved.",
    'user:default_access:failure' => "Your new default access level could not be saved.",
    /**
     * XML-RPC
     */
    'xmlrpc:noinputdata' => "Input data missing",
    /**
     * Comments
     */
    'comments:count' => "%s comments",
    'river:comment:object:default' => '%s commented on %s',
    'generic_comments:add' => "Leave a comment",
    'generic_comments:post' => "Post comment",
    'generic_comments:text' => "Comment",
    'generic_comments:latest' => "Latest comments",
    'generic_comment:posted' => "Your comment was successfully posted.",
    'generic_comment:deleted' => "The comment was successfully deleted.",
    'generic_comment:blank' => "Sorry, you need to actually put something in your comment before we can save it.",
    'generic_comment:notfound' => "Sorry, we could not find the specified item.",
    'generic_comment:notdeleted' => "Sorry, we could not delete this comment.",
    'generic_comment:failure' => "An unexpected error occurred when adding your comment.",
    'generic_comment:none' => 'No comments',
    'generic_comment:title' => 'Comment by %s',
    'generic_comment:on' => '%s on %s',
    'generic_comment:email:subject' => 'You have a new comment!',
    'generic_comment:email:body' => "You have a new comment on your item \"%s\" from %s. It reads:


%s


To reply or view the original item, click here:

%s

To view %s's profile, click here:

%s

You cannot reply to this email.",
    /**
     * Entities
     */
    'byline' => 'By %s',
    'entity:default:strapline' => 'Created %s by %s',
    'entity:default:missingsupport:popup' => 'This entity cannot be displayed correctly. This may be because it requires support provided by a plugin that is no longer installed.',
    'entity:delete:success' => 'Entity %s has been deleted',
    'entity:delete:fail' => 'Entity %s could not be deleted',
    /**
     * Action gatekeeper
     */
    'actiongatekeeper:missingfields' => 'Form is missing __token or __ts fields',
    'actiongatekeeper:tokeninvalid' => "The page you were using had expired. Please try again.",
    'actiongatekeeper:timeerror' => 'The page you were using has expired. Please refresh and try again.',
    'actiongatekeeper:pluginprevents' => 'A extension has prevented this form from being submitted.',
    'actiongatekeeper:uploadexceeded' => 'The size of file(s) uploaded exceeded the limit set by your site administrator',
    'actiongatekeeper:crosssitelogin' => "Sorry, logging in from a different domain is not permitted. Please try again.",
    /**
     * Word blacklists
     */
    'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',
    /**
     * Tag labels
     */
    'tag_names:tags' => 'Tags',
    'tags:site_cloud' => 'Site Tag Cloud',
    /**
     * Javascript
     */
    'js:security:token_refresh_failed' => 'Failed to contact %s. You may experience problems saving content. Please refresh this page.',
    'js:security:token_refreshed' => 'Connection to %s restored!',
    /**
     * Languages according to ISO 639-1
     */
    "aa" => "Afar",
    "ab" => "Abkhazian",
    "af" => "Afrikaans",
    "am" => "Amharic",
    "ar" => "Arabic",
    "as" => "Assamese",
    "ay" => "Aymara",
    "az" => "Azerbaijani",
    "ba" => "Bashkir",
    "be" => "Byelorussian",
    "bg" => "Bulgarian",
    "bh" => "Bihari",
    "bi" => "Bislama",
    "bn" => "Bengali; Bangla",
    "bo" => "Tibetan",
    "br" => "Breton",
    "ca" => "Catalan",
    "co" => "Corsican",
    "cs" => "Czech",
    "cy" => "Welsh",
    "da" => "Danish",
    "de" => "German",
    "dz" => "Bhutani",
    "el" => "Greek",
    "en" => "English",
    "eo" => "Esperanto",
    "es" => "Spanish",
    "et" => "Estonian",
    "eu" => "Basque",
    "fa" => "Persian",
    "fi" => "Finnish",
    "fj" => "Fiji",
    "fo" => "Faeroese",
    "fr" => "French",
    "fy" => "Frisian",
    "ga" => "Irish",
    "gd" => "Scots / Gaelic",
    "gl" => "Galician",
    "gn" => "Guarani",
    "gu" => "Gujarati",
    "he" => "Hebrew",
    "ha" => "Hausa",
    "hi" => "Hindi",
    "hr" => "Croatian",
    "hu" => "Hungarian",
    "hy" => "Armenian",
    "ia" => "Interlingua",
    "id" => "Indonesian",
    "ie" => "Interlingue",
    "ik" => "Inupiak",
    //"in" => "Indonesian",
    "is" => "Icelandic",
    "it" => "Italian",
    "iu" => "Inuktitut",
    "iw" => "Hebrew (obsolete)",
    "ja" => "Japanese",
    "ji" => "Yiddish (obsolete)",
    "jw" => "Javanese",
    "ka" => "Georgian",
    "kk" => "Kazakh",
    "kl" => "Greenlandic",
    "km" => "Cambodian",
    "kn" => "Kannada",
    "ko" => "Korean",
    "ks" => "Kashmiri",
    "ku" => "Kurdish",
    "ky" => "Kirghiz",
    "la" => "Latin",
    "ln" => "Lingala",
    "lo" => "Laothian",
    "lt" => "Lithuanian",
    "lv" => "Latvian/Lettish",
    "mg" => "Malagasy",
    "mi" => "Maori",
    "mk" => "Macedonian",
    "ml" => "Malayalam",
    "mn" => "Mongolian",
    "mo" => "Moldavian",
    "mr" => "Marathi",
    "ms" => "Malay",
    "mt" => "Maltese",
    "my" => "Burmese",
    "na" => "Nauru",
    "ne" => "Nepali",
    "nl" => "Dutch",
    "no" => "Norwegian",
    "oc" => "Occitan",
    "om" => "(Afan) Oromo",
    "or" => "Oriya",
    "pa" => "Punjabi",
    "pl" => "Polish",
    "ps" => "Pashto / Pushto",
    "pt" => "Portuguese",
    "qu" => "Quechua",
    "rm" => "Rhaeto-Romance",
    "rn" => "Kirundi",
    "ro" => "Romanian",
    "ru" => "Russian",
    "rw" => "Kinyarwanda",
    "sa" => "Sanskrit",
    "sd" => "Sindhi",
    "sg" => "Sangro",
    "sh" => "Serbo-Croatian",
    "si" => "Singhalese",
    "sk" => "Slovak",
    "sl" => "Slovenian",
    "sm" => "Samoan",
    "sn" => "Shona",
    "so" => "Somali",
    "sq" => "Albanian",
    "sr" => "Serbian",
    "ss" => "Siswati",
    "st" => "Sesotho",
    "su" => "Sundanese",
    "sv" => "Swedish",
    "sw" => "Swahili",
    "ta" => "Tamil",
    "te" => "Tegulu",
    "tg" => "Tajik",
    "th" => "Thai",
    "ti" => "Tigrinya",
    "tk" => "Turkmen",
    "tl" => "Tagalog",
    "tn" => "Setswana",
    "to" => "Tonga",
    "tr" => "Turkish",
    "ts" => "Tsonga",
    "tt" => "Tatar",
    "tw" => "Twi",
    "ug" => "Uigur",
    "uk" => "Ukrainian",
    "ur" => "Urdu",
    "uz" => "Uzbek",
    "vi" => "Vietnamese",
    "vo" => "Volapuk",
    "wo" => "Wolof",
    "xh" => "Xhosa",
    //"y" => "Yiddish",
    "yi" => "Yiddish",
    "yo" => "Yoruba",
    "za" => "Zuang",
    "zh" => "Chinese",
    "zu" => "Zulu",
);
