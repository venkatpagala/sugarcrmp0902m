<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
 /*********************************************************************************

 ********************************************************************************/

require_once('include/ListView/ListView.php');
require_once('XTemplate/xtpl.php');

require_once('include/ListView/ListView.php');

global $theme;
$theme_path="themes/".$theme."/";
$image_path=$theme_path."images/";



global $mod_strings;
global $app_list_strings;
global $app_strings;
global $current_user, $focus;

echo "\n<p>\n";
echo get_module_title($mod_strings['LBL_MODULE_NAME'], $mod_strings['LBL_MODULE_NAME'], true); 
echo "\n</p>\n";

if($current_user->is_admin){
require_once('modules/Currencies/ListCurrency.php');
require_once('modules/Currencies/Currency.php');
$focus = new Currency();
$lc = new ListCurrency();
$lc->handleAdd();

if(isset($_REQUEST['merge']) && $_REQUEST['merge'] == 'true'){
	$isMerge = true;
	
}
if(isset($_REQUEST['domerge'])){
	$currencies = $_REQUEST['mergecur'];
	
	require_once('modules/Opportunities/Opportunity.php');
	$opp = new Opportunity();
	$opp->update_currency_id($currencies, $_REQUEST['mergeTo'] );








	foreach($currencies as $cur){
		if($cur != $_REQUEST['mergeTo'])
		$focus->mark_deleted($cur);
	}
}
$lc->lookupCurrencies();
if (isset($focus->id)) $focus_id = $focus->id;
else $focus_id='';
$merge_button = '';
$pretable = '';
if((isset($_REQUEST['doAction']) && $_REQUEST['doAction'] == 'merge') || (isset($isMerge) && !$isMerge)){
$merge_button = '<form name= "MERGE" method="POST" action="index.php"><input type="hidden" name="module" value="Currencies"><input type="hidden" name="record" value="'.$focus_id.'"><input type="hidden" name="action" value="index"><input type="hidden" name="merge" value="true"><input title="'.$mod_strings['LBL_MERGE'].'" accessKey="'.$mod_strings['LBL_MERGE'].'" class="button"  type="submit" name="button" value="'.$mod_strings['LBL_MERGE'].'" ></form>';
}
if(isset($isMerge) && $isMerge){
	$currencyList = new ListCurrency();
	$listoptions = $currencyList->getSelectOptions();
	$pretable =  <<<EOQ
		<form name= "MERGE" method="POST" action="index.php">
			<input type="hidden" name="module" value="Currencies">
			
			<input type="hidden" name="action" value="index">
		<table width="100%" cellspacing="0" cellpadding="0" border="0" class="tabForm">
			<tr><td><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>
			<td>{$mod_strings['LBL_MERGE_TXT']}</td><td width='20%'><select name='mergeTo'>{$listoptions}</select></td>
			</tr>
			<tr><td></td><td><input title="{$mod_strings['LBL_MERGE']}" accessKey="{$mod_strings['LBL_MERGE']}" class="button" type="submit" name="domerge" value="{$mod_strings['LBL_MERGE']}" > 
		<input title="{$app_strings['LBL_CANCEL_BUTTON_TITLE']}" accessKey="{$app_strings['LBL_CANCEL_BUTTON_KEY']}" class="button"  type="submit" name="button" value="{$app_strings['LBL_CANCEL_BUTTON_LABEL']}" > </td></tr>
			</table></td></tr></table><br>
EOQ;
	

}
$edit_botton = '<form name="EditView" method="POST" action="index.php" >';
			$edit_botton .= '<input type="hidden" name="module" value="Currencies">';
			$edit_botton .= '<input type="hidden" name="record" value="'.$focus_id.'">';
			$edit_botton .= '<input type="hidden" name="action">';
			$edit_botton .= '<input type="hidden" name="edit">';
			$edit_botton .= '<input type="hidden" name="return_module" value="Currencies">';
			$edit_botton .= '<input type="hidden" name="return_action" value="index">';
			$edit_botton .= '<input type="hidden" name="return_id" value="">';
		$edit_botton .= '<input title="'.$app_strings['LBL_SAVE_BUTTON_TITLE'].'" accessKey="'.$app_strings['LBL_SAVE_BUTTON_KEY'].'" class="button" onclick="this.form.edit.value=\'true\';this.form.action.value=\'index\';return check_form(\'EditView\');" type="submit" name="button" value="'.$app_strings['LBL_SAVE_BUTTON_LABEL'].'" > ';
		$edit_botton .= '<input title="'.$app_strings['LBL_CLEAR_BUTTON_TITLE'].'" accessKey="'.$app_strings['LBL_CLEAR_BUTTON_KEY'].'" class="button" onclick="this.form.edit.value=\'false\';this.form.action.value=\'index\';" type="submit" name="button" value="'.$app_strings['LBL_CLEAR_BUTTON_LABEL'].'" > ';
$header_text = '';
if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])){	
		$header_text = "&nbsp;<a href='index.php?action=index&module=DynamicLayout&from_action=ListView&from_module=".$_REQUEST['module'] ."'>".get_image($image_path."EditLayout","border='0' alt='Edit Layout' align='bottom'")."</a>";
	}
$ListView = new ListView();
$ListView->initNewXTemplate( 'modules/Currencies/ListView.html',$mod_strings);
$ListView->xTemplateAssign('PRETABLE', $pretable);
$ListView->xTemplateAssign('POSTTABLE', '</form>');
$ListView->xTemplateAssign("DELETE_INLINE_PNG",  get_image($image_path.'delete_inline','align="absmiddle" alt="'.$app_strings['LNK_DELETE'].'" border="0"'));
$ListView->setHeaderTitle($mod_strings['LBL_LIST_FORM_TITLE']. $header_text );
$ListView->setHeaderText($merge_button);

$ListView->processListView($lc->list, "main", "CURRENCY");

if(isset($_GET['record']) && !empty($_GET['record']) && !isset($_POST['edit'])) { 
	$focus->retrieve($_GET['record']);
	$focus->conversion_rate = format_number($focus->conversion_rate, 10, 10);
}
if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])){	
		$header_text = "&nbsp;<a href='index.php?action=index&module=DynamicLayout&from_action=EditView&from_module=".$_REQUEST['module'] ."'>".get_image($image_path."EditLayout","border='0' alt='Edit Layout' align='bottom'")."</a>";
}
echo get_form_header($mod_strings['LBL_CURRENCY']." ".$focus->name . $header_text,$edit_botton , false); 
$xtpl=new XTemplate ('modules/Currencies/EditView.html');

	$xtpl->assign("MOD", $mod_strings);
	$xtpl->assign("APP", $app_strings);
	
	if (isset($_REQUEST['return_module'])) $xtpl->assign("RETURN_MODULE", $_REQUEST['return_module']);
	if (isset($_REQUEST['return_action'])) $xtpl->assign("RETURN_ACTION", $_REQUEST['return_action']);
	if (isset($_REQUEST['return_id'])) $xtpl->assign("RETURN_ID", $_REQUEST['return_id']);
	
	$xtpl->assign("THEME", $theme);
	$xtpl->assign("IMAGE_PATH", $image_path);
	$xtpl->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);
	$xtpl->assign("JAVASCRIPT", get_set_focus_js());
	$xtpl->assign("ID", $focus->id);
	$xtpl->assign('NAME', $focus->name);
	$xtpl->assign('STATUS', $focus->status);
	$xtpl->assign('ISO4217', $focus->iso4217);
	$xtpl->assign('CONVERSION_RATE', $focus->conversion_rate);
	$xtpl->assign('SYMBOL', $focus->symbol);
	$xtpl->assign('STATUS_OPTIONS', get_select_options_with_id($mod_strings['currency_status_dom'], $focus->status));
	
	//if (empty($focus->list_order)) $xtpl->assign('LIST_ORDER', count($focus->get_manufacturers(false,'All'))+1); 
	//else $xtpl->assign('LIST_ORDER', $focus->list_order);
	
	$xtpl->parse("main");
	$xtpl->out("main");
	require_once('include/javascript/javascript.php');
	$javascript = new javascript();
	$javascript->setFormName('EditView');
	$javascript->setSugarBean($focus);
	$javascript->addAllFields('');
	echo $javascript->getScript();
			}else{
				echo 'Admin\'s Only';	
			}

?>
