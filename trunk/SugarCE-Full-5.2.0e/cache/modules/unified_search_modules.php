<?php
// created: 2009-06-23 15:12:17
$unified_search_modules = array (
  'Accounts' => 
  array (
    'table' => 'accounts',
    'fields' => 
    array (
      'name' => 
      array (
        'vname' => 'LBL_NAME',
        'type' => 'name',
      ),
      'phone_fax' => 
      array (
        'vname' => 'LBL_FAX',
        'type' => 'phone',
      ),
      'phone_office' => 
      array (
        'vname' => 'LBL_PHONE_OFFICE',
        'type' => 'phone',
      ),
      'phone_alternate' => 
      array (
        'vname' => 'LBL_PHONE_ALT',
        'type' => 'phone',
      ),
    ),
  ),
  'Bugs' => 
  array (
    'table' => 'bugs',
    'fields' => 
    array (
      'name' => 
      array (
        'vname' => 'LBL_SUBJECT',
        'type' => 'name',
      ),
      'bug_number' => 
      array (
        'vname' => 'LBL_NUMBER',
        'type' => 'int',
      ),
    ),
  ),
  'Calls' => 
  array (
    'table' => 'calls',
    'fields' => 
    array (
      'name' => 
      array (
        'vname' => 'LBL_SUBJECT',
        'type' => 'name',
      ),
    ),
  ),
  'Cases' => 
  array (
    'table' => 'cases',
    'fields' => 
    array (
      'name' => 
      array (
        'vname' => 'LBL_SUBJECT',
        'type' => 'name',
      ),
      'case_number' => 
      array (
        'vname' => 'LBL_NUMBER',
        'type' => 'int',
      ),
      'account_name' => 
      array (
        'vname' => 'LBL_ACCOUNT_NAME',
        'type' => 'relate',
        'table' => 'accounts',
        'rname' => 'name',
      ),
    ),
  ),
  'Contacts' => 
  array (
    'table' => 'contacts',
    'fields' => 
    array (
      'first_name' => 
      array (
        'vname' => 'LBL_FIRST_NAME',
        'type' => 'varchar',
      ),
      'last_name' => 
      array (
        'vname' => 'LBL_LAST_NAME',
        'type' => 'varchar',
      ),
      'phone_home' => 
      array (
        'vname' => 'LBL_HOME_PHONE',
        'type' => 'phone',
      ),
      'phone_mobile' => 
      array (
        'vname' => 'LBL_MOBILE_PHONE',
        'type' => 'phone',
      ),
      'phone_work' => 
      array (
        'vname' => 'LBL_OFFICE_PHONE',
        'type' => 'phone',
      ),
      'phone_other' => 
      array (
        'vname' => 'LBL_OTHER_PHONE',
        'type' => 'phone',
      ),
      'phone_fax' => 
      array (
        'vname' => 'LBL_FAX_PHONE',
        'type' => 'phone',
      ),
      'assistant' => 
      array (
        'vname' => 'LBL_ASSISTANT',
        'type' => 'varchar',
      ),
      'assistant_phone' => 
      array (
        'vname' => 'LBL_ASSISTANT_PHONE',
        'type' => 'phone',
      ),
      'account_name' => 
      array (
        'vname' => 'LBL_ACCOUNT_NAME',
        'type' => 'relate',
        'table' => 'accounts',
        'rname' => 'name',
      ),
    ),
  ),
  'Leads' => 
  array (
    'table' => 'leads',
    'fields' => 
    array (
      'first_name' => 
      array (
        'vname' => 'LBL_FIRST_NAME',
        'type' => 'varchar',
      ),
      'last_name' => 
      array (
        'vname' => 'LBL_LAST_NAME',
        'type' => 'varchar',
      ),
      'phone_home' => 
      array (
        'vname' => 'LBL_HOME_PHONE',
        'type' => 'phone',
      ),
      'phone_mobile' => 
      array (
        'vname' => 'LBL_MOBILE_PHONE',
        'type' => 'phone',
      ),
      'phone_work' => 
      array (
        'vname' => 'LBL_OFFICE_PHONE',
        'type' => 'phone',
      ),
      'phone_other' => 
      array (
        'vname' => 'LBL_OTHER_PHONE',
        'type' => 'phone',
      ),
      'phone_fax' => 
      array (
        'vname' => 'LBL_FAX_PHONE',
        'type' => 'phone',
      ),
      'assistant' => 
      array (
        'vname' => 'LBL_ASSISTANT',
        'type' => 'varchar',
      ),
      'assistant_phone' => 
      array (
        'vname' => 'LBL_ASSISTANT_PHONE',
        'type' => 'phone',
      ),
      'account_name' => 
      array (
        'vname' => 'LBL_ACCOUNT_NAME',
        'type' => 'varchar',
      ),
    ),
  ),
  'Opportunities' => 
  array (
    'table' => 'opportunities',
    'fields' => 
    array (
      'name' => 
      array (
        'vname' => 'LBL_OPPORTUNITY_NAME',
        'type' => 'name',
      ),
      'account_name' => 
      array (
        'vname' => 'LBL_ACCOUNT_NAME',
        'type' => 'relate',
        'table' => 'accounts',
        'rname' => 'name',
      ),
    ),
  ),
  'Project' => 
  array (
    'table' => 'project',
    'fields' => 
    array (
      'name' => 
      array (
        'vname' => 'LBL_NAME',
        'type' => 'name',
      ),
    ),
  ),
  'ProjectTask' => 
  array (
    'table' => 'project_task',
    'fields' => 
    array (
      'name' => 
      array (
        'vname' => 'LBL_NAME',
        'type' => 'name',
      ),
    ),
  ),
);
?>
