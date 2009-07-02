<?php /* Smarty version 2.6.11, created on 2009-07-01 10:21:35
         compiled from include/SugarEmailAddress/templates/forWideFormBodyView.tpl */ ?>
<tr>
    <td class="dataLabel"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ADDRESSES']; ?>
: </td>
</tr>

<script type="text/javascript" src="include/SugarEmailAddress/SugarEmailAddress.js"></script>
<script type="text/javascript">
	var module = '<?php echo $this->_tpl_vars['module']; ?>
';
</script>
<tr>
<td colspan="4">
<table cellpadding="0" cellspacing="0" border="0" >
	<tr>
		<td class="dataField" valign="top" NOWRAP>
			<table cellpadding="0" cellspacing="0" border="0" id="<?php echo $this->_tpl_vars['module']; ?>
emailAddressesTable">
				<tbody id="targetBody"></tbody>
				<tr>
					<td class="dataLabel" NOWRAP>
						<input type=hidden name='emailAddressWidget' value=1>
					</td>
					<td class="dataLabel" NOWRAP>
					    &nbsp;
					</td>
					<td class="dataLabel" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_PRIMARY']; ?>

					</td>
					<?php if ($this->_tpl_vars['useReplyTo'] == true): ?>
					<td class="dataLabel" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_REPLY_TO']; ?>

					</td>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['useOptOut'] == true): ?>
					<td class="dataLabel" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_OPT_OUT']; ?>

					</td>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['useInvalid'] == true): ?>
					<td class="dataLabel" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_INVALID']; ?>

					</td>
					<?php endif; ?>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="dataLabel" valign="top" NOWRAP>
			<div>
				<a href="javascript:addEmailAddress(<?php echo '\'';  echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo '\''; ?>
,'','');"><img src="themes/Sugar/images/plus_inline.gif" border="0" height="10" width="10" class="img"></a>&nbsp;
				<a href="javascript:addEmailAddress(<?php echo '\'';  echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo '\''; ?>
,'','');"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ADD']; ?>
</a>
			</div>
		</td>
	</tr>
</table>
<input type="hidden" name="useEmailWidget" value="true">
</td>
</tr>

<script type="text/javascript" language="javascript">
    emailView = '<?php echo $this->_tpl_vars['emailView']; ?>
';
	prefillEmailAddress = '<?php echo $this->_tpl_vars['prefillEmailAddresses']; ?>
';
	addDefaultAddress = '<?php echo $this->_tpl_vars['addDefaultAddress']; ?>
';
	prefillData = <?php echo $this->_tpl_vars['prefillData']; ?>
;

	<?php echo '
	if(prefillEmailAddress == \'true\') {
		prefillEmailAddresses(';  echo '\'';  echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo '\''; ?>
, prefillData);<?php echo '
	} else if(addDefaultAddress == \'true\') {
	'; ?>

	    addEmailAddress(<?php echo '\'';  echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo '\''; ?>
, '');
	}
</script>