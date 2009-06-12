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
 *********************************************************************************/
 

function additionalDetailsOpportunity($fields) {
	global $current_language;
	$mod_strings = return_module_language($current_language, 'Opportunities');
	$overlib_string = '';
	
	if(!empty($fields['LEAD_SOURCE'])) $overlib_string .= '<b>'. $mod_strings['LBL_LEAD_SOURCE'] . '</b> ' . $fields['LEAD_SOURCE'] . '<br>';
	if(!empty($fields['PROBABILITY'])) $overlib_string .= '<b>'. $mod_strings['LBL_PROBABILITY'] . '</b> ' . $fields['PROBABILITY'] . '<br>';
	if(!empty($fields['NEXT_STEP'])) $overlib_string .= '<b>'. $mod_strings['LBL_NEXT_STEP'] . '</b> ' . $fields['NEXT_STEP'] . '<br>';
	if(!empty($fields['OPPORTUNITY_TYPE'])) $overlib_string .= '<b>'. $mod_strings['LBL_TYPE'] . '</b> ' . $fields['OPPORTUNITY_TYPE'] . '<br>';

	if(!empty($fields['DESCRIPTION'])) {
		$overlib_string .= '<b>'. $mod_strings['LBL_DESCRIPTION'] . '</b> ';
		$overlib_string .= substr($fields['DESCRIPTION'], 0, 300);
		if(strlen($fields['DESCRIPTION']) > 300) $overlib_string .= '...';
	}	
	
	return array('fieldToAddTo' => 'NAME', 
				 'string' => $overlib_string, 
				 'editLink' => "index.php?action=EditView&module=Opportunities&return_module=Opportunities&record={$fields['ID']}", 
				 'viewLink' => "index.php?action=DetailView&module=Opportunities&return_module=Opportunities&record={$fields['ID']}");
}
 
 ?>
 
