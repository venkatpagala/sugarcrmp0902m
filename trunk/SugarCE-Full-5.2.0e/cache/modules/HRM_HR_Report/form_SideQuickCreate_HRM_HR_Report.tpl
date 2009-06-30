

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
{sugar_translate label='LBL_NAME' module='HRM_HR_Report'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='20' maxlength='255' value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_DESCRIPTION' module='HRM_HR_Report'}:
<br>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea id="{$fields.description.name}" name="{$fields.description.name}" rows="3" cols="20" title='' tabindex="0">{$value}</textarea>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='HRM_HR_Report'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="11" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"form_SideQuickCreate_HRM_HR_Report","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);'>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('form_SideQuickCreate_HRM_HR_Report');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=HRM_HR_Report", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'date_entered_date', 'date', false,'Ngày tạo' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'date_modified_date', 'date', false,'Thay đổi lần cuối' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'assigned_user_name', 'relate', true,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'rep_mois', 'enum', true,'{/literal}{sugar_translate label='LBL_REP_MOIS' module='HRM_HR_Report'}{literal}' );
addToValidateRange('form_SideQuickCreate_HRM_HR_Report', 'rep_year', 'int', true,'{/literal}{sugar_translate label='LBL_REP_YEAR' module='HRM_HR_Report'}{literal}', 2000, 2020 );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'hrr_income', 'code', false,'{/literal}{sugar_translate label='LBL_HRR_INCOME' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'hrr_inc_year', 'code', false,'{/literal}{sugar_translate label='LBL_HRR_INC_YEAR' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'hrr_soc_year', 'code', false,'{/literal}{sugar_translate label='LBL_HRR_SOC_YEAR' module='HRM_HR_Report'}{literal}' );
addToValidate('form_SideQuickCreate_HRM_HR_Report', 'hrr_inc_tot', 'code', false,'{/literal}{sugar_translate label='LBL_HRR_INC_TOT' module='HRM_HR_Report'}{literal}' );
addToValidateBinaryDependency('form_SideQuickCreate_HRM_HR_Report', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='HRM_HR_Report'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='HRM_HR_Report'}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}
