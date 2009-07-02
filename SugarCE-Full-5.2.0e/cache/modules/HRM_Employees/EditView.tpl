

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
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=HRM_Employees", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
{sugar_translate label='LBL_NAME' module='HRM_Employees'}
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
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" id='first_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_FIRST_NAME  ' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if}  
<input type='text' name='{$fields.first_name.name}' id='{$fields.first_name.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='last_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_LAST_NAME' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if}  
<input type='text' name='{$fields.last_name.name}' id='{$fields.last_name.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='tri_gram_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_TRI_GRAM' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.tri_gram.value) <= 0}
{assign var="value" value=$fields.tri_gram.default_value }
{else}
{assign var="value" value=$fields.tri_gram.value }
{/if}  
<input type='text' name='{$fields.tri_gram.name}' id='{$fields.tri_gram.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='salutation_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_SALUTATION' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.salutation.name}" id="{$fields.salutation.name}" title='' tabindex="1"  >
{if isset($fields.salutation.value) && $fields.salutation.value != ''}
{html_options options=$fields.salutation.options selected=$fields.salutation.value}
{else}
{html_options options=$fields.salutation.options selected=$fields.salutation.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='num_secu_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NUM_SECU' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.num_secu.value) <= 0}
{assign var="value" value=$fields.num_secu.default_value }
{else}
{assign var="value" value=$fields.num_secu.value }
{/if}  
<input type='text' name='{$fields.num_secu.name}' id='{$fields.num_secu.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" id='nai_date_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NAI_DATE' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.nai_date.value }
<input autocomplete="off" type="text" name="{$fields.nai_date.name}" id="{$fields.nai_date.name}" value="{$date_value}" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.nai_date.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.nai_date.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.nai_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
<td valign="top" id='nais_lieu_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NAIS_LIEU' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.nais_lieu.value) <= 0}
{assign var="value" value=$fields.nais_lieu.default_value }
{else}
{assign var="value" value=$fields.nais_lieu.value }
{/if}  
<input type='text' name='{$fields.nais_lieu.name}' id='{$fields.nais_lieu.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='nai_dept_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NAI_DEPT' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.nai_dept.value) <= 0}
{assign var="value" value=$fields.nai_dept.default_value }
{else}
{assign var="value" value=$fields.nai_dept.value }
{/if}  
<input type='text' name='{$fields.nai_dept.name}' id='{$fields.nai_dept.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='sal_nati_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_SAL_NATI' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.sal_nati.value) <= 0}
{assign var="value" value=$fields.sal_nati.default_value }
{else}
{assign var="value" value=$fields.sal_nati.value }
{/if}  
<input type='text' name='{$fields.sal_nati.name}' id='{$fields.sal_nati.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='sal_situ_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_SAL_SITU' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.sal_situ.value) <= 0}
{assign var="value" value=$fields.sal_situ.default_value }
{else}
{assign var="value" value=$fields.sal_situ.value }
{/if}  
<input type='text' name='{$fields.sal_situ.name}' id='{$fields.sal_situ.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='title_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_TITLE' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if}  
<input type='text' name='{$fields.title.name}' id='{$fields.title.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
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
<h4>{sugar_translate label='LBL_PANEL1' module='HRM_Employees'}</h4>
</th>
<tr>
<td valign="top" id='primary_address_street_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET ' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.primary_address_street.value) <= 0}
{assign var="value" value=$fields.primary_address_street.default_value }
{else}
{assign var="value" value=$fields.primary_address_street.value }
{/if}  
<input type='text' name='{$fields.primary_address_street.name}' id='{$fields.primary_address_street.name}' size='30' maxlength='150' value='{$value}' title='' tabindex='2' > 
</tr>
<tr>
<td valign="top" id='primary_address_complement_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PRIMARY_ADDRESS_COMPLEMENT' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.primary_address_complement.value) <= 0}
{assign var="value" value=$fields.primary_address_complement.default_value }
{else}
{assign var="value" value=$fields.primary_address_complement.value }
{/if}  
<input type='text' name='{$fields.primary_address_complement.name}' id='{$fields.primary_address_complement.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='2' > 
</tr>
<tr>
<td valign="top" id='primary_address_postalcode_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PRIMARY_ADDRESS_POSTALCODE  ' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.primary_address_postalcode.value) <= 0}
{assign var="value" value=$fields.primary_address_postalcode.default_value }
{else}
{assign var="value" value=$fields.primary_address_postalcode.value }
{/if}  
<input type='text' name='{$fields.primary_address_postalcode.name}' id='{$fields.primary_address_postalcode.name}' size='30' maxlength='20' value='{$value}' title='' tabindex='2' > 
<td valign="top" id='primary_address_city_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PRIMARY_ADDRESS_CITY  ' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.primary_address_city.value) <= 0}
{assign var="value" value=$fields.primary_address_city.default_value }
{else}
{assign var="value" value=$fields.primary_address_city.value }
{/if}  
<input type='text' name='{$fields.primary_address_city.name}' id='{$fields.primary_address_city.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='3' > 
</tr>
<tr>
<td valign="top" id='phone_home_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PHONE_HOME  ' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.phone_home.value) <= 0}
{assign var="value" value=$fields.phone_home.default_value }
{else}
{assign var="value" value=$fields.phone_home.value }
{/if}  
<input type='text' name='{$fields.phone_home.name}' id='{$fields.phone_home.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='2' > 
<td valign="top" id='phone_mobile_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PHONE_MOBILE  ' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.phone_mobile.value) <= 0}
{assign var="value" value=$fields.phone_mobile.default_value }
{else}
{assign var="value" value=$fields.phone_mobile.value }
{/if}  
<input type='text' name='{$fields.phone_mobile.name}' id='{$fields.phone_mobile.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='3' > 
</tr>
<tr>
<td valign="top" id='phone_other_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PHONE_OTHER' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.phone_other.value) <= 0}
{assign var="value" value=$fields.phone_other.default_value }
{else}
{assign var="value" value=$fields.phone_other.value }
{/if}  
<input type='text' name='{$fields.phone_other.name}' id='{$fields.phone_other.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='2' > 
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
<div id="LBL_PANEL2">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_PANEL2' module='HRM_Employees'}</h4>
</th>
<tr>
<td valign="top" id='dat_dern_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DAT_DERN' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.dat_dern.value }
<input autocomplete="off" type="text" name="{$fields.dat_dern.name}" id="{$fields.dat_dern.name}" value="{$date_value}" title=''  tabindex='4' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.dat_dern.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.dat_dern.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.dat_dern.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
<td valign="top" id='dat_entr_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DAT_ENTR' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.dat_entr.value }
<input autocomplete="off" type="text" name="{$fields.dat_entr.name}" id="{$fields.dat_entr.name}" value="{$date_value}" title=''  tabindex='5' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.dat_entr.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.dat_entr.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.dat_entr.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
</tr>
<tr>
<td valign="top" id='dat_sort_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DAT_SORT' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.dat_sort.value }
<input autocomplete="off" type="text" name="{$fields.dat_sort.name}" id="{$fields.dat_sort.name}" value="{$date_value}" title=''  tabindex='4' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.dat_sort.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.dat_sort.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.dat_sort.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
<td valign="top" id='sal_pres_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_SAL_PRES' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strval($fields.sal_pres.value) == "1" || strval($fields.sal_pres.value) == "yes" || strval($fields.sal_pres.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.sal_pres.name}" value="0"> 
<input type="checkbox" id="{$fields.sal_pres.name}" name="{$fields.sal_pres.name}" value="1" title='' tabindex="5" {$checked} >
</tr>
<tr>
<td valign="top" id='num_sala_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NUM_SALA' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.num_sala.value) <= 0}
{assign var="value" value=$fields.num_sala.default_value }
{else}
{assign var="value" value=$fields.num_sala.value }
{/if}  
<input type='text' name='{$fields.num_sala.name}' id='{$fields.num_sala.name}' size='30' maxlength='11' value='{$value}' title='' tabindex='4' > 
<td valign="top" id='ind_synt_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_IND_SYNT' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.ind_synt.value) <= 0}
{assign var="value" value=$fields.ind_synt.default_value }
{else}
{assign var="value" value=$fields.ind_synt.value }
{/if}  
<input type='text' name='{$fields.ind_synt.name}' id='{$fields.ind_synt.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='5' > 
</tr>
<tr>
<td valign="top" id='gross_incomes_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_GROSS_INCOMES' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.gross_incomes.value) <= 0}
{assign var="value" value=$fields.gross_incomes.default_value }
{else}
{assign var="value" value=$fields.gross_incomes.value }
{/if}  
<input type='text' name='{$fields.gross_incomes.name}' id='{$fields.gross_incomes.name}' size='30'  value='{$value}' title='' tabindex='4' > 
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='pis_nbr1_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PIS_NBR1' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.pis_nbr1.value) <= 0}
{assign var="value" value=$fields.pis_nbr1.default_value }
{else}
{assign var="value" value=$fields.pis_nbr1.value }
{/if}  
<input type='text' name='{$fields.pis_nbr1.name}' id='{$fields.pis_nbr1.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='4' > 
<td valign="top" id='pis_nbr2_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PIS_NBR2' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.pis_nbr2.value) <= 0}
{assign var="value" value=$fields.pis_nbr2.default_value }
{else}
{assign var="value" value=$fields.pis_nbr2.value }
{/if}  
<input type='text' name='{$fields.pis_nbr2.name}' id='{$fields.pis_nbr2.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='5' > 
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
<h4>{sugar_translate label='LBL_PANEL3' module='HRM_Employees'}</h4>
</th>
<tr>
<td valign="top" id='rib_banq_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_RIB_BANQ' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.rib_banq.value) <= 0}
{assign var="value" value=$fields.rib_banq.default_value }
{else}
{assign var="value" value=$fields.rib_banq.value }
{/if}  
<input type='text' name='{$fields.rib_banq.name}' id='{$fields.rib_banq.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='6' > 
<td valign="top" id='rib_guic_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_RIB_GUIC' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.rib_guic.value) <= 0}
{assign var="value" value=$fields.rib_guic.default_value }
{else}
{assign var="value" value=$fields.rib_guic.value }
{/if}  
<input type='text' name='{$fields.rib_guic.name}' id='{$fields.rib_guic.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='7' > 
</tr>
<tr>
<td valign="top" id='rib_comp_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_RIB_COMP' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.rib_comp.value) <= 0}
{assign var="value" value=$fields.rib_comp.default_value }
{else}
{assign var="value" value=$fields.rib_comp.value }
{/if}  
<input type='text' name='{$fields.rib_comp.name}' id='{$fields.rib_comp.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='6' > 
<td valign="top" id='rib_keys_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_RIB_KEYS' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.rib_keys.value) <= 0}
{assign var="value" value=$fields.rib_keys.default_value }
{else}
{assign var="value" value=$fields.rib_keys.value }
{/if}  
<input type='text' name='{$fields.rib_keys.name}' id='{$fields.rib_keys.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='7' > 
</tr>
<tr>
<td valign="top" id='rib_lieu_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_RIB_LIEU' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.rib_lieu.value) <= 0}
{assign var="value" value=$fields.rib_lieu.default_value }
{else}
{assign var="value" value=$fields.rib_lieu.value }
{/if}  
<input type='text' name='{$fields.rib_lieu.name}' id='{$fields.rib_lieu.name}' size='30' maxlength='150' value='{$value}' title='' tabindex='6' > 
</tr>
<tr>
<td valign="top" id='rib_cplet_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_RIB_CPLET' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.rib_cplet.value) <= 0}
{assign var="value" value=$fields.rib_cplet.default_value }
{else}
{assign var="value" value=$fields.rib_cplet.value }
{/if}  
<input type='text' name='{$fields.rib_cplet.name}' id='{$fields.rib_cplet.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='6' > 
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL3").style.display='none';</script>
{/if}
<p>
<div id="LBL_PANEL4">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_PANEL4' module='HRM_Employees'}</h4>
</th>
<tr>
<td valign="top" id='ref_holy_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_REF_HOLY' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.ref_holy.value) <= 0}
{assign var="value" value=$fields.ref_holy.default_value }
{else}
{assign var="value" value=$fields.ref_holy.value }
{/if}  
<input type='text' name='{$fields.ref_holy.name}' id='{$fields.ref_holy.name}' size='30' maxlength='18' value='{$value}' title='' tabindex='8' > 
<td valign="top" id='ref_rtts_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_REF_RTTS' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.ref_rtts.value) <= 0}
{assign var="value" value=$fields.ref_rtts.default_value }
{else}
{assign var="value" value=$fields.ref_rtts.value }
{/if}  
<input type='text' name='{$fields.ref_rtts.name}' id='{$fields.ref_rtts.name}' size='30' maxlength='18' value='{$value}' title='' tabindex='9' > 
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL4").style.display='none';</script>
{/if}
<p>
<div id="LBL_PANEL5">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_PANEL5' module='HRM_Employees'}</h4>
</th>
<tr>
<td valign="top" id='flyingblue_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_FLYINGBLUE' module='HRM_Employees'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.flyingblue.value) <= 0}
{assign var="value" value=$fields.flyingblue.default_value }
{else}
{assign var="value" value=$fields.flyingblue.value }
{/if}  
<input type='text' name='{$fields.flyingblue.name}' id='{$fields.flyingblue.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='10' > 
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL5").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=HRM_Employees", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Ngày tạo' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Ngày chỉnh sửa' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'salutation', 'enum', false,'{/literal}{sugar_translate label='LBL_SALUTATION' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE_OTHER' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'primary_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_CITY  ' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE_HOME  ' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'first_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'last_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'full_name', 'name', false,'{/literal}{sugar_translate label='LBL_FNAME' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'phone_mobile', 'varchar', false,'{/literal}{sugar_translate label='LBL_PHONE_MOBILE  ' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'primary_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET ' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'primary_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_POSTALCODE  ' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'primary_address_complement', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_COMPLEMENT' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'num_secu', 'varchar', false,'{/literal}{sugar_translate label='LBL_NUM_SECU' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'nais_lieu', 'varchar', false,'{/literal}{sugar_translate label='LBL_NAIS_LIEU' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'nai_dept', 'varchar', false,'{/literal}{sugar_translate label='LBL_NAI_DEPT' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'dat_entr', 'date', false,'{/literal}{sugar_translate label='LBL_DAT_ENTR' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'dat_dern', 'date', false,'{/literal}{sugar_translate label='LBL_DAT_DERN' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'dat_sort', 'date', false,'{/literal}{sugar_translate label='LBL_DAT_SORT' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'tri_gram', 'varchar', false,'{/literal}{sugar_translate label='LBL_TRI_GRAM' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'rib_banq', 'varchar', false,'{/literal}{sugar_translate label='LBL_RIB_BANQ' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'rib_guic', 'varchar', false,'{/literal}{sugar_translate label='LBL_RIB_GUIC' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'rib_comp', 'varchar', false,'{/literal}{sugar_translate label='LBL_RIB_COMP' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'rib_keys', 'varchar', false,'{/literal}{sugar_translate label='LBL_RIB_KEYS' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'num_sala', 'int', false,'{/literal}{sugar_translate label='LBL_NUM_SALA' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'rib_cplet', 'varchar', false,'{/literal}{sugar_translate label='LBL_RIB_CPLET' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'nai_date', 'date', false,'{/literal}{sugar_translate label='LBL_NAI_DATE' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'pis_nbr1', 'varchar', false,'{/literal}{sugar_translate label='LBL_PIS_NBR1' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'pis_nbr2', 'varchar', false,'{/literal}{sugar_translate label='LBL_PIS_NBR2' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'sal_nati', 'varchar', false,'{/literal}{sugar_translate label='LBL_SAL_NATI' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'sal_situ', 'varchar', false,'{/literal}{sugar_translate label='LBL_SAL_SITU' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'rib_lieu', 'varchar', false,'{/literal}{sugar_translate label='LBL_RIB_LIEU' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'ind_synt', 'varchar', false,'{/literal}{sugar_translate label='LBL_IND_SYNT' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'bal_holy', 'code', false,'{/literal}{sugar_translate label='LBL_BAL_HOLY' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'bal_rtts', 'code', false,'{/literal}{sugar_translate label='LBL_BAL_RTTS' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'sal_pres', 'bool', false,'{/literal}{sugar_translate label='LBL_SAL_PRES' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'ref_holy', 'float', false,'{/literal}{sugar_translate label='LBL_REF_HOLY' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'gross_incomes', 'currency', false,'{/literal}{sugar_translate label='LBL_GROSS_INCOMES' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'ref_rtts', 'float', false,'{/literal}{sugar_translate label='LBL_REF_RTTS' module='HRM_Employees'}{literal}' );
addToValidate('EditView', 'flyingblue', 'varchar', false,'{/literal}{sugar_translate label='LBL_FLYINGBLUE' module='HRM_Employees'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='HRM_Employees'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='HRM_Employees'}{literal}', 'assigned_user_id' );
</script>{/literal}
