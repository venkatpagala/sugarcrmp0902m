<?php /* Smarty version 2.6.11, created on 2009-07-02 10:55:59
         compiled from modules/DynamicFields/templates/Fields/Forms/relate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/DynamicFields/templates/Fields/Forms/relate.tpl', 46, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['LBL_MODULE']; ?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] == 0): ?>
		<?php echo smarty_function_html_options(array('name' => 'ext2','id' => 'ext2','selected' => $this->_tpl_vars['vardef']['module'],'options' => $this->_tpl_vars['modules']), $this);?>

	<?php else: ?>
		<input type='hidden' name='ext2' value='<?php echo $this->_tpl_vars['vardef']['module']; ?>
'><?php echo $this->_tpl_vars['vardef']['module']; ?>

	<?php endif; ?>
	<input type='hidden' name='ext3' value='<?php echo $this->_tpl_vars['vardef']['id_name']; ?>
'>
	</td>
</tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>