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



global $app_strings;
global $app_list_strings;
global $mod_strings;
global $theme;
global $currentModule;
global $gridline;

$theme_path="themes/".$theme."/";
$image_path=$theme_path."images/";



echo "\n<p>\n";
echo get_module_title('MigrateFields', $mod_strings['LBL_EXTERNAL_DEV_TITLE'], true);
echo "\n</p>\n";

?>
<p>
<table width="100%" cellpadding="0" cellspacing="<?php echo $gridline;?>" border="0" class="tabDetailView2">
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'ImportCustomFields','alt="'. $mod_strings['LBL_IMPORT_CUSTOM_FIELDS_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=ImportCustomFieldStructure" class="tabDetailViewDL2Link"><?php echo $mod_strings['LBL_IMPORT_CUSTOM_FIELDS_TITLE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_IMPORT_CUSTOM_FIELDS'] ; ?> </td>
</tr>
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'ExportCustomFields','alt="'. $mod_strings['LBL_EXPORT_CUSTOM_FIELDS_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=ExportCustomFieldStructure" class="tabDetailViewDL2Link"><?php echo $mod_strings['LBL_EXPORT_CUSTOM_FIELDS_TITLE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_EXPORT_CUSTOM_FIELDS'] ; ?> </td>
</tr>

</table></p>


