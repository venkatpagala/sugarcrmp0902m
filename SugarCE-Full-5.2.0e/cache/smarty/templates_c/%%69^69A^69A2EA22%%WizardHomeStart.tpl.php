<?php /* Smarty version 2.6.11, created on 2009-06-26 17:25:08
         compiled from modules/Campaigns/tpls/WizardHomeStart.tpl */ ?>

<div id='wiz_stage'>
<form  id="wizform" name="wizform" method="POST" action="index.php">
	<input type="hidden" name="module" value="Campaigns">
	<input type="hidden" id='action' name="action" value='WizardNewsletter'>
	<input type="hidden" id="return_module" name="return_module" value="Campaigns">
	<input type="hidden" id="return_action" name="return_action" value="WizardHome">


	
<table class='tabDetailView2' width="100%" border="0" cellspacing="1" cellpadding="0" >
<tr>
<td rowspan='2' width=10% style='vertical-align: top;' class='tabDetailViewDL2'>
<p>
<div id='nav'>
<table border="0" cellspacing="0" cellpadding="0" width="100%" >
<tr><td class='tabDetailViewDL2' ><div id='nav_step1'><?php echo $this->_tpl_vars['MOD']['LBL_CHOOSE_CAMPAIGN_TYPE']; ?>
</div></td></tr>
</table>
</div>
</p>
</td>

<td  rowspan='2' width='100%' class='tabForm'>
<div id="wiz_message"></div>
<div id=wizard>


	<div id='step1' >
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr><th colspan='2' align="left" class="dataField"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_CHOOSE_CAMPAIGN_TYPE']; ?>
</h4></th></tr>
			<tr><td colspan='2' class="dataField"><p><?php echo $this->_tpl_vars['MOD']['LBL_HOME_START_MESSAGE']; ?>
</p></td></tr>

			<tr><td width='2%'>&nbsp;</td>
			<td class="dataField">
				<input type="radio"  id="wizardtype" name="wizardtype" value='1'checked ><?php echo $this->_tpl_vars['MOD']['LBL_NEWSLETTER']; ?>
<br>
				<input type="radio"  id="wizardtype" name="wizardtype" value='2'><?php echo $this->_tpl_vars['MOD']['LBL_EMAIL']; ?>
<br>
				<input type="radio"  id="wizardtype" name='wizardtype' value='3'><?php echo $this->_tpl_vars['MOD']['LBL_OTHER_TYPE_CAMPAIGN']; ?>
<br>
			</td></tr>
			</table>	
	</div>
	</p>
	
	
	
	</td>
</tr>
</table>

<div id ='buttons' >
	<table width="100%" border="0" cellspacing="0" cellpadding="0" >
	<tr>
		<td  align="right" width='40%'>&nbsp;</td>
		<td  align="right" width='30%'>
			<table><tr>
				<td><div id="start_button_div"><input id="startbutton" type='submit' title="<?php echo $this->_tpl_vars['MOD']['LBL_START']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_START']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_START']; ?>
"></div></td>
			</tr></table>
		</td>
	</tr>
	</table>
</div>

</form>
<script>
document.getElementById('startbutton').focus=true;
</script>


</div>


