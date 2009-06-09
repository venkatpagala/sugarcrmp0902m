<?php /* Smarty version 2.6.11, created on 2009-05-22 03:15:38
         compiled from cache/modules/Project/form_SideQuickCreate_Project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Project/form_SideQuickCreate_Project.tpl', 30, false),array('function', 'counter', 'cache/modules/Project/form_SideQuickCreate_Project.tpl', 35, false),array('function', 'sugar_translate', 'cache/modules/Project/form_SideQuickCreate_Project.tpl', 39, false),array('function', 'html_options', 'cache/modules/Project/form_SideQuickCreate_Project.tpl', 103, false),array('modifier', 'default', 'cache/modules/Project/form_SideQuickCreate_Project.tpl', 36, false),)), $this); ?>


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
<input type="hidden" name="status" value="Draft">   
<input type="hidden" name="priority" value="high">   
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Project'), $this);?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_START','module' => 'Project'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['estimated_start_date']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_END','module' => 'Project'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['estimated_end_date']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Project'), $this);?>
:
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_USER_NAME','module' => 'Project'), $this);?>
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
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Project","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
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
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('form_SideQuickCreate_Project');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Project", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'form_SideQuickCreate_Project\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'date_entered_date\', \'date\', true,\'Date Entered\' );
addToValidate(\'form_SideQuickCreate_Project\', \'date_modified_date\', \'date\', true,\'Date Modified\' );
addToValidate(\'form_SideQuickCreate_Project\', \'assigned_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_USER_ID','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_USER_ID','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_BY','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'deleted\', \'bool\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Project'), $this); echo '\' );
addToValidateDateBeforeAllowBlank(\'form_SideQuickCreate_Project\', \'estimated_start_date\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_START','module' => 'Project'), $this); echo '\', \'estimated_end_date\', \'true\' );
addToValidate(\'form_SideQuickCreate_Project\', \'estimated_end_date\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_END','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'priority\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'total_estimated_effort\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_TOTAL_ESTIMATED_EFFORT','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'total_actual_effort\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_TOTAL_ACTUAL_EFFORT','module' => 'Project'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Project\', \'assigned_user_name\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_USER_NAME','module' => 'Project'), $this); echo '\' );
addToValidateBinaryDependency(\'form_SideQuickCreate_Project\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Project'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Project'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'assigned_user_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
