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
$dictionary['EmailTemplate'] = array(
	'table' => 'email_templates', 'comment' => 'Templates used in email processing',
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'vname' => 'LBL_NAME',
			'type' => 'id',
			'required' => true,
			'reportable'=>false,
			'comment' => 'Unique identifier'
		),
		'date_entered' => array(
			'name' => 'date_entered',
			'vname' => 'LBL_DATE_ENTERED',
			'type' => 'datetime',
			'required'=>true,
			'comment' => 'Date record created'
		),
		'date_modified' => array(
			'name' => 'date_modified',
			'vname' => 'LBL_DATE_MODIFIED',
			'type' => 'datetime',
			'required'=>true,
			'comment' => 'Date record last modified'
		),
		'modified_user_id' => array(
			'name' => 'modified_user_id',
			'rname' => 'user_name',
			'id_name' => 'modified_user_id',
			'vname' => 'LBL_ASSIGNED_TO',
			'type' => 'assigned_user_name',
			'table' => 'users',
			'reportable'=>true,
			'isnull' => 'false',
			'dbType' => 'id',
			'comment' => 'User who last modified record'
		),
		'created_by' => array(
			'name' => 'created_by',
			'vname' => 'LBL_CREATED_BY',
			'type' => 'varchar',
			'len'=> '36',
			'comment' => 'User who created record'
		),
		'published' => array(
			'name' => 'published',
			'vname' => 'LBL_PUBLISHED',
			'type' => 'varchar',
			'len' => '3',
			'comment' => ''
		),
		'name' => array(
			'name' => 'name',
			'vname' => 'LBL_NAME',
			'type' => 'varchar',
			'len' => '255',
			'comment' => 'Email template name',
			'importable' => 'required',
		),
		'description' => array(
			'name' => 'description',
			'vname' => 'LBL_DESCRIPTION',
			'type' => 'text',
			'comment' => 'Email template description'
		),
		'subject' => array(
			'name' => 'subject',
			'vname' => 'LBL_SUBJECT',
			'type' => 'varchar',
			'len' => '255',
			'comment' => 'Email subject to be used in resulting email'
		),
		'body' => array(
			'name' => 'body',
			'vname' => 'LBL_BODY',
			'type' => 'text',
			'comment' => 'Plain text body to be used in resulting email'
		),
		'body_html' => array(
			'name' => 'body_html',
			'vname' => 'LBL_PLAIN_TEXT',
			'type' => 'text',
			'comment' => 'HTML formatted email body to be used in resulting email'
		),
		'deleted' => array(
			'name' => 'deleted',
			'vname' => 'LBL_DELETED',
			'type' => 'bool',
			'required' => true,
			'reportable'=>false,
			'comment' => 'Record deletion indicator'
		),









































        'text_only' => array(
            'name' => 'text_only',
            'vname' => 'LBL_TEXT_ONLY',
            'type' => 'bool',
            'required' => false,
            'reportable'=>false,
            'comment' => 'Should be checked if email template is to be sent in text only'
        ),
	),
	'indices' => array(
		array(
			'name' => 'email_templatespk',
			'type' =>'primary',
			'fields'=>array('id')
		),
		array(
			'name' => 'idx_email_template_name',
			'type'=>'index',
			'fields'=>array('name')
		)
	),
	'relationships' => array(











	),
);
?>
