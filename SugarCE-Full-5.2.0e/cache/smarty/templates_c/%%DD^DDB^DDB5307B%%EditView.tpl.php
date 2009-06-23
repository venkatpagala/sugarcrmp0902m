<?php /* Smarty version 2.6.11, created on 2009-06-23 15:21:12
         compiled from cache/modules/Meetings/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Meetings/EditView.tpl', 38, false),array('function', 'counter', 'cache/modules/Meetings/EditView.tpl', 43, false),array('function', 'sugar_translate', 'cache/modules/Meetings/EditView.tpl', 48, false),array('function', 'html_options', 'cache/modules/Meetings/EditView.tpl', 73, false),array('modifier', 'default', 'cache/modules/Meetings/EditView.tpl', 44, false),array('modifier', 'strip_semicolon', 'cache/modules/Meetings/EditView.tpl', 50, false),)), $this); ?>



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
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="fill_invitees();this.form.action.value='Save'; this.form.return_action.value='DetailView'; <?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>this.form.return_id.value=''; <?php endif; ?>return check_form('EditView') && isValidDuration();" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
">
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='index'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> <?php endif; ?>
<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SEND_BUTTON_TITLE']; ?>
" class="button" onclick="this.form.send_invites.value='1';fill_invitees();this.form.action.value='Save';this.form.return_action.value='EditView';this.form.return_module.value='<?php echo $_REQUEST['return_module']; ?>
';return check_form('EditView') && isValidDuration();" type="submit" name="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_SEND_BUTTON_LABEL']; ?>
">
<?php if ($this->_tpl_vars['fields']['status']['value'] != 'Held'): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_KEY']; ?>
" class="button" onclick="fill_invitees(); this.form.status.value='Held'; this.form.action.value='Save'; this.form.return_module.value='Meetings'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value='EditView'; this.form.return_id.value='<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'; return check_form('EditView') && isValidDuration();" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_LABEL']; ?>
"><?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Meetings", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align='right'></td>
</tr>
</table><input type="hidden" name="send_invites">
<input type="hidden" name="user_invitees">
<input type="hidden" name="contact_invitees">
<input type="hidden" name="lead_invitees"><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<table width="100%" cellspacing="0" cellpadding="0" class='tabDetailView' id='tabFormPagination'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</table>
<div id="DEFAULT">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'tabForm') : smarty_modifier_default($_tmp, 'tabForm')); ?>
">
<tr>
<td valign="top" id='name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Meetings'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
<td valign="top" id='status_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Meetings'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" title='' tabindex="1"  >
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>&nbsp;
</tr>
<tr>
<td valign="top" id='location_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOCATION','module' => 'Meetings'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['location']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['location']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['location']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['location']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['location']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='l' > 
</tr>
<tr>
<td valign="top" id='date_start_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE','module' => 'Meetings'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.update(); SugarWidgetScheduler.update_time();">
<input type="hidden" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_trigger" align="absmiddle">&nbsp;
</td>
<td nowrap>
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
.html('SugarWidgetScheduler.update_time();');
document.getElementById('<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.jsscript('SugarWidgetScheduler.update_time();'));
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
<td valign="top" id='assigned_user_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Meetings'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="a" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="a" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, "single", true);'>
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="a" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button" onclick="this.form.<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
.value = '';" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
">
</tr>
<tr>
<td valign="top" id='duration_hours_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION','module' => 'Meetings'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php echo '<script type="text/javascript">function isValidDuration() { form = document.getElementById(\'EditView\'); if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) { alert(\'';  echo $this->_tpl_vars['MOD']['NOTICE_DURATION_TIME'];  echo '\'); return false; } return true; }</script>'; ?>
<input tabindex="0"  name="duration_hours" size="2" maxlength="2" type="text" value="<?php echo $this->_tpl_vars['fields']['duration_hours']['value']; ?>
" onkeyup="SugarWidgetScheduler.update_time();"/><?php echo $this->_tpl_vars['fields']['duration_minutes']['value']; ?>
 <?php echo $this->_tpl_vars['MOD']['LBL_HOURS_MINS']; ?>

<td valign="top" id='parent_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO','module' => 'Meetings'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name='parent_type' tabindex="p" id='parent_type' title='' onchange='document.<?php echo $this->_tpl_vars['form_name']; ?>
.<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
.value="";document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_id.value=""; changeQS(); checkParentType(document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, document.<?php echo $this->_tpl_vars['form_name']; ?>
.btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
);'>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['parent_name']['options'],'selected' => $this->_tpl_vars['fields']['parent_type']['value']), $this);?>

</select>
<?php if (empty ( $this->_tpl_vars['fields']['parent_name']['options'][$this->_tpl_vars['fields']['parent_type']['value']] )):  $this->assign('keepParent', 0);  else:  $this->assign('keepParent', 1);  endif; ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" class="sqsEnabled" tabindex="p" size="" <?php if ($this->_tpl_vars['keepParent']): ?>value="<?php echo $this->_tpl_vars['fields']['parent_name']['value']; ?>
"<?php endif; ?> autocomplete="off">
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
"  <?php if ($this->_tpl_vars['keepParent']): ?>value="<?php echo $this->_tpl_vars['fields']['parent_id']['value']; ?>
"<?php endif; ?>>
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" tabindex="p" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup(document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"parent_id","name":"parent_name"}}'; ?>
, "single", true);'>
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" tabindex="p" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button" onclick="this.form.<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
.value = '';" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
">
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
<td valign="top" id='reminder_time_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REMINDER','module' => 'Meetings'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['fields']['reminder_checked']['value'] == '1'):  $this->assign('REMINDER_TIME_DISPLAY', 'inline');  $this->assign('REMINDER_CHECKED', 'checked');  else:  $this->assign('REMINDER_TIME_DISPLAY', 'none');  $this->assign('REMINDER_CHECKED', "");  endif; ?><input tabindex="0"  name="reminder_checked" type="hidden" value="0"><input tabindex="0"  name="reminder_checked" onclick='toggleDisplay("should_remind_list");' type="checkbox" class="checkbox" value="1" <?php echo $this->_tpl_vars['REMINDER_CHECKED']; ?>
><div id="should_remind_list" style="display:<?php echo $this->_tpl_vars['REMINDER_TIME_DISPLAY']; ?>
"><?php echo $this->_tpl_vars['fields']['reminder_time']['value']; ?>
</div>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Meetings'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" rows="4" cols="60" title='' tabindex="d"><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>
<p>


<div style="padding-top: 2px">
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="fill_invitees();this.form.action.value='Save'; this.form.return_action.value='DetailView'; <?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>this.form.return_id.value=''; <?php endif; ?>return check_form('EditView') && isValidDuration();" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
">
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='index'; this.form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; this.form.record.value='<?php echo $_REQUEST['return_id']; ?>
';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> <?php endif; ?>
<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SEND_BUTTON_TITLE']; ?>
" class="button" onclick="this.form.send_invites.value='1';fill_invitees();this.form.action.value='Save';this.form.return_action.value='EditView';this.form.return_module.value='<?php echo $_REQUEST['return_module']; ?>
';return check_form('EditView') && isValidDuration();" type="submit" name="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_SEND_BUTTON_LABEL']; ?>
">
<?php if ($this->_tpl_vars['fields']['status']['value'] != 'Held'): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_KEY']; ?>
" class="button" onclick="fill_invitees(); this.form.status.value='Held'; this.form.action.value='Save'; this.form.return_module.value='Meetings'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value='EditView'; this.form.return_id.value='<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'; return check_form('EditView') && isValidDuration();" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_LABEL']; ?>
"><?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Meetings", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/JSON.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script type="text/javascript" src="include/jsolait/init.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script type="text/javascript" src="include/jsolait/lib/urllib.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script type="text/javascript"><?php echo $this->_tpl_vars['JSON_CONFIG_JAVASCRIPT']; ?>
</script>
<script type="text/javascript" src="include/javascript/jsclass_base.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script type="text/javascript" src="include/javascript/jsclass_async.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script type="text/javascript" src="modules/Meetings/jsclass_scheduler.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script>toggle_portal_flag();function toggle_portal_flag()  <?php echo ' { '; ?>
 <?php echo $this->_tpl_vars['TOGGLE_JS']; ?>
 <?php echo ' } '; ?>
 </script>
<!-- End Meta-Data Javascript -->
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="h3Row">
<tr>
<td nowrap><h3><?php echo $this->_tpl_vars['MOD']['LBL_SCHEDULING_FORM_TITLE']; ?>
</h3></td><td width='100%'><img height='1' width='1' src='include/images/blank.gif' alt=''></td>
</tr>
</table>
<div width="100%" id="scheduler" name="scheduler"></div>
<script type="text/javascript">
<?php echo '
function fill_invitees() { 
	if (typeof(GLOBAL_REGISTRY) != \'undefined\')  {    
		SugarWidgetScheduler.fill_invitees(document.EditView);
	} 
}
'; ?>


var root_div = document.getElementById('scheduler');
var sugarContainer_instance = new SugarContainer(document.getElementById('scheduler'));
sugarContainer_instance.start(SugarWidgetScheduler);
<?php echo '
if ( document.getElementById(\'save_and_continue\') ) {
    var oldclick = document.getElementById(\'save_and_continue\').attributes[\'onclick\'].nodeValue;
    document.getElementById(\'save_and_continue\').onclick = function(){
        fill_invitees();
        eval(oldclick);
    }
}
'; ?>

</script>
</form><?php echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'EditView\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'location\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LOCATION','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'duration_hours\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION_HOURS','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'duration_minutes\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION_MINUTES','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'date_start_date\', \'date\', true,\'Ngày bắt đầu\' );
addToValidate(\'EditView\', \'date_end\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_END','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'parent_type\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'direction\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DIRECTION','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'parent_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'reminder_checked\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REMINDER','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'reminder_time\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REMINDER_TIME','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'outlook_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OUTLOOK_ID','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'contact_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_NAME','module' => 'Meetings'), $this); echo '\' );
addToValidate(\'EditView\', \'parent_name\', \'parent\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO','module' => 'Meetings'), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Meetings'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Meetings'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'assigned_user_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'parent_name\']={"method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>
