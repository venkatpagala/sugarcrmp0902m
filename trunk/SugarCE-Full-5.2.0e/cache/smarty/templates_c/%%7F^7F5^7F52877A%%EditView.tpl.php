<?php /* Smarty version 2.6.11, created on 2009-06-12 10:36:21
         compiled from modules/Configurator/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_help', 'modules/Configurator/EditView.tpl', 104, false),)), $this); ?>
<script type='text/javascript' src='include/javascript/overlibmws.js'></script>
<BR>
<form name="ConfigureSettings" enctype='multipart/form-data' method="POST" action="index.php" onSubmit="return (add_checks(document.ConfigureSettings) && check_form('ConfigureSettings'));">
<input type='hidden' name='action' value='EditView'/>
<input type='hidden' name='module' value='Configurator'/>
<span class='error'><?php echo $this->_tpl_vars['error']['main']; ?>
</span>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>

	<td style="padding-bottom: 2px;">
		<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button"  type="submit"  name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " >
		&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " >
		&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " > </td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
	<tr><th align="left" class="dataLabel" colspan="4"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['DEFAULT_SYSTEM_SETTINGS']; ?>
</h4></th>
	</tr><tr>
<td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LIST_ENTRIES_PER_LISTVIEW']; ?>
: </td>
		<td  class="dataField">
			<input type='text' size='4' name='list_max_entries_per_page' value='<?php echo $this->_tpl_vars['config']['list_max_entries_per_page']; ?>
'>
		</td>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LIST_ENTRIES_PER_SUBPANEL']; ?>
: </td>
		<td  class="dataField">
			<input type='text' size='4' name='list_max_entries_per_subpanel' value='<?php echo $this->_tpl_vars['config']['list_max_entries_per_subpanel']; ?>
'>
		</td>
	</tr>












	<tr>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['DISPLAY_RESPONSE_TIME']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['calculate_response_time'] )): ?>
			<?php $this->assign('calculate_response_time_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('calculate_response_time_checked', ''); ?>
		<?php endif; ?>
		<td class="dataField"><input type='hidden' name='calculate_response_time' value='false'><input name='calculate_response_time'  type="checkbox" value="true" <?php echo $this->_tpl_vars['calculate_response_time_checked']; ?>
></td>

		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['DISPLAY_LOGIN_NAV']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['login_nav'] )): ?>
			<?php $this->assign('login_nav_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('login_nav_checked', ''); ?>
		<?php endif; ?>
		<td class="dataField"><input type='hidden' name='login_nav' value='false'><input name='login_nav'  type="checkbox" value="true" <?php echo $this->_tpl_vars['login_nav_checked']; ?>
></td>
	</tr>
	<tr>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LOCK_HOMEPAGE']; ?>
:<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LOCK_HOMEPAGE_HELP']), $this);?>
</td>
		<td  class="dataField">
			<?php if (! empty ( $this->_tpl_vars['config']['lock_homepage'] )): ?>
				<?php $this->assign('lock_homepage_checked', 'CHECKED'); ?>
			<?php else: ?>
				<?php $this->assign('lock_homepage_checked', ''); ?>
			<?php endif; ?>
			<input type='hidden' name='lock_homepage' value='false'>
			<input type='checkbox' name='lock_homepage' value='true' <?php echo $this->_tpl_vars['lock_homepage_checked']; ?>
>
		</td>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LOCK_SUBPANELS']; ?>
: </td>
		<td  class="dataField">
			<?php if (! empty ( $this->_tpl_vars['config']['lock_subpanels'] )): ?>
				<?php $this->assign('lock_subpanels_checked', 'CHECKED'); ?>
			<?php else: ?>
				<?php $this->assign('lock_subpanels_checked', ''); ?>
			<?php endif; ?>
			<input type='hidden' name='lock_subpanels' value='false'>
			<input type='checkbox' name='lock_subpanels' value='true' <?php echo $this->_tpl_vars['lock_subpanels_checked']; ?>
>
		</td>
	</tr>
	<tr>
		<td  class="dataLabel" nowrap><?php echo $this->_tpl_vars['MOD']['MAX_DASHLETS']; ?>
: </td>
		<td  class="dataField" >
			<input type='text' size='4' name='max_dashlets_homepage' value='<?php echo $this->_tpl_vars['config']['max_dashlets_homepage']; ?>
'>
		</td>
		<td  class="dataLabel" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['use_real_names'] )): ?>
			<?php $this->assign('use_real_names', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('use_real_names', ''); ?>
		<?php endif; ?>
		<td class="dataField">
			<input type='hidden' name='use_real_names' value='false'>
			<input name='use_real_names'  type="checkbox" value="true" <?php echo $this->_tpl_vars['use_real_names']; ?>
>
		</td>
	</tr>
	<tr>
		<td  class="dataLabel" width='15%' nowrap><?php echo $this->_tpl_vars['MOD']['SYSTEM_NAME']; ?>
: </td>
		<td  class="dataField" width='35%'>
			<input type='text' name='system_name' value='<?php echo $this->_tpl_vars['settings']['system_name']; ?>
'>
		</td>
		<td  class="dataLabel" ></td>
		<td class="dataField" >
		</td>
	</tr>
</table>
</td></tr>
</table>

<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
	<tr><th align="left" class="dataLabel" colspan="4"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['IMAGES']; ?>
</h4></th>
	</tr><tr>
<td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td  class="dataLabel" nowrap><?php echo $this->_tpl_vars['MOD']['CURRENT_LOGO']; ?>
: </td>
		<td  class="dataField">
			<img id="company_logo_image" src='<?php echo $this->_tpl_vars['company_logo']; ?>
' height="40" width="212">
		</td>
	</tr>

	<tr>
		<td  class="dataLabel" nowrap>
			<?php echo $this->_tpl_vars['MOD']['NEW_LOGO']; ?>
:<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['NEW_LOGO_HELP']), $this);?>

        </td>
        <td  class="dataField">
            <div id="container_upload"></div>
            <input type='text' id='company_logo' name='company_logo' style="display:none">
        </td>
	</tr>

















</table>
</td>
</tr>
</table>
<br>
<?php if (! empty ( $this->_tpl_vars['settings']['system_ldap_enabled'] )): ?>
		<?php $this->assign('system_ldap_enabled_checked', 'CHECKED'); ?>
		<?php $this->assign('ldap_display', 'inline'); ?>
	<?php else: ?>
		<?php $this->assign('system_ldap_enabled_checked', ''); ?>
		<?php $this->assign('ldap_display', 'none');  endif; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
<tr><td>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr><th align="left" class="dataLabel" colspan='3'><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_TITLE']; ?>
</h4></th>
	</tr>
	<tr><td width="15%">
	<?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ENABLE']; ?>

	</td><td width="35%"><input type='hidden' name="system_ldap_enabled" value="0" ><input name="system_ldap_enabled" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['system_ldap_enabled_checked']; ?>
 onclick='toggleDisplay_2("ldap_display")'></td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td colspan='4'>
	<table  cellspacing='0' cellpadding='0' id='ldap_display' style='display:<?php echo $this->_tpl_vars['ldap_display']; ?>
' width='100%'>
	<tr>
		<td class="dataLabel" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_SERVER_HOSTNAME']; ?>
</td><?php echo $this->_tpl_vars['settings']['proxy_host']; ?>

		<td align="left" class="dataField" valign='top'><input name="ldap_hostname" size='25' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_hostname']; ?>
"></td>
		<td align="left" class="dataField" valign='top'><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_SERVER_HOSTNAME_DESC']; ?>
</td>
	</tr>
	<tr>
		<td class="dataLabel" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_SERVER_PORT']; ?>
</td><?php echo $this->_tpl_vars['settings']['proxy_port']; ?>

		<td align="left" class="dataField" valign='top'><input name="ldap_port" size='6' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_port']; ?>
"></td>
		<td align="left" class="dataField" valign='top'><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_SERVER_PORT_DESC']; ?>
</td>
	</tr>
	<tr>
		<td class="dataLabel" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_BASE_DN']; ?>
</td>
		<td align="left" class="dataField" valign='middle'><input name="ldap_base_dn" size='35' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_base_dn']; ?>
"></td>
		 <td align="left" class="dataField" valign='middle'><em><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_BASE_DN_DESC']; ?>
</em></td>
	</tr>
	<tr>
		<td class="dataLabel" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_BIND_ATTRIBUTE']; ?>
</td>
		<td align="left" class="dataField" valign='top'><input name="ldap_bind_attr" size='25' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_bind_attr']; ?>
"> </td>
		<td align="left" class="dataField" valign='top'><em><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_BIND_ATTRIBUTE_DESC']; ?>
</em></td>
	</tr>

	<tr>
		<td class="dataLabel" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_LOGIN_ATTRIBUTE']; ?>
</td>
		<td align="left" class="dataField" valign='middle'><input name="ldap_login_attr" size='25' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_login_attr']; ?>
"></td>
		 <td align="left" class="dataField" valign='middle'><em><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_LOGIN_ATTRIBUTE_DESC']; ?>
</em></td>
	</tr>

	<tr>
		<td class="dataLabel" valign='top'nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ADMIN_USER']; ?>
</td>
		<td align="left" class="dataField" valign='top'><input name="ldap_admin_user" size='35' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_admin_user']; ?>
" autocomplete="off"></td>
		<td align="left" class="dataField" valign='top'><em><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ADMIN_USER_DESC']; ?>
</em></td>
	</tr>
	<tr>
		<td class="dataLabel" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ADMIN_PASSWORD']; ?>
</td>
		<td align="left" class="dataField" valign='middle'><input name="ldap_admin_password" size='35' type="password" value="<?php echo $this->_tpl_vars['settings']['ldap_admin_password']; ?>
" autocomplete="off"> </td>
		<td align="left" class="dataField" valign='top'><em><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ADMIN_PASSWORD_DESC']; ?>
</em></td>
	</tr>


	<tr>
		<td class="dataLabel" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_AUTO_CREATE_USERS']; ?>
</td>
		<?php if (! empty ( $this->_tpl_vars['settings']['ldap_auto_create_users'] )): ?>
			<?php $this->assign('ldap_auto_create_users_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('ldap_auto_create_users_checked', ''); ?>
		<?php endif; ?>
		<td align="left" class="dataField" valign='top'><input type='hidden' name='ldap_auto_create_users' value='0'><input name="ldap_auto_create_users" value="1" class="checkbox" type="checkbox" <?php echo $this->_tpl_vars['ldap_auto_create_users_checked']; ?>
></td>
		<td align="left" class="dataField" valign='top'> <em><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_AUTO_CREATE_USERS_DESC']; ?>
</em></td>
	</tr>
	<tr>
		<td class="dataLabel" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ENC_KEY']; ?>
</td>
		<td align="left" class="dataField" valign='middle'><input name="ldap_enc_key" size='35' type="password" value="<?php echo $this->_tpl_vars['settings']['ldap_enc_key']; ?>
" <?php echo $this->_tpl_vars['LDAP_ENC_KEY_READONLY']; ?>
> </td>
		<td align="left" class="dataField" valign='top'><em><?php echo $this->_tpl_vars['LDAP_ENC_KEY_DESC']; ?>
</em></td>
	</tr>

</table>
</td></tr></table></td></tr></table>
<BR>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
<tr><td>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr><th align="left" class="dataLabel" colspan="4"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_TITLE']; ?>
</h4></th>
	</tr><tr>
	<td width="15%" class="dataLabel" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_ON']; ?>
</td>
		<?php if (! empty ( $this->_tpl_vars['settings']['proxy_on'] )): ?>
		<?php $this->assign('proxy_on_checked', 'CHECKED'); ?>
	<?php else: ?>
		<?php $this->assign('proxy_on_checked', ''); ?>
	<?php endif; ?>
	<td width="85%" align="left" class="dataField" valign='middle' colspan='3'><input type='hidden' name='proxy_on' value='0'><input name="proxy_on" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['proxy_on_checked']; ?>
 onclick='toggleDisplay_2("proxy_config_display")'> <em><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_ON_DESC']; ?>
</em></td>
	</tr><tr>
	<td colspan="4">
	<div id="proxy_config_display" style='display:<?php echo $this->_tpl_vars['PROXY_CONFIG_DISPLAY']; ?>
'>
		<table width="100%" cellpadding="0" cellspacing="0"><tr>
		<td width="15%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_HOST']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td width="35%" class="dataField"><input type="text" name="proxy_host" size="25"  value="<?php echo $this->_tpl_vars['settings']['proxy_host']; ?>
" tabindex='1' ></td>
		<td width="15%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_PORT']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td width="35%" class="dataField"><input type="text" name="proxy_port" size="6"  value="<?php echo $this->_tpl_vars['settings']['proxy_port']; ?>
" tabindex='1' ></td>
		</tr><tr>
		<td width="15%" class="dataLabel" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_AUTH']; ?>
</td>
	<?php if (! empty ( $this->_tpl_vars['settings']['proxy_auth'] )): ?>
		<?php $this->assign('proxy_auth_checked', 'CHECKED'); ?>
	<?php else: ?>
		<?php $this->assign('proxy_auth_checked', ''); ?>
	<?php endif; ?>
		<td width="35%" align="left" class="dataField" valign='middle' ><input type='hidden' name='proxy_auth' value='0'><input name="proxy_auth" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['proxy_auth_checked']; ?>
 onclick='toggleDisplay_2("proxy_auth_display")'> </td>
		</tr></table>

		<div id="proxy_auth_display" style='display:<?php echo $this->_tpl_vars['PROXY_AUTH_DISPLAY']; ?>
'>

		<table width="100%" cellpadding="0" cellspacing="0"><tr>
		<td width="15%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_USERNAME']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>

		<td width="35%" class="dataField"><input type="text" name="proxy_username" size="25"  value="<?php echo $this->_tpl_vars['settings']['proxy_username']; ?>
" tabindex='1' ></td>
		<td width="15%" class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_PASSWORD']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
		<td width="35%" class="dataField"><input type="password" name="proxy_password" size="25"  value="<?php echo $this->_tpl_vars['settings']['proxy_password']; ?>
" tabindex='1' ></td>
		</tr></table>
		</div>
	</div>
  </td></tr></table>
</td></tr></table>
<BR>



























<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
<tr><td>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr><th align="left" class="dataLabel" colspan="4"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_SKYPEOUT_TITLE']; ?>
</h4></th>
	</tr><tr>
	<td width="25%" class="dataLabel" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_SKYPEOUT_ON']; ?>
</td>
	<?php if (! empty ( $this->_tpl_vars['settings']['system_skypeout_on'] )): ?>
		<?php $this->assign('system_skypeout_on_checked', 'CHECKED'); ?>
	<?php else: ?>
		<?php $this->assign('system_skypeout_on_checked', ''); ?>
	<?php endif; ?>
	<td width="75%" align="left" class="dataField" valign='middle'><input type='hidden' name='system_skypeout_on' value='0'><input name="system_skypeout_on" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $this->_tpl_vars['system_skypeout_on_checked']; ?>
 > <em><?php echo $this->_tpl_vars['MOD']['LBL_SKYPEOUT_ON_DESC']; ?>
</em></td>
	</tr><tr>
	<td colspan="4">
	<div id="portal_config">
		<table width="100%" cellpadding="0" cellspacing="0"><tr>
		<td width="15%" class="dataLabel">&nbsp;</td>
		<td width="35%" class="dataField">&nbsp;</td>
		</tr></table>
	</div>
  </td></tr></table>
</td></tr></table>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
<tr><td>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr><th align="left" class="dataLabel" colspan="4"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_MAILMERGE']; ?>
</h4></th>
	</tr><tr>
	<td width="25%" class="dataLabel" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_ENABLE_MAILMERGE']; ?>
</td>
	<?php if (! empty ( $this->_tpl_vars['settings']['system_mailmerge_on'] )): ?>
		<?php $this->assign('system_mailmerge_on_checked', 'CHECKED'); ?>
	<?php else: ?>
		<?php $this->assign('system_mailmerge_on_checked', ''); ?>
	<?php endif; ?>
	<td width="75%" align="left" class="dataField" valign='middle'><input type='hidden' name='system_mailmerge_on' value='0'><input name="system_mailmerge_on" value="1" class="checkbox" type="checkbox" <?php echo $this->_tpl_vars['system_mailmerge_on_checked']; ?>
> <em><?php echo $this->_tpl_vars['MOD']['LBL_MAILMERGE_DESC']; ?>
</em></td>
	</tr>
</table>
</td></tr></table>




















<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
	<tr><th align="left" class="dataLabel" colspan="4"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['ADVANCED']; ?>
</h4></th>
	</tr><tr>
<td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['VERIFY_CLIENT_IP']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['verify_client_ip'] )): ?>
			<?php $this->assign('verify_client_ip_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('verify_client_ip_checked', ''); ?>
		<?php endif; ?>
		<td  class="dataField"><input type='hidden' name='verify_client_ip' value='false'><input name='verify_client_ip'  type="checkbox" value="1" <?php echo $this->_tpl_vars['verify_client_ip_checked']; ?>
></td>

		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LOG_MEMORY_USAGE']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['log_memory_usage'] )): ?>
			<?php $this->assign('log_memory_usage_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('log_memory_usage_checked', ''); ?>
		<?php endif; ?>
		<td  class="dataField"><input type='hidden' name='log_memory_usage' value='false'><input name='log_memory_usage'  type="checkbox" value='true' <?php echo $this->_tpl_vars['log_memory_usage_checked']; ?>
></td>

	</tr>
	<tr>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LOG_SLOW_QUERIES']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['dump_slow_queries'] )): ?>
			<?php $this->assign('dump_slow_queries_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('dump_slow_queries_checked', ''); ?>
		<?php endif; ?>
		<td class="dataField"><input type='hidden' name='dump_slow_queries' value='false'><input name='dump_slow_queries'  type="checkbox" value='true' <?php echo $this->_tpl_vars['dump_slow_queries_checked']; ?>
></td>

		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['SLOW_QUERY_TIME_MSEC']; ?>
: </td>
		<td  class="dataField">
			<input type='text' size='5' name='slow_query_time_msec' value='<?php echo $this->_tpl_vars['config']['slow_query_time_msec']; ?>
'>
		</td>

	</tr>
	<tr>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['UPLOAD_MAX_SIZE']; ?>
: </td>
		<td  class="dataField">
			<input type='text' size='8' name='upload_maxsize' value='<?php echo $this->_tpl_vars['config']['upload_maxsize']; ?>
'>
		</td>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['STACK_TRACE_ERRORS']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['stack_trace_errors'] )): ?>
			<?php $this->assign('stack_trace_errors_checked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('stack_trace_errors_checked', ''); ?>
		<?php endif; ?>
		<td class="dataField"><input type='hidden' name='stack_trace_errors' value='false'><input name='stack_trace_errors'  type="checkbox" value='true' <?php echo $this->_tpl_vars['stack_trace_errors_checked']; ?>
></td>



	</tr>

	<tr>






		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['DEVELOPER_MODE']; ?>
: </td>
		<?php if (! empty ( $this->_tpl_vars['config']['developerMode'] )): ?>
			<?php $this->assign('developerModeChecked', 'CHECKED'); ?>
		<?php else: ?>
			<?php $this->assign('developerModeChecked', ''); ?>
		<?php endif; ?>
		<td class="dataField"><input type='hidden' name='developerMode' value='false'><input name='developerMode'  type="checkbox" value='true' <?php echo $this->_tpl_vars['developerModeChecked']; ?>
></td>
	</tr>
	<tr>
		<td  class="dataLabel" ><?php echo $this->_tpl_vars['MOD']['LBL_VCAL_PERIOD']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['vCAL_HELP']), $this);?>
</td>
		<td class="dataField" >
			<input type='text' size='4' name='vcal_time' value='<?php echo $this->_tpl_vars['config']['vcal_time']; ?>
'>
		</td>
	</tr>
</table>
</td></tr>
</table>
<br />

































<table  width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
<tr><th align="left" class="dataLabel" colspan="4"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER']; ?>
</h4></th></tr>
	<tr>
		<td  class="dataLabel" valign='middle'><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_FILENAME']; ?>
</td>
		<td  class="dataField" valign='middle' ><input type='text' name = 'logger_file_name'  value="<?php echo $this->_tpl_vars['config']['logger']['file']['name']; ?>
"></td>
		<td  class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_FILE_EXTENSION']; ?>
</td>
		<td class="dataField"><input name ="logger_file_ext" type="text" size="5" value="<?php echo $this->_tpl_vars['config']['logger']['file']['ext']; ?>
"></td>
		<td class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_FILENAME_SUFFIX']; ?>
</td>
		<td class="dataField"><select name = "logger_file_suffix" selected='<?php echo $this->_tpl_vars['config']['logger']['file']['suffix']; ?>
'><?php echo $this->_tpl_vars['filename_suffix']; ?>
</select></td>
	</tr>
	<tr>
		<td class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_MAX_LOG_SIZE']; ?>
 </td>
		<td class="dataField"> <input name="logger_file_maxSize" size="4" value="<?php echo $this->_tpl_vars['config']['logger']['file']['maxSize']; ?>
"></td>
		<td class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_DEFAULT_DATE_FORMAT']; ?>
</td>
		<td  class="dataField"><input name ="logger_file_dateFormat" type="text" value=<?php echo $this->_tpl_vars['config']['logger']['file']['dateFormat']; ?>
></td>
	</tr>
	<tr>
		<td class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_LOG_LEVEL']; ?>
 </td>
		<td class="dataField"> <select name="logger_level"><?php echo $this->_tpl_vars['log_levels']; ?>
</select></td>
		<td class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_MAX_LOGS']; ?>
 </td>
		<td class="dataField"> <input name="logger_file_maxLogs" value="<?php echo $this->_tpl_vars['config']['logger']['file']['maxLogs']; ?>
"></td>
	</tr>

</table>
<br/>
</table>


<div style="padding-top: 2px;">
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button"  type="submit" name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " />
		&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " />
		&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
</div>
<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>

<?php echo '
<script>
addToValidate(\'ConfigureSettings\', \'system_name\', \'varchar\', true,\'System Name\' );
</script>
</form>
<div id=\'upload_panel\' style="display:none">
    <form id="upload_form" name="upload_form" method="POST" action=\'index.php\' enctype="multipart/form-data">
        <input type="file" id="my_file_company" name="file_1" size="20" onchange="uploadCheck(false)"/>
        <img id="loading_img_company" alt="loading..." src="themes/default/images/sqsWait.gif" style="display:none">
    </form>
</div>








<script type=\'text/javascript\' src=\'include/javascript/ext-2.0/adapter/ext/ext-base.js\'></script>
<script type=\'text/javascript\' src=\'include/javascript/ext-2.0/ext-all.js\'></script>
<script type=\'text/javascript\'>
function init_logo(){
    document.getElementById(\'upload_panel\').style.display="inline";
    document.getElementById(\'upload_panel\').style.position="absolute";
    Ext.get(\'upload_panel\').anchorTo(Ext.get(\'container_upload\'));





}
Ext.onReady(function(){
    init_logo();
});
function toggleDisplay_2(div_string){
    toggleDisplay(div_string);
    init_logo();
}
 function uploadCheck(quotes){
    //AJAX call for checking the file size and comparing with php.ini settings.
    var callback = {
        upload:function(r) {
            eval("var file_type = " + r.responseText);
            var forQuotes = file_type[\'forQuotes\'];
            document.getElementById(\'loading_img_\'+forQuotes).style.display="none";
            switch(file_type[\'data\']){
                case \'other\':
                    alert(SUGAR.language.get(\'Configurator\',\'LBL_ALERT_JPG_IMAGE\'));
                    document.getElementById(\'my_file_\' + forQuotes).value=\'\';
                    break;
                case \'size\':
                    if(forQuotes == \'quotes\'){
                        alert(SUGAR.language.get(\'Configurator\',\'LBL_ALERT_SIZE_RATIO_QUOTES\'));
                        document.getElementById(\'my_file_quotes\').value=\'\';
                    }else{
                        alert(SUGAR.language.get(\'Configurator\',\'LBL_ALERT_SIZE_RATIO\'));
                        document.getElementById(forQuotes + "_logo").value=file_type[\'path\'];
                        document.getElementById(forQuotes + "_logo_image").src=file_type[\'path\'];
                    }
                    break;
                case \'file_error\':
                    alert(SUGAR.language.get(\'Configurator\',\'ERR_ALERT_FILE_UPLOAD\'));
                    document.getElementById(\'my_file_\' + forQuotes).value=\'\';
                    break;
                //File good
                case \'ok\':
                    document.getElementById(forQuotes + "_logo").value=file_type[\'path\'];
                    document.getElementById(forQuotes + "_logo_image").src=file_type[\'path\'];
                    break;
                //error in getimagesize because unsupported type
                default:
                   alert(SUGAR.language.get(\'Configurator\',\'LBL_ALERT_TYPE_IMAGE\'));
                   document.getElementById(\'my_file_\' + forQuotes).value=\'\';
            }
        },
        failure:function(r){
            alert("Ajax failure");
        }
    }
    if(quotes){







    }
    else{
        document.getElementById("company_logo").value=\'\';
        document.getElementById(\'loading_img_company\').style.display="inline";
        var file_name = document.getElementById(\'my_file_company\').value;
        postData = \'&module=Configurator&action=UploadFileCheck&to_pdf=1&forQuotes=false\';
        YAHOO.util.Connect.setForm(document.getElementById(\'upload_form\'), true,true);
    }
    if(file_name){
        YAHOO.util.Connect.asyncRequest(\'POST\', \'index.php\', callback, postData);
    }
}
</script>
'; ?>
