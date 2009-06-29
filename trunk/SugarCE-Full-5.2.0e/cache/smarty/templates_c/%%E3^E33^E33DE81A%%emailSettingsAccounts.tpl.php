<?php /* Smarty version 2.6.11, created on 2009-06-24 12:18:03
         compiled from modules/Emails/templates/emailSettingsAccounts.tpl */ ?>
<table cellpadding="4" cellspacing="0" border="0">
	<tr>
		<th colspan="2">
			<div class="sectionTitle"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ACCOUNTS_TITLE']; ?>
</div>
		</th>
	</tr>
	<tr>
		<td width="1%" class="tabDetailViewDL" align="left">
			<form id="ieSubscribe" name="ieSubscribe">
				<input type="hidden" id="emailUIAction2" name="emailUIAction" />
				<input type="hidden" id="module" name="module" value="Emails">
				<input type="hidden" id="action" name="action" value="EmailUIAjax">
				<input type="hidden" id="to_pdf" name="to_pdf" value="true">

			<div style="text-align: left;">
				<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS']; ?>
:<br />
				<select multiple style="width: 100px;" size="8" name="ieIdShow[]" id="ieAccountListShow" onchange="SUGAR.email2.folders.setFolderSelection();">
					<?php echo $this->_tpl_vars['ieAccountsFull']; ?>

				</select>
			</div>
			<div style="text-align: left;">
			<i><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_MULTISELECT']; ?>
</i>







			</div>
			</form>
		</td>
		<td NOWRAP class="tabDetailViewDF">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Emails/templates/emailSettingsAccountDetails.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
</table>