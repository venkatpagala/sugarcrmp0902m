{*
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
*}
{$SQS}
{literal}
<script>
enableQS(true);
function changeQS() {
    //console.log('here');
    disabledModules = [];
    new_module = document.ImportEditView.parent_type.value;
    
    if(new_module == 'Contacts' || new_module == 'Leads' || new_module == 'Prospects' || typeof(disabledModules[new_module]) != 'undefined') {
        sqs_objects['parent_name']['disable'] = true;
        document.getElementById('parent_name').readOnly = true;
        document.getElementById('parent_name').value = mod_strings['LBL_QS_DISABLED'];
    }
    else {
        sqs_objects['parent_name']['disable'] = false;
        document.getElementById('parent_name').readOnly = false;
    }   
    sqs_objects['parent_name']['modules'] = new Array(new_module);
    if (document.getElementById('smartInputFloater')) document.getElementById('smartInputFloater').style.display = 'none';
    enableQS(false);
}
</script>
{/literal}
<form name="ImportEditView" id="ImportEditView">
<div id="importDiv" class='tabform'>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td style="padding-bottom: 2px;">
<input name="module" value="Emails" type="hidden">
<input name="record" value="{$emailId}" type="hidden">
<input name="isDuplicate" value="false" type="hidden">
<input name="action" type="hidden">
<input name="return_module" type="hidden">
<input name="return_action" type="hidden">
<input name="return_id" type="hidden">
</td>
</tbody></table>
<table border="0" cellpadding="0" cellspacing="1" width="100%">
<tbody>





















<tr>
{if $showAssignedTo}
<td class="dataLabel" nowrap="nowrap" valign="top" width="12%">
<script type="text/javascript">addToValidate("ImportEditView", "assigned_user_id", "relate", false, "{sugar_translate label="LBL_ASSIGNED_TO_ID"}");</script>
<script type="text/javascript">addToValidate("ImportEditView", "assigned_user_name", "relate", false, "{sugar_translate label="LBL_ASSIGNED_TO"}");</script>
{sugar_translate label="LBL_ASSIGNED_TO"}:
</td>
<td class="tabEditViewDF" nowrap="nowrap" width="37%">
<input name="assigned_user_name" class="sqsEnabled" tabindex="2" id="assigned_user_name" size="" value="{$userName}" type="text">
<input name="assigned_user_id" id="assigned_user_id" value="{$userId}" type="hidden">
<input name="btn_assigned_user_name" tabindex="2" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accesskey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("Users", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"ImportEditView","field_to_name_array":{"id":"assigned_user_id","name":"assigned_user_name"}}{/literal}, "single", true);' type="button">
<input name="btn_clr_assigned_user_name" tabindex="2" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accesskey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.assigned_user_name.value = ''; this.form.assigned_user_id.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}" type="button">
</td>
</tr>
{/if}
<tr>
<td class="dataLabel" nowrap="nowrap" valign="top" width="12%">
{sugar_translate label="LBL_EMAIL_RELATE"}:
</td>
<td class="tabEditViewDF" nowrap="nowrap" width="37%"><slot _moz-userdefined="">
<select onchange=" document.ImportEditView.parent_name.value=''; checkParentType(document.ImportEditView.parent_type.value, document.ImportEditView.change_parent); changeQS();" name="parent_type" tabindex="2">
{$parentOptions}</select>
</slot>
<slot _moz-userdefined="">
<input type="hidden" value="" name="parent_id" id="parent_id"/>
<input type="text" value="" tabindex="2" name="parent_name" id="parent_name" class="sqsEnabled" autocomplete="OFF"/>
<input type="button"  onclick='{literal} if(document.ImportEditView.parent_type.value != ""){open_popup(document.ImportEditView.parent_type.value,600,400,"",true,false,{"call_back_function":"set_return","form_name":"ImportEditView","field_to_name_array":{"id":"parent_id","name":"parent_name"}});}'{/literal} value="{$APP.LBL_SELECT_BUTTON_LABEL}" accesskey="{$APP.LBL_SELECT_BUTTON_KEY}" title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button" tabindex="2" name="button" id="change_parent"/>
</slot>
</td>
</tr>
{if $showDelete}
<tr><td class="dataLabel" nowrap="nowrap" valign="top" width="12%">
{sugar_translate label="LBL_DELETE_FROM_SERVER"}:
</td>
<td class="tabEditViewDF" nowrap="nowrap" width="37%">
<input class='ctabEditViewDF' type='checkbox' name='serverDelete'>
</td></tr>
{/if}
</tbody></table>
</div>
</form>
