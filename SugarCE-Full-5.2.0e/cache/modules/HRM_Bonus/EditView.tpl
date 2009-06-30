

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
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=HRM_Bonus", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
<td valign="top" id='hrm_employees_hrm_bonus_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_EMPLOYEE' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.hrm_employees_hrm_bonus_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.hrm_employees_hrm_bonus_name.name}" size="" value="{$fields.hrm_employees_hrm_bonus_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.hrm_employees_hrm_bonus_name.id_name}" id="{$fields.hrm_employees_hrm_bonus_name.id_name}" value="{$fields.hrm_employe_employees_ida.value}">
<input type="button" name="btn_{$fields.hrm_employees_hrm_bonus_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.hrm_employees_hrm_bonus_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"hrm_employe_employees_ida","name":"hrm_employees_hrm_bonus_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.hrm_employees_hrm_bonus_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.hrm_employees_hrm_bonus_name.name}.value = ''; this.form.{$fields.hrm_employees_hrm_bonus_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
<td valign="top" id='name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NAME' module='HRM_Bonus'}
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
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='bon_mois_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_MOIS' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.bon_mois.name}" id="{$fields.bon_mois.name}" title='' tabindex="0"  >
{if isset($fields.bon_mois.value) && $fields.bon_mois.value != ''}
{html_options options=$fields.bon_mois.options selected=$fields.bon_mois.value}
{else}
{html_options options=$fields.bon_mois.options selected=$fields.bon_mois.default}
{/if}
</select>
<td valign="top" id='bon_year_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_YEAR' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.bon_year.value) <= 0}
{assign var="value" value=$fields.bon_year.default_value }
{else}
{assign var="value" value=$fields.bon_year.value }
{/if}  
<input type='text' name='{$fields.bon_year.name}' id='{$fields.bon_year.name}' size='30' maxlength='11' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DESCRIPTION' module='HRM_Bonus'}
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
<td valign="top" id='bon_turn_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_TURN' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.bon_turn.value) <= 0}
{assign var="value" value=$fields.bon_turn.default_value }
{else}
{assign var="value" value=$fields.bon_turn.value }
{/if}  
<input type='text' name='{$fields.bon_turn.name}' id='{$fields.bon_turn.name}' size='30'  value='{$value}' title='' tabindex='1' > 
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<p>
<div id="LBL_PANEL1">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_PANEL1' module='HRM_Bonus'}</h4>
</th>
<tr>
<td valign="top" id='bon_cri1_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_CRI1' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.bon_cri1.name}" id="{$fields.bon_cri1.name}" title='' tabindex="2"  >
{if isset($fields.bon_cri1.value) && $fields.bon_cri1.value != ''}
{html_options options=$fields.bon_cri1.options selected=$fields.bon_cri1.value}
{else}
{html_options options=$fields.bon_cri1.options selected=$fields.bon_cri1.default}
{/if}
</select>
<td valign="top" id='bon_cri2_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_CRI2' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.bon_cri2.name}" id="{$fields.bon_cri2.name}" title='' tabindex="3"  >
{if isset($fields.bon_cri2.value) && $fields.bon_cri2.value != ''}
{html_options options=$fields.bon_cri2.options selected=$fields.bon_cri2.value}
{else}
{html_options options=$fields.bon_cri2.options selected=$fields.bon_cri2.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='bon_cri3_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_CRI3' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.bon_cri3.name}" id="{$fields.bon_cri3.name}" title='' tabindex="2"  >
{if isset($fields.bon_cri3.value) && $fields.bon_cri3.value != ''}
{html_options options=$fields.bon_cri3.options selected=$fields.bon_cri3.value}
{else}
{html_options options=$fields.bon_cri3.options selected=$fields.bon_cri3.default}
{/if}
</select>
<td valign="top" id='bon_cri4_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_CRI4' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.bon_cri4.name}" id="{$fields.bon_cri4.name}" title='' tabindex="3"  >
{if isset($fields.bon_cri4.value) && $fields.bon_cri4.value != ''}
{html_options options=$fields.bon_cri4.options selected=$fields.bon_cri4.value}
{else}
{html_options options=$fields.bon_cri4.options selected=$fields.bon_cri4.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='bon_cri5_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_CRI5' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.bon_cri5.name}" id="{$fields.bon_cri5.name}" title='' tabindex="2"  >
{if isset($fields.bon_cri5.value) && $fields.bon_cri5.value != ''}
{html_options options=$fields.bon_cri5.options selected=$fields.bon_cri5.value}
{else}
{html_options options=$fields.bon_cri5.options selected=$fields.bon_cri5.default}
{/if}
</select>
<td valign="top" id='bon_cri6_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_CRI6' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.bon_cri6.name}" id="{$fields.bon_cri6.name}" title='' tabindex="3"  >
{if isset($fields.bon_cri6.value) && $fields.bon_cri6.value != ''}
{html_options options=$fields.bon_cri6.options selected=$fields.bon_cri6.value}
{else}
{html_options options=$fields.bon_cri6.options selected=$fields.bon_cri6.default}
{/if}
</select>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL1").style.display='none';</script>
{/if}
<p>
<div id="LBL_PANEL2">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_PANEL2' module='HRM_Bonus'}</h4>
</th>
<tr>
<td valign="top" id='but_calc_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BUT_CALC' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.but_calc.value) <= 0}
{assign var="value" value=$fields.but_calc.default_value }
{else}
{assign var="value" value=$fields.but_calc.value }
{/if}  
<input type='text' name='{$fields.but_calc.name}' id='{$fields.but_calc.name}' size='30'  value='{$value}' title='' tabindex='4' > 
<td valign="top" id='bon_amou_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_AMOU' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.bon_amou.value) <= 0}
{assign var="value" value=$fields.bon_amou.default_value }
{else}
{assign var="value" value=$fields.bon_amou.value }
{/if}  
<input type='text' name='{$fields.bon_amou.name}' id='{$fields.bon_amou.name}' size='30'  value='{$value}' title='' tabindex='5' > 
</tr>
<tr>
<td valign="top" id='bon_tbas_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_TBAS' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.bon_tbas.value) <= 0}
{assign var="value" value=$fields.bon_tbas.default_value }
{else}
{assign var="value" value=$fields.bon_tbas.value }
{/if}  
<input type='text' name='{$fields.bon_tbas.name}' id='{$fields.bon_tbas.name}' size='30' maxlength='18' value='{$value}' title='' tabindex='4' > 
<td valign="top" id='bon_tteo_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_TTEO' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.bon_tteo.value) <= 0}
{assign var="value" value=$fields.bon_tteo.default_value }
{else}
{assign var="value" value=$fields.bon_tteo.value }
{/if}  
<input type='text' name='{$fields.bon_tteo.name}' id='{$fields.bon_tteo.name}' size='30'  value='{$value}' title='' tabindex='5' > 
</tr>
<tr>
<td valign="top" id='bon_rate_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_RATE' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.bon_rate.value) <= 0}
{assign var="value" value=$fields.bon_rate.default_value }
{else}
{assign var="value" value=$fields.bon_rate.value }
{/if}  
<input type='text' name='{$fields.bon_rate.name}' id='{$fields.bon_rate.name}' size='30' maxlength='18' value='{$value}' title='' tabindex='4' > 
<td valign="top" id='bon_vali_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_BON_VALI' module='HRM_Bonus'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strval($fields.bon_vali.value) == "1" || strval($fields.bon_vali.value) == "yes" || strval($fields.bon_vali.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.bon_vali.name}" value="0"> 
<input type="checkbox" id="{$fields.bon_vali.name}" name="{$fields.bon_vali.name}" value="1" title='' tabindex="5" {$checked} >
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL2").style.display='none';</script>
{/if}
<p>
<div id="LBL_PANEL3">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_PANEL3' module='HRM_Bonus'}</h4>
</th>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
</tr>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL3").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=HRM_Bonus", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Ngày tạo' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Thay đổi lần cuối' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_mois', 'enum', false,'{/literal}{sugar_translate label='LBL_BON_MOIS' module='HRM_Bonus'}{literal}' );
addToValidateRange('EditView', 'bon_year', 'int', false,'{/literal}{sugar_translate label='LBL_BON_YEAR' module='HRM_Bonus'}{literal}', 2000, 2020 );
addToValidate('EditView', 'bon_tteo', 'code', false,'{/literal}{sugar_translate label='LBL_BON_TTEO' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_cri1', 'enum', false,'{/literal}{sugar_translate label='LBL_BON_CRI1' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_cri2', 'enum', false,'{/literal}{sugar_translate label='LBL_BON_CRI2' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_cri3', 'enum', false,'{/literal}{sugar_translate label='LBL_BON_CRI3' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_cri4', 'enum', false,'{/literal}{sugar_translate label='LBL_BON_CRI4' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_cri5', 'enum', false,'{/literal}{sugar_translate label='LBL_BON_CRI5' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_cri6', 'enum', false,'{/literal}{sugar_translate label='LBL_BON_CRI6' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'but_calc', 'code', false,'{/literal}{sugar_translate label='LBL_BUT_CALC' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_vali', 'bool', false,'{/literal}{sugar_translate label='LBL_BON_VALI' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_paid', 'bool', false,'{/literal}{sugar_translate label='LBL_BON_PAID' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_tbas', 'float', true,'{/literal}{sugar_translate label='LBL_BON_TBAS' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_amou', 'currency', true,'{/literal}{sugar_translate label='LBL_BON_AMOU' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_turn', 'currency', true,'{/literal}{sugar_translate label='LBL_BON_TURN' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'sum_mois', 'code', false,'{/literal}{sugar_translate label='LBL_SUM_MOIS' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'sum_year', 'code', false,'{/literal}{sugar_translate label='LBL_SUM_YEAR' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_rate', 'float', false,'{/literal}{sugar_translate label='LBL_BON_RATE' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_tupd', 'code', false,'{/literal}{sugar_translate label='LBL_BON_TUPD' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'bon_turn_pond_year', 'code', false,'{/literal}{sugar_translate label='LBL_BON_TURN_POND_YEAR' module='HRM_Bonus'}{literal}' );
addToValidate('EditView', 'hrm_employees_hrm_bonus_name', 'relate', false,'{/literal}{sugar_translate label='LBL_HRM_EMPLOYEES_HRM_BONUS_FROM_HRM_EMPLOYEES_TITLE' module='HRM_Bonus'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='HRM_Bonus'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='HRM_Bonus'}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'hrm_employees_hrm_bonus_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='HRM_Bonus'}{literal}{/literal}{sugar_translate label='undefined' module='HRM_Bonus'}{literal}', 'hrm_employe_employees_ida' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['hrm_employees_hrm_bonus_name']={"method":"query","modules":["HRM_Employees"],"group":"or","field_list":["name","id"],"populate_list":["hrm_employees_hrm_bonus_name","hrm_employe_employees_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}
