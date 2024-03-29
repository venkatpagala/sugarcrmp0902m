<?php /* Smarty version 2.6.11, created on 2009-07-02 12:21:13
         compiled from include/MySugar/tpls/addDashletsDialog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'include/MySugar/tpls/addDashletsDialog.tpl', 40, false),array('function', 'counter', 'include/MySugar/tpls/addDashletsDialog.tpl', 67, false),array('function', 'sugar_getimagepath', 'include/MySugar/tpls/addDashletsDialog.tpl', 84, false),)), $this); ?>
<div align="right" id="dashletSearch">
	<table>
		<tr>
			<td><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DASHLET_SEARCH','module' => 'Home'), $this);?>
: <input id="search_string" type="text" length="15" onKeyPress="javascript:if(event.keyCode==13)SUGAR.mySugar.searchDashlets(this.value,document.getElementById('search_category').value);" />
			<input type="button" class="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SEARCH','module' => 'Home'), $this);?>
" onClick="javascript:SUGAR.mySugar.searchDashlets(document.getElementById('search_string').value,document.getElementById('search_category').value);" />
			<input type="button" class="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CLEAR','module' => 'Home'), $this);?>
" onClick="javascript:SUGAR.mySugar.clearSearch();" />			
			<?php if ($this->_tpl_vars['moduleName'] == 'Home'): ?>
			<input type="hidden" id="search_category" value="module" />
			<?php else: ?>
			<input type="hidden" id="search_category" value="chart" />
			<?php endif; ?>
			</td>
		</tr>
	</table>
	<br>
</div>

<?php if ($this->_tpl_vars['moduleName'] == 'Home'): ?>
 <ul class="subpanelTablist" id="dashletCategories">
	<li id="moduleCategory" class="active"><a href="javascript:SUGAR.mySugar.toggleDashletCategories('module');" class="current" id="moduleCategoryAnchor"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODULES','module' => 'Home'), $this);?>
</a></li>
	<li id="chartCategory" class=""><a href="javascript:SUGAR.mySugar.toggleDashletCategories('chart');" class="" id="chartCategoryAnchor"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CHARTS','module' => 'Home'), $this);?>
</a></li>
	<li id="toolsCategory" class=""><a href="javascript:SUGAR.mySugar.toggleDashletCategories('tools');" class="" id="toolsCategoryAnchor"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TOOLS','module' => 'Home'), $this);?>
</a></li>	
</ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['moduleName'] == 'Home'): ?>
<div id="moduleDashlets" style="overflow-y:auto;height:400px;display:;">
	<h3><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODULES','module' => 'Home'), $this);?>
</h3>
	<div id="moduleDashletsList">
	<table width="95%">
		<?php echo smarty_function_counter(array('assign' => 'rowCounter','start' => 0,'print' => false), $this);?>

		<?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
		<?php if ($this->_tpl_vars['rowCounter'] % 2 == 0): ?>
		<tr>
		<?php endif; ?>
			<td width="50%" align="left"><a href="#" onclick="<?php echo $this->_tpl_vars['module']['onclick']; ?>
"><?php echo $this->_tpl_vars['module']['icon']; ?>
</a>&nbsp;<a class="mbLBLL" href="#" onclick="<?php echo $this->_tpl_vars['module']['onclick']; ?>
"><?php echo $this->_tpl_vars['module']['title']; ?>
</a><br /></td>
		<?php if ($this->_tpl_vars['rowCounter'] % 2 == 1): ?>
		</tr>
		<?php endif; ?>
		<?php echo smarty_function_counter(array(), $this);?>

		<?php endforeach; endif; unset($_from); ?>
	</table>
	</div>
</div>
<?php endif; ?>
<div id="chartDashlets" style="overflow-y:auto;<?php if ($this->_tpl_vars['moduleName'] == 'Home'): ?>height:400px;display:none;<?php else: ?>height:425px;display:;<?php endif; ?>">
	<?php if ($this->_tpl_vars['charts'] != false): ?>
	<h3><span id="basicChartDashletsExpCol"><a href="#" onClick="javascript:SUGAR.mySugar.collapseList('basicChartDashlets');"><img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'basic_search.gif'), $this);?>
" align="absmiddle" /></span></a>&nbsp;<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BASIC_CHARTS','module' => 'Home'), $this);?>
</h3>
	<div id="basicChartDashletsList">
	<table width="100%">
		<?php $_from = $this->_tpl_vars['charts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['chart']):
?>
		<tr>
			<td align="left"><a href="#" onclick="<?php echo $this->_tpl_vars['chart']['onclick']; ?>
"><?php echo $this->_tpl_vars['chart']['icon']; ?>
</a>&nbsp;<a class="mbLBLL" href="#" onclick="<?php echo $this->_tpl_vars['chart']['onclick']; ?>
"><?php echo $this->_tpl_vars['chart']['title']; ?>
</a><br /></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>



	</div>
	<?php endif; ?>





















</div>

<?php if ($this->_tpl_vars['moduleName'] == 'Home'): ?>
<div id="toolsDashlets" style="overflow-y:auto;height:400px;display:none;">
	<h3><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TOOLS','module' => 'Home'), $this);?>
</h3>
	<div id="toolsDashletsList">
	<table width="95%">
		<?php echo smarty_function_counter(array('assign' => 'rowCounter','start' => 0,'print' => false), $this);?>

		<?php $_from = $this->_tpl_vars['tools']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tool']):
?>
		<?php if ($this->_tpl_vars['rowCounter'] % 2 == 0): ?>
		<tr>
		<?php endif; ?>
			<td align="left"><a href="#" onclick="<?php echo $this->_tpl_vars['tool']['onclick']; ?>
"><?php echo $this->_tpl_vars['tool']['icon']; ?>
</a>&nbsp;<a class="mbLBLL" href="#" onclick="<?php echo $this->_tpl_vars['tool']['onclick']; ?>
"><?php echo $this->_tpl_vars['tool']['title']; ?>
</a><br /></td>
		<?php if ($this->_tpl_vars['rowCounter'] % 2 == 1): ?>
		</tr>
		<?php endif; ?>
		<?php echo smarty_function_counter(array(), $this);?>

		<?php endforeach; endif; unset($_from); ?>
	</table>
	</div>
</div>
<?php endif; ?>

<div id="searchResults" style="overflow-y:auto;display:none;<?php if ($this->_tpl_vars['moduleName'] == 'Home'): ?>height:400px;<?php else: ?>height:425px;<?php endif; ?>">
</div>