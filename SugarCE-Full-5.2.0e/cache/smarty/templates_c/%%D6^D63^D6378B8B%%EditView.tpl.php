<?php /* Smarty version 2.6.11, created on 2009-06-30 18:16:45
         compiled from cache/modules/HRM_Bonus/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/HRM_Bonus/EditView.tpl', 31, false),array('function', 'counter', 'cache/modules/HRM_Bonus/EditView.tpl', 36, false),array('function', 'sugar_translate', 'cache/modules/HRM_Bonus/EditView.tpl', 41, false),array('function', 'html_options', 'cache/modules/HRM_Bonus/EditView.tpl', 81, false),array('modifier', 'default', 'cache/modules/HRM_Bonus/EditView.tpl', 37, false),array('modifier', 'strip_semicolon', 'cache/modules/HRM_Bonus/EditView.tpl', 43, false),)), $this); ?>


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
&module_name=HRM_Bonus", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<td valign="top" id='hrm_employees_hrm_bonus_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['id_name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['hrm_employe_employees_ida']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['name']; ?>
" tabindex="0" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"hrm_employe_employees_ida","name":"hrm_employees_hrm_bonus_name"}}'; ?>
, "single", true);'>
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['name']; ?>
" tabindex="0" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button" onclick="this.form.<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['hrm_employees_hrm_bonus_name']['id_name']; ?>
.value = '';" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
">
<td valign="top" id='name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' maxlength='255' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='bon_mois_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_MOIS','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['bon_mois']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['bon_mois']['name']; ?>
" title='' tabindex="0"  >
<?php if (isset ( $this->_tpl_vars['fields']['bon_mois']['value'] ) && $this->_tpl_vars['fields']['bon_mois']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_mois']['options'],'selected' => $this->_tpl_vars['fields']['bon_mois']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_mois']['options'],'selected' => $this->_tpl_vars['fields']['bon_mois']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='bon_year_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_YEAR','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['bon_year']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['bon_year']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['bon_year']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['bon_year']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['bon_year']['name']; ?>
' size='30' maxlength='11' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" rows="4" cols="60" title='' tabindex="0"><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<td valign="top" id='bon_turn_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TURN','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['bon_turn']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['bon_turn']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['bon_turn']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['bon_turn']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['bon_turn']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='1' > 
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
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL1','module' => 'HRM_Bonus'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='bon_cri1_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI1','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['bon_cri1']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['bon_cri1']['name']; ?>
" title='' tabindex="2"  >
<?php if (isset ( $this->_tpl_vars['fields']['bon_cri1']['value'] ) && $this->_tpl_vars['fields']['bon_cri1']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri1']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri1']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri1']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri1']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='bon_cri2_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI2','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['bon_cri2']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['bon_cri2']['name']; ?>
" title='' tabindex="3"  >
<?php if (isset ( $this->_tpl_vars['fields']['bon_cri2']['value'] ) && $this->_tpl_vars['fields']['bon_cri2']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri2']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri2']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri2']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri2']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='bon_cri3_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI3','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['bon_cri3']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['bon_cri3']['name']; ?>
" title='' tabindex="2"  >
<?php if (isset ( $this->_tpl_vars['fields']['bon_cri3']['value'] ) && $this->_tpl_vars['fields']['bon_cri3']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri3']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri3']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri3']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri3']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='bon_cri4_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI4','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['bon_cri4']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['bon_cri4']['name']; ?>
" title='' tabindex="3"  >
<?php if (isset ( $this->_tpl_vars['fields']['bon_cri4']['value'] ) && $this->_tpl_vars['fields']['bon_cri4']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri4']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri4']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri4']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri4']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='bon_cri5_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI5','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['bon_cri5']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['bon_cri5']['name']; ?>
" title='' tabindex="2"  >
<?php if (isset ( $this->_tpl_vars['fields']['bon_cri5']['value'] ) && $this->_tpl_vars['fields']['bon_cri5']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri5']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri5']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri5']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri5']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='bon_cri6_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI6','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['bon_cri6']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['bon_cri6']['name']; ?>
" title='' tabindex="3"  >
<?php if (isset ( $this->_tpl_vars['fields']['bon_cri6']['value'] ) && $this->_tpl_vars['fields']['bon_cri6']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri6']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri6']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['bon_cri6']['options'],'selected' => $this->_tpl_vars['fields']['bon_cri6']['default']), $this);?>

<?php endif; ?>
</select>
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
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL2','module' => 'HRM_Bonus'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='but_calc_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BUT_CALC','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['but_calc']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['but_calc']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['but_calc']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['but_calc']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['but_calc']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='4' > 
<td valign="top" id='bon_amou_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_AMOU','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['bon_amou']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['bon_amou']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['bon_amou']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['bon_amou']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['bon_amou']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='5' > 
</tr>
<tr>
<td valign="top" id='bon_tbas_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TBAS','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['bon_tbas']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['bon_tbas']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['bon_tbas']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['bon_tbas']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['bon_tbas']['name']; ?>
' size='30' maxlength='18' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='4' > 
<td valign="top" id='bon_tteo_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TTEO','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['bon_tteo']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['bon_tteo']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['bon_tteo']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['bon_tteo']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['bon_tteo']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='5' > 
</tr>
<tr>
<td valign="top" id='bon_rate_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_RATE','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['bon_rate']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['bon_rate']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['bon_rate']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['bon_rate']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['bon_rate']['name']; ?>
' size='30' maxlength='18' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='4' > 
<td valign="top" id='bon_vali_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_VALI','module' => 'HRM_Bonus'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['bon_vali']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['bon_vali']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['bon_vali']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['bon_vali']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['bon_vali']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['bon_vali']['name']; ?>
" value="1" title='' tabindex="5" <?php echo $this->_tpl_vars['checked']; ?>
 >
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
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL3','module' => 'HRM_Bonus'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
</tr>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL3").style.display='none';</script>
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
&module_name=HRM_Bonus", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'EditView\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Ngày tạo\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Thay đổi lần cuối\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_mois\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_MOIS','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidateRange(\'EditView\', \'bon_year\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_YEAR','module' => 'HRM_Bonus'), $this); echo '\', 2000, 2020 );
addToValidate(\'EditView\', \'bon_tteo\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TTEO','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_cri1\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI1','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_cri2\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI2','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_cri3\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI3','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_cri4\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI4','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_cri5\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI5','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_cri6\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_CRI6','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'but_calc\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BUT_CALC','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_vali\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_VALI','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_paid\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_PAID','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_tbas\', \'float\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TBAS','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_amou\', \'currency\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_AMOU','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_turn\', \'currency\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TURN','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'currency_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'sum_mois\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUM_MOIS','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'sum_year\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUM_YEAR','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_rate\', \'float\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_RATE','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_tupd\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TUPD','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'bon_turn_pond_year\', \'code\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BON_TURN_POND_YEAR','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidate(\'EditView\', \'hrm_employees_hrm_bonus_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HRM_EMPLOYEES_HRM_BONUS_FROM_HRM_EMPLOYEES_TITLE','module' => 'HRM_Bonus'), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'HRM_Bonus'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'HRM_Bonus'), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'hrm_employees_hrm_bonus_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'HRM_Bonus'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'undefined','module' => 'HRM_Bonus'), $this); echo '\', \'hrm_employe_employees_ida\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'hrm_employees_hrm_bonus_name\']={"method":"query","modules":["HRM_Employees"],"group":"or","field_list":["name","id"],"populate_list":["hrm_employees_hrm_bonus_name","hrm_employe_employees_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>
