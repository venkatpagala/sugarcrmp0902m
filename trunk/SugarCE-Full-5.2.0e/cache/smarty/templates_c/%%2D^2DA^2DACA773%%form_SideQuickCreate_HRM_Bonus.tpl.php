<?php /* Smarty version 2.6.11, created on 2009-06-30 18:16:28
         compiled from cache/modules/HRM_Bonus/form_SideQuickCreate_HRM_Bonus.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/HRM_Bonus/form_SideQuickCreate_HRM_Bonus.tpl', 28, false),array('function', 'counter', 'cache/modules/HRM_Bonus/form_SideQuickCreate_HRM_Bonus.tpl', 33, false),array('function', 'sugar_translate', 'cache/modules/HRM_Bonus/form_SideQuickCreate_HRM_Bonus.tpl', 37, false),array('modifier', 'default', 'cache/modules/HRM_Bonus/form_SideQuickCreate_HRM_Bonus.tpl', 34, false),)), $this); ?>


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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'HRM_Bonus'), $this);?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'HRM_Bonus'), $this);?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'HRM_Bonus'), $this);?>
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
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_SideQuickCreate_HRM_Bonus","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
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
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('form_SideQuickCreate_HRM_Bonus');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=HRM_Bonus", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'date_entered_date\', \'date\', false,\'Ngày tạo\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'date_modified_date\', \'date\', false,\'Thay đổi lần cuối\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'assigned_user_name\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_mois\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_MOIS','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidateRange(\'form_SideQuickCreate_HRM_Bonus\', \'bon_year\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_YEAR','module' => 'HRM_Bonus'), $this); echo '\', 2000, 2020 );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_tteo\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TTEO','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_cri1\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI1','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_cri2\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI2','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_cri3\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI3','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_cri4\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI4','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_cri5\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI5','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_cri6\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI6','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'but_calc\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BUT_CALC','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_vali\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_VALI','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_paid\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_PAID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_tbas\', \'float\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TBAS','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_amou\', \'currency\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_AMOU','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_turn\', \'currency\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TURN','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'currency_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'sum_mois\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUM_MOIS','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'sum_year\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUM_YEAR','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_rate\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_RATE','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_tupd\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TUPD','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'bon_turn_pond_year\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TURN_POND_YEAR','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_HRM_Bonus\', \'hrm_employees_hrm_bonus_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HRM_EMPLOYEES_HRM_BONUS_FROM_HRM_EMPLOYEES_TITLE','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidateBinaryDependency(\'form_SideQuickCreate_HRM_Bonus\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'HRM_Bonus'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'HRM_Bonus'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'assigned_user_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>
