<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
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
 */



global $app_list_strings, $app_strings, $mod_strings;
require_once('include/Sugar_Smarty.php');
require_once('modules/Studio/TabGroups/TabGroupHelper.php');
require_once('modules/Studio/parsers/StudioParser.php');

$tg = new TabGroupHelper();
$smarty = new Sugar_Smarty();
if(empty($GLOBALS['tabStructure'])){
	require_once('include/tabConfig.php');	
}
$title=get_module_title($mod_strings['LBL_MODULE_NAME'], $mod_strings['LBL_MODULE_NAME'].": ".$mod_strings['LBL_CONFIGURE_GROUP_TABS'], true);
$smarty->assign('tabs', $GLOBALS['tabStructure']);
$smarty->assign('MOD', $GLOBALS['mod_strings']);
$selected_lang = (!empty($_REQUEST['dropdown_lang'])?$_REQUEST['dropdown_lang']:$_SESSION['authenticated_user_language']);
if(empty($selected_lang)){
    $selected_lang = $GLOBALS['sugar_config']['default_language'];
}

$availableModules = $tg->getAvailableModules();
$smarty->assign('availableModuleList',$availableModules);

$smarty->assign('dropdown_languages', unserialize($_SESSION['avail_languages']));

 global $image_path;
$imageSave = get_image($image_path. 'studio_save', '');

$buttons = array();
$buttons[] = array('text'=>$GLOBALS['mod_strings']['LBL_BTN_SAVEPUBLISH'],'actionScript'=>"onclick='studiotabs.generateForm(\"edittabs\");document.edittabs.submit()'");
$buttonTxt = StudioParser::buildImageButtons($buttons);
$smarty->assign('buttons', $buttonTxt);
$smarty->assign('title', $title);
$smarty->assign('dropdown_lang', $selected_lang);
global $image_path;
$editImage = get_image($image_path . 'edit_inline', '');
$smarty->assign('editImage',$editImage);	
$deleteImage = get_image($image_path . 'delete_inline', '');
$smarty->assign('deleteImage',$deleteImage);	
$smarty->display("modules/Studio/TabGroups/EditViewTabs.tpl");
?>
