<?php /* Smarty version 2.6.11, created on 2009-06-30 14:28:20
         compiled from include/MySugar/tpls/MySugar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'include/MySugar/tpls/MySugar.tpl', 54, false),array('function', 'sugar_getwebpath', 'include/MySugar/tpls/MySugar.tpl', 126, false),array('function', 'sugar_getimagepath', 'include/MySugar/tpls/MySugar.tpl', 148, false),array('function', 'counter', 'include/MySugar/tpls/MySugar.tpl', 154, false),)), $this); ?>
<?php echo '
<style>
.menu{
	z-index:100;
}

.subDmenu{
	z-index:100;
}
</style>
'; ?>


<!-- begin includes for overlib -->
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_overlib.js'), $this);?>
"></script>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000"></div>
<!-- end includes for overlib -->

<script type="text/javascript">





var activePage = <?php echo $this->_tpl_vars['activePage']; ?>
;
var theme = '<?php echo $this->_tpl_vars['theme']; ?>
';
current_user_id = '<?php echo $this->_tpl_vars['current_user']; ?>
';
jsChartsArray = new Array();
var moduleName = '<?php echo $this->_tpl_vars['module']; ?>
';
</script>

<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/dashlets.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/yui/container.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/yui/PanelEffect.js'), $this);?>
"></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_ytree.js'), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/JSON.js'), $this);?>
'></script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/MySugar/javascript/MySugar.js'), $this);?>
'></script>
<link rel='stylesheet' href='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/ytree/TreeView/css/folders/tree.css'), $this);?>
'>
<link rel='stylesheet' href='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/yui/assets/container.css'), $this);?>
'>

<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/swfobject.js'), $this);?>
"></script>

<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'themes/default/ext/resources/css/ext-all.css'), $this);?>
" />
<script type="text/javascript" language="Javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/ext-2.0/adapter/ext/ext-base.js'), $this);?>
"></script>
<script type="text/javascript" language="Javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/ext-2.0/ext-all.js'), $this);?>
"></script>





























<div id="pageContainer">
	<div id="pageNum_<?php echo $this->_tpl_vars['activePage']; ?>
_div">
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 5px;">
 	<tr>



	 	<td>
		&nbsp;
		</td>
	
		<td rowspan="3">
				<img src='<?php echo smarty_function_sugar_getwebpath(array('file' => 'include/images/blank.gif'), $this);?>
' width='15' height='1' border='0'>
		</td>











		<td align='right'>



			<?php if (! $this->_tpl_vars['lock_homepage']): ?><input id="add_dashlets" class="button" type="button" value="<?php echo $this->_tpl_vars['lblAddDashlets']; ?>
" onclick="return SUGAR.mySugar.showDashletsDialog();"/><?php endif; ?>



	 		<a href='#' onclick="window.open('index.php?module=Administration&action=SupportPortal&view=documentation&version=<?php echo $this->_tpl_vars['sugarVersion']; ?>
&edition=<?php echo $this->_tpl_vars['sugarFlavor']; ?>
&lang=<?php echo $this->_tpl_vars['currentLanguage']; ?>
&help_module=<?php echo $this->_tpl_vars['module']; ?>
&help_action=index&key=<?php echo $this->_tpl_vars['serverUniqueKey']; ?>
','helpwin','width=600,height=600,status=0,resizable=1,scrollbars=1,toolbar=0,location=1'); return false" class='utilsLink'>
				<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'help.gif'), $this);?>
' width='13' height='13' alt='<?php echo $this->_tpl_vars['lblLnkHelp']; ?>
' border='0' align='absmiddle'>
				<?php echo $this->_tpl_vars['lblLnkHelp']; ?>

			</a>
		</td>
	</tr>
	<tr>
		<?php echo smarty_function_counter(array('assign' => 'hiddenCounter','start' => 0,'print' => false), $this);?>

		<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colNum'] => $this->_tpl_vars['data']):
?>
		<td valign='top' width=<?php echo $this->_tpl_vars['data']['width']; ?>
>
			<ul class='noBullet' id='col_<?php echo $this->_tpl_vars['activePage']; ?>
_<?php echo $this->_tpl_vars['colNum']; ?>
'>
				<li id='page_<?php echo $this->_tpl_vars['activePage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
b' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
		        <?php $_from = $this->_tpl_vars['data']['dashlets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['dashlet']):
?>		
				<li class='noBullet' id='dashlet_<?php echo $this->_tpl_vars['id']; ?>
'>
					<div id='dashlet_entire_<?php echo $this->_tpl_vars['id']; ?>
'>
						<?php echo $this->_tpl_vars['dashlet']['script']; ?>

						<?php echo $this->_tpl_vars['dashlet']['display']; ?>

					</div>
				</li>
				<?php endforeach; endif; unset($_from); ?>
				<li id='page_<?php echo $this->_tpl_vars['activePage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
			</ul>
		</td>
		<?php echo smarty_function_counter(array(), $this);?>

		<?php endforeach; endif; unset($_from); ?>
	</tr>
</table>
	</div>
	
	<?php $_from = $this->_tpl_vars['divPages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['divPageIndex'] => $this->_tpl_vars['divPageNum']):
?>
	<div id="pageNum_<?php echo $this->_tpl_vars['divPageNum']; ?>
_div" style="display:none;">
	</div>
	<?php endforeach; endif; unset($_from); ?>


















	
















	
	<div id="dashletsDialog" style="display:none;">
		<div class="hd" id="dashletsDialogHeader"><?php echo $this->_tpl_vars['lblAddDashlets']; ?>
</div>	
		<div class="bd" id="dashletsList">
			<form></form>
		</div>
		<div class="close nonsecure"><a href="#" onClick="javascript:SUGAR.mySugar.closeDashletsDialog();"><img src="<?php echo smarty_function_sugar_getwebpath(array('file' => 'include/javascript/yui/assets/close12_1.gif'), $this);?>
" border="0" /></a></div>
	</div>
				
	
</div>

<?php echo '
<script type="text/javascript">
SUGAR.mySugar.maxCount = 	';  echo $this->_tpl_vars['maxCount'];  echo ';
SUGAR.mySugar.homepage_dd = new Array();
SUGAR.mySugar.init = function () {
	j = 0;
	
	'; ?>

	dashletIds = <?php echo $this->_tpl_vars['dashletIds']; ?>
;
	
	<?php if (! $this->_tpl_vars['lock_homepage']): ?>
	<?php echo '
	for(i in dashletIds) {
		SUGAR.mySugar.homepage_dd[j] = new ygDDList(\'dashlet_\' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].setHandleElId(\'dashlet_header_\' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].onMouseDown = SUGAR.mySugar.onDrag;  
		SUGAR.mySugar.homepage_dd[j].afterEndDrag = SUGAR.mySugar.onDrop;
		j++;
	}
	for(var wp = 0; wp <= ';  echo $this->_tpl_vars['hiddenCounter'];  echo '; wp++) {
	    SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary(\'page_\'+activePage+\'_hidden\' + wp);
	}

	YAHOO.util.DDM.mode = 1;
	'; ?>

	<?php endif; ?>
	<?php echo '
	SUGAR.mySugar.renderDashletsDialog();











	SUGAR.mySugar.loadSugarCharts();
}

</script>
'; ?>


<script type="text/javascript">
	YAHOO.util.Event.addListener(window, 'load', SUGAR.mySugar.init); 
</script>