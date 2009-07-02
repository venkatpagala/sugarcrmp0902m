<?php /* Smarty version 2.6.11, created on 2009-07-02 14:54:52
         compiled from cache/modules/Documents/form_SideQuickCreate_Documents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Documents/form_SideQuickCreate_Documents.tpl', 28, false),array('function', 'counter', 'cache/modules/Documents/form_SideQuickCreate_Documents.tpl', 33, false),array('function', 'sugar_translate', 'cache/modules/Documents/form_SideQuickCreate_Documents.tpl', 37, false),array('modifier', 'default', 'cache/modules/Documents/form_SideQuickCreate_Documents.tpl', 34, false),)), $this); ?>


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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Documents'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['document_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['document_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['document_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['document_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['document_name']['name']; ?>
' size='20' maxlength='255' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Documents'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<input tabindex="0"  type="file" value="" maxlength="255" size="11" title="" name="uploadfile" id="uploadfile"/>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_VERSION','module' => 'Documents'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['revision']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['revision']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['revision']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['revision']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['revision']['name']; ?>
' size='11'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ACTIVE_DATE','module' => 'Documents'), $this);?>
:
<span class="required">*</span>
<br>
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
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('form_SideQuickCreate_Documents');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Documents", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
num_grp_sep = \',\';

						 dec_sep = \'.\';
addToValidate(\'form_SideQuickCreate_Documents\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'date_entered_date\', \'date\', false,\'Ngày nhập\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'date_modified_date\', \'date\', false,\'Ngày chỉnh sủa\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'document_name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'filename\', \'file\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'uploadfile\', \'file\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'active_date\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ACTIVE_DATE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'exp_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_EXP_DATE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'category_id\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_CATEGORY','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'subcategory_id\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SF_SUBCATEGORY','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'status_id\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'status\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'document_revision_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LATEST_REVISION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'revision\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_VERSION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'last_rev_created_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_CREATOR','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'last_rev_mime_type\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_MIME_TYPE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'latest_revision\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LATEST_REVISION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'last_rev_create_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_REV_CREATE_DATE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'related_doc_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RELATED_DOCUMENT_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'related_doc_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'related_doc_rev_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RELATED_DOCUMENT_REVISION_ID','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'related_doc_rev_number\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DET_RELATED_DOCUMENT_VERSION','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'is_template\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_IS_TEMPLATE','module' => 'Documents'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Documents\', \'template_type\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEMPLATE_TYPE','module' => 'Documents'), $this); echo '\' );
addToValidateBinaryDependency(\'form_SideQuickCreate_Documents\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Documents'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Documents'), $this); echo '\', \'assigned_user_id\' );
</script>'; ?>
