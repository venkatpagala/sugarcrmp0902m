<?php /* Smarty version 2.6.11, created on 2009-06-23 15:36:26
         compiled from cache/modules/Campaigns/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Campaigns/EditView.tpl', 31, false),array('function', 'counter', 'cache/modules/Campaigns/EditView.tpl', 36, false),array('function', 'sugar_translate', 'cache/modules/Campaigns/EditView.tpl', 41, false),array('function', 'html_options', 'cache/modules/Campaigns/EditView.tpl', 82, false),array('modifier', 'default', 'cache/modules/Campaigns/EditView.tpl', 37, false),array('modifier', 'strip_semicolon', 'cache/modules/Campaigns/EditView.tpl', 43, false),)), $this); ?>


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
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
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
"> <?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Campaigns", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
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
<td valign="top" id='name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_NAME','module' => 'Campaigns'), $this);?>

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
<td valign="top" id='assigned_user_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Campaigns'), $this);?>

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
<td valign="top" id='status_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_STATUS','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" title='' tabindex="0"  >
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='start_date_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_START_DATE','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['start_date']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
_trigger" align="absmiddle" />
&nbsp;(<span class="dateFormat"><?php echo $this->_tpl_vars['USER_DATEFORMAT']; ?>
</span>)
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1
}
);
</script>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='end_date_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_END_DATE','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['end_date']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
_trigger" align="absmiddle" />
&nbsp;(<span class="dateFormat"><?php echo $this->_tpl_vars['USER_DATEFORMAT']; ?>
</span>)
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1
}
);
</script>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='campaign_type_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_TYPE','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['campaign_type']['name']; ?>
" title='' tabindex="0"  onchange="type_change();">
<?php if (isset ( $this->_tpl_vars['fields']['campaign_type']['value'] ) && $this->_tpl_vars['fields']['campaign_type']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['campaign_type']['options'],'selected' => $this->_tpl_vars['fields']['campaign_type']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['campaign_type']['options'],'selected' => $this->_tpl_vars['fields']['campaign_type']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='frequency_label' width='12.5%' class="dataLabel">
<div style='none' id='freq_label'><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_FREQUENCY']; ?>
</div>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<div style='none' id='freq_field'><?php echo smarty_function_html_options(array('name' => 'frequency','options' => $this->_tpl_vars['fields']['frequency']['options'],'selected' => $this->_tpl_vars['fields']['frequency']['value']), $this);?>
</div></TD>
</tr>
<tr>
<td valign="top" id='currency_id_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>

<td valign="top" id='impressions_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_IMPRESSIONS','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['impressions']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['impressions']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['impressions']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['impressions']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['impressions']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='i' > 
</tr>
<tr>
<td valign="top" id='budget_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_BUDGET','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['budget']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['budget']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['budget']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['budget']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['budget']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='b' > 
<td valign="top" id='actual_cost_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ACTUAL_COST','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['actual_cost']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['actual_cost']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['actual_cost']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['actual_cost']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['actual_cost']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='a' > 
</tr>
<tr>
<td valign="top" id='expected_revenue_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_EXPECTED_REVENUE','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['expected_revenue']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['expected_revenue']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['expected_revenue']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['expected_revenue']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['expected_revenue']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='e' > 
<td valign="top" id='expected_cost_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_EXPECTED_COST','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['expected_cost']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['expected_cost']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['expected_cost']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['expected_cost']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['expected_cost']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='e' > 
</tr>
<tr>
<td valign="top" id='objective_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_OBJECTIVE','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['objective']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['objective']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['objective']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['objective']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['objective']['name']; ?>
" rows="8" cols="80" title='' tabindex="0"><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</tr>
<tr>
<td valign="top" id='content_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_CONTENT','module' => 'Campaigns'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['content']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['content']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['content']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['content']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['content']['name']; ?>
" rows="8" cols="80" title='' tabindex="0"><?php echo $this->_tpl_vars['value']; ?>
</textarea>
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
"> <?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Campaigns", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/javascript/popup_parent_helper.js?s=9eabf6bbd47a6d8839aeb3542b63c89e&c=1"></script>
<script type="text/javascript">
function type_change() {
	type = document.getElementsByName('campaign_type');
	if(type[0].value=='NewsLetter') {
		document.getElementById('freq_label').style.display = '';
		document.getElementById('freq_field').style.display = '';
	 } else {
		document.getElementById('freq_label').style.display = 'none';
		document.getElementById('freq_field').style.display = 'none';
	 }
 }
type_change();

function ConvertItems(id)  {
	var items = new Array();

	//get the items that are to be converted
	expected_revenue = document.getElementById('expected_revenue');
	budget = document.getElementById('budget');
	actual_cost = document.getElementById('actual_cost');
	expected_cost = document.getElementById('expected_cost');

	//unformat the values of the items to be converted
	expected_revenue.value = unformatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = unformatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = unformatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = unformatNumber(actual_cost.value, num_grp_sep, dec_sep);

	//add the items to an array
	items[items.length] = expected_revenue;
	items[items.length] = budget;
	items[items.length] = expected_cost;
	items[items.length] = actual_cost;

	//call function that will convert currency
	ConvertRate(id, items);

	//Add formatting back to items
	expected_revenue.value = formatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = formatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = formatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = formatNumber(actual_cost.value, num_grp_sep, dec_sep);
 }
</script>
<!-- End Meta-Data Javascript --><?php echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'EditView\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_NAME','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Ngày nhập\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Ngày sửa đổi\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'tracker_key\', \'int\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TRACKER_KEY','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'tracker_count\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TRACKER_COUNT','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'refer_url\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REFER_URL','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'tracker_text\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TRACKER_TEXT','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'start_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_START_DATE','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'end_date\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_END_DATE','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_STATUS','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'impressions\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_IMPRESSIONS','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'currency_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'budget\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_BUDGET','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'expected_cost\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_EXPECTED_COST','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'actual_cost\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ACTUAL_COST','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'expected_revenue\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_EXPECTED_REVENUE','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'campaign_type\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_TYPE','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'objective\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_OBJECTIVE','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'content\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_CONTENT','module' => 'Campaigns'), $this); echo '\' );
addToValidate(\'EditView\', \'frequency\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_FREQUENCY','module' => 'Campaigns'), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Campaigns'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Campaigns'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'assigned_user_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>
