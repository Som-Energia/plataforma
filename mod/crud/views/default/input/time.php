<?php
/**
 * CRUD -- Time input for RESTful objects
 *
 * @package        Lorea
 * @subpackage     CRUD
 *
 * Copyright 2012-2013 Lorea Faeries <federation@lorea.org>
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

$value = $vars['value'];
if (is_numeric($value)) {
	$hour = floor($value/60);
	$minute = floor($value%60);
} else {
	$hour = 0;
	$minute = 0;
}

$hours = array();
$minutes = array();

for ($h=0; $h<=23; $h++) {
	$hours[$h] = $h;
}

for($m=0; $m<60; $m+=5) {
	$mt = sprintf("%02d",$m);
	$minutes[$m] = $mt;
}

echo elgg_view('input/dropdown', array(
	'name' => $vars['name'] . '_hour',
	'value' => $hour,
	'options_values' => $hours,
));
echo " <b>:</b> ";
echo elgg_view('input/dropdown', array(
	'name' => $vars['name'] . '_minute',
	'value' => $minute,
	'options_values' => $minutes,
));
