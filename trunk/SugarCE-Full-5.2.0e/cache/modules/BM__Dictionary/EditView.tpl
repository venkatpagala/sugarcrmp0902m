

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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=BM__Dictionary", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'></td>
</tr>
</table>{sugar_include include=$includes}
<table width="100%" cellspacing="0" cellpadding="0" class='tabDetailView' id='tabFormPagination'>
{$PAGINATION}
</table>
<div id="LBL_PANEL1">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_PANEL1' module='BM__Dictionary'}</h4>
</th>
<tr>
<td valign="top" id='name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NAME' module='BM__Dictionary'}
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
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='created_by_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CREATED' module='BM__Dictionary'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.created_by_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.created_by_name.name}" size="" value="{$fields.created_by_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.created_by_name.id_name}" id="{$fields.created_by_name.id_name}" value="{$fields.created_by.value}">
<input type="button" name="btn_{$fields.created_by_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.created_by_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"created_by","user_name":"created_by_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.created_by_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.created_by_name.name}.value = ''; this.form.{$fields.created_by_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DESCRIPTION' module='BM__Dictionary'}
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
<textarea id="{$fields.description.name}" name="{$fields.description.name}" rows="4" cols="60" title='' tabindex="0">{$value}</textarea>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='date_entered_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DATE_ENTERED' module='BM__Dictionary'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{$fields.date_entered.value}
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL1").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=BM__Dictionary", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='BM__Dictionary'}{literal}' );
addToValidate('EditView', 'name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='BM__Dictionary'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Ngày tạo' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Thay đổi lần cuối' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='BM__Dictionary'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='BM__Dictionary'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='BM__Dictionary'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='BM__Dictionary'}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='BM__Dictionary'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='BM__Dictionary'}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='BM__Dictionary'}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='BM__Dictionary'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='BM__Dictionary'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='BM__Dictionary'}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'created_by_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='BM__Dictionary'}{literal}{/literal}{sugar_translate label='LBL_CREATED' module='BM__Dictionary'}{literal}', 'created_by' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['created_by_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}
