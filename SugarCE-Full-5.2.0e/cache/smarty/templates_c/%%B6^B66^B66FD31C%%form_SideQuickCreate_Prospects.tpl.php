<?php /* Smarty version 2.6.11, created on 2009-06-23 15:37:03
         compiled from cache/modules/Prospects/form_SideQuickCreate_Prospects.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Prospects/form_SideQuickCreate_Prospects.tpl', 28, false),array('function', 'counter', 'cache/modules/Prospects/form_SideQuickCreate_Prospects.tpl', 33, false),array('function', 'sugar_translate', 'cache/modules/Prospects/form_SideQuickCreate_Prospects.tpl', 37, false),array('modifier', 'default', 'cache/modules/Prospects/form_SideQuickCreate_Prospects.tpl', 34, false),)), $this); ?>


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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Prospects'), $this);?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Prospects'), $this);?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Prospects'), $this);?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Prospects'), $this);?>
:
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<input tabindex="0"  type="text" name="emailAddress0" size=20><input tabindex="0"  type="hidden" name="emailAddressPrimaryFlag" value="emailAddress0"><input tabindex="0"  type="hidden" name="useEmailWidget" value="true"><script language="Javascript">addToValidate("form_SideQuickCreate_Prospects", "emailAddress0", "email", false, SUGAR.language.get("app_strings", "LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR"));</script>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Prospects'), $this);?>
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
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Prospects","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
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
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('form_SideQuickCreate_Prospects');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Prospects", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'form_SideQuickCreate_Prospects\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'assigned_user_name\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'salutation\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'first_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'last_name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'full_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'department\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'do_not_call\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DO_NOT_CALL','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'phone_home\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'phone_mobile\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'phone_work\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'phone_other\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'phone_fax\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'email1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'email2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_EMAIL_ADDRESS','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'invalid_email\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_INVALID_EMAIL','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'email_opt_out\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_OPT_OUT','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'primary_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'primary_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_2','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'primary_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_3','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'primary_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'primary_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STATE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'primary_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'primary_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COUNTRY','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'alt_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'alt_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_2','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'alt_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_3','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'alt_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_CITY','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'alt_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STATE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'alt_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_POSTALCODE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'alt_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_COUNTRY','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'assistant\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'assistant_phone\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT_PHONE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'tracker_key\', \'int\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TRACKER_KEY','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'birthdate\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BIRTHDATE','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'lead_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_ID','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'account_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Prospects'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Prospects\', \'campaign_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ID','module' => 'Prospects'), $this); echo '\' );
addToValidateBinaryDependency(\'form_SideQuickCreate_Prospects\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Prospects'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Prospects'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'assigned_user_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>
