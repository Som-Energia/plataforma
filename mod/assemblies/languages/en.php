<?php
/**
 * Assemblies -- Translation strings for English
 *
 * @package        Lorea
 * @subpackage     Assemblies
 *
 * Copyright 2011-2013 Lorea Faeries <federation@lorea.org>
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Affero General Public License
 * as published by the Free Software Foundation, either version 3 of
 * the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this program. If not, see
 * <http://www.gnu.org/licenses/>.
 */

$english = array(
	'assemblies' => 'Assemblies',
	'assemblies:assembly' => 'Assembly',
	'item:object:assembly' => 'Assemblies',
	'item:object:decision' => 'Agenda points',
	'assemblies:none' => 'No assemblies',
	'assemblies:assembly:none' => 'No assemblies',
	'assemblies:none-previous' => 'No previous assemblies',
	'assemblies:general_assembly' => 'General assembly',

	'assemblies:title:all_assemblies' => 'All site assemblies',
	'assembly:edit_general' => 'Edit defaults',

	'assembly:group' => 'Group assemblies',
	'assemblies:group' => 'Group assembly',
	'assemblies:decision:group' => 'Group minutes',
	'assemblies:enableassemblies' => 'Enable group assemblies',
	'assemblies:next' => 'Next assembly',
	'assemblies:assembly:saved' => 'Assembly saved correctly',

	// General properties
	'assemblies:assembly_location' => 'Default location',
	'assemblies:periodicity' => 'Periodicity',
	'assemblies:chat' => 'Chat url',
	'assemblies:streaming' => 'Streaming url',
	'assemblies:voip' => 'Voip url',
	'assemblies:location' => 'Default location',

	// Assembly fields
	'assemblies:assembly:title' => 'Title',
	'assemblies:assembly:description' => 'Description',
	'assemblies:assembly:date' => 'Date',
	'assemblies:assembly:time' => 'Time',
	'assemblies:assembly:location' => 'Location',
	'assemblies:assembly:category' => 'Sections (separated by commas)',
	'assemblies:assembly:access_id' => 'Access',
	'assemblies:assembly:children' => 'Agenda',
	'assemblies:assembly:owner' => 'Created by %s',

	// Date sort menu
	'assemblies:assembly:section:all' => 'All',
	'assemblies:assembly:section:previous' => 'Upcoming',
	'assemblies:assembly:section:next' => 'Done',

	// Decisions
	'decision:add' => 'Add agenda point',
	'decision:edit' => 'Edit agenda point',
	'assemblies:decision:title' => 'Title',
	'assemblies:decision:description' => 'Goal',
	'assemblies:decision:date' => 'Date',
	'assemblies:decision:access_id' => 'Access',
	'assemblies:decision:status' => 'Status',
	'assemblies:decision:tags' => 'Tags',
	'assemblies:decision:proposal' => 'Proposal',
	'assemblies:decision:mode' => 'Class',
	'assemblies:decision:owner' => 'Proposed by %s',
	'assemblies:decision:children' => 'Proposals for this decision',
	'assemblies:decision:child' => 'Proposal',
	'assemblies:decision:none' => 'No decisions',
	'assemblies:decision:category' => 'Section',

	// modes
	'assemblies:decision:section:all' => 'All',
	'assemblies:decision:permanent' => 'Permanent',
	'assemblies:decision:conjunctural' => 'Conjunctural',
	// statuses
	'assemblies:decision:new' => 'New',
	'assemblies:decision:draft' => 'Draft',
	'assemblies:decision:accepted' => 'Accepted',
	'assemblies:decision:discarded' => 'Discarded',
	'assemblies:decision:delayed' => 'Delayed',
	'assemblies:decision:new' => 'New',
	'assemblies:decision:accepted' => 'Accepted',
	'assemblies:decision:discarded' => 'Discarded',
	'assemblies:decision:delayed' => 'Delayed',
	'assemblies:decision:section:new' => 'New',
	'assemblies:decision:section:draft' => 'Drafts',
	'assemblies:decision:section:accepted' => 'Accepted',
	'assemblies:decision:section:discarded' => 'Discarded',
	'assemblies:decision:section:delayed' => 'Delayed',


	// Group widget
	'assemblies:link:view' => 'View',
	'assemblies:link:edit' => 'Edit',
	'assemblies:info' => 'Info',
	'assemblies:info:when' => 'When',
	'assemblies:info:where' => 'Where',
	'assemblies:agenda' => 'Agenda',
	'assemblies:minutes' => 'Minutes',

	// Tooltips
	'assemblies:link:view:tooltip' => 'View the currently scheduled assembly',
	'assemblies:link:edit:tooltip' => 'Edit the currently scheduled assembly',
	'assemblies:link:view:all:tooltip' => 'View all assemblies',

	// Crud
	'crud:assembly:nochildren' => 'There are no points created for this assembly',
	'crud:assembly:addchild' => 'Add',
	

	// Editing
	'assembly:add' => 'Add assembly call',
	'assembly:edit' => 'Edit assembly call',

	// messages
	'assemblies:message:saved' => 'Assembly call saved.',
	'assemblies:error:cannot_save' => 'Cannot save assembly call.',
	'assemblies:error:cannot_write_to_container' => 'Insufficient access to save assembly to group.',
	'assemblies:message:deleted_assembly' => 'Assembly deleted.',
	'assemblies:error:cannot_delete_assembly' => 'Cannot delete assembly.',
	'assemblies:error:assembly_not_found' => 'Assembly not found.',
	'assemblies:message:deleted_decision' => 'Agenda point deleted.',
	'assemblies:error:cannot_delete_decision' => 'Cannot delete agenda point.',
	'assemblies:error:decision_not_found' => 'Agenda point not found.',
	'assemblies:error:missing:title' => 'Please enter a assembly title!',
	'assemblies:error:cannot_edit' => 'This assembly may not exist or you may not have permissions to edit it.',

	// river
	'river:create:object:assembly' => '%s published an assembly call %s',
	'river:create:object:decision' => '%s published an agenda point %s',
	'river:edited:object:assembly' => '%s edited an assembly call %s',
	'river:edited:object:decision' => '%s edited an agenda point %s',
	'river:comment:object:assembly' => '%s commented on the assembly %s',
	'river:comment:object:decision' => '%s commented on the agenda point %s',

	// notifications
	'assemblies:newcall' => 'A new assembly call',
	'assemblies:notification' =>
'
%s made a new assembly call.

%s
%s

View and suggest new proposals on the new assembly call:
%s
',

	// Other
	'assemblies:decision:link' => 'Link to next assembly',
	'assemblies:decision:linked' => 'Linked proposal to the next assembly',
	'assemblies:decision:cantlink' => 'Cant link the proposal',
	'assemblies:decision:nonext' => 'There are no pending assemblies',


	// group`widget
	'assemblies:widget:description' => 'Display latest assembly calls',
	'assemblies:moreassemblies' => 'More assembly calls',
	'assemblies:numbertodisplay' => 'Number of assembly calls to display',
	'assemblies:nocalls' => 'No assembly calls',

	// user`widget
	'assemblies:assembly:numbertodisplay' => 'Max number of assemblies to display'
);

add_translation('en', $english);
