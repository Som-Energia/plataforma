<?php
/**
 * List replies with optional add form
 *
 * @uses $vars['entity']        ElggEntity the group discission
 * @uses $vars['show_add_form'] Display add form or not
 */
$topic = elgg_extract('topic', $vars);
if (!elgg_instanceof($topic, 'object', 'discussion')) {
    elgg_log("discussion/replies view expects \$vars['topic'] to be a discussion object", 'ERROR');
    return;
}

$show_add_form = elgg_extract('show_add_form', $vars);
if (!isset($show_add_form)) {
    $show_add_form = $topic->canWriteToContainer(0, 'object', 'discussion_reply');
}

elgg_register_rss_link();


$offset_key = isset($options['offset_key']) ? $options['offset_key'] : 'offset';
$offset = (int) max(get_input($offset_key, 0), 0);

$limit_config = elgg_get_plugin_setting('somenergia_theme_replies_list_length', 'somenergia-theme', elgg_get_config('default_limit'));
$limit = (int) max(get_input('limit', $limit_config), 0);


$options = ['type' => 'object',
    'subtype' => 'discussion_reply',
    'container_guid' => $topic->guid,
    'reverse_order_by' => true,
    'distinct' => false,
    'url_fragment' => 'group-replies',
    'offset' => $offset,
    'limit' => $limit,
    'full_view' => false,
    'list_type_toggle' => false,
    'no_results' => ''];

$options['count'] = true;
$count = elgg_get_entities($options);

if ($count > 0) {
    $options['count'] = false;
    $entities = elgg_get_entities($options);
} else {
    $entities = [];
}

if ($count > $limit) {
    $options['pagination'] = TRUE;
} else {
    $options['pagination'] = FALSE;
}

$options['count'] = $count;
$replies = elgg_view_entity_list($entities, $options);

if ($show_add_form) {
    $form_vars = array('class' => 'mtm');
    $replies .= elgg_view_form('discussion/reply/save', $form_vars, $vars);
}
?>

<div id="group-replies" class="elgg-comments">
    <?= $replies ?>
</div>
