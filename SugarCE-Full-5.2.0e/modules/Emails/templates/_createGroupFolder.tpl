<!--
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
 * Created On: Oct 17, 2005
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Chris Nojima
 ********************************************************************************/
-->

<!-- BEGIN: main -->
<html>
<head>
<script type="text/javascript" language="Javascript" src="modules/InboundEmail/InboundEmail.js"></script>
<script type="text/javascript" language="Javascript">
currentFolders = {$group_folder_array};
{literal}
	function checkFolderName(newFolder) {
	    var duplicate = false;
        for (var i in currentFolders) {
           if (currentFolders[i] == newFolder) {
               duplicate = true;
           }
        }
        if(newFolder == "" || duplicate) {
            alert(document.getElementById('errorMessage').value);
            return false;
        }
        return true;
	}
	
	function addNewGroupFolder() {
	    var newFolder = document.getElementById('groupFolderAddName').value;
        if (checkFolderName(newFolder)) {
		  document.getElementById('EditView').submit();
		}		
	} 
	
	function editGroupFolder() {
        var newFolder = document.getElementById('groupFolderAddName').value;
        if (checkFolderName(newFolder)) {
          document.getElementById('EditView').submit();
        }	
	} // fn
	
	
{/literal}
</script>
<link rel="stylesheet" type="text/css" href="themes/{$theme}/navigation.css?s={$sugar_version}&c={$jsCustomVersion}" />
<link rel="stylesheet" type="text/css" href="themes/{$theme}/style.css?s={$sugar_version}&c={$jsCustomVersion}" />
<link rel="stylesheet" type="text/css" href="themes/{$theme}/colors.sugar.css?s={$sugar_version}&c={$jsCustomVersion}" id="current_color_style" />
<link rel="stylesheet" type="text/css" href="themes/{$theme}/fonts.normal.css?s={$sugar_version}&c=" id="current_font_style"/>
</head>
<body>
<form action="index.php" method="post" name="EditView" id="EditView">
	<input type="hidden" name="module" value="InboundEmail">
	<input type="hidden" name="action" value="SaveGroupFolder">
	<input type="hidden" id="errorMessage" name="errorMessage" value="{$app_strings.LBL_EMAIL_ERROR_ADD_GROUP_FOLDER}">
	<input type="hidden" name="record" value="{$ID}">
	<input type="hidden" name="to_pdf" value="1">
	<input type="hidden" name="isDuplicate" value=false>
	<input type="hidden" name="return_module">
	<input type="hidden" name="return_action">
	<input type="hidden" name="return_id">
	<input type="hidden" name="groupFoldersUser" value="">

	<table width="100%" border="0" align="center" cellspacing="{$GRIDLINE}" cellpadding="0">
		<tr>
		<td NOWRAP style="padding: 8px;" valign="top">
			<div style="{$createGroupFolderStyle}">
				<b>{$app_strings.LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE}:</b>
			</div>
			<div style="{$editGroupFolderStyle}">
				<b>{$app_strings.LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT}:</b>
			</div>
			<br />

			<div>
				{$app_strings.LBL_EMAIL_FOLDERS_NEW_FOLDER}:
			</div>
			<div>
				<input type="text" value="{$groupFolderName}" name="groupFolderAddName" id="groupFolderAddName">
			</div>
			<br />

			<div>
				{$app_strings.LBL_EMAIL_FOLDERS_ADD_THIS_TO}:
			</div>
			<div>
				<select name="groupFoldersAdd" id="groupFoldersAdd">{$group_folder_options}</select>
			</div>
			<br />









			<input type="button" style="{$createGroupFolderStyle}" class="button" value="   {$app_strings.LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER}   " onclick="addNewGroupFolder();">
			<input type="button" style="{$editGroupFolderStyle}" class="button" value="   {$app_strings.LBL_EMAIL_SAVE}   " onclick="editGroupFolder();">
			<input type="button" class="button" value="   {$app_strings.LBL_EMAIL_CLOSE}   " onclick="window.close();">
		</td>
		</tr>
	</table>
	<br />

</form>
</body>
</html>


<!-- END: main -->
