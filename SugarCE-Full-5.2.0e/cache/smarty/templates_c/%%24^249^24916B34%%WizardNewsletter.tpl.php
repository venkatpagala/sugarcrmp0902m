<?php /* Smarty version 2.6.11, created on 2009-06-26 17:25:24
         compiled from modules/Campaigns/tpls/WizardNewsletter.tpl */ ?>

<?php echo $this->_tpl_vars['ROLLOVERSTYLE']; ?>

<form  id="wizform" name="wizform" method="POST" action="index.php">
	<input type="hidden" name="module" value="Campaigns">
	<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['ID']; ?>
">
	<input type="hidden" id="action" name="action">
	<input type="hidden" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
	<input type="hidden" name="return_id" value="<?php echo $this->_tpl_vars['RETURN_ID']; ?>
">
	<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
	<input type='hidden' name='campaign_type' value="<?php echo $this->_tpl_vars['MOD']['LBL_NEWSLETTER_FORENTRY']; ?>
">
	<input type="hidden" id="wiz_total_steps" name="totalsteps" value="<?php echo $this->_tpl_vars['TOTAL_STEPS']; ?>
">
	<input type="hidden" id="wiz_current_step" name="currentstep" value='1'>
	<input type="hidden" id="direction" name="wiz_direction" value='exit'>		

<p>
	<div id ='buttons'>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align="left" width='30%'>
					<table border="0" cellspacing="0" cellpadding="0" ><tr>
						<td><div id="back_button_div"><input id="wiz_back_button" type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_BACK']; ?>
" class="button" onclick="javascript:navigate('back');"  name="back" value="  <?php echo $this->_tpl_vars['APP']['LBL_BACK']; ?>
"></div></td>
						<td><div id="cancel_button_div"><input id="wiz_cancel_button" title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='WizardHome'; this.form.module.value='Campaigns'; this.form.record.value='<?php echo $this->_tpl_vars['RETURN_ID']; ?>
';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"></div></td>
						<td>
						<div id="save_button_div">
							<input id="wiz_submit_button" class="button" onclick="this.form.action.value='WizardNewsletterSave';this.form.direction.value='continue';gatherTrackers();"  accesKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" type="<?php echo $this->_tpl_vars['HIDE_CONTINUE']; ?>
" name="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_CONTINUE_BUTTON_LABEL']; ?>
" ><input id="wiz_submit_finish_button" class="button" onclick="this.form.action.value='WizardNewsletterSave';this.form.direction.value='exit';gatherTrackers();"  accesKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" type="submit" name="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_EXIT_BUTTON_LABEL']; ?>
" >
						</div></td>
						<td><div id="next_button_div"><input id="wiz_next_button" type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_NEXT_BUTTON_LABEL']; ?>
" class="button" onclick="javascript:navigate('next');" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_NEXT_BUTTON_LABEL']; ?>
"></div></td>
					</tr></table>
				</td>
				<td  align="right" width='70%'><div id='wiz_location_message'></td>
				
			</tr>
		</table>
	</div>
</p>
<table class='tabDetailView2' width="100%" border="0" cellspacing="1" cellpadding="0" >
<tr>
<td class='tabDetailViewDL2' rowspan='2' width=10%  style='vertical-align: top;' nowrap>
<div id='nav' >
<?php echo $this->_tpl_vars['NAV_ITEMS']; ?>


</div>

</td>
<td class='tabForm' rowspan='2' width='100%'>
<div id="wiz_message"></div>
<div id=wizard>

<?php echo $this->_tpl_vars['STEPS']; ?>



</div>
</td>
</tr>
</table>
</form>

<script type="text/javascript" src="include/javascript/popup_parent_helper.js?s=<?php echo $this->_tpl_vars['SUGAR_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTOM_VERSION']; ?>
"></script>
<script type="text/javascript" language="javascript" src="modules/Campaigns/wizard.js"></script>
<script type='text/javascript' src='include/javascript/sugar_grp_overlib.js'></script>
<div id='overDiv' style='position:absolute; visibility:hidden; z-index:1000;'></div>

<?php echo $this->_tpl_vars['WIZ_JAVASCRIPT']; ?>

<?php echo $this->_tpl_vars['DIV_JAVASCRIPT']; ?>

<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>

<script language="javascript">
<?php echo $this->_tpl_vars['HILITE_ALL']; ?>

</script>
