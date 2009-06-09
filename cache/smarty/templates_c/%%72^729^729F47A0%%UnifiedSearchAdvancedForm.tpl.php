<?php /* Smarty version 2.6.11, created on 2009-06-05 17:08:25
         compiled from modules/Home/UnifiedSearchAdvancedForm.tpl */ ?>


<br />
<form name='UnifiedSearchAdvancedMain' action='index.php' method='get'>
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='query_string' value='test'>
<input type='hidden' name='advanced' value='true'>
<input type='hidden' name='action' value='UnifiedSearch'>
<input type='hidden' name='search_form' value='false'>
	<table width='600' class='tabForm' border='0' cellspacing='1'>
	<tr style='padding-bottom: 10px'>
		<td colspan='8' nowrap>
			<input id='searchFieldMain' class='searchField' type='text' size='80' name='query_string' value='<?php echo $this->_tpl_vars['query_string']; ?>
'>
			
				&nbsp;<input type="submit" class="button" value="<?php echo $this->_tpl_vars['LBL_SEARCH_BUTTON_LABEL']; ?>
">	
		</td>
	</tr>
	<tr height='5'><td></td></tr>
	<tr style='padding-top: 10px;'>
	<?php $_from = $this->_tpl_vars['MODULES_TO_SEARCH']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['m'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['m']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['info']):
        $this->_foreach['m']['iteration']++;
?>
		<td width='20' style='padding: 0px 10px 0px 0px;' >
			<input class='checkbox' id='cb_<?php echo $this->_tpl_vars['module']; ?>
_f' type='checkbox' name='search_mod_<?php echo $this->_tpl_vars['module']; ?>
' value='true' <?php if ($this->_tpl_vars['info']['checked']): ?>checked<?php endif; ?>>
		</td>
		<td width='130' style='padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px; cursor: hand; cursor: pointer' onclick="document.getElementById('cb_<?php echo $this->_tpl_vars['module']; ?>
_f').checked = !document.getElementById('cb_<?php echo $this->_tpl_vars['module']; ?>
_f').checked;">
			<?php echo $this->_tpl_vars['info']['translated']; ?>

		</td>
	<?php if (($this->_foreach['m']['iteration']-1) % 4 == 3): ?> 
		</tr><tr style='padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px'>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</tr>
	</table>
</form>