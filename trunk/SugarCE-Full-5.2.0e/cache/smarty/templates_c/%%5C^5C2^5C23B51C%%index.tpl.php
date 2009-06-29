<?php /* Smarty version 2.6.11, created on 2009-06-25 11:19:37
         compiled from modules/ModuleBuilder/tpls/index.tpl */ ?>

<div class='ytheme-gray' id='mblayout' style="position:relative; height:0px; overflow:visible;">
</div>
<div id='mbcenter'>
<?php echo $this->_tpl_vars['CENTER']; ?>

</div>
<div id='mbeast' class="x-layout-inactive-content">
<?php echo $this->_tpl_vars['PROPERTIES']; ?>

</div>
<div id='mbeast2' class="x-layout-inactive-content">
</div>
<div id='mbhelp' class='tabform' class="x-hidden"></div>
<div id='mbwest' class="x-hidden">
<div id='package_tree' class="x-hidden"></div>
<?php echo $this->_tpl_vars['TREE']; ?>
 
</div>
<div id='mbsouth' class="x-hidden">
</div>
<script>
ModuleBuilder.setMode('<?php echo $this->_tpl_vars['TYPE']; ?>
');
closeMenus();
//document.getElementById('HideHandle').parentNode.style.display = 'none';
//EXTJS IE Hack for now until forums respond
window.onload = ModuleBuilder.init;
</script>
<div id="footerHTML" class="x-hidden">
    <table width="100%" cellpadding="0" cellspacing="0"><tr><td>
    <input type="button" class="button" value="<?php echo $this->_tpl_vars['mod']['LBL_HOME']; ?>
" onclick="ModuleBuilder.main('home');">
    <?php if ($this->_tpl_vars['TEST_STUDIO'] == true): ?>
    <input type="button" class="button" value="<?php echo $this->_tpl_vars['mod']['LBL_STUDIO']; ?>
" onclick="ModuleBuilder.main('studio');">
    <?php endif; ?>
    <?php if ($this->_tpl_vars['ADMIN'] == true): ?>
    <input type="button" class="button" value="<?php echo $this->_tpl_vars['mod']['LBL_MODULEBUILDER']; ?>
" onclick="ModuleBuilder.main('mb');">



    <?php endif; ?>
    <input type="button" class="button" value="<?php echo $this->_tpl_vars['mod']['LBL_DROPDOWNEDITOR']; ?>
" onclick="ModuleBuilder.main('dropdowns');">
    </td><td align="right">



        <img height="18" width="83" class="img" src="include/images/powered_by_sugarcrm.gif" border="0" align="absmiddle"/>



    &nbsp;<?php echo $this->_tpl_vars['app_strings']['LBL_SUGAR_COPYRIGHT']; ?>

    </td></tr></table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/ModuleBuilder/tpls/assistantJavascript.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>