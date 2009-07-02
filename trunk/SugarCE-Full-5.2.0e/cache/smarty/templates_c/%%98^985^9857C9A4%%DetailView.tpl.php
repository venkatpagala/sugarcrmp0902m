<?php /* Smarty version 2.6.11, created on 2009-07-02 14:52:47
         compiled from cache/modules/Tasks/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Tasks/DetailView.tpl', 31, false),array('function', 'counter', 'cache/modules/Tasks/DetailView.tpl', 33, false),array('function', 'sugar_translate', 'cache/modules/Tasks/DetailView.tpl', 39, false),array('function', 'sugar_phone', 'cache/modules/Tasks/DetailView.tpl', 137, false),array('modifier', 'strip_semicolon', 'cache/modules/Tasks/DetailView.tpl', 41, false),array('modifier', 'url2html', 'cache/modules/Tasks/DetailView.tpl', 210, false),array('modifier', 'nl2br', 'cache/modules/Tasks/DetailView.tpl', 210, false),)), $this); ?>


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
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='Tasks'; this.form.return_action.value='DetailView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='Tasks'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';" type="submit" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='Tasks'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
');" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<td style="padding-bottom: 2px;" align="left" NOWRAP>
<?php if ($this->_tpl_vars['fields']['status']['value'] != 'Completed'): ?> <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input title="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_TITLE']; ?>
"  accesskey="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_KEY']; ?>
"  class="button"  onclick="this.form.action.value='Save'; this.form.return_module.value='Tasks'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value='EditView'; this.form.isDuplicate.value=true; this.form.return_id.value='<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
';"  name="button"  value="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_TITLE']; ?>
"  type="submit"><?php endif; ?>
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
<?php if ($this->_tpl_vars['fields']['status']['value'] != 'Completed'): ?> <input type="hidden" name="isSave" value="false">  <input title="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_BUTTON_TITLE']; ?>
"  accesskey="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_BUTTON_KEY']; ?>
"  class="button"  onclick="this.form.status.value='Completed'; this.form.action.value='Save';this.form.return_module.value='Tasks';this.form.isSave.value=true;this.form.return_action.value='DetailView'; this.form.return_id.value='<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'"  name="button1"  value="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_BUTTON_TITLE']; ?>
"  type="submit"><?php endif; ?>
</td>
</form>
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Tasks", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['name']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['status']['options'][$this->_tpl_vars['fields']['status']['value']]; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DUE_DATE','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['date_due']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODULE_NAME','module' => $this->_tpl_vars['fields']['parent_type']['value']), $this);?>

</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<a href="index.php?module=<?php echo $this->_tpl_vars['fields']['parent_type']['value']; ?>
&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['parent_id']['value']; ?>
" class="tabDetailViewDFLink"><?php echo $this->_tpl_vars['fields']['parent_name']['value']; ?>
</a>
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_START_DATE','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['date_start']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['contact_id']['value'] )): ?><a href="index.php?module=Contacts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['contact_id']['value']; ?>
" class="tabDetailViewDFLink"><?php endif;  echo $this->_tpl_vars['fields']['contact_name']['value']; ?>

<?php if (! empty ( $this->_tpl_vars['fields']['contact_id']['value'] )): ?></a><?php endif; ?>
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['priority']['options'][$this->_tpl_vars['fields']['priority']['value']]; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['contact_phone']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['contact_phone']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value']), $this);?>

<?php endif; ?>
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
&nbsp;
</td>
<td width='37.5%' class='tabDetailViewDF' >
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['contact_email']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_MODIFIED','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php echo $this->_tpl_vars['fields']['date_modified']['value']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BY']; ?>
 <?php echo $this->_tpl_vars['fields']['modified_by_name']['value']; ?>
	
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_ENTERED','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<?php echo $this->_tpl_vars['fields']['date_entered']['value']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BY']; ?>
 <?php echo $this->_tpl_vars['fields']['created_by_name']['value']; ?>
	
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Tasks'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

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