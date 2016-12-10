<?php
/**
 * Repair an Elgg database
 *
 * @license MIT license http://opensource.org/licenses/MIT
 * @author Cash Costello
 * @copyright Cash Costello 2010-2014
 */

set_time_limit(0);


$db_prefix = elgg_get_config('dbprefix');

dbvalidate_fix_bad_users();
dbvalidate_fix_incomplete_entities();
dbvalidate_fix_bad_entities();
echo 'done';
exit;