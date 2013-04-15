<?php
/**
 * Assemblies -- Info group module
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

$assembly = $vars['next_assembly'];
if (!empty($assembly)) {
	echo "<b>".elgg_echo("assemblies:info:when")."</b>";
	echo "<p>";
	echo date("d.m.y", $assembly->date);
	echo "</p>";
	echo "<b>".elgg_echo("assemblies:info:where")."</b>";
	echo "<p>";
	echo $assembly->location;
	echo "</p>";
} else {
	echo elgg_echo("assemblies:none");
}
