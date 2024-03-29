<?php
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
/*
 * Created on Aug 6, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once('modules/ModuleBuilder/MB/AjaxCompose.php');
//require_once('modules/ModuleBuilder/views/view.modulefield.php');
 class ViewModulelabels extends SugarView{
 	function ViewModulelabels(){
 		parent::SugarView();
 	}

 	function display(){
 		global $mod_strings;
        $bak_mod_strings=$mod_strings;
 		$smarty = new Sugar_Smarty();
        $smarty->assign('mod_strings', $mod_strings);
 		$package_name = $_REQUEST['view_package'];
 		$module_name = $_REQUEST['view_module'];

		require_once('modules/ModuleBuilder/MB/ModuleBuilder.php');
		$mb = new ModuleBuilder();
		$mb->getPackage($_REQUEST['view_package']);
		$package = $mb->packages[$_REQUEST['view_package']];
		$package->getModule($module_name);
		$this->module = $package->modules[$module_name];
		$selected_lang = (!empty($_REQUEST['selected_lang'])?$_REQUEST['selected_lang']:$_SESSION['authenticated_user_language']);
		if(empty($selected_lang)){
	    	$selected_lang = $GLOBALS['sugar_config']['default_language'];
		}
	        //need to change the following to interface with MBlanguage.
        $smarty->assign('MOD', $this->module->getModStrings($selected_lang));
		$smarty->assign('APP', $GLOBALS['app_strings']);
		$smarty->assign('selected_lang', $selected_lang);
		$smarty->assign('view_package', $package_name);
		$smarty->assign('view_module', $module_name);
		$smarty->assign('mb','1');
		$smarty->assign('available_languages', unserialize($_SESSION['avail_languages']));
		///////////////////////////////////////////////////////////////////
 		////ASSISTANT
 		$smarty->assign('assistant',array('group'=>'module', 'key'=>'labels'));
		/////////////////////////////////////////////////////////////////
	 	////ASSISTANT

		$ajax = new AjaxCompose();
		$ajax->addCrumb($bak_mod_strings['LBL_MODULEBUILDER'], 'ModuleBuilder.main("mb")');
		$ajax->addCrumb($module_name, 'ModuleBuilder.getContent("module=ModuleBuilder&action=module&package='.$package->name.'&module='. $module_name . '")');
		$ajax->addCrumb($bak_mod_strings['LBL_FIELDS'], 'ModuleBuilder.getContent("module=ModuleBuilder&action=modulefields&view_package='.$package->name.'&view_module='. $module_name . '")');
		$ajax->addCrumb($bak_mod_strings['LBL_LABELS'], '');
		$ajax->addSection('center', 'no_change',$smarty->fetch('modules/ModuleBuilder/tpls/labels.tpl'));
		echo $ajax->getJavascript();
	}
}


?>

