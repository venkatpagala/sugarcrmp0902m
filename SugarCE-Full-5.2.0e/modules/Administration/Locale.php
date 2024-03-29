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

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

require_once('modules/Configurator/Configurator.php');
require_once('include/Sugar_Smarty.php');

echo get_module_title($mod_strings['LBL_MODULE_NAME'], $mod_strings['LBL_LOCALE_TITLE'].": ", true);


$cfg			= new Configurator();
$sugar_smarty	= new Sugar_Smarty();
$errors			= '';

///////////////////////////////////////////////////////////////////////////////
////	HANDLE CHANGES
if(isset($_REQUEST['process']) && $_REQUEST['process'] == 'true') {
	if(isset($_REQUEST['collation']) && !empty($_REQUEST['collation'])) {
		//kbrill Bug #14922
		if(array_key_exists('collation', $sugar_config['dbconfigoption']) && $_REQUEST['collation'] != $sugar_config['dbconfigoption']['collation']) {
			$GLOBALS['db']->disconnect();
			$GLOBALS['db']->connect();
		}

		$cfg->config['dbconfigoption']['collation'] = $_REQUEST['collation'];
	}
	$cfg->populateFromPost();
	$cfg->handleOverride();
	header('Location: index.php?module=Administration&action=index');
}

///////////////////////////////////////////////////////////////////////////////
////	DB COLLATION
if($GLOBALS['db']->dbType == 'mysql') {
	// set sugar default if not set from before
	if(!isset($sugar_config['dbconfigoption']['collation'])) {
		$sugar_config['dbconfigoption']['collation'] = 'utf8_general_ci';
	}

	$sugar_smarty->assign('dbType', 'mysql');
	$q = "SHOW COLLATION LIKE 'utf8%'";
	$r = $GLOBALS['db']->query($q);
	$collationOptions = '';
	while($a = $GLOBALS['db']->fetchByAssoc($r)) {
		$selected = '';
		if($sugar_config['dbconfigoption']['collation'] == $a['Collation']) {
			$selected = " SELECTED";
		}
		$collationOptions .= "\n<option value='{$a['Collation']}'{$selected}>{$a['Collation']}</option>";
	}
	$sugar_smarty->assign('collationOptions', $collationOptions);
}
////	END DB COLLATION
///////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
////	PAGE OUTPUT
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign("JAVASCRIPT",get_set_focus_js());
$sugar_smarty->assign('config', $sugar_config);
$sugar_smarty->assign('error', $errors);
$sugar_smarty->assign("exportCharsets", get_select_options_with_id($locale->getCharsetSelect(), $sugar_config['default_export_charset']));
//$sugar_smarty->assign('salutation', 'Mr.');
//$sugar_smarty->assign('first_name', 'John');
//$sugar_smarty->assign('last_name', 'Doe');
$sugar_smarty->assign('getNameJs', $locale->getNameJs());

$sugar_smarty->display('modules/Administration/Locale.tpl');

?>
