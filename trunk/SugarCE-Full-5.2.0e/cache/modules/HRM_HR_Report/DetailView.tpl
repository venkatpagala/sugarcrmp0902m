

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
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='HRM_HR_Report'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='HRM_HR_Report'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='HRM_HR_Report'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
</form>
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=HRM_HR_Report", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}</td>
</tr>
</table>{sugar_include include=$includes}
<div id='DEFAULT'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width='100%' border='0' cellspacing='{$gridline}' cellpadding='0'  class='tabDetailView'>
{$PAGINATION}
<tr>
<td width='12.5%' class='tabDetailViewDL'>
&nbsp;
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_REP_MOIS' module='HRM_HR_Report'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{ $fields.rep_mois.options[$fields.rep_mois.value]}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_REP_YEAR' module='HRM_HR_Report'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.rep_year.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_NAME' module='HRM_HR_Report'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.name.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DESCRIPTION' module='HRM_HR_Report'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.description.value|url2html|nl2br}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_HRR_INCOME' module='HRM_HR_Report'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.hrr_income.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_HRR_INC_YEAR' module='HRM_HR_Report'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.hrr_inc_year.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_HRR_SOC_YEAR' module='HRM_HR_Report'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.hrr_soc_year.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_HRR_INC_TOT' module='HRM_HR_Report'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.hrr_inc_tot.value}
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