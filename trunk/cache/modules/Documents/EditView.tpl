

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
<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">   
<input type="hidden" name="contract_id" value="{$smarty.request.contract_id}">   
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Documents", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
<td valign="top" id='document_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NAME' module='Documents'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.document_name.value) <= 0}
{assign var="value" value=$fields.document_name.default_value }
{else}
{assign var="value" value=$fields.document_name.value }
{/if}  
<input type='text' name='{$fields.document_name.name}' id='{$fields.document_name.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='d' > 
</tr>
<tr>
<td valign="top" id='uploadfile_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_FILENAME' module='Documents'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}
<input tabindex="0"  type="hidden" name="escaped_document_name"><input tabindex="0"  name="uploadfile" type="{$FILE_OR_HIDDEN}" size="30" maxlength="" onchange="setvalue(this);" value="{$fields.filename.value}">{$fields.filename.value}
<td valign="top" id='revision_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DOC_VERSION' module='Documents'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}
<input tabindex="1"  name="revision" type="text" value="{$fields.revision.value}" {$DISABLED}>
</tr>
<tr>
<td valign="top" id='is_template_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DET_IS_TEMPLATE' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strval($fields.is_template.value) == "1" || strval($fields.is_template.value) == "yes" || strval($fields.is_template.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.is_template.name}" value="0"> 
<input type="checkbox" id="{$fields.is_template.name}" name="{$fields.is_template.name}" value="1" title='' tabindex="0" {$checked} >
<td valign="top" id='template_type_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DET_TEMPLATE_TYPE' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.template_type.name}" id="{$fields.template_type.name}" title='' tabindex="1"  >
{if isset($fields.template_type.value) && $fields.template_type.value != ''}
{html_options options=$fields.template_type.options selected=$fields.template_type.value}
{else}
{html_options options=$fields.template_type.options selected=$fields.template_type.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='category_id_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_SF_CATEGORY' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.category_id.name}" id="{$fields.category_id.name}" title='' tabindex="c"  >
{if isset($fields.category_id.value) && $fields.category_id.value != ''}
{html_options options=$fields.category_id.options selected=$fields.category_id.value}
{else}
{html_options options=$fields.category_id.options selected=$fields.category_id.default}
{/if}
</select>
<td valign="top" id='subcategory_id_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_SF_SUBCATEGORY' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.subcategory_id.name}" id="{$fields.subcategory_id.name}" title='' tabindex="s"  >
{if isset($fields.subcategory_id.value) && $fields.subcategory_id.value != ''}
{html_options options=$fields.subcategory_id.options selected=$fields.subcategory_id.value}
{else}
{html_options options=$fields.subcategory_id.options selected=$fields.subcategory_id.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='status_id_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DOC_STATUS' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.status_id.name}" id="{$fields.status_id.name}" title='' tabindex="s"  >
{if isset($fields.status_id.value) && $fields.status_id.value != ''}
{html_options options=$fields.status_id.options selected=$fields.status_id.value}
{else}
{html_options options=$fields.status_id.options selected=$fields.status_id.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='active_date_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='Documents'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.active_date.value }
<input autocomplete="off" type="text" name="{$fields.active_date.name}" id="{$fields.active_date.name}" value="{$date_value}" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.active_date.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.active_date.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.active_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
<td valign="top" id='exp_date_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DOC_EXP_DATE' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.exp_date.value }
<input autocomplete="off" type="text" name="{$fields.exp_date.name}" id="{$fields.exp_date.name}" value="{$date_value}" title=''  tabindex='e' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.exp_date.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.exp_date.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.exp_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
</tr>
<tr>
<td valign="top" id='related_doc_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DET_RELATED_DOCUMENT' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}
<input tabindex="0"  name="related_document_name" type="text" size="30" maxlength="255" value="{$RELATED_DOCUMENT_NAME}" readonly><input tabindex="0"  name="related_doc_id" type="hidden" value="{$fields.related_doc_id.value}"/>&nbsp;<input tabindex="0"  title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" type="{$RELATED_DOCUMENT_BUTTON_AVAILABILITY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" name="btn2" onclick='open_popup("Documents", 600, 400, "", true, false, {$encoded_document_popup_request_data}, "single", true);'/>
<td valign="top" id='related_doc_rev_number_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DET_RELATED_DOCUMENT_VERSION' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}
<select tabindex="1"  name="related_doc_rev_id" id="related_doc_rev_id" {$RELATED_DOCUMENT_REVISION_DISABLED}>{$RELATED_DOCUMENT_REVISION_OPTIONS}</select>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DESCRIPTION' module='Documents'}
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
<textarea id="{$fields.description.name}" name="{$fields.description.name}" rows="6" cols="80" title='' tabindex="0">{$value}</textarea>
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
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Documents", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/javascript/popup_parent_helper.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/jsolait/init.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/jsolait/lib/urllib.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script type="text/javascript" src="include/javascript/jsclass_base.js"></script>
<script type="text/javascript" src="include/javascript/jsclass_async.js"></script>
<script type="text/javascript" src="include/JSON.js?s={$SUGAR_VERSION}"></script>
<script type="text/javascript" src="modules/Documents/documents.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<!-- End Meta-Data Javascript -->{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Documents'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Entered' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Documents'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Documents'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Documents'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Documents'}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Documents'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Documents'}{literal}' );
addToValidate('EditView', 'document_name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='Documents'}{literal}' );
addToValidate('EditView', 'filename', 'file', false,'{/literal}{sugar_translate label='LBL_FILENAME' module='Documents'}{literal}' );
addToValidate('EditView', 'uploadfile', 'file', true,'{/literal}{sugar_translate label='LBL_FILENAME' module='Documents'}{literal}' );
addToValidate('EditView', 'active_date', 'date', true,'{/literal}{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='Documents'}{literal}' );
addToValidate('EditView', 'exp_date', 'date', false,'{/literal}{sugar_translate label='LBL_DOC_EXP_DATE' module='Documents'}{literal}' );
addToValidate('EditView', 'category_id', 'enum', false,'{/literal}{sugar_translate label='LBL_SF_CATEGORY' module='Documents'}{literal}' );
addToValidate('EditView', 'subcategory_id', 'enum', false,'{/literal}{sugar_translate label='LBL_SF_SUBCATEGORY' module='Documents'}{literal}' );
addToValidate('EditView', 'status_id', 'enum', false,'{/literal}{sugar_translate label='LBL_DOC_STATUS' module='Documents'}{literal}' );
addToValidate('EditView', 'status', 'varchar', false,'{/literal}{sugar_translate label='LBL_DOC_STATUS' module='Documents'}{literal}' );
addToValidate('EditView', 'document_revision_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LATEST_REVISION' module='Documents'}{literal}' );
addToValidate('EditView', 'revision', 'varchar', true,'{/literal}{sugar_translate label='LBL_DOC_VERSION' module='Documents'}{literal}' );
addToValidate('EditView', 'last_rev_created_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_LAST_REV_CREATOR' module='Documents'}{literal}' );
addToValidate('EditView', 'last_rev_mime_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_LAST_REV_MIME_TYPE' module='Documents'}{literal}' );
addToValidate('EditView', 'latest_revision', 'varchar', false,'{/literal}{sugar_translate label='LBL_LATEST_REVISION' module='Documents'}{literal}' );
addToValidate('EditView', 'last_rev_create_date', 'date', false,'{/literal}{sugar_translate label='LBL_LAST_REV_CREATE_DATE' module='Documents'}{literal}' );
addToValidate('EditView', 'related_doc_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_RELATED_DOCUMENT_ID' module='Documents'}{literal}' );
addToValidate('EditView', 'related_doc_name', 'relate', false,'{/literal}{sugar_translate label='LBL_DET_RELATED_DOCUMENT' module='Documents'}{literal}' );
addToValidate('EditView', 'related_doc_rev_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_RELATED_DOCUMENT_REVISION_ID' module='Documents'}{literal}' );
addToValidate('EditView', 'related_doc_rev_number', 'varchar', false,'{/literal}{sugar_translate label='LBL_DET_RELATED_DOCUMENT_VERSION' module='Documents'}{literal}' );
addToValidate('EditView', 'is_template', 'bool', false,'{/literal}{sugar_translate label='LBL_IS_TEMPLATE' module='Documents'}{literal}' );
addToValidate('EditView', 'template_type', 'enum', false,'{/literal}{sugar_translate label='LBL_TEMPLATE_TYPE' module='Documents'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Documents'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Documents'}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'related_doc_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Documents'}{literal}{/literal}{sugar_translate label='LBL_DET_RELATED_DOCUMENT' module='Documents'}{literal}', 'related_doc_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['related_doc_name']={"method":"query","modules":["Documents"],"group":"or","field_list":["name","id"],"populate_list":["related_doc_name","related_doc_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>{/literal}
