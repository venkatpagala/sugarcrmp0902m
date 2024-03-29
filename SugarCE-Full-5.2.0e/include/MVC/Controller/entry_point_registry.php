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
/*********************************************************************************
 * $Id$
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$entry_point_registry = array(
	'download' => array('file' => 'download.php', 'auth' => true),
	'export' => array('file' => 'export.php', 'auth' => true),
	'export_dataset' => array('file' => 'export_dataset.php', 'auth' => true),
	'vCard' => array('file' => 'vCard.php', 'auth' => true),
	'pdf' => array('file' => 'pdf.php', 'auth' => true),
	'minify' => array('file' => 'jssource/minify.php', 'auth' => true),
	'json' => array('file' => 'json.php', 'auth' => true),
    'json_server' => array('file' => 'json_server.php', 'auth' => true),
	'HandleAjaxCall' => array('file' => 'HandleAjaxCall.php', 'auth' => true),
	'TreeData' => array('file' => 'TreeData.php', 'auth' => true),
	'oc_convert' => array('file' => 'oc_convert.php', 'auth' => false),
	'ExampleLeadCapture' => array('file' => 'examples/ExampleLeadCapture.php', 'auth' => false),
	'FormValidationTest' => array('file' => 'examples/FormValidationTest.php', 'auth' => false),
	'ProgressBarTest' => array('file' => 'examples/ProgressBarTest.php', 'auth' => false),
	'SoapFullTest' => array('file' => 'examples/SoapFullTest.php', 'auth' => false),
	'SoapPortalFullTest' => array('file' => 'examples/SoapPortalFullTest.php', 'auth' => false),
	'SoapTest' => array('file' => 'examples/SoapTest.php', 'auth' => false),
	'SoapTestPortal' => array('file' => 'examples/SoapTestPortal.php', 'auth' => false),
	'SoapTestPortal2' => array('file' => 'examples/SoapTestPortal2.php', 'auth' => false),
    'image' => array('file' => 'modules/Campaigns/image.php', 'auth' => false),
    'acceptDecline' => array('file' => 'modules/Contacts/AcceptDecline.php', 'auth' => false),
    'campaign_trackerv2' => array('file' => 'modules/Campaigns/Tracker.php', 'auth' => false),
    'leadCapture' => array('file' => 'modules/Leads/Capture.php', 'auth' => false),
    'WebToLeadCapture' => array('file' => 'modules/Campaigns/WebToLeadCapture.php', 'auth' => false),
    'removeme' => array('file' => 'modules/Campaigns/RemoveMe.php', 'auth' => false),
    'process_queue' => array('file' => 'process_queue.php', 'auth' => true),
    'process_workflow' => array('file' => 'process_workflow.php', 'auth' => true),
    'schedulers' => array('file' => 'schedulers.php', 'auth' => true),
    'zipatcher' => array('file' => 'zipatcher.php', 'auth' => true),
    'mm_get_doc' => array('file' => 'modules/MailMerge/get_doc.php', 'auth' => true),
);
?>
