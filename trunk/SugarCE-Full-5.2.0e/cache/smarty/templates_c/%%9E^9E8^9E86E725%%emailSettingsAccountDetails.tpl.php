<?php /* Smarty version 2.6.11, created on 2009-06-24 12:18:03
         compiled from modules/Emails/templates/emailSettingsAccountDetails.tpl */ ?>
<?php echo $this->_tpl_vars['rollover']; ?>

<table border="0" cellspacing="0" cellpadding="0">
	<tr>
	   <form id="ieSelect" name="ieSelect">
		<td NOWRAP>
			<div>
                <input type="hidden" id="emailUIAction2" name="emailUIAction" />
				<input type="hidden" id="module" name="module" value="Emails">
				<input type="hidden" id="action" name="action" value="EmailUIAjax">
				<input type="hidden" id="to_pdf" name="to_pdf" value="true">
					&nbsp;

				<span class="dataLabel"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_EDIT_ACCOUNT']; ?>
:&nbsp;</span>
			</div>
		</td>
		<td> <select name="ieId" id="ieAccountList" onchange="SUGAR.email2.accounts.getIeAccount(this.value);">
                <?php echo $this->_tpl_vars['ieAccounts']; ?>

             </select> 
        </td>
        </form>
	</tr>
    <tr>
		<td valign="top" class="dataLabel" width="15%" NOWRAP>
			&nbsp;
		</td>
		<td valign="top" class="dataField" width="35%">
			&nbsp;
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<form id="ieAccount" name="ieAccount">
				<input type="hidden" id="ie_id" name="ie_id">
				<input type="hidden" id="ie_status" name="ie_status" value="Active">
				<input type="hidden" id="ie_team" name="ie_team" value="<?php echo $this->_tpl_vars['ie_team']; ?>
">
				<input type="hidden" id="group_id" name="group_id">
				<input type="hidden" id="group_id" name="mark_read" value="1">
				<input type="hidden" name="searchField" value="">
			
			<table border="0" cellspacing="0" cellpadding="0">
			    <tr>
					<td valign="top" class="dataLabel" width="15%" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_NAME']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>
					</td>
					<td valign="top" class="dataField" width="35%">
						<input id='ie_name' name='ie_name' type="text" size="30">
					</td>
				</tr>
			
			
			    <tr>
					<td valign="top" class="dataLabel" width="15%" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_FROM_NAME']; ?>
:
					</td>
					<td valign="top" class="dataField" width="35%">
						<input id='from_name' name='from_name' type="text" size="30">
					</td>
				</tr>
			    <tr>
					<td valign="top" class="dataLabel" width="15%" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_FROM_ADDR']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>
					</td>
					<td valign="top" class="dataField" width="35%">
						<input id='from_addr' name='from_addr' type="text" size="30">
					</td>
				</tr>
			
			    <tr>
					<td valign="top" class="dataLabel">
						<?php echo $this->_tpl_vars['ie_mod_strings']['LBL_LOGIN']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>&nbsp;
					</td>
					<td valign="top" class="dataField">
						<input id='email_user' name='email_user' size='30' maxlength='100' type="text" onclick="SUGAR.email2.accounts.ieAccountError(SUGAR.email2.accounts.normalStyle);">
					</td>
			    </tr>
			
			    <tr>
					<td valign="top" class="dataLabel">
						<?php echo $this->_tpl_vars['ie_mod_strings']['LBL_PASSWORD']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>&nbsp;
					</td>
					<td valign="top" class="dataField">
						<input id='email_password' name='email_password' size='30' maxlength='100' type="password" onclick="SUGAR.email2.accounts.ieAccountError(SUGAR.email2.accounts.normalStyle);">
					</td>
			    </tr>
			    
			     <tr>
                    <td valign="top" class="dataLabel" NOWRAP>
                        <?php echo $this->_tpl_vars['ie_mod_strings']['LBL_SERVER_URL']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>&nbsp;
                    </td>
                    <td valign="top" class="dataField">
                        <input id='server_url' name='server_url' size='30' maxlength='100' type="text" onclick="SUGAR.email2.accounts.ieAccountError(SUGAR.email2.accounts.normalStyle);">
                    </td>
                </tr>                
			    <tr>
					<td valign="top" class="dataLabel" NOWRAP>
						<?php echo $this->_tpl_vars['ie_mod_strings']['LBL_SERVER_TYPE']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>&nbsp;
					</td>
					<td valign="top" class="dataField">
						<select name='protocol' id="protocol" onchange="SUGAR.email2.accounts.setPortDefault(); SUGAR.email2.accounts.ieAccountError(SUGAR.email2.accounts.normalStyle);"><?php echo $this->_tpl_vars['PROTOCOL']; ?>
</select>
					</td>
				</tr>
			     <tr id="mailboxdiv" style="dispay:'none';">
                    <td valign="top" class="dataLabel" NOWRAP>
                        <?php echo $this->_tpl_vars['ie_mod_strings']['LBL_MAILBOX']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>&nbsp;
                    </td>
                    <td valign="top" class="dataField">
                        <input id='mailbox' value="" name='mailbox' size='30' maxlength='500' type="text" onclick="SUGAR.email2.accounts.ieAccountError(SUGAR.email2.accounts.normalStyle);" />
					<input type="button" id="subscribeFolderButton" name="subscribeFolderButton" class="button" onclick='this.form.searchField.value="";SUGAR.email2.accounts.getFoldersListForInboundAccountForEmail2();' value="<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SELECT']; ?>
" />
                    </td>
                </tr>			
			     <tr id="trashFolderdiv" style="dispay:'none';">
                    <td valign="top" class="dataLabel" NOWRAP>
                        <?php echo $this->_tpl_vars['ie_mod_strings']['LBL_TRASH_FOLDER']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>&nbsp;
                    </td>
                    <td valign="top" class="dataField">
                        <input id='trashFolder' value="" name='trashFolder' size='30' maxlength='100' type="text" onclick="SUGAR.email2.accounts.ieAccountError(SUGAR.email2.accounts.normalStyle);" />
					<input type="button" id="trashFolderButton" name="trashFolderButton" class="button" onclick='this.form.searchField.value="trash";SUGAR.email2.accounts.getFoldersListForInboundAccountForEmail2();' value="<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SELECT']; ?>
" />
                    </td>
                </tr>			
			     <tr id="sentFolderdiv" style="dispay:'none';">
                    <td valign="top" class="dataLabel" NOWRAP>
                        <?php echo $this->_tpl_vars['ie_mod_strings']['LBL_SENT_FOLDER']; ?>
: &nbsp;
                    </td>
                    <td valign="top" class="dataField">
                        <input id='sentFolder' value="" name='sentFolder' size='30' maxlength='100' type="text" onclick="SUGAR.email2.accounts.ieAccountError(SUGAR.email2.accounts.normalStyle);" />
					<input type="button" id="sentFolderButton" name="sentFolderButton" class="button" onclick='this.form.searchField.value="sent";SUGAR.email2.accounts.getFoldersListForInboundAccountForEmail2();' value="<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SELECT']; ?>
" />
                    </td>
                </tr>			
			    <tr>
					<td valign="top" class="dataLabel" NOWRAP>
						<?php echo $this->_tpl_vars['ie_mod_strings']['LBL_PORT']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>&nbsp;
					</td>
					<td valign="top" class="dataField">
						<input name='port' id='port' size='10' onclick="SUGAR.email2.accounts.ieAccountError(SUGAR.email2.accounts.normalStyle);">
					</td>
				</tr>
				<tr>
					<td valign="top" class="dataLabel" NOWRAP>
						<div id="rollover">
						     <?php echo $this->_tpl_vars['ie_mod_strings']['LBL_SSL']; ?>
:&nbsp;
                             <a href="#" class="rollover"><img border="0" src="themes/default/images/help.gif"><span><?php echo $this->_tpl_vars['ie_mod_strings']['LBL_SSL_DESC']; ?>
</span></a>
                           </div>
					    </div>
					</td>
					<td valign="top" class="dataField" width="15%">
					   <div class="maybe">
						   <input name='ssl' id='ssl' <?php echo $this->_tpl_vars['CERT']; ?>
 value='1' type='checkbox' <?php echo $this->_tpl_vars['SSL']; ?>
 onClick="SUGAR.email2.accounts.setPortDefault();">
					   </div>
					</td>
				</tr>
				
				<tr>
					<td valign="top" class="dataLabel" NOWRAP>
						<?php echo $this->_tpl_vars['ie_mod_strings']['LBL_OUTBOUND_SERVER']; ?>
: <span class="required"><?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>
</span>&nbsp;
					</td>
					<td valign="top" class="dataField" NOWRAP>
					   <div><table><tr><td>
						<select name='outbound_email' id='outbound_email' onchange="SUGAR.email2.accounts.handleOutboundSelectChange();"></select>&nbsp;
						<input id="outbound_email_edit_button" style="display:none;" type="button" class="button" 
						    onclick="javascript:SUGAR.email2.accounts.editOutbound();" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_EDIT']; ?>
   ">
						<input id="outbound_email_delete_button" style="display:none;" type="button" class="button" 
						    onclick="javascript:SUGAR.email2.accounts.deleteOutbound();" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_DELETE']; ?>
   ">
					    </td><td style="padding-bottom: 2px">
					    <input id="outbound_email_add_button" title="<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_FOLDERS_ADD']; ?>
" type='button' 
					        class="button" onClick='SUGAR.email2.accounts.showAddSmtp();'
                            name="button" value="  <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_FOLDERS_ADD']; ?>
   ">
                        </td></tr></table>
                       </div>     
					</td>
				</tr>

				<tr>
					<td class="dataLabel" colspan="2">
						<hr>
					</td>
				</tr>
			
				<tr>
					<td NOWRAP colspan="2" style="padding-bottom: 2px">
					   <input title="<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_ADD_ACCOUNT']; ?>
"
                        type='button' 
                        accessKey="n" 
                        class="button"
                        onClick='SUGAR.email2.accounts.addNewAccount();'
                        name="button" id="addButton" value="  <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_ADD_ACCOUNT']; ?>
  ">
                        &nbsp;
						<input title="<?php echo $this->_tpl_vars['ie_mod_strings']['LBL_TEST_BUTTON_TITLE']; ?>
"
							type='button' 
							accessKey="<?php echo $this->_tpl_vars['ie_mod_strings']['LBL_TEST_BUTTON_KEY']; ?>
" 
							class="button"
							onClick='SUGAR.email2.accounts.testSettings();'
							name="button" id="testButton" value="  <?php echo $this->_tpl_vars['ie_mod_strings']['LBL_TEST_SETTINGS']; ?>
  ">
						&nbsp;
						<input title="<?php echo $this->_tpl_vars['ie_mod_strings']['LBL_EMAIL_SAVE']; ?>
"
							type='button' 
							accessKey="s" 
							class="button"
							onClick='SUGAR.email2.accounts.saveIeAccount();'
							name="button" id="saveButton" value="  <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SAVE']; ?>
  ">
						&nbsp;
						<input title="<?php echo $this->_tpl_vars['ie_mod_strings']['LBL_EMAIL_DELETE']; ?>
"
							type='button' 
							accessKey="x" 
							class="button"
							onClick='SUGAR.email2.accounts.deleteIeAccount();'
							name="button" id="deleteButton" value="  <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_DELETE']; ?>
  "
							style="display:none;">
					</td>
				</tr>
			</table>
			</form>
			<form action="index.php" method="post" name="testSettingsView" id="testSettingsView">
				<input type="hidden" name="module" value="" />
				<input type="hidden" name="action" />
				<input type="hidden" name="target1"/>
				<input type="hidden" name="server_url" value="" />
				<input type="hidden" name="email_user" value="" />
				<input type="hidden" name="protocol" value="" />
				<input type="hidden" name="port" value="" />
				<input type="hidden" name="email_password" value="" />
				<input type="hidden" name="mailbox" value="" />
				<input type="hidden" name="ssl" value="" />
				<input type="hidden" name="personal" value="" />
				<input type="hidden" name="to_pdf" value="1">
				<input type="hidden" name="searchField" value="">
			</form>
			
		</td>
	</tr>
</table>