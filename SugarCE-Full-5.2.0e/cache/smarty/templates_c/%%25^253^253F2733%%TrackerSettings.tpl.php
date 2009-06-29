<?php /* Smarty version 2.6.11, created on 2009-06-25 15:53:43
         compiled from modules/Trackers/TrackerSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_help', 'modules/Trackers/TrackerSettings.tpl', 63, false),)), $this); ?>
<script type='text/javascript' src='include/javascript/overlibmws.js'></script>
<form name="TrackerSettings" method="POST">
<input type="hidden" name="action" value="TrackerSettings">
<input type="hidden" name="module" value="Trackers">
<input type="hidden" name="process" value="">

<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="dataLabel" width="100%" colspan="2">
<input type="button" onclick="document.TrackerSettings.process.value='true'; if(check_form('TrackerSettings')) { document.TrackerSettings.submit(); }" class="button" title="<?php echo $this->_tpl_vars['app']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['app']['LBL_SAVE_BUTTON_KEY']; ?>
" value="<?php echo $this->_tpl_vars['app']['LBL_SAVE_BUTTON_LABEL']; ?>
">
<input type="button" onclick="document.TrackerSettings.process.value='false'; document.TrackerSettings.submit();" class="button" title="<?php echo $this->_tpl_vars['app']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['app']['LBL_CANCEL_BUTTON_KEY']; ?>
" value="<?php echo $this->_tpl_vars['app']['LBL_CANCEL_BUTTON_LABEL']; ?>
">
</td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
<tr>
<td class="dataLabel" width="50%">&nbsp;</td>
<td class="dataLabel" width="50%"><?php echo $this->_tpl_vars['mod']['LBL_ENABLE']; ?>
</td>
</tr>
<?php $_from = $this->_tpl_vars['trackerEntries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['trackerEntries'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['trackerEntries']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['entry']):
        $this->_foreach['trackerEntries']['iteration']++;
?>
<tr>
<td class="dataLabel" width="50%"><?php echo $this->_tpl_vars['entry']['label']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['entry']['helpLabel']), $this);?>
</td>
<td class="dataField" width="50%"><input type="checkbox" id="<?php echo $this->_tpl_vars['key']; ?>
" name="<?php echo $this->_tpl_vars['key']; ?>
" value="1" <?php if (! $this->_tpl_vars['entry']['disabled']): ?>CHECKED<?php endif; ?>>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
<td class="dataLabel"><?php echo $this->_tpl_vars['mod']['LOG_SLOW_QUERIES']; ?>
:</td>
<?php if (! empty ( $this->_tpl_vars['config']['dump_slow_queries'] )): ?>
	<?php $this->assign('dump_slow_queries_checked', 'CHECKED');  else: ?>
	<?php $this->assign('dump_slow_queries_checked', '');  endif; ?>
<td class="dataField"><input type='hidden' name='dump_slow_queries' value='false'><input name='dump_slow_queries'  type="checkbox" value='true' <?php echo $this->_tpl_vars['dump_slow_queries_checked']; ?>
></td>
</tr>

<tr>
<td class="dataLabel" width="20%"><?php echo $this->_tpl_vars['mod']['LBL_TRACKER_PRUNE_INTERVAL']; ?>
</td>
<td><input type='text' id='tracker_prune_interval' name='tracker_prune_interval' size='5' value='<?php echo $this->_tpl_vars['tracker_prune_interval']; ?>
'></td>
</tr>

<tr>
<td class="dataLabel"><?php echo $this->_tpl_vars['mod']['SLOW_QUERY_TIME_MSEC']; ?>
: </td>
<td class="dataField">
<input type='text' size='5' name='slow_query_time_msec' value='<?php echo $this->_tpl_vars['config']['slow_query_time_msec']; ?>
'>
</td>
</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="dataLabel" width="100%" colspan="2">
<input type="button" onclick="document.TrackerSettings.process.value='true'; if(check_form('TrackerSettings')) { document.TrackerSettings.submit(); }" class="button" title="<?php echo $this->_tpl_vars['app']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['app']['LBL_SAVE_BUTTON_KEY']; ?>
" value="<?php echo $this->_tpl_vars['app']['LBL_SAVE_BUTTON_LABEL']; ?>
">
<input type="button" onclick="document.TrackerSettings.process.value='false'; document.TrackerSettings.submit();" class="button" title="<?php echo $this->_tpl_vars['app']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['app']['LBL_CANCEL_BUTTON_KEY']; ?>
" value="<?php echo $this->_tpl_vars['app']['LBL_CANCEL_BUTTON_LABEL']; ?>
">
</td>
</tr>
</table>
</form>


<script type="text/javascript">
addToValidate('TrackerSettings', 'tracker_prune_interval', 'int', true, "<?php echo $this->_tpl_vars['mod']['LBL_TRACKER_PRUNE_RANGE']; ?>
");
addToValidateRange('TrackerSettings', 'tracker_prune_interval', 'range', true, '<?php echo $this->_tpl_vars['mod']['LBL_TRACKER_PRUNE_RANGE']; ?>
', 1, 180);
addToValidate('TrackerSettings', 'slow_query_time_msec', 'int', true, "<?php echo $this->_tpl_vars['mod']['SLOW_QUERY_TIME_MSEC']; ?>
");
</script>