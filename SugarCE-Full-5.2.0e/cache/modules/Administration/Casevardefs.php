<?php
// created: 2009-07-02 12:11:47
$GLOBALS["dictionary"]["Case"] = array (
  'table' => 'cases',
  'audited' => true,
  'unified_search' => true,
  'duplicate_merge' => true,
  'comment' => 'Cases are issues or problems that a customer asks a support representative to resolve',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_SUBJECT',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => 255,
      'audited' => true,
      'unified_search' => true,
      'comment' => 'The short description of the bug',
      'merge_filter' => 'selected',
      'importable' => 'required',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'importable' => 'false',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'importable' => 'false',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED_ID',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED_ID',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'cases_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'cases_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'cases_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'case_number' => 
    array (
      'name' => 'case_number',
      'vname' => 'LBL_NUMBER',
      'type' => 'int',
      'len' => 11,
      'required' => true,
      'auto_increment' => true,
      'unified_search' => true,
      'comment' => 'Visual unique identifier',
      'duplicate_merge' => 'disabled',
      'disable_num_format' => true,
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'options' => 'case_type_dom',
      'len' => 255,
      'comment' => 'The type of issue (ex: issue, feature)',
      'merge_filter' => 'enabled',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'case_status_dom',
      'len' => 25,
      'audited' => true,
      'comment' => 'The status of the case',
    ),
    'priority' => 
    array (
      'name' => 'priority',
      'vname' => 'LBL_PRIORITY',
      'type' => 'enum',
      'options' => 'case_priority_dom',
      'len' => 25,
      'audited' => true,
      'comment' => 'The priority of the case',
    ),
    'resolution' => 
    array (
      'name' => 'resolution',
      'vname' => 'LBL_RESOLUTION',
      'type' => 'text',
      'comment' => 'The resolution of the case',
    ),
    'work_log' => 
    array (
      'name' => 'work_log',
      'vname' => 'LBL_WORK_LOG',
      'type' => 'text',
      'comment' => 'Free-form text used to denote activities of interest',
    ),
    'account_name' => 
    array (
      'name' => 'account_name',
      'rname' => 'name',
      'id_name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_NAME',
      'type' => 'relate',
      'link' => 'accounts',
      'table' => 'accounts',
      'join_name' => 'accounts',
      'isnull' => 'true',
      'module' => 'Accounts',
      'dbType' => 'varchar',
      'len' => 100,
      'source' => 'non-db',
      'unified_search' => true,
      'comment' => 'The name of the account represented by the account_id field',
      'required' => true,
      'importable' => 'required',
    ),
    'account_name1' => 
    array (
      'name' => 'account_name1',
      'source' => 'non-db',
      'type' => 'text',
      'len' => 100,
      'importable' => 'false',
    ),
    'account_id' => 
    array (
      'name' => 'account_id',
      'type' => 'id',
      'reportable' => false,
      'vname' => 'LBL_ACCOUNT_ID',
      'audited' => true,
      'comment' => 'The account to which the case is associated',
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'case_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_TASKS',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'case_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'case_meetings',
      'bean_name' => 'Meeting',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_cases_rel',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'case_calls',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
    ),
    'bugs' => 
    array (
      'name' => 'bugs',
      'type' => 'link',
      'relationship' => 'cases_bugs',
      'source' => 'non-db',
      'vname' => 'LBL_BUGS',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'contacts_cases',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_cases',
      'link_type' => 'one',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNT',
    ),
    'projects' => 
    array (
      'name' => 'projects',
      'type' => 'link',
      'relationship' => 'projects_cases',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECTS',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'casespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'number' => 
    array (
      'name' => 'casesnumk',
      'type' => 'unique',
      'fields' => 
      array (
        0 => 'case_number',
      ),
    ),
    0 => 
    array (
      'name' => 'case_number',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'case_number',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_case_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_account_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'account_id',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_cases_stat_del',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
        1 => 'status',
        2 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'cases_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'cases_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'cases_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'case_calls' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Cases',
    ),
    'case_tasks' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Cases',
    ),
    'case_notes' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Cases',
    ),
    'case_meetings' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Cases',
    ),
    'case_emails' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Cases',
    ),
  ),
  'optimistic_locking' => true,
  'templates' => 
  array (
    'issue' => 'issue',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);
?>
