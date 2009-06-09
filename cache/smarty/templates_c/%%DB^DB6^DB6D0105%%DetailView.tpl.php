<?php /* Smarty version 2.6.11, created on 2009-06-05 16:51:24
         compiled from cache/modules/Documents/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Documents/DetailView.tpl', 26, false),array('function', 'counter', 'cache/modules/Documents/DetailView.tpl', 28, false),array('function', 'sugar_translate', 'cache/modules/Documents/DetailView.tpl', 34, false),array('modifier', 'strip_semicolon', 'cache/modules/Documents/DetailView.tpl', 36, false),array('modifier', 'url2html', 'cache/modules/Documents/DetailView.tpl', 218, false),array('modifier', 'nl2br', 'cache/modules/Documents/DetailView.tpl', 218, false),)), $this); ?>


<table cellpadding="1" cellspacing="0" border="0" width="100%">
<tr>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id"> 
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="old_id" value="<?php echo $this->_tpl_vars['fields']['document_revision_id']['value']; ?>
">   
<input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='<?php echo $this->_tpl_vars['module']; ?>
'; this.form.return_action.value='DetailView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; this.form.action.value='EditView'" type="submit" name="Edit" id='edit_button' value="  <?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
  "> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='<?php echo $this->_tpl_vars['module']; ?>
'; this.form.return_action.value='index'; this.form.isDuplicate.value=true; this.form.action.value='EditView'" type="submit" name="Duplicate" value=" <?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
 " id='duplicate_button'> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='<?php echo $this->_tpl_vars['module']; ?>
'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
')" type="submit" name="Delete" value=" <?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
 " >
</form>
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Documents", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align="right" width="100%"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>
</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id=''>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width='100%' border='0' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
' cellpadding='0'  class='tabDetailView'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_NAME','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['document_name']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_VERSION','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['revision']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_IS_TEMPLATE','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['is_template']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['is_template']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['is_template']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['is_template']['name']; ?>
" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_TEMPLATE_TYPE','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['template_type']['options'][$this->_tpl_vars['fields']['template_type']['value']]; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_CATEGORY','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['category_id']['options'][$this->_tpl_vars['fields']['category_id']['value']]; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_SUBCATEGORY','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['subcategory_id']['options'][$this->_tpl_vars['fields']['subcategory_id']['value']]; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['status']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_CREATOR','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['last_rev_created_name']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_CREATE_DATE','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['last_rev_create_date']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ACTIVE_DATE','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['active_date']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_EXP_DATE','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['exp_date']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['related_doc_id']['value'] )): ?><a href="index.php?module=Documents&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['related_doc_id']['value']; ?>
" class="tabDetailViewDFLink"><?php endif;  echo $this->_tpl_vars['fields']['related_doc_name']['value']; ?>

<?php if (! empty ( $this->_tpl_vars['fields']['related_doc_id']['value'] )): ?></a><?php endif; ?>
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT_VERSION','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['related_doc_rev_number']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_DESCRIPTION','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Documents'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<a href="index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['fields']['document_revision_id']['value']; ?>
&type=<?php echo $this->_tpl_vars['module']; ?>
" class="tabDetailViewDFLink"><?php echo $this->_tpl_vars['fields']['filename']['value']; ?>
</a>
&nbsp;
</td>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("panel_0").style.display='none';</script>
<?php endif; ?>
<p>

</form>