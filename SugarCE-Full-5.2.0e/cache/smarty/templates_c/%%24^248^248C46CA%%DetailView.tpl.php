<?php /* Smarty version 2.6.11, created on 2009-07-02 10:57:10
         compiled from include/DetailView/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'include/DetailView/DetailView.tpl', 41, false),array('function', 'sugar_evalcolumn', 'include/DetailView/DetailView.tpl', 103, false),array('function', 'sugar_field', 'include/DetailView/DetailView.tpl', 108, false),array('modifier', 'count', 'include/DetailView/DetailView.tpl', 70, false),)), $this); ?>
{*
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
*}
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['headerTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
{sugar_include include=$includes}

<?php echo smarty_function_counter(array('name' => 'panelCount','print' => false,'start' => 0,'assign' => 'panelCount'), $this);?>

<?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
 $this->assign('panel_id', $this->_tpl_vars['panelCount']); ?>
<div id='<?php echo $this->_tpl_vars['label']; ?>
'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}

<?php if (! is_array ( $this->_tpl_vars['panel'] )): ?>
    {sugar_include type='php' file='<?php echo $this->_tpl_vars['panel']; ?>
'}
<?php else: ?>
	
	<?php if (! empty ( $this->_tpl_vars['label'] ) && ! is_int ( $this->_tpl_vars['label'] ) && $this->_tpl_vars['label'] != 'DEFAULT'): ?>
	<h4 class="dataLabel">{sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}</h4><br>
	<?php endif; ?>
		<table width='100%' border='0' cellspacing='{$gridline}' cellpadding='0'  class='tabDetailView'>
	
	<?php if ($this->_tpl_vars['panelCount'] == 0): ?>
	    		<?php if ($this->_tpl_vars['SHOW_VCR_CONTROL']): ?>
			{$PAGINATION}
		<?php endif; ?>
		<?php echo smarty_function_counter(array('name' => 'panelCount','print' => false), $this);?>

	<?php endif; ?>
	
	<?php $_from = $this->_tpl_vars['panel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
	<tr>
		<?php $this->assign('columnsInRow', count($this->_tpl_vars['rowData'])); ?>
		<?php $this->assign('columnsUsed', 0); ?>
	    <?php $_from = $this->_tpl_vars['rowData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['colData']):
        $this->_foreach['colIteration']['iteration']++;
?>





			<td width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['label']; ?>
%' class='tabDetailViewDL'>
				<?php if (isset ( $this->_tpl_vars['colData']['field']['customLabel'] )): ?>
			       <?php echo $this->_tpl_vars['colData']['field']['customLabel']; ?>

				<?php elseif (isset ( $this->_tpl_vars['colData']['field']['label'] ) && strpos ( $this->_tpl_vars['colData']['field']['label'] , '$' )): ?>
				   {capture name="label" assign="label"}
				   <?php echo $this->_tpl_vars['colData']['field']['label']; ?>

				   {/capture}
			       {$label|strip_semicolon}:
				<?php elseif (isset ( $this->_tpl_vars['colData']['field']['label'] )): ?>
				   {capture name="label" assign="label"}
				   {sugar_translate label='<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
				   {/capture}
			       {$label|strip_semicolon}:
				<?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] )): ?>
				   {capture name="label" assign="label"}
				   {sugar_translate label='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
				   {/capture}
			       {$label|strip_semicolon}:
				<?php else: ?>
				   &nbsp;
				<?php endif; ?>
			</td>
			<td width='<?php echo $this->_tpl_vars['def']['templateMeta']['widths'][($this->_foreach['colIteration']['iteration']-1)]['field']; ?>
%' class='tabDetailViewDF' <?php if ($this->_tpl_vars['colData']['colspan']): ?>colspan='<?php echo $this->_tpl_vars['colData']['colspan']; ?>
'<?php endif; ?>>
				<?php if ($this->_tpl_vars['colData']['field']['customCode'] || $this->_tpl_vars['colData']['field']['assign']): ?>
					{counter name="panelFieldCount"}
					<?php echo smarty_function_sugar_evalcolumn(array('var' => $this->_tpl_vars['colData']['field'],'colData' => $this->_tpl_vars['colData']), $this);?>
	
				<?php elseif ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] && ! empty ( $this->_tpl_vars['colData']['field']['fields'] )): ?>
				    <?php $_from = $this->_tpl_vars['colData']['field']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subField']):
?>
				        <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['subField']]): ?>
				        	{counter name="panelFieldCount"}
				            <?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','tabindex' => $this->_tpl_vars['tabIndex'],'vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['subField']],'displayType' => 'detailView'), $this);?>
&nbsp;
				        <?php else: ?>
				        	{counter name="panelFieldCount"}
				            <?php echo $this->_tpl_vars['subField']; ?>

				        <?php endif; ?>
				    <?php endforeach; endif; unset($_from); ?>					    		
				<?php elseif ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]): ?>
					{counter name="panelFieldCount"}
					<?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']],'displayType' => 'detailView','displayParams' => $this->_tpl_vars['colData']['field']['displayParams'],'typeOverride' => $this->_tpl_vars['colData']['field']['type']), $this);?>

				<?php endif; ?>
				&nbsp;
			</td>








		<?php endforeach; endif; unset($_from); ?>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif; ?>
</div>
{if $panelFieldCount == 0}

<script>document.getElementById("panel_<?php echo $this->_tpl_vars['panel_id']; ?>
").style.display='none';</script>
{/if}
<p>
<?php endforeach; endif; unset($_from);  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['footerTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>