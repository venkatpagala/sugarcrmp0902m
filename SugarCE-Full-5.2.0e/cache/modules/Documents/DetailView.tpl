

<table cellpadding="1" cellspacing="0" border="0" width="100%">
<tr>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id"> 
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">   
<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='{$module}'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView'" type="submit" name="Edit" id='edit_button' value="  {$APP.LBL_EDIT_BUTTON_LABEL}  "> 
<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='{$module}'; this.form.return_action.value='index'; this.form.isDuplicate.value=true; this.form.action.value='EditView'" type="submit" name="Duplicate" value=" {$APP.LBL_DUPLICATE_BUTTON_LABEL} " id='duplicate_button'> 
<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='{$module}'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}')" type="submit" name="Delete" value=" {$APP.LBL_DELETE_BUTTON_LABEL} " >
</form>
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Documents", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}</td>
</tr>
</table>{sugar_include include=$includes}
<div id=''>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width='100%' border='0' cellspacing='{$gridline}' cellpadding='0'  class='tabDetailView'>
{$PAGINATION}
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DOC_NAME' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.document_name.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DOC_VERSION' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.revision.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DET_IS_TEMPLATE' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if strval($fields.is_template.value) == "1" || strval($fields.is_template.value) == "yes" || strval($fields.is_template.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.is_template.name}" size="{$displayParams.size}" disabled="true" {$checked}>
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DET_TEMPLATE_TYPE' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{ $fields.template_type.options[$fields.template_type.value]}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_SF_CATEGORY' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{ $fields.category_id.options[$fields.category_id.value]}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_SF_SUBCATEGORY' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{ $fields.subcategory_id.options[$fields.subcategory_id.value]}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DOC_STATUS' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

{$fields.status.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_LAST_REV_CREATOR' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.last_rev_created_name.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_LAST_REV_CREATE_DATE' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.last_rev_create_date.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.active_date.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DOC_EXP_DATE' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.exp_date.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DET_RELATED_DOCUMENT' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.related_doc_id.value)}<a href="index.php?module=Documents&action=DetailView&record={$fields.related_doc_id.value}" class="tabDetailViewDFLink">{/if}
{$fields.related_doc_name.value}
{if !empty($fields.related_doc_id.value)}</a>{/if}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DET_RELATED_DOCUMENT_VERSION' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.related_doc_rev_number.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DOC_DESCRIPTION' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

{$fields.description.value|url2html|nl2br}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_FILENAME' module='Documents'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

<a href="index.php?entryPoint=download&id={$fields.document_revision_id.value}&type={$module}" class="tabDetailViewDFLink">{$fields.filename.value}</a>
&nbsp;
</td>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("panel_0").style.display='none';</script>
{/if}
<p>

</form>