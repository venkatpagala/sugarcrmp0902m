<?php /* Smarty version 2.6.11, created on 2009-07-02 10:32:15
         compiled from modules/DynamicFields/templates/Fields/Forms/text.tpl */ ?>


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
		<textarea name='default' id='default' ><?php echo $this->_tpl_vars['vardef']['default']; ?>
</textarea>
	<?php else: ?>
		<textarea name='default' id='default' disabled ><?php echo $this->_tpl_vars['vardef']['default']; ?>
</textarea>
		<input type='hidden' name='default' value='<?php echo $this->_tpl_vars['vardef']['default']; ?>
'/>
	<?php endif; ?>
	</td>
</tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>