

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
<input type="hidden" name="account_id" value="{$smarty.request.account_id}">   
<input type="hidden" name="contact_id" value="{$smarty.request.contact_id}">   
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Bugs", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
<td valign="top" id='bug_number_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NUMBER' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{$fields.bug_number.value}
<td valign="top" id='assigned_user_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="a" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="a" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.assigned_user_name.name}" tabindex="a" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.assigned_user_name.name}.value = ''; this.form.{$fields.assigned_user_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
</tr>
<tr>
<td valign="top" id='priority_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PRIORITY' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.priority.name}" id="{$fields.priority.name}" title='' tabindex="p"  >
{if isset($fields.priority.value) && $fields.priority.value != ''}
{html_options options=$fields.priority.options selected=$fields.priority.value}
{else}
{html_options options=$fields.priority.options selected=$fields.priority.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='type_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_TYPE' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.type.name}" id="{$fields.type.name}" title='' tabindex="t"  >
{if isset($fields.type.value) && $fields.type.value != ''}
{html_options options=$fields.type.options selected=$fields.type.value}
{else}
{html_options options=$fields.type.options selected=$fields.type.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='source_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_SOURCE' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.source.name}" id="{$fields.source.name}" title='' tabindex="s"  >
{if isset($fields.source.value) && $fields.source.value != ''}
{html_options options=$fields.source.options selected=$fields.source.value}
{else}
{html_options options=$fields.source.options selected=$fields.source.default}
{/if}
</select>
<td valign="top" id='status_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_STATUS' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.status.name}" id="{$fields.status.name}" title='' tabindex="s"  >
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='product_category_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PRODUCT_CATEGORY' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.product_category.name}" id="{$fields.product_category.name}" title='' tabindex="p"  >
{if isset($fields.product_category.value) && $fields.product_category.value != ''}
{html_options options=$fields.product_category.options selected=$fields.product_category.value}
{else}
{html_options options=$fields.product_category.options selected=$fields.product_category.default}
{/if}
</select>
<td valign="top" id='resolution_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_RESOLUTION' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.resolution.name}" id="{$fields.resolution.name}" title='' tabindex="r"  >
{if isset($fields.resolution.value) && $fields.resolution.value != ''}
{html_options options=$fields.resolution.options selected=$fields.resolution.value}
{else}
{html_options options=$fields.resolution.options selected=$fields.resolution.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='found_in_release_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_FOUND_IN_RELEASE' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.found_in_release.name}" id="{$fields.found_in_release.name}" title='' tabindex="f"  >
{if isset($fields.found_in_release.value) && $fields.found_in_release.value != ''}
{html_options options=$fields.found_in_release.options selected=$fields.found_in_release.value}
{else}
{html_options options=$fields.found_in_release.options selected=$fields.found_in_release.default}
{/if}
</select>
<td valign="top" id='fixed_in_release_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_FIXED_IN_RELEASE' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.fixed_in_release.name}" id="{$fields.fixed_in_release.name}" title='' tabindex="f"  >
{if isset($fields.fixed_in_release.value) && $fields.fixed_in_release.value != ''}
{html_options options=$fields.fixed_in_release.options selected=$fields.fixed_in_release.value}
{else}
{html_options options=$fields.fixed_in_release.options selected=$fields.fixed_in_release.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_SUBJECT' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='60' maxlength='255' value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DESCRIPTION' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea id="{$fields.description.name}" name="{$fields.description.name}" rows="8" cols="80" title='' tabindex="0">{$value}</textarea>
</tr>
<tr>
<td valign="top" id='work_log_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_WORK_LOG' module='Bugs'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if empty($fields.work_log.value)}
{assign var="value" value=$fields.work_log.default_value }
{else}
{assign var="value" value=$fields.work_log.value }
{/if}  
<textarea id="{$fields.work_log.name}" name="{$fields.work_log.name}" rows="5" cols="80" title='' tabindex="0">{$value}</textarea>
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
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Bugs", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Bugs'}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_SUBJECT' module='Bugs'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Created On' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Modified On' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Bugs'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Bugs'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Bugs'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Bugs'}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Bugs'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Bugs'}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Bugs'}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Bugs'}{literal}' );
addToValidate('EditView', 'bug_number', 'int', true,'{/literal}{sugar_translate label='LBL_NUMBER' module='Bugs'}{literal}' );
addToValidate('EditView', 'type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE' module='Bugs'}{literal}' );
addToValidate('EditView', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Bugs'}{literal}' );
addToValidate('EditView', 'priority', 'enum', false,'{/literal}{sugar_translate label='LBL_PRIORITY' module='Bugs'}{literal}' );
addToValidate('EditView', 'resolution', 'enum', false,'{/literal}{sugar_translate label='LBL_RESOLUTION' module='Bugs'}{literal}' );
addToValidate('EditView', 'work_log', 'text', false,'{/literal}{sugar_translate label='LBL_WORK_LOG' module='Bugs'}{literal}' );
addToValidate('EditView', 'found_in_release', 'enum', false,'{/literal}{sugar_translate label='LBL_FOUND_IN_RELEASE' module='Bugs'}{literal}' );
addToValidate('EditView', 'release_name', 'relate', false,'{/literal}{sugar_translate label='LBL_FOUND_IN_RELEASE' module='Bugs'}{literal}' );
addToValidate('EditView', 'fixed_in_release', 'enum', false,'{/literal}{sugar_translate label='LBL_FIXED_IN_RELEASE' module='Bugs'}{literal}' );
addToValidate('EditView', 'fixed_in_release_name', 'relate', false,'{/literal}{sugar_translate label='LBL_FIXED_IN_RELEASE' module='Bugs'}{literal}' );
addToValidate('EditView', 'source', 'enum', false,'{/literal}{sugar_translate label='LBL_SOURCE' module='Bugs'}{literal}' );
addToValidate('EditView', 'product_category', 'enum', false,'{/literal}{sugar_translate label='LBL_PRODUCT_CATEGORY' module='Bugs'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Bugs'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Bugs'}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}
