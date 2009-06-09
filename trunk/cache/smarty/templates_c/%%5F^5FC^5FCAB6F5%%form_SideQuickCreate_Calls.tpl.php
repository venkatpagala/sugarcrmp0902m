<?php /* Smarty version 2.6.11, created on 2009-06-08 21:27:47
         compiled from cache/modules/Calls/form_SideQuickCreate_Calls.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Calls/form_SideQuickCreate_Calls.tpl', 35, false),array('function', 'counter', 'cache/modules/Calls/form_SideQuickCreate_Calls.tpl', 40, false),array('function', 'sugar_translate', 'cache/modules/Calls/form_SideQuickCreate_Calls.tpl', 45, false),array('function', 'html_options', 'cache/modules/Calls/form_SideQuickCreate_Calls.tpl', 119, false),array('modifier', 'default', 'cache/modules/Calls/form_SideQuickCreate_Calls.tpl', 41, false),)), $this); ?>


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
<input type="hidden" name="isSaveAndNew" value="false">   
<input type="hidden" name="send_invites">   
<input type="hidden" name="user_invitees">   
<input type="hidden" name="contact_invitees">   
<input type="hidden" name="duration_hours" value="0">   
<input type="hidden" name="duration_minutes" value="15">   
<input type="hidden" name="status" id="status" value="Planned">   
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
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<div valign="top"><?php echo '<input tabindex="0"  type="radio" name="appttype" checked=true onchange="if(this.checked){this.form.module.value=\'Calls\'; this.form.return_module.value=\'Calls\'; this.form.direction.style.display = \'inline\';}">';  echo smarty_function_sugar_translate(array('label' => 'LBL_CALL'), $this); echo '<input tabindex="0"  type="radio" name="appttype" onchange="if(this.checked){this.form.module.value=\'Meetings\'; this.form.return_module.value=\'Meetings\'; this.form.direction.style.display=\'none\'}">';  echo smarty_function_sugar_translate(array('label' => 'LBL_MEETING'), $this);?>
</div>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Calls'), $this);?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_TIME','module' => 'Calls'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.update(); ">
<input type="hidden" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_trigger" align="absmiddle">&nbsp;
<br>
<div id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_time_section"></div>
</td>
</tr>
</table>
<script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>
<script type="text/javascript">
var combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
 = new Datetimecombo("<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", 0, '', '<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name_flag']]['value']; ?>
'); 
//Render the remaining widget fields
text = combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.html('');
document.getElementById('<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.jsscript(''));
</script>
<script type="text/javascript">
function update_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_available() {
      YAHOO.util.Event.onAvailable("<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date", this.handleOnAvailable, this); 
}

update_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_available.prototype.handleOnAvailable = function(me) {
	Calendar.setup ({
	onClose : update_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
,
	inputField : "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date",
	ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	button : "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_trigger",
	singleClick : true,
	step : 1
	});
	
	//Call update for first time to round hours and minute values
	combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.update();
}

var obj_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
 = new update_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_available(); 
</script>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO','module' => 'Calls'), $this);?>
:
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name='parent_type' tabindex="0" id='parent_type' title='' onchange='document.<?php echo $this->_tpl_vars['form_name']; ?>
.<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
.value="";document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_id.value=""; changeQS(); checkParentType(document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, document.<?php echo $this->_tpl_vars['form_name']; ?>
.btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
);'>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['parent_name']['options'],'selected' => $this->_tpl_vars['fields']['parent_type']['value']), $this);?>

</select>
<br>
<?php if (empty ( $this->_tpl_vars['fields']['parent_name']['options'][$this->_tpl_vars['fields']['parent_type']['value']] )):  $this->assign('keepParent', 0);  else:  $this->assign('keepParent', 1);  endif; ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" class="sqsEnabled" tabindex="0" size="11" <?php if ($this->_tpl_vars['keepParent']): ?>value="<?php echo $this->_tpl_vars['fields']['parent_name']['value']; ?>
"<?php endif; ?> autocomplete="off">
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
"  <?php if ($this->_tpl_vars['keepParent']): ?>value="<?php echo $this->_tpl_vars['fields']['parent_id']['value']; ?>
"<?php endif; ?>>
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" tabindex="0" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup(document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Calls","field_to_name_array":{"id":"parent_id","name":"parent_name"}}'; ?>
, "single", true);'>
<?php echo '
<script type="text/javascript">
function changeQS() {
'; ?>

	new_module = document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value;
<?php echo '
	if(typeof(disabledModules[new_module]) != \'undefined\') {
		sqs_objects[\'parent_name\'][\'disable\'] = true;
		document.getElementById(\'parent_name\').readOnly = true;
	}
	else {
		sqs_objects[\'parent_name\'][\'disable\'] = false;
		document.getElementById(\'parent_name\').readOnly = false;
	}	
	sqs_objects[\'parent_name\'][\'modules\'] = new Array(new_module);
    enableQS(false);
}
'; ?>

</script>
<?php echo '
<script>var disabledModules=[];</script>
'; ?>

</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Calls'), $this);?>
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
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Calls","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, "single", true);'>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Calls'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" title='' tabindex="0"  >
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>&nbsp;
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['direction']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['direction']['name']; ?>
" title='' tabindex="0"  >
<?php if (isset ( $this->_tpl_vars['fields']['direction']['value'] ) && $this->_tpl_vars['fields']['direction']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['direction']['options'],'selected' => $this->_tpl_vars['fields']['direction']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['direction']['options'],'selected' => $this->_tpl_vars['fields']['direction']['default']), $this);?>

<?php endif; ?>
</select>&nbsp;
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
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('form_SideQuickCreate_Calls');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Calls", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'form_SideQuickCreate_Calls\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'assigned_user_name\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'duration_hours\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION_HOURS','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'duration_minutes\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION_MINUTES','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'date_start_date\', \'date\', true,\'Ngày bắt đầu\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'date_end\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_END','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'parent_type\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_TYPE','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'parent_name\', \'parent\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'status\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'direction\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DIRECTION','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'parent_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO_ID','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'reminder_checked\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REMINDER','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'reminder_time\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REMINDER_TIME','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'outlook_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OUTLOOK_ID','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'accept_status\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Calls'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Calls\', \'contact_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_NAME','module' => 'Calls'), $this); echo '\' );
addToValidateBinaryDependency(\'form_SideQuickCreate_Calls\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Calls'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Calls'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'parent_name\']={"method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'assigned_user_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
