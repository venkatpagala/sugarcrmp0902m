<?php /* Smarty version 2.6.11, created on 2009-07-01 10:28:44
         compiled from cache/modules/Employees/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Employees/EditView.tpl', 31, false),array('function', 'counter', 'cache/modules/Employees/EditView.tpl', 36, false),array('function', 'sugar_translate', 'cache/modules/Employees/EditView.tpl', 41, false),array('modifier', 'default', 'cache/modules/Employees/EditView.tpl', 37, false),array('modifier', 'strip_semicolon', 'cache/modules/Employees/EditView.tpl', 43, false),)), $this); ?>


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
&module_name=Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<td valign="top" id='employee_status_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_STATUS','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['employee_status']['value']; ?>

</tr>
<tr>
<td valign="top" id='first_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['first_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['first_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['first_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' size='30' maxlength='30' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='f' > 
<td valign="top" id='last_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' size='30' maxlength='30' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='title_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['EDIT_REPORTS_TO']): ?><input tabindex="0"  type="text" name="<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
" size="30" maxlength="50" value="<?php echo $this->_tpl_vars['fields']['title']['value']; ?>
" title="" tabindex="t" ><?php else:  echo $this->_tpl_vars['fields']['title']['value']; ?>
<input tabindex="0"  type="hidden" name="<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['title']['value']; ?>
"><?php endif; ?>
<td valign="top" id='phone_work_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='department_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['EDIT_REPORTS_TO']): ?><input tabindex="0"  type="text" name="<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
" size="30" maxlength="50" value="<?php echo $this->_tpl_vars['fields']['department']['value']; ?>
" title="" tabindex="t" ><?php else:  echo $this->_tpl_vars['fields']['department']['value']; ?>
<input tabindex="0"  type="hidden" name="<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['department']['value']; ?>
"><?php endif; ?>
<td valign="top" id='phone_mobile_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='p' > 
</tr>
<tr>
<td valign="top" id='reports_to_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php if ($this->_tpl_vars['EDIT_REPORTS_TO']): ?><input tabindex="0"  type="text" name="<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['reports_to_name']['value']; ?>
" title="" autocomplete="off" ><input tabindex="0"  type="hidden" name="<?php echo $this->_tpl_vars['fields']['reports_to_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['reports_to_id']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['reports_to_id']['value']; ?>
"><input tabindex="0"  type="button" name="btn_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" tabindex="0" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['reports_to_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","name":"reports_to_name"}}'; ?>
, "single", true);'><input tabindex="0"  type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
" tabindex="0" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button" onclick="this.form.<?php echo $this->_tpl_vars['fields']['reports_to_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['reports_to_id']['name']; ?>
.value = '';" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
"><?php else:  echo $this->_tpl_vars['fields']['reports_to_name']['value']; ?>
<input tabindex="0"  type="hidden" name="<?php echo $this->_tpl_vars['fields']['reports_to_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['reports_to_id']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['reports_to_id']['value']; ?>
"><?php endif; ?>
<td valign="top" id='phone_other_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_other']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_other']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_other']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_other']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_other']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='p' > 
</tr>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<td valign="top" id='phone_fax_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_fax']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<td valign="top" id='phone_home_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_home']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='p' > 
</tr>
<tr>
<td valign="top" id='messenger_type_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_TYPE','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['messenger_type']['value']; ?>

</tr>
<tr>
<td valign="top" id='messenger_id_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_ID','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['messenger_id']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='m' > 
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NOTES','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" rows="4" cols="60" title='' tabindex="0"><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</tr>
<tr>
<td valign="top" id='address_street_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['address_street']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['address_street']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_street']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['address_street']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['address_street']['name']; ?>
" rows="2" cols="30" title='' tabindex="0"><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<td valign="top" id='address_city_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CITY','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_city']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_city']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_city']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='address_state_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_state']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_state']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_state']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
<td valign="top" id='address_postalcode_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_POSTAL_CODE','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_postalcode']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
' size='30' maxlength='9' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='address_country_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_COUNTRY','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_country']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['address_country']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['address_country']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" id='email1_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL','module' => 'Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['email1']['value']; ?>

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
&module_name=Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'EditView\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'user_name\', \'user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_NAME','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'user_hash\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_HASH','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'authenticate_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_AUTHENTICATE_ID','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'sugar_login\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUGAR_LOGIN','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'first_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'last_name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'full_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'reports_to_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_ID','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'reports_to_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'is_admin\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_IS_ADMIN','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'receive_notifications\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RECEIVE_NOTIFICATIONS','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', true,\'Ngày tạo\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', true,\'Thay đổi lần cuối\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_BY_ID','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_BY','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'department\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'phone_home\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'phone_mobile\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'phone_work\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_PHONE','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'phone_other\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'phone_fax\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STREET','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_CITY','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STATE','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_COUNTRY','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_POSTALCODE','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'user_preferences\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_USER_PREFERENCES','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'portal_only\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_ONLY','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'employee_status\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_STATUS','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'messenger_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_ID','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'messenger_type\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_TYPE','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'email1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'is_group\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_GROUP','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'c_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'m_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'accept_status_name\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Employees'), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Employees'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Employees'), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'reports_to_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Employees'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Employees'), $this); echo '\', \'reports_to_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'reports_to_name\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name","reports_to_id"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>
