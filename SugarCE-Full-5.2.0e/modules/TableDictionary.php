<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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


include("metadata/accounts_bugsMetaData.php");
include("metadata/accounts_casesMetaData.php");
include("metadata/accounts_contactsMetaData.php");
include("metadata/accounts_opportunitiesMetaData.php");
include("metadata/calls_contactsMetaData.php");
include("metadata/calls_usersMetaData.php");
include("metadata/calls_leadsMetaData.php");
include("metadata/cases_bugsMetaData.php");
include("metadata/configMetaData.php");
include("metadata/contacts_bugsMetaData.php");
include("metadata/contacts_casesMetaData.php");
include("metadata/contacts_usersMetaData.php");
include("metadata/custom_fieldsMetaData.php");
include("metadata/email_addressesMetaData.php");
include("metadata/emails_beansMetaData.php");
include("metadata/foldersMetaData.php");
include("metadata/import_mapsMetaData.php");
include("metadata/meetings_contactsMetaData.php");
include("metadata/meetings_usersMetaData.php");
include("metadata/meetings_leadsMetaData.php");
include("metadata/opportunities_contactsMetaData.php");
include("metadata/user_feedsMetaData.php");






include("metadata/prospect_list_campaignsMetaData.php");
include("metadata/prospect_lists_prospectsMetaData.php");
include("metadata/roles_modulesMetaData.php");
include("metadata/roles_usersMetaData.php");
//include("metadata/project_relationMetaData.php");
include("metadata/outboundEmailMetaData.php");
include("metadata/addressBookMetaData.php");
include("metadata/project_bugsMetaData.php");
include("metadata/project_casesMetaData.php");
include("metadata/project_productsMetaData.php");
include("metadata/projects_accountsMetaData.php");
include("metadata/projects_contactsMetaData.php");
include("metadata/projects_opportunitiesMetaData.php");

























//ACL RELATIONSHIPS
include("metadata/acl_roles_actionsMetaData.php");
include("metadata/acl_roles_usersMetaData.php");
// INBOUND EMAIL
include("metadata/inboundEmail_autoreplyMetaData.php");
include("metadata/inboundEmail_cacheTimestampMetaData.php");
include("metadata/email_cacheMetaData.php");
include("metadata/email_marketing_prospect_listsMetaData.php");
include("metadata/users_signaturesMetaData.php");
//linked documents.
include("metadata/linked_documentsMetaData.php");










if(file_exists('custom/application/Ext/TableDictionary/tabledictionary.ext.php')){
	include('custom/application/Ext/TableDictionary/tabledictionary.ext.php');	
}
?>
