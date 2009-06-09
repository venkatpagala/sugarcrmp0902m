<?php /* Smarty version 2.6.11, created on 2009-05-22 05:00:50
         compiled from cache/modules/Tasks/form_SideQuickCreate_Tasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Tasks/form_SideQuickCreate_Tasks.tpl', 28, false),array('function', 'counter', 'cache/modules/Tasks/form_SideQuickCreate_Tasks.tpl', 33, false),array('function', 'sugar_translate', 'cache/modules/Tasks/form_SideQuickCreate_Tasks.tpl', 37, false),array('function', 'html_options', 'cache/modules/Tasks/form_SideQuickCreate_Tasks.tpl', 79, false),array('modifier', 'default', 'cache/modules/Tasks/form_SideQuickCreate_Tasks.tpl', 34, false),)), $this); ?>


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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Tasks'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='20' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DUE_DATE','module' => 'Tasks'), $this);?>
:
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['date_due']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['date_due']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_due']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_due']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['date_due']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['date_due']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1
}
);
</script>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Tasks'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
" title='' tabindex="0"  >
<?php if (isset ( $this->_tpl_vars['fields']['priority']['value'] ) && $this->_tpl_vars['fields']['priority']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Tasks'), $this);?>
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
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Tasks","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
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
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Tasks", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'form_SideQuickCreate_Tasks\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'assigned_user_name\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'date_due_flag\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_DUE_FLAG','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'date_due_date\', \'date\', false,\'Due Date\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'time_due_date\', \'date\', false,\'Due Time\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'date_due_field_date\', \'date\', false,\'Due Date & Time\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'date_start_flag\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_START_FLAG','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'date_start_date\', \'date\', false,\'Start Date\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'date_start_field_date\', \'date\', false,\'Due Date & Time\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'parent_type\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_NAME','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'parent_name\', \'parent\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'parent_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_ID','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'contact_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_ID','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'contact_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_NAME','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'contact_phone\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_PHONE','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'contact_email\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Tasks'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Tasks\', \'priority\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Tasks'), $this); echo '\' );
addToValidateBinaryDependency(\'form_SideQuickCreate_Tasks\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Tasks'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Tasks'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'assigned_user_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
