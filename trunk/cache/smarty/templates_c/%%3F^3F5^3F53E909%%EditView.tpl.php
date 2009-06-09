<?php /* Smarty version 2.6.11, created on 2009-05-22 06:03:54
         compiled from cache/modules/Documents/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Documents/EditView.tpl', 33, false),array('function', 'counter', 'cache/modules/Documents/EditView.tpl', 38, false),array('function', 'sugar_translate', 'cache/modules/Documents/EditView.tpl', 43, false),array('function', 'html_options', 'cache/modules/Documents/EditView.tpl', 108, false),array('modifier', 'default', 'cache/modules/Documents/EditView.tpl', 39, false),array('modifier', 'strip_semicolon', 'cache/modules/Documents/EditView.tpl', 45, false),)), $this); ?>


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
<input type="hidden" name="old_id" value="<?php echo $this->_tpl_vars['fields']['document_revision_id']['value']; ?>
">   
<input type="hidden" name="contract_id" value="<?php echo $_REQUEST['contract_id']; ?>
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
&module_name=Documents", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<td valign="top" id='document_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['document_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['document_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['document_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['document_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['document_name']['name']; ?>
' size='30' maxlength='255' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='d' > 
</tr>
<tr>
<td valign="top" id='uploadfile_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<input tabindex="0"  type="hidden" name="escaped_document_name"><input tabindex="0"  name="uploadfile" type="<?php echo $this->_tpl_vars['FILE_OR_HIDDEN']; ?>
" size="30" maxlength="" onchange="setvalue(this);" value="<?php echo $this->_tpl_vars['fields']['filename']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['filename']['value']; ?>

<td valign="top" id='revision_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_VERSION','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<input tabindex="1"  name="revision" type="text" value="<?php echo $this->_tpl_vars['fields']['revision']['value']; ?>
" <?php echo $this->_tpl_vars['DISABLED']; ?>
>
</tr>
<tr>
<td valign="top" id='is_template_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_IS_TEMPLATE','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['is_template']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['is_template']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['is_template']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['is_template']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['is_template']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['is_template']['name']; ?>
" value="1" title='' tabindex="0" <?php echo $this->_tpl_vars['checked']; ?>
 >
<td valign="top" id='template_type_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_TEMPLATE_TYPE','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['template_type']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['template_type']['name']; ?>
" title='' tabindex="1"  >
<?php if (isset ( $this->_tpl_vars['fields']['template_type']['value'] ) && $this->_tpl_vars['fields']['template_type']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['template_type']['options'],'selected' => $this->_tpl_vars['fields']['template_type']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['template_type']['options'],'selected' => $this->_tpl_vars['fields']['template_type']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='category_id_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_CATEGORY','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['category_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['category_id']['name']; ?>
" title='' tabindex="c"  >
<?php if (isset ( $this->_tpl_vars['fields']['category_id']['value'] ) && $this->_tpl_vars['fields']['category_id']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['category_id']['options'],'selected' => $this->_tpl_vars['fields']['category_id']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['category_id']['options'],'selected' => $this->_tpl_vars['fields']['category_id']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='subcategory_id_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_SUBCATEGORY','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['subcategory_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['subcategory_id']['name']; ?>
" title='' tabindex="s"  >
<?php if (isset ( $this->_tpl_vars['fields']['subcategory_id']['value'] ) && $this->_tpl_vars['fields']['subcategory_id']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['subcategory_id']['options'],'selected' => $this->_tpl_vars['fields']['subcategory_id']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['subcategory_id']['options'],'selected' => $this->_tpl_vars['fields']['subcategory_id']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='status_id_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['status_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['status_id']['name']; ?>
" title='' tabindex="s"  >
<?php if (isset ( $this->_tpl_vars['fields']['status_id']['value'] ) && $this->_tpl_vars['fields']['status_id']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status_id']['options'],'selected' => $this->_tpl_vars['fields']['status_id']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status_id']['options'],'selected' => $this->_tpl_vars['fields']['status_id']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='active_date_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ACTIVE_DATE','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['active_date']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['active_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1
}
);
</script>
<td valign="top" id='exp_date_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_EXP_DATE','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['exp_date']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['exp_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['exp_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='e' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['exp_date']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['exp_date']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['exp_date']['name']; ?>
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
<td valign="top" id='related_doc_name_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<input tabindex="0"  name="related_document_name" type="text" size="30" maxlength="255" value="<?php echo $this->_tpl_vars['RELATED_DOCUMENT_NAME']; ?>
" readonly><input tabindex="0"  name="related_doc_id" type="hidden" value="<?php echo $this->_tpl_vars['fields']['related_doc_id']['value']; ?>
"/>&nbsp;<input tabindex="0"  title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" type="<?php echo $this->_tpl_vars['RELATED_DOCUMENT_BUTTON_AVAILABILITY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" name="btn2" onclick='open_popup("Documents", 600, 400, "", true, false, <?php echo $this->_tpl_vars['encoded_document_popup_request_data']; ?>
, "single", true);'/>
<td valign="top" id='related_doc_rev_number_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT_VERSION','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<select tabindex="1"  name="related_doc_rev_id" id="related_doc_rev_id" <?php echo $this->_tpl_vars['RELATED_DOCUMENT_REVISION_DISABLED']; ?>
><?php echo $this->_tpl_vars['RELATED_DOCUMENT_REVISION_OPTIONS']; ?>
</select>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" rows="6" cols="80" title='' tabindex="0"><?php echo $this->_tpl_vars['value']; ?>
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
&module_name=Documents", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/javascript/popup_parent_helper.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script type="text/javascript" src="include/jsolait/init.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script type="text/javascript" src="include/jsolait/lib/urllib.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script type="text/javascript" src="include/javascript/jsclass_base.js"></script>
<script type="text/javascript" src="include/javascript/jsclass_async.js"></script>
<script type="text/javascript" src="include/JSON.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
"></script>
<script type="text/javascript" src="modules/Documents/documents.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<!-- End Meta-Data Javascript --><?php echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'EditView\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Entered\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'document_name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'filename\', \'file\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'uploadfile\', \'file\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'active_date\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ACTIVE_DATE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'exp_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_EXP_DATE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'category_id\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_CATEGORY','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'subcategory_id\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_SUBCATEGORY','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'status_id\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'status\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'document_revision_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LATEST_REVISION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'revision\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_VERSION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'last_rev_created_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_CREATOR','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'last_rev_mime_type\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_MIME_TYPE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'latest_revision\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LATEST_REVISION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'last_rev_create_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_CREATE_DATE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'related_doc_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RELATED_DOCUMENT_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'related_doc_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'related_doc_rev_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RELATED_DOCUMENT_REVISION_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'related_doc_rev_number\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT_VERSION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'is_template\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_IS_TEMPLATE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'EditView\', \'template_type\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEMPLATE_TYPE','module' => 'Documents'), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Documents'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Documents'), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'related_doc_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Documents'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT','module' => 'Documents'), $this); echo '\', \'related_doc_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'related_doc_name\']={"method":"query","modules":["Documents"],"group":"or","field_list":["name","id"],"populate_list":["related_doc_name","related_doc_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>'; ?>
