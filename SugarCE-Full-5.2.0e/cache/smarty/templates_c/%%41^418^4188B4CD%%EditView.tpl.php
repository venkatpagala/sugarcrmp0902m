<?php /* Smarty version 2.6.11, created on 2009-07-02 10:49:28
         compiled from cache/modules/HRM_Employees/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/HRM_Employees/EditView.tpl', 31, false),array('function', 'counter', 'cache/modules/HRM_Employees/EditView.tpl', 36, false),array('function', 'sugar_translate', 'cache/modules/HRM_Employees/EditView.tpl', 41, false),array('function', 'html_options', 'cache/modules/HRM_Employees/EditView.tpl', 115, false),array('modifier', 'default', 'cache/modules/HRM_Employees/EditView.tpl', 37, false),array('modifier', 'strip_semicolon', 'cache/modules/HRM_Employees/EditView.tpl', 43, false),)), $this); ?>


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
&module_name=HRM_Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' maxlength='255' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" id='first_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['first_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['first_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['first_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
<td valign="top" id='last_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='tri_gram_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TRI_GRAM','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['tri_gram']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['tri_gram']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['tri_gram']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['tri_gram']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['tri_gram']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
<td valign="top" id='salutation_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['salutation']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['salutation']['name']; ?>
" title='' tabindex="1"  >
<?php if (isset ( $this->_tpl_vars['fields']['salutation']['value'] ) && $this->_tpl_vars['fields']['salutation']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['salutation']['options'],'selected' => $this->_tpl_vars['fields']['salutation']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['salutation']['options'],'selected' => $this->_tpl_vars['fields']['salutation']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='num_secu_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NUM_SECU','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['num_secu']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['num_secu']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['num_secu']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['num_secu']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['num_secu']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" id='nai_date_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAI_DATE','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['nai_date']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['nai_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['nai_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['nai_date']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['nai_date']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['nai_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1
}
);
</script>
<td valign="top" id='nais_lieu_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAIS_LIEU','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['nais_lieu']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['nais_lieu']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['nais_lieu']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['nais_lieu']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['nais_lieu']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='nai_dept_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAI_DEPT','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['nai_dept']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['nai_dept']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['nai_dept']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['nai_dept']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['nai_dept']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
<td valign="top" id='sal_nati_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_NATI','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['sal_nati']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['sal_nati']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['sal_nati']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['sal_nati']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['sal_nati']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='sal_situ_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_SITU','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['sal_situ']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['sal_situ']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['sal_situ']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['sal_situ']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['sal_situ']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
<td valign="top" id='title_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['title']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>
<p>
<div id="LBL_PANEL1">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'tabForm') : smarty_modifier_default($_tmp, 'tabForm')); ?>
">
<th class="dataLabel" align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL1','module' => 'HRM_Employees'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='primary_address_street_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_street']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['primary_address_street']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['primary_address_street']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['primary_address_street']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['primary_address_street']['name']; ?>
' size='30' maxlength='150' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='2' > 
</tr>
<tr>
<td valign="top" id='primary_address_complement_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COMPLEMENT','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_complement']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['primary_address_complement']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['primary_address_complement']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['primary_address_complement']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['primary_address_complement']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='2' > 
</tr>
<tr>
<td valign="top" id='primary_address_postalcode_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_postalcode']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['primary_address_postalcode']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['primary_address_postalcode']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['primary_address_postalcode']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['primary_address_postalcode']['name']; ?>
' size='30' maxlength='20' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='2' > 
<td valign="top" id='primary_address_city_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['primary_address_city']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['primary_address_city']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['primary_address_city']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['primary_address_city']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['primary_address_city']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='3' > 
</tr>
<tr>
<td valign="top" id='phone_home_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_HOME  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_home']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_home']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_home']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='2' > 
<td valign="top" id='phone_mobile_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_MOBILE  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='3' > 
</tr>
<tr>
<td valign="top" id='phone_other_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_OTHER','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_other']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_other']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_other']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_other']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_other']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='2' > 
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL1").style.display='none';</script>
<?php endif; ?>
<p>
<div id="LBL_PANEL2">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'tabForm') : smarty_modifier_default($_tmp, 'tabForm')); ?>
">
<th class="dataLabel" align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL2','module' => 'HRM_Employees'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='dat_dern_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_DERN','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['dat_dern']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['dat_dern']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['dat_dern']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='4' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['dat_dern']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['dat_dern']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['dat_dern']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1
}
);
</script>
<td valign="top" id='dat_entr_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_ENTR','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['dat_entr']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['dat_entr']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['dat_entr']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='5' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['dat_entr']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['dat_entr']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['dat_entr']['name']; ?>
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
<td valign="top" id='dat_sort_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_SORT','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['dat_sort']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['dat_sort']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['dat_sort']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='4' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['dat_sort']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['dat_sort']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['dat_sort']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1
}
);
</script>
<td valign="top" id='sal_pres_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_PRES','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['sal_pres']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['sal_pres']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['sal_pres']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['sal_pres']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['sal_pres']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['sal_pres']['name']; ?>
" value="1" title='' tabindex="5" <?php echo $this->_tpl_vars['checked']; ?>
 >
</tr>
<tr>
<td valign="top" id='num_sala_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NUM_SALA','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['num_sala']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['num_sala']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['num_sala']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['num_sala']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['num_sala']['name']; ?>
' size='30' maxlength='11' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='4' > 
<td valign="top" id='ind_synt_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_IND_SYNT','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['ind_synt']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['ind_synt']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['ind_synt']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['ind_synt']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['ind_synt']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='5' > 
</tr>
<tr>
<td valign="top" id='gross_incomes_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_GROSS_INCOMES','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['gross_incomes']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['gross_incomes']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['gross_incomes']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['gross_incomes']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['gross_incomes']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='4' > 
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='pis_nbr1_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PIS_NBR1','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['pis_nbr1']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['pis_nbr1']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['pis_nbr1']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['pis_nbr1']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['pis_nbr1']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='4' > 
<td valign="top" id='pis_nbr2_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PIS_NBR2','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['pis_nbr2']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['pis_nbr2']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['pis_nbr2']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['pis_nbr2']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['pis_nbr2']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='5' > 
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL2").style.display='none';</script>
<?php endif; ?>
<p>
<div id="LBL_PANEL3">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'tabForm') : smarty_modifier_default($_tmp, 'tabForm')); ?>
">
<th class="dataLabel" align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL3','module' => 'HRM_Employees'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='rib_banq_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_BANQ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['rib_banq']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['rib_banq']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['rib_banq']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['rib_banq']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['rib_banq']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='6' > 
<td valign="top" id='rib_guic_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_GUIC','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['rib_guic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['rib_guic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['rib_guic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['rib_guic']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['rib_guic']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='7' > 
</tr>
<tr>
<td valign="top" id='rib_comp_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_COMP','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['rib_comp']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['rib_comp']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['rib_comp']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['rib_comp']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['rib_comp']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='6' > 
<td valign="top" id='rib_keys_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_KEYS','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['rib_keys']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['rib_keys']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['rib_keys']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['rib_keys']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['rib_keys']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='7' > 
</tr>
<tr>
<td valign="top" id='rib_lieu_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_LIEU','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['rib_lieu']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['rib_lieu']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['rib_lieu']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['rib_lieu']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['rib_lieu']['name']; ?>
' size='30' maxlength='150' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='6' > 
</tr>
<tr>
<td valign="top" id='rib_cplet_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_CPLET','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['rib_cplet']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['rib_cplet']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['rib_cplet']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['rib_cplet']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['rib_cplet']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='6' > 
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL3").style.display='none';</script>
<?php endif; ?>
<p>
<div id="LBL_PANEL4">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'tabForm') : smarty_modifier_default($_tmp, 'tabForm')); ?>
">
<th class="dataLabel" align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL4','module' => 'HRM_Employees'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='ref_holy_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REF_HOLY','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['ref_holy']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['ref_holy']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['ref_holy']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['ref_holy']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['ref_holy']['name']; ?>
' size='30' maxlength='18' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='8' > 
<td valign="top" id='ref_rtts_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REF_RTTS','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['ref_rtts']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['ref_rtts']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['ref_rtts']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['ref_rtts']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['ref_rtts']['name']; ?>
' size='30' maxlength='18' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='9' > 
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL4").style.display='none';</script>
<?php endif; ?>
<p>
<div id="LBL_PANEL5">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'tabForm') : smarty_modifier_default($_tmp, 'tabForm')); ?>
">
<th class="dataLabel" align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL5','module' => 'HRM_Employees'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='flyingblue_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FLYINGBLUE','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['flyingblue']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['flyingblue']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['flyingblue']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['flyingblue']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['flyingblue']['name']; ?>
' size='30' maxlength='25' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='10' > 
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL5").style.display='none';</script>
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
&module_name=HRM_Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'EditView\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Ngày tạo\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Ngày chỉnh sửa\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'salutation\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'phone_other\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_OTHER','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY  ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'phone_home\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_HOME  ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'first_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'last_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'full_name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FNAME','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'phone_mobile\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_MOBILE  ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE  ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'primary_address_complement\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COMPLEMENT','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'num_secu\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NUM_SECU','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'nais_lieu\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAIS_LIEU','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'nai_dept\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAI_DEPT','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'dat_entr\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_ENTR','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'dat_dern\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_DERN','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'dat_sort\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_SORT','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'tri_gram\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TRI_GRAM','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'rib_banq\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_BANQ','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'rib_guic\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_GUIC','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'rib_comp\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_COMP','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'rib_keys\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_KEYS','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'num_sala\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NUM_SALA','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'rib_cplet\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_CPLET','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'nai_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAI_DATE','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'pis_nbr1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PIS_NBR1','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'pis_nbr2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PIS_NBR2','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'sal_nati\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_NATI','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'sal_situ\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_SITU','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'rib_lieu\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_LIEU','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'ind_synt\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_IND_SYNT','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'bal_holy\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BAL_HOLY','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'bal_rtts\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BAL_RTTS','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'sal_pres\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_PRES','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'ref_holy\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REF_HOLY','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'gross_incomes\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_GROSS_INCOMES','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'currency_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'ref_rtts\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REF_RTTS','module' => 'HRM_Employees'), $this); echo '\' );
addToValidate(\'EditView\', \'flyingblue\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FLYINGBLUE','module' => 'HRM_Employees'), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'HRM_Employees'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'HRM_Employees'), $this); echo '\', \'assigned_user_id\' );
</script>'; ?>
