<?php
/**
 * Assembly English language file.
 *
 */

$english = array(
	'proposals' => 'Proposals',
	'proposals:enableproposals' => 'Enable group proposals',
	'decision:group' => 'Group decisions',

	// Proposals
	'proposals:proposal:none' => 'No proposals created yet',
	'item:object:proposal' => 'Proposals',
	'proposal:add' => 'Create proposal',
	'proposal:edit' => 'Edit proposal',

	// Proposal attributes
	'proposals:proposal:title' => 'Title',
	'proposals:proposal:description' => 'Description',
	'proposals:proposal:tags' => 'Tags',
	'proposals:proposal:access_id' => 'Access',
	'proposals:proposal:owner' => 'Created by %s',

	// Decisions
	'proposals:decision:none' => 'No decisions created yet',
	'item:object:decision' => 'Decisions',
	'proposals:decision' => 'Decision',
	'decision:add' => 'Create new decision',
	'proposals:decision:children' => 'Proposals',
	'crud:decision:nochildren' => 'No proposals created yet',

	// Decision attributes
	'proposals:decision:title' => 'Title',
	'proposals:decision:description' => 'Description',
	'proposals:decision:tags' => 'Tags',
	'proposals:decision:access_id' => 'Access',
	'proposals:decision:owner' => 'Created by %s',

	// Group module
	'proposals:decision:write' => 'Start a new decision',
	'proposals:decision:group' => 'Group decisions',

	// Votes
	'proposals:vote:create' => 'You set your vote to %s',
	'proposals:vote:update' => 'You updated your vote to %s',
	'proposals:votes:consensus' => 'Consensus',
	'proposals:votes:no_consensus' => 'No consensus',
	'proposals:votes:blocked' => 'Blocked',
	'proposals:votes:new' => 'New',
	'proposals:votes:status' => 'Status',
	'proposals:votes:total' => 'Participation',
	'proposals:votes:total:value' => '%s (%s of %s)',
	'proposals:votes:yes' => 'yes',
	'proposals:votes:no' => 'no',
	'proposals:votes:block' => 'block',
	'proposals:votes:abstain' => 'abstain',
	'proposals:votes:comment' => 'Add a comment to your vote',
	'proposals:votes:comment:block' => '<b>Block</ b> means paralyze the proposal, and should only be done if it goes against the principles or the safety of the group, otherwise simply vote "no". If you want to continue, put reason below.',
	'proposals:votes:cannot' => 'You cannot vote in this decision',
	'proposals:votes:mandatoryfield' => 'A comment is mandatory to block a proposal',

	// Vote popup
	'proposals:votes:uservoteedthis' => '%s vote',
	'proposals:votes:usersvotedthis' => '%s votes',
	'proposals:votes:see' => 'See votes',

	// Other
	'decision:childof' => 'From assembly on %s',
	'proposal:childof' => 'Proposal for %s',
	'proposals:proposal:improves_guid' => 'Improves',

	// river
	'river:create:object:decision' => '%s submitted a decision %s',
	'river:create:object:proposal' => '%s submitted a proposal %s',
	'river:edited:object:decision' => '%s edited a decision %s',
	'river:edited:object:proposal' => '%s edited a proposal %s',
	'river:comment:object:decision' => '%s commented on the decision %s',
	'river:comment:object:proposal' => '%s commented on the proposal %s',


);

add_translation('en', $english);
