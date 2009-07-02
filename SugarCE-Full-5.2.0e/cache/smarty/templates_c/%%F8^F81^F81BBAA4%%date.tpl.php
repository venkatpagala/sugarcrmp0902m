<?php /* Smarty version 2.6.11, created on 2009-07-02 10:34:13
         compiled from modules/DynamicFields/templates/Fields/Forms/date.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/DynamicFields/templates/Fields/Forms/date.tpl', 46, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_DEFAULT_VALUE']; ?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<?php echo smarty_function_html_options(array('name' => 'default','options' => $this->_tpl_vars['default_values'],'selected' => $this->_tpl_vars['vardef']['display_default']), $this);?>

	<?php else: ?>
		<input type='hidden' name='default' value='$vardef.display_default'><?php echo $this->_tpl_vars['vardef']['display_default']; ?>

	<?php endif; ?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_MASS_UPDATE']; ?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<input type="checkbox" name="massupdate" value="1" <?php if (! empty ( $this->_tpl_vars['vardef']['massupdate'] )): ?>checked<?php endif; ?>/>
	<?php else: ?>
		<input type="checkbox" name="massupdate" value="1" disabled <?php if (! empty ( $this->_tpl_vars['vardef']['massupdate'] )): ?>checked<?php endif; ?>/>	
	<?php endif; ?>
	</td>
</tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>