<?php /* Smarty version 2.6.11, created on 2009-06-24 12:18:03
         compiled from modules/Emails/templates/outboundDialog.tpl */ ?>
<div id="outboundServers" class="ylayout-inactive-content">
	<form id="outboundEmailForm">
		<input type="hidden" id="mail_id" name="mail_id">
		<input type="hidden" id="mail_sendtype" name="mail_sendtype" value="SMTP">
	
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
			<tr>
				<td class="dataLabel" colspan="2" NOWRAP>
					<input type="button" class="button" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS']; ?>
   " onclick="javascript:SUGAR.email2.accounts.fillGmailDefaults();">&nbsp;
				</td>
			</tr>

			<tr>
				<td class="dataLabel" width="15%" NOWRAP>
					<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_NAME']; ?>
&nbsp; 
				</td>
				<td class="dataField" width="35%">
					<input type="text" class="input" id="mail_name" name="mail_name" size="25" maxlength="64">
				</td>
			</tr>
		
			<tr>
				<td class="dataLabel">
					<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_SMTPSERVER']; ?>
 
					<span class="required">
						<?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>

					</span>
				</td>
				<td class="dataField">
					<input type="text" id="mail_smtpserver" name="mail_smtpserver" size="25" maxlength="64" value="">
				</td>
			</tr>
			
			<tr>
				<td class="dataLabel">
					<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_SMTPPORT']; ?>
 
					<span class="required">
						<?php echo $this->_tpl_vars['app_strings']['LBL_REQUIRED_SYMBOL']; ?>

					</span>
				</td>
				<td class="dataField">
					<input type="text" id="mail_smtpport" name="mail_smtpport" size="5" maxlength="5" value="25">
				</td>
			</tr>

			<tr>
				<td class="dataLabel">
					<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_SMTPSSL']; ?>
 
				</td>
				<td class="dataField">
					<input id='mail_smtpssl' name='mail_smtpssl' type="checkbox" class="checkbox" value="1">
				</td>
			</tr>

			<tr>
				<td class="dataLabel">
					<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ']; ?>
 
				</td>
				<td class="dataField">
					<input id='mail_smtpauth_req' name='mail_smtpauth_req' type="checkbox" class="checkbox" value="1">
				</td>
			</tr>
			<tr>
				<td class="dataLabel">
					<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_SMTPUSER']; ?>
 
				</td>
				<td class="dataField"">
					<input type="text" id="mail_smtpuser" name="mail_smtpuser" size="25" maxlength="64">
				</td>
			</tr>
			<tr>
				<td class="dataLabel">
					<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_SMTPPASS']; ?>
 
				</td>
				<td class="dataField">
					<input type="password" id="mail_smtppass" name="mail_smtppass" size="25" maxlength="64">
				</td>
			</tr>
			<tr>
				<td class="dataLabel" colspan="2">
					<input type="button" class="button" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_CANCEL_BUTTON_LABEL']; ?>
   " onclick="javascript:SUGAR.email2.accounts.outboundDialog.hide();">&nbsp;
					<input type="button" class="button" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_BUTTON_LABEL']; ?>
   " onclick="javascript:SUGAR.email2.accounts.saveOutboundSettings();">&nbsp;
				</td>
			</tr>



		</table>
	</form>
</div>