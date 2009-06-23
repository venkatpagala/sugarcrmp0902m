

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
{sugar_translate label='LBL_CAMPAIGN_NAME' module='Campaigns'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='20' maxlength='50' value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='Trạng thái' module='Campaigns'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<select name="{$fields.status.name}" id="{$fields.status.name}" title='' tabindex="0"  >
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='Ngày kết thúc' module='Campaigns'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.end_date.value }
<input autocomplete="off" type="text" name="{$fields.end_date.name}" id="{$fields.end_date.name}" value="{$date_value}" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.end_date.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.end_date.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.end_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='Loại' module='Campaigns'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<select name="{$fields.campaign_type.name}" id="{$fields.campaign_type.name}" title='' tabindex="0"  onchange="type_change();">
{if isset($fields.campaign_type.value) && $fields.campaign_type.value != ''}
{html_options options=$fields.campaign_type.options selected=$fields.campaign_type.value}
{else}
{html_options options=$fields.campaign_type.options selected=$fields.campaign_type.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Campaigns'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="11" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Campaigns","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);'>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('form_SideQuickCreate_Campaigns');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Campaigns", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('form_SideQuickCreate_Campaigns', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_CAMPAIGN_NAME' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'date_entered_date', 'date', false,'Ngày nhập' );
addToValidate('form_SideQuickCreate_Campaigns', 'date_modified_date', 'date', false,'Ngày sửa đổi' );
addToValidate('form_SideQuickCreate_Campaigns', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'assigned_user_name', 'relate', true,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'tracker_key', 'int', true,'{/literal}{sugar_translate label='LBL_TRACKER_KEY' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'tracker_count', 'int', false,'{/literal}{sugar_translate label='LBL_TRACKER_COUNT' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'refer_url', 'varchar', false,'{/literal}{sugar_translate label='LBL_REFER_URL' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'tracker_text', 'varchar', false,'{/literal}{sugar_translate label='LBL_TRACKER_TEXT' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'start_date', 'date', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_START_DATE' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'end_date', 'date', true,'{/literal}{sugar_translate label='LBL_CAMPAIGN_END_DATE' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_CAMPAIGN_STATUS' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'impressions', 'int', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_IMPRESSIONS' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'budget', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_BUDGET' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'expected_cost', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_EXPECTED_COST' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'actual_cost', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ACTUAL_COST' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'expected_revenue', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_EXPECTED_REVENUE' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'campaign_type', 'enum', true,'{/literal}{sugar_translate label='LBL_CAMPAIGN_TYPE' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'objective', 'text', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_OBJECTIVE' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'content', 'text', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_CONTENT' module='Campaigns'}{literal}' );
addToValidate('form_SideQuickCreate_Campaigns', 'frequency', 'enum', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_FREQUENCY' module='Campaigns'}{literal}' );
addToValidateBinaryDependency('form_SideQuickCreate_Campaigns', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Campaigns'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Campaigns'}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}
