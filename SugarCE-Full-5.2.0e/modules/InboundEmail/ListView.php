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
global $theme;
global $mod_strings;
global $app_list_strings;
global $current_user;

require_once('modules/InboundEmail/InboundEmail.php');
require_once('XTemplate/xtpl.php');


require_once('include/ListView/ListView.php');

$focus = new InboundEmail();
$focus->checkImap();

///////////////////////////////////////////////////////////////////////////////
////	I-E SYSTEM SETTINGS
////	handle saving settings
if(isset($_REQUEST['save']) && $_REQUEST['save'] == 'true') {
	$focus->saveInboundEmailSystemSettings('Case', $_REQUEST['inbound_email_case_macro']);
}
////	END I-E SYSTEM SETTINGS
///////////////////////////////////////////////////////////////////////////////



if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])){	
	$ListView->setHeaderText("<a href='index.php?action=index&module=DynamicLayout&from_action=ListView&from_module=".$_REQUEST['module'] ."'>".get_image($image_path."EditLayout","border='0' alt='Edit Layout' align='bottom'")."</a>" );
}

$where = '';
$limit = '0';
$orderBy = 'date_entered';
$varName = $focus->object_name;
$allowByOverride = true;

$listView = new ListView();
$listView->initNewXTemplate('modules/InboundEmail/ListView.html', $mod_strings);
$listView->setHeaderTitle($mod_strings['LBL_MODULE_TITLE']);

echo $focus->getSystemSettingsForm();

$listView->show_export_button = false;
$listView->setQuery($where, $limit, $orderBy, 'InboundEmail', $allowByOverride);
$listView->xTemplateAssign("EDIT_INLINE_IMG", get_image($image_path.'edit_inline','align="absmiddle" alt="'.$app_strings['LNK_EDIT'].'" border="0"')); 
$listView->processListView($focus, "main", "InboundEmail");

