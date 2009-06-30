<?php /* Smarty version 2.6.11, created on 2009-06-30 15:59:33
         compiled from modules/Emails/templates/emailSettingsFolders.tpl */ ?>
<table cellpadding="4" cellspacing="0" border="0" width="100%">
	<tr>
		<?php if ($this->_tpl_vars['is_admin'] == 1): ?>
		<th colspan="3">
		<?php else: ?>
		<th colspan="2">
		<?php endif; ?>
			<div class="sectionTitle"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_FOLDERS_TITLE']; ?>
</div>
		</th>
	</tr>

	<tr>
		<td NOWRAP style="padding: 8px;" valign="top">
			<div>
				<b><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_USER_FOLDERS']; ?>
:</b>
			</div>
			<br />

			<div>
				<select multiple size="8" name="userFolders[]" id="userFolders" onchange="SUGAR.email2.folders.updateSubscriptions();"></select>
			</div>
			<br />
			<i><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_MULTISELECT']; ?>
</i>
		</td>
		<td NOWRAP style="padding: 8px;" valign="top">
			<div>
				<b><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_GROUP_FOLDERS']; ?>
:</b>
			</div>
			<br />

			<div>
				<select multiple size="8" name="groupFolders[]" id="groupFolders" onchange="SUGAR.email2.folders.updateSubscriptions();"></select>
			</div>
			<br />
			<i><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_MULTISELECT']; ?>
</i>
		</td>
		<?php if ($this->_tpl_vars['is_admin'] == 1): ?>
		<td NOWRAP style="padding: 8px;" valign="top">
			<div>			
				<b><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT']; ?>
:</b>
				<select name="editGroupFolderList" id="editGroupFolderList" onchange="SUGAR.email2.folders.editGroupFolder(this.value);">
					
				</select>
			</div>
			<br />

			<div>
				<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_FOLDERS_NEW_FOLDER']; ?>
:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="groupFolderAddName" id="groupFolderAddName">
			</div>
			<br />

			<div>
				<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_FOLDERS_ADD_THIS_TO']; ?>
:
				<select name="groupFoldersAdd" id="groupFoldersAdd"></select>
			</div>
			<br />







			<input type="button" style="display:''" id="addNewFolders" name="addNewFolders" class="button" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER']; ?>
   " onclick="SUGAR.email2.folders.addNewGroupFolder();">
			<input type="button" style="display:none" id="saveGroupFolder" name="saveGroupFolder" class="button" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_BUTTON_LABEL']; ?>
   " onclick="SUGAR.email2.folders.saveGroupFolder();">
			<input type="button" style="display:none" id="cancelEditGroupFolder" name="cancelEditGroupFolder" class="button" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_CANCEL_BUTTON_LABEL']; ?>
   " onclick="SUGAR.email2.folders.editGroupFolder('');">
		</td>
		<?php endif; ?>
	</tr>
</table>