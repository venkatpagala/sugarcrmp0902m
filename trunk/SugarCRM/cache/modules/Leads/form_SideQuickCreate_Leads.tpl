

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
{sugar_translate label='LBL_FIRST_NAME' module='Leads'}:
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
{sugar_translate label='LBL_LAST_NAME' module='Leads'}:
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
{sugar_translate label='LBL_OFFICE_PHONE' module='Leads'}:
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
{sugar_translate label='LBL_EMAIL_ADDRESS' module='Leads'}:
<br>
{counter name="panelFieldCount"}
<input tabindex="0"  type="text" name="emailAddress0" size=20><input tabindex="0"  type="hidden" name="emailAddressPrimaryFlag" value="emailAddress0"><input tabindex="0"  type="hidden" name="useEmailWidget" value="true"><script language="Javascript">addToValidate("form_SideQuickCreate_Leads", "emailAddress0", "email", false, SUGAR.language.get("app_strings", "LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR"));</script>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Leads'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="11" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Leads","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);'>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('form_SideQuickCreate_Leads');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Leads", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('form_SideQuickCreate_Leads', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SideQuickCreate_Leads', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SideQuickCreate_Leads', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'assigned_user_name', 'relate', true,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'salutation', 'enum', false,'{/literal}{sugar_translate label='LBL_SALUTATION' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'first_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'last_name', 'varchar', true,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'full_name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'do_not_call', 'bool', false,'{/literal}{sugar_translate label='LBL_DO_NOT_CALL' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_OFFICE_PHONE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'email1', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'email2', 'varchar', false,'{/literal}{sugar_translate label='LBL_OTHER_EMAIL_ADDRESS' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'primary_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'primary_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_2' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'primary_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_3' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'primary_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_CITY' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'primary_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STATE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'primary_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_POSTALCODE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'primary_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_COUNTRY' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'alt_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'alt_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_2' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'alt_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_3' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'alt_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_CITY' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'alt_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STATE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'alt_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_POSTALCODE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'alt_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_COUNTRY' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'assistant', 'varchar', false,'{/literal}{sugar_translate label='LBL_ASSISTANT' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'assistant_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_ASSISTANT_PHONE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'converted', 'bool', true,'{/literal}{sugar_translate label='LBL_CONVERTED' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'refered_by', 'varchar', false,'{/literal}{sugar_translate label='LBL_REFERED_BY' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'lead_source', 'enum', false,'{/literal}{sugar_translate label='LBL_LEAD_SOURCE' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'lead_source_description', 'text', false,'{/literal}{sugar_translate label='LBL_LEAD_SOURCE_DESCRIPTION' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'status_description', 'text', false,'{/literal}{sugar_translate label='LBL_STATUS_DESCRIPTION' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'reports_to_id', 'id', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_ID' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'report_to_name', 'relate', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'account_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'account_description', 'text', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_DESCRIPTION' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'contact_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_ID' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ID' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'opportunity_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'opportunity_amount', 'varchar', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_AMOUNT' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'campaign_id', 'id', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ID' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'campaign_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'c_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'm_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'accept_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'accept_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'webtolead_email1', 'email', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'webtolead_email2', 'email', false,'{/literal}{sugar_translate label='LBL_OTHER_EMAIL_ADDRESS' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'webtolead_email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'webtolead_invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'portal_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_PORTAL_NAME' module='Leads'}{literal}' );
addToValidate('form_SideQuickCreate_Leads', 'portal_app', 'varchar', false,'{/literal}{sugar_translate label='LBL_PORTAL_APP' module='Leads'}{literal}' );
addToValidateBinaryDependency('form_SideQuickCreate_Leads', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Leads'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Leads'}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}
