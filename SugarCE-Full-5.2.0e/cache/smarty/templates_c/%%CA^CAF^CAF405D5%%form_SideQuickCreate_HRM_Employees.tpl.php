<?php /* Smarty version 2.6.11, created on 2009-06-30 18:19:11
         compiled from cache/modules/HRM_Employees/form_SideQuickCreate_HRM_Employees.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/HRM_Employees/form_SideQuickCreate_HRM_Employees.tpl', 28, false),array('function', 'counter', 'cache/modules/HRM_Employees/form_SideQuickCreate_HRM_Employees.tpl', 33, false),array('function', 'sugar_translate', 'cache/modules/HRM_Employees/form_SideQuickCreate_HRM_Employees.tpl', 37, false),array('modifier', 'default', 'cache/modules/HRM_Employees/form_SideQuickCreate_HRM_Employees.tpl', 34, false),)), $this); ?>


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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'HRM_Employees'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='20' maxlength='255' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'HRM_Employees'), $this);?>
:
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" rows="3" cols="20" title='' tabindex="0"><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'HRM_Employees'), $this);?>
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
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_SideQuickCreate_HRM_Employees","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
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
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('form_SideQuickCreate_HRM_Employees');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=HRM_Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'date_entered_date\', \'date\', false,\'Ngày tạo\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'date_modified_date\', \'date\', false,\'Thay đổi lần cuối\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'assigned_user_name\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'salutation\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'phone_other\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_OTHER','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'primary_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY  ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'phone_home\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_HOME  ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'first_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'last_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'full_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FNAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'phone_mobile\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_MOBILE  ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'primary_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'primary_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE  ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'primary_address_complement\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COMPLEMENT','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'num_secu\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NUM_SECU','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'nais_lieu\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAIS_LIEU','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'nai_dept\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAI_DEPT','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'dat_entr\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_ENTR','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'dat_dern\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_DERN','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'dat_sort\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_SORT','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'tri_gram\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TRI_GRAM','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'rib_banq\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_BANQ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'rib_guic\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_GUIC','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'rib_comp\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_COMP','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'rib_keys\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_KEYS','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'num_sala\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NUM_SALA','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'rib_cplet\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_CPLET','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'nai_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAI_DATE','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'pis_nbr1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PIS_NBR1','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'pis_nbr2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PIS_NBR2','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'sal_nati\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_NATI','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'sal_situ\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_SITU','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'rib_lieu\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_LIEU','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'ind_synt\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_IND_SYNT','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'bal_holy\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BAL_HOLY','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'bal_rtts\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BAL_RTTS','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'sal_pres\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_PRES','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'ref_holy\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REF_HOLY','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'gross_incomes\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_GROSS_INCOMES','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'currency_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'ref_rtts\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REF_RTTS','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Employees\', \'flyingblue\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FLYINGBLUE','module' => 'HRM_Employees'), $this); echo '\' );
addToValidateBinaryDependency(\'form_SideQuickCreate_HRM_Employees\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'HRM_Employees'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'HRM_Employees'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'assigned_user_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>
