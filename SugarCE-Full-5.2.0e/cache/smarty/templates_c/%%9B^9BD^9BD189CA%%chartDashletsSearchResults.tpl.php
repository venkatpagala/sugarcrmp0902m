<?php /* Smarty version 2.6.11, created on 2009-06-26 16:03:18
         compiled from include/MySugar/tpls/chartDashletsSearchResults.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'include/MySugar/tpls/chartDashletsSearchResults.tpl', 40, false),)), $this); ?>
<h4><?php echo $this->_tpl_vars['lblSearchResults']; ?>
 - <i><?php echo $this->_tpl_vars['searchString']; ?>
</i>:</h4>
<hr>
<?php if (count ( $this->_tpl_vars['charts'] )): ?>
<h3><?php echo smarty_function_sugar_translate(array('label' => 'LBL_BASIC_CHARTS','module' => 'Home'), $this);?>
</h3>
<table width="100%">
	<?php $_from = $this->_tpl_vars['charts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['chart']):
?>
	<tr>
		<td width="100%" align="left"><a href="#" onclick="<?php echo $this->_tpl_vars['chart']['onclick']; ?>
"><?php echo $this->_tpl_vars['chart']['icon']; ?>
</a>&nbsp;<a class="mbLBLL" href="#" onclick="<?php echo $this->_tpl_vars['chart']['onclick']; ?>
"><?php echo $this->_tpl_vars['chart']['title']; ?>
</a><br /></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>









































