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
{{include file='include/EditView/footer.tpl'}}

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="h3Row">
<tr>
<td nowrap><h3>{$MOD.LBL_SCHEDULING_FORM_TITLE}</h3></td><td width='100%'><img height='1' width='1' src='include/images/blank.gif' alt=''></td>
</tr>
</table>
<div width="100%" id="scheduler" name="scheduler"></div>

<script type="text/javascript">
{literal}
function fill_invitees() { 
	if (typeof(GLOBAL_REGISTRY) != 'undefined')  {    
		SugarWidgetScheduler.fill_invitees(document.EditView);
	} 
}
{/literal}

var root_div = document.getElementById('scheduler');
var sugarContainer_instance = new SugarContainer(document.getElementById('scheduler'));
sugarContainer_instance.start(SugarWidgetScheduler);
{literal}
if ( document.getElementById('save_and_continue') ) {
    var oldclick = document.getElementById('save_and_continue').attributes['onclick'].nodeValue;
    document.getElementById('save_and_continue').onclick = function(){
        fill_invitees();
        eval(oldclick);
    }
}
{/literal}
</script>
</form>
