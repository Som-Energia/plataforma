<?php
/**
 * Elgg Metatags generator plugin
 * This plugin make the metatags for content.
 *
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Gerard Kanters
 * Website: https://www.centillien.com
 */
$page      = get_entity(get_input('guid'));
$site_name = elgg_get_site_entity()->name;
$context   = elgg_get_context();
$title     = urldecode(html_entity_decode(strip_tags($title)));
$title     = str_replace('"',"'",$title);
$user      = elgg_get_page_owner_entity();
global $my_page_entity;
$offset = sanitise_int(get_input("offset", 0), false);
if(isset($my_page_entity->tags)){
        $tags_array=(array)$my_page_entity->tags;
        if(!empty($tags_array)) {
                $tags = implode(",", $my_page_entity->tags);
        }
}else{
        if(($page->tags) && ($context != 'profile')){
        $tags_array=(array)$my_page_entity->tags;
                if(!empty($tags_array)) {
                        $tags = implode(",", $page->tags);
                }
        }
}


switch ($context) {
    case (empty($vars['title'])):
        $title            = elgg_get_plugin_setting("mainpage_title", "metatags");
        $meta_description = elgg_get_plugin_setting("mainpage_description", "metatags");
        $meta_description = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9\_|+.-]/', ' ', urldecode(html_entity_decode(strip_tags($meta_description))))));
        break;
    case 'groups':
        $title = $title . " - " . $site_name . " - Networking Groups";
        break;
    case 'bookmarks':
        if (!empty($user->name)) {
            $clear            = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9\_|+.-]/', ' ', urldecode(html_entity_decode(strip_tags($page->description))))));
            $meta_description = substr($clear, 0, 200);
            $meta_description = str_replace(array(
                "\r",
                "\n"
            ), '', $meta_description);
            $title            = $title . " from " . $user->name . " - " . $user->location;
        } else {
            $meta_description = "Bookmarks on " . $site_name . " You can use this to share interesting links with other people or friends or just for yourself";
            $title            = $title . " - " . $site_name . " - Bookmarks";
        }
        break;
    case 'members':
        switch ($title) {
            case 'Popular Members':
                $options['relationship']         = 'friend';
                $options['inverse_relationship'] = false;
                $options['offset']               = $offset;
                $options['limit']                = 10;
                $users                           = elgg_get_entities_from_relationship_count($options);
                $meta_description                = "Positions " . $offset . " - " . (10 + $offset) . ": ";
                foreach ($users as $u) {
                    $u->name          = str_replace(',', "", $u->name);
                    $meta_description = $meta_description . "" . $u->name . ", ";
                }
                $title = $title . " - " . $site_name . " - Social Network";
                break;
        }
        break;
    case 'profile':
        switch ($user) {
            case (empty($user->name)):
                $meta_description = $title . " - " . elgg_get_plugin_setting("mainpage_description", "metatags");
                $title            = $title . " - " . elgg_get_plugin_setting("mainpage_title", "metatags");
                break;
            case (empty($user->description)):
                $briefdescription = urldecode(html_entity_decode(strip_tags($user->briefdescription)));
                $briefdescription = str_replace(array(
                    "\r",
                    "\n"
                ), '', $briefdescription);
                $meta_description = substr($briefdescription, 0, 150) . " - " . $user->name . " is a registered member on $site_name";
                $title            = $user->name . " - " . $user->location;
                break;
                $description      = urldecode(html_entity_decode(strip_tags($user->description)));
                $description      = str_replace(array(
                    "\r",
                    "\n"
                ), '', $description);
                $meta_description = substr($description, 0, 133) . " - " . $user->name . " is a registered member on $site_name";
                $title            = $user->name . " - " . $user->location;
                break;
            case (!empty($user->description)):
                $description      = urldecode(html_entity_decode(strip_tags($user->description)));
                $description      = str_replace(array(
                    "\r",
                    "\n"
                ), '', $description);
                $meta_description = substr($description, 0, 133) . " - " . $user->name . " is a registered member on $site_name";
                $title            = $user->name . " - " . $user->location;
                break;
            case (!empty($user->briefdescription)):
                $briefdescription = urldecode(html_entity_decode(strip_tags($user->briefdescription)));
                $briefdescription = str_replace(array(
                    "\r",
                    "\n"
                ), '', $briefdescription);
                $meta_description = substr($briefdescription, 0, 133) . " - " . $user->name . " is a registered member on $site_name";
                break;
        }
        break;
    case 'blog':
        if (!empty($user->name)) {
            $meta_description = urldecode(html_entity_decode(strip_tags($my_page_entity->excerpt)));
            $meta_description = str_replace(array(
                "\r",
                "\n"
            ), '', $meta_description);
            $title            = $title . " from " . $user->name . " - " . $user->location;
        } else {
            $meta_description = $site_name . " Blogs. This page provides a partial list of all blogs";
            $title            = $title . " - " . $site_name;
        }
        break;
    case 'market':
        if (!empty($user->name)) {
            $meta_description = elgg_get_excerpt($my_page_entity->description);
            $meta_description = urldecode(html_entity_decode(strip_tags($meta_description)));
            $meta_description = str_replace(array(
                "\r",
                "\n"
            ), '', $meta_description);
            $meta_description = substr($meta_description, 0, 200);
            $title            = $title . " - " . $user->name . " - " . $user->location;
        } else {
            $meta_description = "$site_name advertising. Select the right category";
            $title            = $title . " - " . $site_name . " Social Network";
        }
        break;
    case 'thewire':
        if (!empty($user->name)) {
            $title            = $title . " - " . $user->location;
            $message          = "these short messages";
            $meta_description = $user->name . " wants to share " . $message . " with you on $site_name";
        } else {
            $meta_description = "$site_name microblogs. This page provides a small list of all short messages of max 140 characters that members published";
            $title            = $title . " - $site_name - Business Social Network";
        }
        break;
    case 'group_profile':
        $meta_description = $user->name . " is a group on $site_name. If you want to join this group, you need to register on $site_name";
        break;
    case 'friends':
       if (!empty($user->name)) {
                $options           = array(
                    'relationship' => 'friend',
                    'relationship_guid' => $user->getGUID(),
                    'inverse_relationship' => FALSE,
                    'limit' => false,
                    'type' => 'user',
                    'full_view' => FALSE
                );
                $num_friends       = count(elgg_get_entities_from_relationship($options));
                $options['offset'] = $offset;
                $options['limit']  = 7;
                $friends           = elgg_get_entities_from_relationship($options);
                if ($friends) {
                    $meta_description = $user->name . " has " . $num_friends . "  friends on $site_name. Maybe you also know " . $user->name . " or ";
                    foreach ($friends as $u) {
                        $u->name          = str_replace(',', "", $u->name);
                        $meta_description = $meta_description . "" . $u->name . ", ";
                    }
                } else {
                    $meta_description = $user->name . " has no friends yet on $site_name. Maybe you are a friend of " . $user->name . ". Join $site_name and get connected";
                }
                $title = $title . " - $site_name - Social Network";
        }
        break;
    case (empty($user->name)):
        $meta_description = $site_name . " - " . elgg_get_plugin_setting("mainpage_description", "metatags");
        $title            = $site_name . " - " . elgg_get_plugin_setting("mainpage_title", "metatags");;
        break;
    default:
        $clear            = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9\_|+.-]/', ' ', urldecode(html_entity_decode(strip_tags($page->description))))));
        $meta_description = substr($clear, 0, 200);
        $meta_description = str_replace(array(
            "\r",
            "\n"
        ), '', $meta_description);
        if ($user->location) {
            $title = $title . " - " . $user->name . " - " . $user->location;
        } else {
            $title = $title . " - " . $user->name;
        }
        break;
}
$contexts = array(
    'front',
    'index',
    'main',
    'null',
    ''
);
if ($meta_description) {
?>  
<meta name="description" property="og:description" content="<?php
if (strpos($title,' - ') == 0) {
    $meta_description = str_replace(' - ', '', $meta_description);
}
echo $meta_description;
?>" />
<?php
}
?>
<title><?php
echo $title;
?></title>
<meta name="author" content="<?php
if (empty($user->name)) {
    echo $site_name;
} else {
    echo $user->name;
}
?>" />
<html prefix="og: http://ogp.me/ns#">
<meta property="og:type" content="article" />
<meta property="og:site_name" content="<?php
echo $site_name;
?>" />
<meta property="og:title" content="<?php
$title = trim($title);
if (strpos($title,'- ') == 0) {
    $title = str_replace('- ', '', $title);
}
echo $title;
?>" />
<meta property="og:url" content="<?php
echo current_page_url();
?>" />
<meta property="og:image" content="<?php
$mainpage_image = elgg_get_plugin_setting("mainpage_image", "metatags");
if (!empty($user->name) && !in_array($context, $contexts)) {
    echo $user->getIconURL('large');
} else if (strpos($mainpage_image,'://') !== false) {
    echo $mainpage_image;
} else {
    echo elgg_get_site_url() . "_graphics/" . $mainpage_image;
}
?>" />
<link rel="author" href="<?php
echo $user->website;
?>"/>
<meta name="robots" content="index,follow" />
<meta name="keywords" content="<?php
if ($tags && !in_array($context, $contexts)) {
    echo $context, ",", $tags, ",", $user->name, ",", $user->location;
} else {
    echo elgg_get_plugin_setting("mainpage_keywords", "metatags");
}
?>" />
