<?php /* Smarty version 2.6.11, created on 2009-07-02 10:31:04
         compiled from modules/DynamicFields/templates/Fields/Forms/int.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'modules/DynamicFields/templates/Fields/Forms/int.tpl', 82, false),)), $this); ?>
<script>
formsWithFieldLogic=null;
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_DEFAULT_VALUE']; ?>
:</td><td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<input type='text' name='default' id='int_default' value='<?php echo $this->_tpl_vars['vardef']['default']; ?>
'>
		<script>addToValidate('popup_form', 'default', 'int', false,'<?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_DEFAULT_VALUE']; ?>
' );</script>
	<?php else: ?>
		<input type='hidden' name='default' id='int_default' value='<?php echo $this->_tpl_vars['vardef']['default']; ?>
'><?php echo $this->_tpl_vars['vardef']['default']; ?>

	<?php endif; ?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_MIN_VALUE']; ?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<input type='text' name='min' id='int_min' value='<?php echo $this->_tpl_vars['vardef']['validation']['min']; ?>
'>
		<script>addToValidate('popup_form', 'min', 'int', false,'<?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_MIN_VALUE']; ?>
' );</script>
	<?php else: ?>
		<input type='hidden' name='min' id='int_min' value='<?php echo $this->_tpl_vars['vardef']['validation']['min']; ?>
'><?php echo $this->_tpl_vars['vardef']['range']['min']; ?>

	<?php endif; ?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_MAX_VALUE']; ?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<input type='text' name='max' id='int_max' value='<?php echo $this->_tpl_vars['vardef']['validation']['max']; ?>
'>
		<script>addToValidate('popup_form', 'max', 'int', false,'<?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_MAX_VALUE']; ?>
' );</script>
	<?php else: ?>
		<input type='hidden' name='max' id='int_max' value='<?php echo $this->_tpl_vars['vardef']['validation']['max']; ?>
'><?php echo $this->_tpl_vars['vardef']['range']['max']; ?>

	<?php endif; ?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_MAX_SIZE']; ?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<input type='text' name='len' id='int_len' value='<?php echo ((is_array($_tmp=@$this->_tpl_vars['vardef']['len'])) ? $this->_run_mod_handler('default', true, $_tmp, 11) : smarty_modifier_default($_tmp, 11)); ?>
'></td>
		<script>addToValidate('popup_form', 'len', 'int', false,'<?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_MAX_SIZE']; ?>
' );</script>
	<?php else: ?>
		<input type='hidden' name='len' id='int_len' value='<?php echo $this->_tpl_vars['vardef']['len']; ?>
'><?php echo $this->_tpl_vars['vardef']['len']; ?>

	<?php endif; ?>
	</td>
</tr>
<tr>
    <td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_DISABLE_NUMBER_FORMAT']; ?>
:</td>
    <td>
        <input type='checkbox' name='ext3' value=1 <?php if (! empty ( $this->_tpl_vars['vardef']['disable_num_format'] )): ?>checked<?php endif; ?> <?php if ($this->_tpl_vars['hideLevel'] > 5): ?>disabled<?php endif; ?> />
        <?php if ($this->_tpl_vars['hideLevel'] > 5): ?><input type='hidden' name='ext3' value='<?php echo $this->_tpl_vars['vardef']['disable_num_format']; ?>
'><?php endif; ?>
    </td>
</tr>
<script>
	formsWithFieldLogic=new addToValidateFieldLogic('popup_form_id', 'int_min', 'int_max', 'int_default', 'int_len', 'int', 'Invalid Logic.');
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>