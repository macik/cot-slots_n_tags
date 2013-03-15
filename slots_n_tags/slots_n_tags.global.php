<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */

/**
 * Slots and Tags extension for Cotonti CMF
 *
 * @package slots_n_tags
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 */

if (!defined('COT_CODE')) { die('Wrong URL ('.array_pop(explode("\\",__FILE__)).').'); }
$plug_name = 'slots_n_tags';
$pl_cfg = $cfg['plugin'][$plug_name];
list($maj,$min,$patch) = explode('.',$cfg['version'],3);
$subvers = $min.(str_pad($patch, 3, '0',STR_PAD_LEFT));
if (class_exists('XTemplate') && $cfg['plugin'][$plug_name]['enabled'] && ($maj > 0 || $subvers > 9010))
{
	function parse_tpl_tags($raw_tpl){
		$t = new XTemplate();
		$t->compile('<!-- BEGIN: MAIN-->'.$raw_tpl.'<!-- END: MAIN-->');
		$t->parse();
		return $t->text();
	}
	$menu_slots = array('topline','banner','bottomline',
					'menu1','menu2','menu3','menu4','menu5','menu6','menu7','menu8','menu9',
					'freetext1','freetext2','freetext3','freetext4','freetext5','freetext6',
					'freetext7','freetext8','freetext9');
	foreach ($menu_slots as $value) {
		$cfg[$value] = parse_tpl_tags($cfg[$value]);
	}
	unset($menu_slots);
}


