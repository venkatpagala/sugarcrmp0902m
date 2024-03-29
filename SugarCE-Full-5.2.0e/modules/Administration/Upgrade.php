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
echo get_module_title($mod_strings['LBL_MODULE_NAME'], $mod_strings['LBL_UPGRADE_TITLE'], true);
echo "\n</p>\n";
$str1="";
if ($GLOBALS['db']->dbType=='oci8') {
	
	$str1='<tr><td class="tabDetailViewDL2" nowrap>';
	$str1.=get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_ORACLE_FULLTEXT'].'" align="absmiddle" border="0"'); 
	$str1.='&nbsp;<a href="./index.php?module=Administration&action=RebuildFulltextIndices">' . $mod_strings['LBL_REPAIR_ORACLE_FULLTEXT'] .'</a></td>';
	$str1.='<td class="tabDetailViewDF2">' .$mod_strings['LBL_REPAIR_ORACLE_FULLTEXT_DESC'] . '</td></tr>';
}
?>
<p>
<table width="100%" cellpadding="0" cellspacing="<?php echo $gridline;?>" border="0" class="tabDetailView2">






<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_QUICK_REPAIR_AND_REBUILD'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=repairSelectModule"><?php echo $mod_strings['LBL_QUICK_REPAIR_AND_REBUILD']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_QUICK_REPAIR_AND_REBUILD_DESC'] ; ?> </td>
</tr>


<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_DATABASE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=repairDatabase"><?php echo $mod_strings['LBL_REPAIR_DATABASE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIR_DATABASE_DESC'] ; ?> </td>
</tr>
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_EXPAND_DATABASE_COLUMNS'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=expandDatabase"><?php echo $mod_strings['LBL_EXPAND_DATABASE_COLUMNS']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_EXPAND_DATABASE_COLUMNS_DESC'] ; ?> </td>
</tr>
<!--
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_ENTRY_POINTS'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=UpdateSugarEntry"><?php echo $mod_strings['LBL_REPAIR_ENTRY_POINTS']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIR_ENTRY_POINTS_DESC'] ; ?> </td>
</tr>
-->

<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_CLEAR_CHART_DATA_CACHE_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=clear_chart_cache"><?php echo $mod_strings['LBL_CLEAR_CHART_DATA_CACHE_TITLE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_CLEAR_CHART_DATA_CACHE_DESC'] ; ?> </td>
</tr>

<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_CLEAR_TEMPLATE_DATA_CACHE_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=repairSelectModule&subaction=clearTpls"><?php echo $mod_strings['LBL_CLEAR_TEMPLATE_DATA_CACHE_TITLE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_CLEAR_TEMPLATE_DATA_CACHE_DESC'] ; ?> </td>
</tr>

<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_CLEAR_VARDEFS_DATA_CACHE_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=repairSelectModule&subaction=clearVardefs"><?php echo $mod_strings['LBL_CLEAR_VARDEFS_DATA_CACHE_TITLE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_CLEAR_VARDEFS_DATA_CACHE_DESC'] ; ?> </td>
</tr>

<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_CLEAR_UNIFIED_SEARCH_CACHE_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=repairUniSearch"><?php echo $mod_strings['LBL_CLEAR_UNIFIED_SEARCH_CACHE_TITLE']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_CLEAR_UNIFIED_SEARCH_CACHE_DESC'] ; ?> </td>
</tr>

<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_HTACCESS'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=UpgradeAccess"><?php echo $mod_strings['LBL_REBUILD_HTACCESS']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_HTACCESS_DESC'] ; ?> </td>
</tr>
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_AUDIT_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildAudit"><?php echo $mod_strings['LBL_REBUILD_AUDIT_TITLE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_AUDIT_DESC'] ; ?> </td>
</tr>
<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_CONFIG'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildConfig"><?php echo $mod_strings['LBL_REBUILD_CONFIG']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_CONFIG_DESC'] ; ?> </td>
</tr>
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_EXTENSIONS_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildExtensions"><?php echo $mod_strings['LBL_REBUILD_EXTENSIONS_TITLE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_EXTENSIONS_DESC'] ; ?> </td>
</tr>
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_REL_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildRelationship"><?php echo $mod_strings['LBL_REBUILD_REL_TITLE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_REL_DESC'] ; ?> </td>
</tr>
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_SCHEDULERS_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildSchedulers"><?php echo $mod_strings['LBL_REBUILD_SCHEDULERS_TITLE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_SCHEDULERS_DESC_SHORT'] ; ?> </td>
</tr>
<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_DASHLETS_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildDashlets"><?php echo $mod_strings['LBL_REBUILD_DASHLETS_TITLE']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_DASHLETS_DESC_SHORT'] ; ?> </td>
</tr>








<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_JAVASCRIPT_LANG_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildJSLang"><?php echo $mod_strings['LBL_REBUILD_JAVASCRIPT_LANG_TITLE']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT'] ; ?> </td>
</tr>
<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_JS_FILES_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairJSFile&type=replace"  onclick="return confirm('<?php echo $mod_strings['WARN_POSSIBLE_JS_OVERWRITE']; ?>');"><?php echo $mod_strings['LBL_REBUILD_JS_FILES_TITLE']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_JS_FILES_DESC_SHORT'] ; ?> </td>
</tr>
<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_CONCAT_JS_FILES_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairJSFile&type=concat" ><?php echo $mod_strings['LBL_REBUILD_CONCAT_JS_FILES_TITLE']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_CONCAT_JS_FILES_DESC_SHORT'] ; ?> </td>
</tr>
<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Rebuild','alt="'. $mod_strings['LBL_REBUILD_JS_MINI_FILES_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairJSFile&type=mini"   onclick="return confirm('<?php echo $mod_strings['WARN_POSSIBLE_JS_OVERWRITE']; ?>');"><?php echo $mod_strings['LBL_REBUILD_JS_MINI_FILES_TITLE']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REBUILD_JS_MINI_FILES_DESC_SHORT'] ; ?> </td>
</tr>
<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_JS_FILES_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairJSFile&type=repair"><?php echo $mod_strings['LBL_REPAIR_JS_FILES_TITLE']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIR_JS_FILES_DESC_SHORT'] ; ?> </td>
</tr>
<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_FIELD_CASING_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairFieldCasing&type=repair"><?php echo $mod_strings['LBL_REPAIR_FIELD_CASING_TITLE']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIR_FIELD_CASING_DESC_SHORT'] ; ?> </td>
</tr>






<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_ROLES'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=ACL&action=install_actions"><?php echo $mod_strings['LBL_REPAIR_ROLES']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIR_ROLES_DESC'] ; ?> </td>
</tr>
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_INDEX'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairIndex"><?php echo $mod_strings['LBL_REPAIR_INDEX']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIR_INDEX_DESC'] ; ?> </td>
</tr>







<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_IE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairIE"><?php echo $mod_strings['LBL_REPAIR_IE']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIR_IE_DESC'] ; ?> </td>
</tr>
<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_XSS'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairXSS"><?php echo $mod_strings['LBL_REPAIR_XSS']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIRXSS_TITLE'] ; ?> </td>
</tr>

<tr>
	<td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_ACTIVITIES'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairActivities"><?php echo $mod_strings['LBL_REPAIR_ACTIVITIES']; ?></a></td>
	<td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIR_ACTIVITIES_DESC'] ; ?> </td>
</tr>













<tr>
    <td class="tabDetailViewDL2" nowrap><?php echo get_image($image_path.'Repair','alt="'. $mod_strings['LBL_REPAIR_SEED_USERS_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairSeedUsers"><?php echo $mod_strings['LBL_REPAIR_SEED_USERS_TITLE']; ?></a></td>
    <td class="tabDetailViewDF2"> <?php echo $mod_strings['LBL_REPAIR_SEED_USERS_DESC'] ; ?> </td>
</tr>
</table></p>
