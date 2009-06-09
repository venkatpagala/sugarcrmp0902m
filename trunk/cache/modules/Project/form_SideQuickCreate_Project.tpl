

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
<input type="hidden" name="status" value="Draft">   
<input type="hidden" name="priority" value="high">   
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
{sugar_translate label='LBL_NAME' module='Project'}:
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
{sugar_translate label='LBL_DATE_START' module='Project'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.estimated_start_date.value }
<input autocomplete="off" type="text" name="{$fields.estimated_start_date.name}" id="{$fields.estimated_start_date.name}" value="{$date_value}" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.estimated_start_date.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.estimated_start_date.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.estimated_start_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_DATE_END' module='Project'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.estimated_end_date.value }
<input autocomplete="off" type="text" name="{$fields.estimated_end_date.name}" id="{$fields.estimated_end_date.name}" value="{$date_value}" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.estimated_end_date.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.estimated_end_date.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.estimated_end_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_PRIORITY' module='Project'}:
<br>
{counter name="panelFieldCount"}

<select name="{$fields.priority.name}" id="{$fields.priority.name}" title='' tabindex="0"  >
{if isset($fields.priority.value) && $fields.priority.value != ''}
{html_options options=$fields.priority.options selected=$fields.priority.value}
{else}
{html_options options=$fields.priority.options selected=$fields.priority.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_ASSIGNED_USER_NAME' module='Project'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="11" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Project","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);'>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('form_SideQuickCreate_Project');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Project", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('form_SideQuickCreate_Project', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'date_entered_date', 'date', true,'Date Entered' );
addToValidate('form_SideQuickCreate_Project', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('form_SideQuickCreate_Project', 'assigned_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_USER_ID' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_USER_ID' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'deleted', 'bool', true,'{/literal}{sugar_translate label='LBL_DELETED' module='Project'}{literal}' );
addToValidateDateBeforeAllowBlank('form_SideQuickCreate_Project', 'estimated_start_date', 'date', true,'{/literal}{sugar_translate label='LBL_DATE_START' module='Project'}{literal}', 'estimated_end_date', 'true' );
addToValidate('form_SideQuickCreate_Project', 'estimated_end_date', 'date', true,'{/literal}{sugar_translate label='LBL_DATE_END' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'priority', 'enum', false,'{/literal}{sugar_translate label='LBL_PRIORITY' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'total_estimated_effort', 'int', false,'{/literal}{sugar_translate label='LBL_LIST_TOTAL_ESTIMATED_EFFORT' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'total_actual_effort', 'int', false,'{/literal}{sugar_translate label='LBL_LIST_TOTAL_ACTUAL_EFFORT' module='Project'}{literal}' );
addToValidate('form_SideQuickCreate_Project', 'assigned_user_name', 'relate', true,'{/literal}{sugar_translate label='LBL_ASSIGNED_USER_NAME' module='Project'}{literal}' );
addToValidateBinaryDependency('form_SideQuickCreate_Project', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Project'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Project'}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
