

<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td style="padding-bottom: 2px;">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module)}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{else}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">   
<input type="hidden" name="case_id" value="{$smarty.request.case_id}">   
<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">   
<input type="hidden" name="email_id" value="{$smarty.request.email_id}">   
<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">   
</td>
<td align='right'></td>
</tr>
</table>{sugar_include include=$includes}
<table width="100%" cellspacing="0" cellpadding="0" class='tabDetailView' id='tabFormPagination'>
{$PAGINATION}
</table>
<div id="DEFAULT">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_FIRST_NAME' module='Contacts'}:
<br>
{counter name="panelFieldCount"}

{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if}  
<input type='text' name='{$fields.first_name.name}' id='{$fields.first_name.name}' size='20' maxlength='100' value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_LAST_NAME' module='Contacts'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if}  
<input type='text' name='{$fields.last_name.name}' id='{$fields.last_name.name}' size='20' maxlength='100' value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_OFFICE_PHONE' module='Contacts'}:
<br>
{counter name="panelFieldCount"}

{if strlen($fields.phone_work.value) <= 0}
{assign var="value" value=$fields.phone_work.default_value }
{else}
{assign var="value" value=$fields.phone_work.value }
{/if}  
<input type='text' name='{$fields.phone_work.name}' id='{$fields.phone_work.name}' size='20' maxlength='25' value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_EMAIL_ADDRESS' module='Contacts'}:
<br>
{counter name="panelFieldCount"}
<input tabindex="0"  type="text" name="emailAddress0" size=20><input tabindex="0"  type="hidden" name="emailAddressPrimaryFlag" value="emailAddress0"><input tabindex="0"  type="hidden" name="useEmailWidget" value="true"><script language="Javascript">addToValidate("form_SideQuickCreate_Contacts", "emailAddress0", "email", false, SUGAR.language.get("app_strings", "LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR"));</script>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Contacts'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="11" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Contacts","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);'>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('form_SideQuickCreate_Contacts');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Contacts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('form_SideQuickCreate_Contacts', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SideQuickCreate_Contacts', 'date_modified_date', 'date', false,'Ngày chỉnh sửa' );
addToValidate('form_SideQuickCreate_Contacts', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'assigned_user_name', 'relate', true,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'salutation', 'enum', false,'{/literal}{sugar_translate label='LBL_SALUTATION' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'first_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'last_name', 'varchar', true,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'full_name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'do_not_call', 'bool', false,'{/literal}{sugar_translate label='LBL_DO_NOT_CALL' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_OFFICE_PHONE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'email1', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'email2', 'varchar', false,'{/literal}{sugar_translate label='LBL_OTHER_EMAIL_ADDRESS' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'primary_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'primary_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_2' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'primary_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_3' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'primary_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_CITY' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'primary_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STATE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'primary_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_POSTALCODE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'primary_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_COUNTRY' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'alt_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'alt_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_2' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'alt_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_3' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'alt_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_CITY' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'alt_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STATE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'alt_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_POSTALCODE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'alt_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_COUNTRY' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'assistant', 'varchar', false,'{/literal}{sugar_translate label='LBL_ASSISTANT' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'assistant_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_ASSISTANT_PHONE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'email_and_name1', 'varchar', false,'{/literal}{sugar_translate label='LBL_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'lead_source', 'enum', false,'{/literal}{sugar_translate label='LBL_LEAD_SOURCE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'account_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'account_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'opportunity_role_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'opportunity_role_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ROLE_ID' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'opportunity_role', 'enum', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ROLE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'reports_to_id', 'id', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_ID' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'report_to_name', 'relate', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'birthdate', 'date', false,'{/literal}{sugar_translate label='LBL_BIRTHDATE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'portal_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_PORTAL_NAME' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'portal_active', 'bool', true,'{/literal}{sugar_translate label='LBL_PORTAL_ACTIVE' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'portal_app', 'varchar', false,'{/literal}{sugar_translate label='LBL_PORTAL_APP' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'campaign_id', 'id', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ID' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'campaign_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'c_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'm_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'accept_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'accept_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Contacts'}{literal}' );
addToValidate('form_SideQuickCreate_Contacts', 'sync_contact', 'bool', false,'{/literal}{sugar_translate label='LBL_SYNC_CONTACT' module='Contacts'}{literal}' );
addToValidateBinaryDependency('form_SideQuickCreate_Contacts', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Contacts'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Contacts'}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
