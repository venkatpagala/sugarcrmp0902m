<?php /* Smarty version 2.6.11, created on 2009-06-30 14:30:25
         compiled from modules/ModuleBuilder/tpls/labels.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/ModuleBuilder/tpls/labels.tpl', 60, false),)), $this); ?>
<form name = 'editlabels' id = 'editlabels' onsubmit='return false;'>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='saveLabels'>
<input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['view_module']; ?>
'>
<?php if ($this->_tpl_vars['view_package']): ?>
    <input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['view_package']; ?>
'>
<?php endif;  if ($this->_tpl_vars['inPropertiesTab']): ?>
<input type='hidden' name='editLayout' value='<?php echo $this->_tpl_vars['editLayout']; ?>
'>
<?php elseif ($this->_tpl_vars['mb']): ?>
<input class='button' name = 'saveBtn' id = "saveBtn" type='button' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_SAVE']; ?>
' onclick='ModuleBuilder.handleSave("editlabels" );'>
<?php else: ?>
<input class='button' name = 'publishBtn' id = "publishBtn" type='button' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_SAVEPUBLISH']; ?>
' onclick='ModuleBuilder.handleSave("editlabels" );'>
<?php endif; ?>
<hr >
<input type='hidden' name='to_pdf' value='1'>

<table class='mbLBL'>
    <tr>
        <td align="right">
            <?php echo $this->_tpl_vars['mod_strings']['LBL_LANGUAGE']; ?>
&nbsp&nbsp
        </td>
        <td align='left'>
            <?php echo smarty_function_html_options(array('name' => 'selected_lang','options' => $this->_tpl_vars['available_languages'],'selected' => $this->_tpl_vars['selected_lang'],'onchange' => 'this.form.action.value="EditLabels";ModuleBuilder.handleSave("editlabels")'), $this);?>

        </td>
    <?php $_from = $this->_tpl_vars['MOD']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['label']):
?>
    <tr>
        <td align="right"><?php echo $this->_tpl_vars['key']; ?>
:&nbsp&nbsp</td>
        <td><input type='hidden' name='label_<?php echo $this->_tpl_vars['key']; ?>
' id='label_<?php echo $this->_tpl_vars['key']; ?>
' value='no_change'><input onchange='document.getElementById("label_<?php echo $this->_tpl_vars['key']; ?>
").value = this.value; ModuleBuilder.state.isDirty=true;' value='<?php echo $this->_tpl_vars['label']; ?>
' size='60'></td>
    </tr>

    <?php endforeach; endif; unset($_from); ?>

</table>
<?php if ($this->_tpl_vars['inPropertiesTab']): ?>
    <input class='button' type='button' value='<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
' onclick="ModuleBuilder.hidePropertiesTab();">
<?php endif; ?>
</form>
<script>
    //ModuleBuilder.helpRegisterByID('editlabels', 'a');
    ModuleBuilder.helpRegister('editlabels');
    ModuleBuilder.helpSetup('labelsHelp','default');
</script>