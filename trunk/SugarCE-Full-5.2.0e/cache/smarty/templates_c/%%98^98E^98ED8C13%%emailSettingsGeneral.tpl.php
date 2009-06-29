<?php /* Smarty version 2.6.11, created on 2009-06-24 12:18:03
         compiled from modules/Emails/templates/emailSettingsGeneral.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/Emails/templates/emailSettingsGeneral.tpl', 50, false),)), $this); ?>
<form name="emailSettingsGeneral" id="formEmailSettingsGeneral">

<table cellpadding="4" cellspacing="0" border="0">
	<tr>
		<th colspan="4">
			<div class="sectionTitle"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_TITLE_PREFERENCES']; ?>
</div>
		</th>
	</tr>
	<tr>
		<td width="20%" NOWRAP class="tabDetailViewDL">
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_CHECK_INTERVAL']; ?>
:
		</td>
		<td width="30%" NOWRAP class="tabDetailViewDF">
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['emailCheckInterval']['options'],'selected' => $this->_tpl_vars['emailCheckInterval']['selected'],'name' => 'emailCheckInterval','id' => 'emailCheckInterval'), $this);?>

		</td>
		<td NOWRAP class="tabDetailViewDL">
			&nbsp;
		</td>
		<td NOWRAP class="tabDetailViewDF">
			&nbsp;
		</td>
	</tr>
	<tr>
		<td width="20%" NOWRAP class="tabDetailViewDL">
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_SEND_EMAIL_AS']; ?>
:
		</td>
		<td width="30%" NOWRAP class="tabDetailViewDF">
			<input class="checkbox" type="checkbox" id="sendPlainText" name="sendPlainText" value="1" <?php echo $this->_tpl_vars['sendPlainTextChecked']; ?>
 />
		</td>
		<td NOWRAP class="tabDetailViewDL">
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_SAVE_OUTBOUND']; ?>
:
		</td>
		<td NOWRAP class="tabDetailViewDF">
			<input class='checkbox' type="checkbox" id="alwaysSaveOutbound" name="alwaysSaveOutbound" value="1" <?php echo $this->_tpl_vars['alwaysSaveOutboundChecked']; ?>
 />
		</td>
	</tr>
	<tr>
		<td NOWRAP class="tabDetailViewDL">
        	<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_CHARSET']; ?>
:
        </td>
		<td NOWRAP class="tabDetailViewDF">
        	<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['charset']['options'],'selected' => $this->_tpl_vars['charset']['selected'],'name' => 'default_charset','id' => 'default_charset'), $this);?>

        </td>
		<td NOWRAP class="tabDetailViewDL">
        	<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SIGNATURES']; ?>
:
        </td>
		<td NOWRAP class="tabDetailViewDF">
        	<?php echo $this->_tpl_vars['signaturesSettings']; ?>
 <?php echo $this->_tpl_vars['signatureButtons']; ?>
 
        	<input type="hidden" name="signatureDefault" id="signatureDefault" value="<?php echo $this->_tpl_vars['signatureDefaultId']; ?>
">
        </td>
	</tr>
	<tr>
		<td NOWRAP class="tabDetailViewDL">
        	<?php echo $this->_tpl_vars['mod_strings']['LBL_SIGNATURE_PREPEND']; ?>
:
        </td>
		<td NOWRAP class="tabDetailViewDF">
        	<input type="checkbox" name="signature_prepend" <?php echo $this->_tpl_vars['signaturePrepend']; ?>
>
        </td>
		<td NOWRAP class="tabDetailViewDL">
        	<?php if (isset ( $this->_tpl_vars['pro'] )): ?>
				<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_TEAMS']; ?>
:
        	<?php else: ?>
        		&nbsp;
        	<?php endif; ?>
        </td>
		<td NOWRAP class="tabDetailViewDF">
        	<?php if (isset ( $this->_tpl_vars['pro'] )): ?>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['teams']['options'],'selected' => $this->_tpl_vars['teams']['selected'],'name' => 'assign_to_team','id' => 'assign_to_team'), $this);?>

        	<?php else: ?>
        		&nbsp;
        	<?php endif; ?>
        </td>        
	</tr>


	<tr>
		<th colspan="4">
			<div class="sectionTitle"><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_TITLE_LAYOUT']; ?>
</div>
			<i><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_REQUIRE_REFRESH']; ?>
</i>
		</th>
	</tr>
	<tr>
		<td NOWRAP class="tabDetailViewDL">
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_LAYOUT']; ?>
:
		</td>
		<td NOWRAP class="tabDetailViewDF">
			<input type="radio" name="layoutStyle" id="2rows" value="2rows" <?php echo $this->_tpl_vars['rowsChecked']; ?>
>  <img src="modules/Emails/images/rowsView.gif" align="absmiddle" height="10"> <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_2_ROWS']; ?>
<br>
			<input type="radio" name="layoutStyle" id="2cols" value="2cols" <?php echo $this->_tpl_vars['colsChecked']; ?>
>  <img src="modules/Emails/images/colsView.gif" align="absmiddle" height="10"> <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_3_COLS']; ?>
<br>
		</td>
		<td NOWRAP class="tabDetailViewDL">
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_TAB_POS']; ?>
:
		</td>
		<td NOWRAP class="tabDetailViewDF">
			<input type="checkbox" name="tabPosition" id="tabPosition" value="top" <?php echo $this->_tpl_vars['tabPositionChecked']; ?>
>
		</td>
	</tr>
	<tr>
		<td NOWRAP class="tabDetailViewDL">
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST']; ?>
:
		</td>
		<td NOWRAP class="tabDetailViewDF">
			<select name="showNumInList" id="showNumInList">
			<?php echo $this->_tpl_vars['showNumInList']; ?>

			</select>
		</td>
		<td NOWRAP class="tabDetailViewDL">
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SETTINGS_FULL_SCREEN']; ?>
:
		</td>
		<td NOWRAP class="tabDetailViewDF">
			<input type="checkbox" class="checkbox" id="fullScreen" name="fullScreen" value="1" <?php echo $this->_tpl_vars['fullScreenChecked']; ?>
 onchange="SUGAR.email2.settings.toggleFullScreen(this);">
		</td>
	</tr>



	<tr>
		<td NOWRAP class="tabDetailViewDF">
			&nbsp;
		</td>
		<td NOWRAP class="tabDetailViewDF">
			<input type="button" class="button" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SAVE']; ?>
   " onclick="javascript:SUGAR.email2.settings.saveOptionsGeneral(true);">
		</td>
		<td NOWRAP class="tabDetailViewDL">
			&nbsp;
		</td>
		<td NOWRAP class="tabDetailViewDF">
			&nbsp;
		</td>
	</tr>
</table>

</form>