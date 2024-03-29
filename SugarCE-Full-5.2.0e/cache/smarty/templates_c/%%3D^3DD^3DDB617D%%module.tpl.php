<?php /* Smarty version 2.6.11, created on 2009-07-02 10:26:43
         compiled from modules/ModuleBuilder/tpls/MBModule/module.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/MBModule/module.tpl', 62, false),array('function', 'counter', 'modules/ModuleBuilder/tpls/MBModule/module.tpl', 65, false),array('function', 'sugar_image', 'modules/ModuleBuilder/tpls/MBModule/module.tpl', 91, false),)), $this); ?>
<link rel="stylesheet" type="text/css" href="modules/ModuleBuilder/tpls/MB.css" />
<form name='CreateModule'>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='SaveModule'>
<input type='hidden' name='package' value='<?php echo $this->_tpl_vars['package']->name; ?>
'>
<input type='hidden' name='original_name' value='<?php echo $this->_tpl_vars['module']->name; ?>
'>
<input type='hidden' name='duplicate' value='0'>
<input type='hidden' name='to_pdf' value='1'>
<table class='mbTable'  >
	<tr><td></td><td colspan=4><input type='button' name='savebtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_SAVE']; ?>
' class='button' onclick="ModuleBuilder.handleSave('CreateModule');">&nbsp;
		<?php if (! empty ( $this->_tpl_vars['module']->name )): ?>
			<input type='button' name='duplicatebtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_DUPLICATE']; ?>
' class='button' onclick="document.CreateModule.duplicate.value=1;ModuleBuilder.handleSave('CreateModule');">
			<input type='button' name='viewfieldsbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_VIEW_FIELDS']; ?>
' class='button' onclick="ModuleBuilder.handleSave('CreateModule', ModuleBuilder.moduleViewFields);">
			<input type='button' name='viewrelsbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_VIEW_RELATIONSHIPS']; ?>
' class='button' onclick="ModuleBuilder.handleSave('CreateModule', ModuleBuilder.moduleViewRelationships);">
			<input type='button' name='viewlayoutsbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_VIEW_LAYOUTS']; ?>
' class='button' onclick="ModuleBuilder.handleSave('CreateModule', ModuleBuilder.moduleViewLayouts);">
			&nbsp;<input type='button' name='deletebtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_DELETE']; ?>
' class='button' onclick="ModuleBuilder.moduleDelete('<?php echo $this->_tpl_vars['package']->name; ?>
', '<?php echo $this->_tpl_vars['module']->name; ?>
');"><?php endif; ?></td></tr>
	<tr>
		<td height='100%'>&nbsp;</td><td>&nbsp;</td>
	</tr>
	<tr>
	<tr><td class='mbLBL'><b><?php echo $this->_tpl_vars['mod_strings']['LBL_PACKAGE']; ?>
</b></td><td colspan='5'><?php echo $this->_tpl_vars['package']->name; ?>
</td></tr>
	<tr><td class='mbLBL'><font color="#ff0000"> * </font><b><?php echo $this->_tpl_vars['mod_strings']['LBL_MODULE_NAME']; ?>
</b></td><td colspan='5'><input type='text' name='name' value='<?php echo $this->_tpl_vars['module']->name; ?>
' size=50></td></tr>
	<tr><td class='mbLBL'><font color="#ff0000"> * </font><b><?php echo $this->_tpl_vars['mod_strings']['LBL_LABEL']; ?>
</b></td><td colspan='5'><input type='text' name='label' value='<?php echo $this->_tpl_vars['module']->config['label']; ?>
' size=50></td></tr>
	<tr>
	<tr>
	   <td class='mbLBL' width='5%' nowrap><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MB_IMPORTABLE','module' => 'ModuleBuilder'), $this);?>
:</td>
       <td>&nbsp;<input type='checkbox' name='importable' value=1 <?php if (! empty ( $this->_tpl_vars['module']->config['importable'] )): ?>checked<?php endif; ?>></td>
    </tr>
	<?php echo smarty_function_counter(array('name' => 'items','assign' => 'items','start' => 0), $this);?>

	<?php $_from = $this->_tpl_vars['module']->implementable; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['label']):
?>
	</tr><tr>
	<td class='mbLBL' width='5%' nowrap><?php echo $this->_tpl_vars['label']; ?>
:</td>
	<td >&nbsp;<input type='checkbox' name='<?php echo $this->_tpl_vars['name']; ?>
' value=1 <?php if (! empty ( $this->_tpl_vars['module']->config[$this->_tpl_vars['name']] )): ?>checked<?php endif; ?>></td>
	<?php echo smarty_function_counter(array('name' => 'items'), $this);?>
	
	<?php endforeach; endif; unset($_from); ?>
	</tr>
	<tr>
        <td class='mbLBL'><font color="#ff0000"> * </font><b><?php echo $this->_tpl_vars['mod_strings']['LBL_TYPE']; ?>
</b></td>
        <?php echo smarty_function_counter(array('name' => 'items','assign' => 'items','start' => 0), $this);?>

        <td>
            <table>
                <tr<?php if (empty ( $this->_tpl_vars['module']->name )): ?> id="factory_modules"<?php endif; ?>>
                <?php if (empty ( $this->_tpl_vars['module']->name )): ?><input type='hidden' name='type'><?php endif; ?>
                <?php $_from = $this->_tpl_vars['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type'] => $this->_tpl_vars['name']):
?>
                    <?php if (empty ( $this->_tpl_vars['module']->name ) || $this->_tpl_vars['type'] != 'basic' || count ( $this->_tpl_vars['module']->mbvardefs->templates ) == 1): ?>
                        <?php if ($this->_tpl_vars['items'] % 6 == 0 && $this->_tpl_vars['items'] != 0): ?>
                </tr>
                <tr>
                        <?php endif; ?>
                    <td>
                        <?php if (empty ( $this->_tpl_vars['module']->name )): ?>
                    <td align='center'>
                        <table id='type_<?php echo $this->_tpl_vars['type']; ?>
' onclick='ModuleBuilder.buttonDown(this,"<?php echo $this->_tpl_vars['type']; ?>
", "type"); ModuleBuilder.buttonToForm("CreateModule", "type", "type");' class='wizardButton' onmousedown='return false;' onmouseout='ModuleBuilder.buttonOut(this,"<?php echo $this->_tpl_vars['type']; ?>
", "type");'>
						  <tr>
						      <td  align='center'><?php echo smarty_function_sugar_image(array('name' => $this->_tpl_vars['type'],'width' => 48,'height' => 48), $this);?>
</td>
						  </tr>
					   </table>
					   <a class='studiolink' href="javascript:void(0)" onclick='ModuleBuilder.buttonDown(this,"<?php echo $this->_tpl_vars['type']; ?>
", "type"); ModuleBuilder.buttonToForm("CreateModule", "type", "type");'><?php echo $this->_tpl_vars['name']; ?>
</a>
                        <script>ModuleBuilder.buttonAdd('type_<?php echo $this->_tpl_vars['type']; ?>
', '<?php echo $this->_tpl_vars['type']; ?>
', 'type');</script>
                    </td>
                    <?php else: ?>
                    <td align='center'><?php echo smarty_function_sugar_image(array('name' => $this->_tpl_vars['type'],'width' => 48,'height' => 48), $this);?>
<br>
                    <?php echo $this->_tpl_vars['name']; ?>

                    <?php endif; ?>
                    </td>
                    <?php endif; ?>
                <?php echo smarty_function_counter(array('name' => 'items'), $this);?>
  
                <?php endforeach; endif; unset($_from); ?>
                </tr>
            </table>
        </td>
	</tr>	
	<tr>
		<td height='100%'>&nbsp;</td><td>&nbsp;</td>
	</tr>
</table>
<?php echo '
<script>
addForm(\'CreateModule\');
addToValidate(\'CreateModule\', \'name\', \'DBName\', true, \'';  echo $this->_tpl_vars['mod_strings']['LBL_JS_VALIDATE_NAME'];  echo '\');
addToValidate(\'CreateModule\', \'label\', \'varchar\', true, \'';  echo $this->_tpl_vars['mod_strings']['LBL_JS_VALIDATE_LABEL'];  echo '\');
addToValidate(\'CreateModule\', \'type\', \'varchar\', true, \'';  echo $this->_tpl_vars['mod_strings']['LBL_JS_VALIDATE_TYPE'];  echo '\');
ModuleBuilder.helpRegister(\'CreateModule\');
if(document.getElementById(\'factory_modules\'))
	ModuleBuilder.helpRegisterByID(\'factory_modules\', \'table\');
ModuleBuilder.helpSetup('; ?>
'<?php echo $this->_tpl_vars['module']->help['group']; ?>
','<?php echo $this->_tpl_vars['module']->help['default']; ?>
'<?php echo ');
ModuleBuilder.MBpackage = \'';  echo $this->_tpl_vars['module']->package;  echo '\';
ModuleBuilder.module = \'';  echo $this->_tpl_vars['module']->name;  echo '\';	
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/ModuleBuilder/tpls/assistantJavascript.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>