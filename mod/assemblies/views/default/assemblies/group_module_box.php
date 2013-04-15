<?php
/**
 * Assemblies -- Group module box
 *
 * @package        Lorea
 * @subpackage     Assemblies
 *
 * Copyright 2012-2013 Lorea Faeries <federation@lorea.org>
 *
 * This file is part of the Assemblies plugin for Elgg.
 *
 * Assemblies is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Assemblies is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this program. If not, see
 * <http://www.gnu.org/licenses/>.
 */

$class = elgg_extract('class', $vars);
$box = elgg_extract('box', $vars);

if ($class) {
	$class = "group-submodule-box $class";
} else {
	$class = "group-submodule-box";
}

if (elgg_view_exists("assemblies/group_module_boxes/$box")) {
	$box = elgg_view("assemblies/group_module_boxes/$box", $vars);
}

echo <<<HTML
<div class="$class">
	<div class="group-submodule-box-inner">
	$box
	</div>
</div>
HTML;
