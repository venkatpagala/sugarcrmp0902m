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

require_once('XTemplate/xtpl.php');
require_once('include/Sugar_Smarty.php');
require_once('include/utils.php');


global $mod_strings;
global $app_list_strings;
global $app_strings;
global $current_language;
global $sugar_config;
global $sugar_flavor;
global $sugar_version;

$send_version = isset($sugar_version) ? $sugar_version : "";
$send_edition = isset($sugar_flavor) ? $sugar_flavor : "";
$send_lang = isset($current_language) ? $current_language : "";
$send_key = isset($sugar_config['unique_key']) ? $sugar_config['unique_key'] : "";


$sugar_smarty = new Sugar_Smarty();

$iframe_url = add_http("www.sugarcrm.com/network/redirect.php?to=training&tmpl=network&version={$send_version}&edition={$send_edition}&language={$send_lang}&key={$send_key}");
$sugar_smarty->assign('iframeURL', $iframe_url);

echo $sugar_smarty->fetch('modules/Home/TrainingPortal.tpl');

?>
