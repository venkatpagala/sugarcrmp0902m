<?php /* Smarty version 2.6.11, created on 2009-07-02 11:41:22
         compiled from cache/modules/HRM_Employees/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/HRM_Employees/DetailView.tpl', 25, false),array('function', 'counter', 'cache/modules/HRM_Employees/DetailView.tpl', 27, false),array('function', 'sugar_translate', 'cache/modules/HRM_Employees/DetailView.tpl', 33, false),array('function', 'sugar_phone', 'cache/modules/HRM_Employees/DetailView.tpl', 290, false),array('modifier', 'strip_semicolon', 'cache/modules/HRM_Employees/DetailView.tpl', 35, false),)), $this); ?>


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
" class="button" onclick="this.form.return_module.value='HRM_Employees'; this.form.return_action.value='DetailView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='HRM_Employees'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';" type="submit" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='HRM_Employees'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
');" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
</form>
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=HRM_Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align="right" width="100%"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>
</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id='DEFAULT'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width='100%' border='0' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
' cellpadding='0'  class='tabDetailView'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['name']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['id']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TRI_GRAM','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['tri_gram']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['salutation']['options'][$this->_tpl_vars['fields']['salutation']['value']]; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['first_name']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['last_name']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NUM_SECU','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['num_secu']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAI_DATE','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['nai_date']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAIS_LIEU','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['nais_lieu']['value']; ?>

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
&nbsp;
</td>
<td width='37.5%' class='tabDetailViewDF' >
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAI_DEPT','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['nai_dept']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_NATI','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['sal_nati']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_SITU','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['sal_situ']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['title']['value']; ?>

&nbsp;
</td>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("panel_0").style.display='none';</script>
<?php endif; ?>
<p>
<div id='LBL_PANEL1'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4 class="dataLabel"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL1','module' => 'HRM_Employees'), $this);?>
</h4><br>
<table width='100%' border='0' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
' cellpadding='0'  class='tabDetailView'>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['primary_address_street']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COMPLEMENT','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['primary_address_complement']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['primary_address_postalcode']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['primary_address_city']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_HOME  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_home']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_home']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value']), $this);?>

<?php endif; ?>
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_MOBILE  ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['phone_mobile']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE_OTHER','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_other']['value'] )):  $this->assign('phone_value', $this->_tpl_vars['fields']['phone_other']['value']);  echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value']), $this);?>

<?php endif; ?>
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
&nbsp;
</td>
<td width='37.5%' class='tabDetailViewDF' >
&nbsp;
</td>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("panel_1").style.display='none';</script>
<?php endif; ?>
<p>
<div id='LBL_PANEL2'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4 class="dataLabel"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL2','module' => 'HRM_Employees'), $this);?>
</h4><br>
<table width='100%' border='0' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
' cellpadding='0'  class='tabDetailView'>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_DERN','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['dat_dern']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_ENTR','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['dat_entr']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DAT_SORT','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['dat_sort']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SAL_PRES','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['sal_pres']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['sal_pres']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['sal_pres']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['sal_pres']['name']; ?>
" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NUM_SALA','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['num_sala']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_IND_SYNT','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['ind_synt']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_GROSS_INCOMES','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['gross_incomes']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
&nbsp;
</td>
<td width='37.5%' class='tabDetailViewDF' >
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PIS_NBR1','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['pis_nbr1']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PIS_NBR2','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['pis_nbr2']['value']; ?>

&nbsp;
</td>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("panel_1").style.display='none';</script>
<?php endif; ?>
<p>
<div id='LBL_PANEL3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4 class="dataLabel"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL3','module' => 'HRM_Employees'), $this);?>
</h4><br>
<table width='100%' border='0' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
' cellpadding='0'  class='tabDetailView'>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_BANQ','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['rib_banq']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_GUIC','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['rib_guic']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_COMP','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['rib_comp']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_KEYS','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['rib_keys']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_LIEU','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['rib_lieu']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_RIB_CPLET','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['rib_cplet']['value']; ?>

&nbsp;
</td>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("panel_1").style.display='none';</script>
<?php endif; ?>
<p>
<div id='LBL_PANEL4'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4 class="dataLabel"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL4','module' => 'HRM_Employees'), $this);?>
</h4><br>
<table width='100%' border='0' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
' cellpadding='0'  class='tabDetailView'>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REF_HOLY','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['ref_holy']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REF_RTTS','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['ref_rtts']['value']; ?>

&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BAL_HOLY','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['bal_holy']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BAL_RTTS','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['bal_rtts']['value']; ?>

&nbsp;
</td>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("panel_1").style.display='none';</script>
<?php endif; ?>
<p>
<div id='LBL_PANEL5'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4 class="dataLabel"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL5','module' => 'HRM_Employees'), $this);?>
</h4><br>
<table width='100%' border='0' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
' cellpadding='0'  class='tabDetailView'>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FLYINGBLUE','module' => 'HRM_Employees'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td width='37.5%' class='tabDetailViewDF' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo $this->_tpl_vars['fields']['flyingblue']['value']; ?>

&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
&nbsp;
</td>
<td width='37.5%' class='tabDetailViewDF' >
&nbsp;
</td>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("panel_1").style.display='none';</script>
<?php endif; ?>
<p>

</form>