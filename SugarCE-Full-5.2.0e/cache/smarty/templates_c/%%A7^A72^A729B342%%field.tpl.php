<?php /* Smarty version 2.6.11, created on 2009-07-02 10:30:12
         compiled from modules/ModuleBuilder/tpls/MBModule/field.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/ModuleBuilder/tpls/MBModule/field.tpl', 81, false),array('function', 'sugar_help', 'modules/ModuleBuilder/tpls/MBModule/field.tpl', 82, false),)), $this); ?>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000"></div>
<?php echo '
<script>
addForm(\'popup_form\');
</script>
'; ?>


<form name='popup_form' id='popup_form_id' onsubmit='return false;'>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='<?php echo $this->_tpl_vars['action']; ?>
'>
<input type='hidden' name='new_dropdown' value=''>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['module']->name; ?>
'>
<?php if (isset ( $this->_tpl_vars['package']->name )): ?>
    <input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['package']->name; ?>
'>
<?php endif; ?>
<input type='hidden' name='is_update' value='true'>
            <?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
                &nbsp;<input type='button' class='button' name='fsavebtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_SAVE']; ?>
' onclick='<?php echo 'if(validate_type_selection() && check_form("popup_form")){ ';  echo $this->_tpl_vars['preSave']; ?>
 <?php echo 'ModuleBuilder.submitForm("popup_form"); }'; ?>
'>
                <?php if (! empty ( $this->_tpl_vars['vardef']['name'] )): ?>
                    <?php if ($this->_tpl_vars['hideLevel'] < 3): ?>
                    <?php echo '
                        &nbsp;<input type=\'button\' class=\'button\' name=\'fdeletebtn\' value=\'';  echo $this->_tpl_vars['mod_strings']['LBL_BTN_DELETE'];  echo '\' onclick=\'if(confirm("';  echo $this->_tpl_vars['mod_strings']['LBL_CONFIRM_FIELD_DELETE'];  echo '")){document.popup_form.action.value="DeleteField";ModuleBuilder.submitForm("popup_form");}\'>
                    '; ?>

                    <?php endif; ?>
                    <?php echo '
                    &nbsp;<input type=\'button\' class=\'button\' name=\'fclonebtn\' value=\'';  echo $this->_tpl_vars['mod_strings']['LBL_BTN_CLONE'];  echo '\' onclick=\'document.popup_form.action.value="CloneField";ModuleBuilder.submitForm("popup_form");\'>
                    '; ?>

                <?php endif; ?>

            <?php else: ?>
                <?php echo '
                 <input type=\'button\' class=\'button\' name=\'lsavebtn\' value=\'';  echo $this->_tpl_vars['mod_strings']['LBL_BTN_SAVE'];  echo '\' onclick=\'if(check_form("popup_form")){this.form.action.value = "';  echo $this->_tpl_vars['action'];  echo '";ModuleBuilder.submitForm("popup_form")};\'>
                '; ?>

                <?php echo '
                    &nbsp;<input type=\'button\' class=\'button\' name=\'fclonebtn\' value=\'';  echo $this->_tpl_vars['mod_strings']['LBL_BTN_CLONE'];  echo '\' onclick=\'document.popup_form.action.value="CloneField";ModuleBuilder.submitForm("popup_form");\'>
                 '; ?>

            <?php endif; ?>
<hr>

<table width="400px" >
<tr>
    <td class="mbLBL" style="width:92px;"><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_DATA_TYPE']; ?>
:</td>
    <td ><?php if (empty ( $this->_tpl_vars['vardef']['name'] ) && $this->_tpl_vars['isClone'] == 0): ?>
                <?php echo smarty_function_html_options(array('name' => 'type','id' => 'type','options' => $this->_tpl_vars['field_types'],'selected' => $this->_tpl_vars['vardef']['type'],'onchange' => 'ModuleBuilder.moduleLoadField("", this.options[this.selectedIndex].value);'), $this);?>

                <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod_strings']['LBL_POPHELP_FIELD_DATA_TYPE'],'FIXX' => 250,'FIXY' => 80), $this);?>

            <?php else: ?>
                <?php echo $this->_tpl_vars['field_types'][$this->_tpl_vars['vardef']['type']]; ?>

            <?php endif; ?>
            <?php if (empty ( $this->_tpl_vars['field_types'][$this->_tpl_vars['vardef']['type']] ) && ! empty ( $this->_tpl_vars['vardef']['type'] )): ?>(<?php echo $this->_tpl_vars['vardef']['type']; ?>
)<?php endif; ?>
            <input type='hidden' name='type' value=<?php echo $this->_tpl_vars['vardef']['type']; ?>
>
    </td>
</tr>
</table>
<?php echo $this->_tpl_vars['fieldLayout']; ?>


</form>
<script>
<?php echo '
function validate_type_selection(){
    var typeSel = document.getElementById(\'type\');
    if(typeSel && typeSel.options){
        if(typeSel.options[typeSel.selectedIndex].value == \'\'){
            alert(\'';  echo $this->_tpl_vars['MOD']['ERR_SELECT_FIELD_TYPE'];  echo '\');
            return false;
        }
    }
    return true;
}
'; ?>

ModuleBuilder.helpSetup('fieldsEditor','<?php echo $this->_tpl_vars['help_group']; ?>
');
</script>
