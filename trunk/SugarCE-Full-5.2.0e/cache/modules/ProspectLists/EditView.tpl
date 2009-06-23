

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
<input type="hidden" name="campaign_id" value="{$smarty.request.campaign_id}">   
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ProspectLists", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
<td valign="top" id='name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NAME' module='ProspectLists'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='list_type_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_TYPE' module='ProspectLists'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.list_type.name}" id="{$fields.list_type.name}" title='' tabindex="0"  onchange="toggle_domain_name(this);">
{if isset($fields.list_type.value) && $fields.list_type.value != ''}
{html_options options=$fields.list_type.options selected=$fields.list_type.value}
{else}
{html_options options=$fields.list_type.options selected=$fields.list_type.default}
{/if}
</select>
<td valign="top" id='domain_name_label' width='12.5%' class="dataLabel">
<div {if $fields.list_type.value != "exempt_domain"} style='display:none'{/if} id='domain_label_div'>{$MOD.LBL_DOMAIN}</div>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}
<div {if $fields.list_type.value != "exempt_domain"} style='display:none'{/if} id='domain_name_div'><input tabindex="1"  name="domain_name" id="domain_name" maxlength="255" type="text" value="{$fields.domain_name.value}"></div>
</tr>
<tr>
<td valign="top" id='assigned_user_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_ASSIGNED_TO_USER' module='ProspectLists'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="a" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="a" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","name":"assigned_user_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.assigned_user_name.name}" tabindex="a" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.assigned_user_name.name}.value = ''; this.form.{$fields.assigned_user_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DESCRIPTION' module='ProspectLists'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea id="{$fields.description.name}" name="{$fields.description.name}" rows="8" cols="80" title='' tabindex="0">{$value}</textarea>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ProspectLists", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript">
function toggle_domain_name(list_type)  {ldelim} 
    domain_name = document.getElementById('domain_name_div');
    domain_label = document.getElementById('domain_label_div');
	if (list_type.value == 'exempt_domain')  {ldelim} 
        domain_name.style.display='block'; 
        domain_label.style.display='block';
	 {rdelim}  else  {ldelim} 
        domain_name.style.display='none';
        domain_label.style.display='none';
	 {rdelim} 
 {rdelim} 
</script>
<!-- End Meta-Data Javascript -->{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'list_type', 'enum', true,'{/literal}{sugar_translate label='LBL_TYPE' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Ngày nhập' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Ngày chỉnh sửa' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_USER' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', true,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'domain_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_DOMAIN_NAME' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'entry_count', 'int', false,'{/literal}{sugar_translate label='LBL_LIST_ENTRIES' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'marketing_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_MARKETING_ID' module='ProspectLists'}{literal}' );
addToValidate('EditView', 'marketing_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_MARKETING_NAME' module='ProspectLists'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ProspectLists'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ProspectLists'}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}
