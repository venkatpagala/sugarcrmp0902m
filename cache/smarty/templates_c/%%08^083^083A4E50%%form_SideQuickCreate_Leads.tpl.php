<?php /* Smarty version 2.6.11, created on 2009-06-08 22:27:26
         compiled from cache/modules/Leads/form_SideQuickCreate_Leads.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Leads/form_SideQuickCreate_Leads.tpl', 28, false),array('function', 'counter', 'cache/modules/Leads/form_SideQuickCreate_Leads.tpl', 33, false),array('function', 'sugar_translate', 'cache/modules/Leads/form_SideQuickCreate_Leads.tpl', 37, false),array('modifier', 'default', 'cache/modules/Leads/form_SideQuickCreate_Leads.tpl', 34, false),)), $this); ?>


<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td style="padding-bottom: 2px;">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="contact_role">
<?php if (! empty ( $_REQUEST['return_module'] )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']):  echo $_REQUEST['return_relationship'];  else:  echo $_REQUEST['return_module'];  endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
</td>
<td align='right'></td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<table width="100%" cellspacing="0" cellpadding="0" class='tabDetailView' id='tabFormPagination'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</table>
<div id="DEFAULT">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'tabForm') : smarty_modifier_default($_tmp, 'tabForm')); ?>
">
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Leads'), $this);?>
:
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['first_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['first_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['first_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' size='20' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Leads'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' size='20' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Leads'), $this);?>
:
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' size='20' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Leads'), $this);?>
:
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<input tabindex="0"  type="text" name="emailAddress0" size=20><input tabindex="0"  type="hidden" name="emailAddressPrimaryFlag" value="emailAddress0"><input tabindex="0"  type="hidden" name="useEmailWidget" value="true"><script language="Javascript">addToValidate("form_SideQuickCreate_Leads", "emailAddress0", "email", false, SUGAR.language.get("app_strings", "LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR"));</script>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Leads'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="11" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Leads","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, "single", true);'>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>
<p>

<div style="padding-top: 2px">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('form_SideQuickCreate_Leads');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Leads", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'form_SideQuickCreate_Leads\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'assigned_user_name\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'salutation\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'first_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'last_name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'full_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'department\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'do_not_call\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DO_NOT_CALL','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'phone_home\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'phone_mobile\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'phone_work\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'phone_other\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'phone_fax\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'email1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'email2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_EMAIL_ADDRESS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'invalid_email\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_INVALID_EMAIL','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'email_opt_out\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_OPT_OUT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'primary_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'primary_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_2','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'primary_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_3','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'primary_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'primary_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STATE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'primary_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'primary_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COUNTRY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'alt_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'alt_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_2','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'alt_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_3','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'alt_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_CITY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'alt_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STATE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'alt_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_POSTALCODE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'alt_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_COUNTRY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'assistant\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'assistant_phone\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'converted\', \'bool\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONVERTED','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'refered_by\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REFERED_BY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'lead_source\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'lead_source_description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE_DESCRIPTION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'status_description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS_DESCRIPTION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'reports_to_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'report_to_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'account_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'account_description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_DESCRIPTION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'contact_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'account_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'opportunity_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'opportunity_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'opportunity_amount\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_AMOUNT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'campaign_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'campaign_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'c_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'m_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'accept_status_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'accept_status_name\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'webtolead_email1\', \'email\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'webtolead_email2\', \'email\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_EMAIL_ADDRESS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'webtolead_email_opt_out\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_OPT_OUT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'webtolead_invalid_email\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_INVALID_EMAIL','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'portal_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Leads\', \'portal_app\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_APP','module' => 'Leads'), $this); echo '\' );
addToValidateBinaryDependency(\'form_SideQuickCreate_Leads\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Leads'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Leads'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'assigned_user_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>
