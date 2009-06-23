<?php /* Smarty version 2.6.11, created on 2009-06-23 15:12:17
         compiled from modules/Home/UnifiedSearchAdvanced.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/Home/UnifiedSearchAdvanced.tpl', 51, false),)), $this); ?>


<form name='UnifiedSearchAdvanced' action='index.php' method='get'>
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='query_string' value=''>
<input type='hidden' name='advanced' value='true'>
<input type='hidden' name='action' value='UnifiedSearch'>
<input type='hidden' name='search_form' value='false'>
	<table width='300' class='tabForm' border='0' cellpadding='0' cellspacing='1'>
	<tr>
		<th align='left' colspan='3'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODULES_TO_SEARCH','module' => 'Home'), $this);?>
</th>
		<th align='right'>
			<img onclick='SUGAR.unifiedSearchAdvanced.get_content()' src='<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
close.gif' border='0'>
		</th>
	</tr>
	<?php $_from = $this->_tpl_vars['MODULES_TO_SEARCH']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['m'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['m']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['info']):
        $this->_foreach['m']['iteration']++;
?>
	<?php if (($this->_foreach['m']['iteration'] <= 1)): ?>
		<tr style='padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px'>
	<?php endif; ?>
		<td width='1' style='border: none; padding: 0px 10px 0px 0px; margin: 0px 0px 0px 0px'>
			<input class='checkbox' id='cb_<?php echo $this->_tpl_vars['module']; ?>
' type='checkbox' name='search_mod_<?php echo $this->_tpl_vars['module']; ?>
' value='true' <?php if ($this->_tpl_vars['info']['checked']): ?>checked<?php endif; ?>>
		</td>
		<td style='border: none; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px; cursor: hand; cursor: pointer' onclick="document.getElementById('cb_<?php echo $this->_tpl_vars['module']; ?>
').checked = !document.getElementById('cb_<?php echo $this->_tpl_vars['module']; ?>
').checked;">
			<?php echo $this->_tpl_vars['info']['translated']; ?>

		</td>
	<?php if (($this->_foreach['m']['iteration']-1) % 2 == 1): ?>
		</tr><tr style='padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px'>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</tr>
	</table>
</form>