<?php

/**
 * Site navigation menu
 *
 * @uses $vars['menu']['default']
 * @uses $vars['menu']['more']
 */
$default_items = elgg_extract('default', $vars['menu'], array());
$more_items = elgg_extract('more', $vars['menu'], array());

echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-default clearfix">';

echo '<li class="elgg-more">';
$how_work = elgg_echo('menu:howwork');
echo "<a href=\"#\">$how_work</a>";

echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-more">';

$welcome = elgg_echo('menu:howwork:welcome');
echo '<li class="elgg-menu-item"><a href="'.elgg_get_site_url().'groups/profile/1117/bienvenida">'.$welcome.'</a></li>';

$guide = elgg_echo('menu:howwork:guide');
echo '<li class="elgg-menu-item"><a href="'.elgg_get_site_url().'dokuwiki/64/doku.php?id=guia_de_introduccion">'.$guide.'</a></li>';

$general = elgg_echo('menu:howwork:general');
echo '<li class="elgg-menu-item"><a href="'.elgg_get_site_url().'groups/profile/14318/som-energia-grupo-general">'.$general.'</a></li>';

$about = elgg_echo('menu:howwork:about');
echo '<li class="elgg-menu-item"><a href="'.elgg_get_site_url().'groups/profile/64/grupo-sobre-la-plataforma">'.$about.'</a></li>';

$local = elgg_echo('menu:howwork:local');
echo '<li class="elgg-menu-item"><a href="'.elgg_get_site_url().'groups/profile/7496/apoyo-grupos-locales">'.$local.'</a></li>';

echo '</ul>';
echo '</li>';





//tematicas

echo '<li class="elgg-more">';
$topics = elgg_echo('menu:topics');
echo "<a href=\"#\">$topics</a>";
echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-more">';



$link = elgg_echo('menu:topics:commercialization');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=comercializaci%C3%B3n&limit=40'>$link</a></li>";

$link = elgg_echo('menu:topics:projects');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=proyectos+de+producci%C3%B3n&limit=40'>$link</a></li>";

$link = elgg_echo('menu:topics:autoproduction');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=autoproducci%C3%B3n&limit=40'>$link</a></li>";


$link = elgg_echo('menu:topics:proposals');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=propuesta+de+servicios&limit=40'>$link</a></li>";


echo '</ul>';


echo '</li>';




//Difusión

echo '<li class="elgg-more">';
$more = elgg_echo('menu:diffusion');
echo "<a href=\"#\">$more</a>";
echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-more">';

$link = elgg_echo('menu:diffusion:school');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=escuela+de+septiembre&limit=40'>$link</a></li>";

$link = elgg_echo('menu:diffusion:training');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=formaci%C3%B3n&limit=40'>$link</a></li>";

$link = elgg_echo('menu:diffusion:communication');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=comunicaci%C3%B3n&limit=40'>$link</a></li>";

$link = elgg_echo('menu:diffusion:legal');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=grupo+jur%C3%ADdico&limit=40'>$link</a></li>";

$link = elgg_echo('menu:diffusion:compute');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=inform%C3%A1tica&limit=40'>$link</a></li>";

$link = elgg_echo('menu:diffusion:translate');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=traducci%C3%B3n&limit=40'>$link</a></li>";

$link = elgg_echo('menu:diffusion:various');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=otros&limit=40'>$link</a></li>";


echo '</ul>';


echo '</li>';


//cooperativa


echo '<li class="elgg-more">';
$more = elgg_echo('menu:cooperative');
echo "<a href=\"#\">$more</a>";
echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-more">';

$link = elgg_echo('menu:cooperative:council');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=consejo+rector&limit=40'>$link</a></li>";

$link = elgg_echo('menu:cooperative:organization');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=organizaci%C3%B3n&limit=40'>$link</a></li>";

$link = elgg_echo('menu:cooperative:commissions');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=comisiones&limit=40'>$link</a></li>";


echo '</ul>';


echo '</li>';



//Grupos locales


echo '<li class="elgg-more">';
$more = elgg_echo('menu:local');
echo "<a href=\"#\">$more</a>";
echo '<ul class="elgg-menu elgg-menu-site elgg-menu-site-more">';

$link = elgg_echo('menu:local:andalucia');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=andalucia&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:aragon');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=Arag%C3%B3n&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:asturias');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=asturias&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:cantabria');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=cantabria&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:mancha');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=castilla+la+mancha&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:leon');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=castilla+y+leon&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:catalunya');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=catalu%C3%B1a&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:euskadi');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=euskadi&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:extremadura');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=extremadura&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:galicia');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=galicia&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:balears');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=illes+balears&limit=40'>$link</a></li>";


$link = elgg_echo('menu:local:canarias');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=islas+canarias&limit=40'>$link</a></li>";

$link = elgg_echo('menu:local:rioja');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=la+rioja&limit=40'>$link</a></li>";


$link = elgg_echo('menu:local:madrid');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=madrid&limit=40'>$link</a></li>";


$link = elgg_echo('menu:local:murcia');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=murcia&limit=40'>$link</a></li>";


$link = elgg_echo('menu:local:navarra');
echo "<li class='elgg-menu-item'><a href='https://plataforma.somenergia.coop/groups/search?tag=navarra&limit=40'>$link</a></li>";


$valencia = elgg_echo('menu:local:valencia');
echo '<li class="elgg-menu-item"><a href="'.elgg_get_site_url().'groups/search?tag=valencia&limit=40">'.$valencia.'</a></li>';

echo '</li>';
echo '</ul>';


/**
 * Community Menu
 */
echo '<li class="elgg-more">';
$community = elgg_echo('menu:community');
echo '<a href="#">'.$community.'</a>';

/**
 * Merge elgg menu items to show in the community menu
 */
$all_items = array_merge($default_items, $more_items);
echo elgg_view('navigation/menu/elements/section', array(
    'class' => 'elgg-menu elgg-menu-site elgg-menu-site-more',
    'items' => $all_items,
));
echo '</li>';
echo '</ul>';




