<?php
// created: 2009-07-02 12:03:13
$GLOBALS["dictionary"]["Call"] = array (
  'table' => 'calls',
  'comment' => 'A Call is an activity representing a phone call',
  'unified_search' => true,
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
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => '50',
      'comment' => 'Brief description of the call',
      'unified_search' => true,
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
      'relationship' => 'calls_created_by',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'calls_modified_user',
      'vname' => 'LBL_MODIFIED_BY_USER',
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
      'relationship' => 'calls_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'duration_hours' => 
    array (
      'name' => 'duration_hours',
      'vname' => 'LBL_DURATION_HOURS',
      'type' => 'int',
      'len' => '2',
      'comment' => 'Call duration, hours portion',
    ),
    'duration_minutes' => 
    array (
      'name' => 'duration_minutes',
      'vname' => 'LBL_DURATION_MINUTES',
      'type' => 'int',
      'function' => 
      array (
        'name' => 'getDurationMinutesOptions',
        'returns' => 'html',
        'include' => 'modules/Calls/CallHelper.php',
      ),
      'len' => '2',
      'group' => 'duration_hours',
      'comment' => 'Call duration, minutes portion',
    ),
    'date_start' => 
    array (
      'name' => 'date_start',
      'vname' => 'LBL_DATE',
      'type' => 'datetime',
      'comment' => 'Date in which call is schedule to (or did) start',
      'importable' => 'required',
    ),
    'date_end' => 
    array (
      'name' => 'date_end',
      'vname' => 'LBL_DATE_END',
      'type' => 'date',
      'massupdate' => false,
      'comment' => 'Date is which call is scheduled to (or did) end',
    ),
    'parent_type' => 
    array (
      'name' => 'parent_type',
      'vname' => 'LBL_PARENT_TYPE',
      'type' => 'varchar',
      'required' => false,
      'group' => 'parent_name',
      'reportable' => false,
      'len' => 25,
      'comment' => 'The Sugar object to which the call is related',
    ),
    'parent_name' => 
    array (
      'name' => 'parent_name',
      'parent_type' => 'record_type_display',
      'type_name' => 'parent_type',
      'id_name' => 'parent_id',
      'vname' => 'LBL_LIST_RELATED_TO',
      'type' => 'parent',
      'group' => 'parent_name',
      'source' => 'non-db',
      'options' => 'parent_type_display',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'len' => '25',
      'options' => 'call_status_dom',
      'comment' => 'The status of the call (Held, Not Held, etc.)',
    ),
    'direction' => 
    array (
      'name' => 'direction',
      'vname' => 'LBL_DIRECTION',
      'type' => 'enum',
      'len' => '25',
      'options' => 'call_direction_dom',
      'comment' => 'Indicates whether call is inbound or outbound',
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'vname' => 'LBL_LIST_RELATED_TO_ID',
      'type' => 'id',
      'group' => 'parent_name',
      'reportable' => false,
      'comment' => 'The ID of the parent Sugar object identified by parent_type',
    ),
    'reminder_checked' => 
    array (
      'name' => 'reminder_checked',
      'vname' => 'LBL_REMINDER',
      'type' => 'bool',
      'source' => 'non-db',
      'comment' => 'checkbox indicating whether or not the reminder value is set (Meta-data only)',
      'massupdate' => false,
    ),
    'reminder_time' => 
    array (
      'name' => 'reminder_time',
      'vname' => 'LBL_REMINDER_TIME',
      'type' => 'int',
      'function' => 
      array (
        'name' => 'getReminderTime',
        'returns' => 'html',
        'include' => 'modules/Calls/CallHelper.php',
      ),
      'required' => false,
      'reportable' => false,
      'default' => -1,
      'len' => '4',
      'comment' => 'Specifies when a reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start',
    ),
    'outlook_id' => 
    array (
      'name' => 'outlook_id',
      'vname' => 'LBL_OUTLOOK_ID',
      'type' => 'varchar',
      'len' => '255',
      'reportable' => false,
      'comment' => 'When the Sugar Plug-in for Microsoft Outlook syncs an Outlook appointment, this is the Outlook appointment item ID',
    ),
    'accept_status' => 
    array (
      'name' => 'accept_status',
      'vname' => 'LBL_SUBJECT',
      'dbType' => 'varchar',
      'type' => 'varchar',
      'len' => '20',
      'source' => 'non-db',
    ),
    'contact_name' => 
    array (
      'name' => 'contact_name',
      'rname' => 'last_name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'id_name' => 'contact_id',
      'massupdate' => false,
      'vname' => 'LBL_CONTACT_NAME',
      'type' => 'relate',
      'link' => 'contacts',
      'table' => 'contacts',
      'isnull' => 'true',
      'module' => 'Contacts',
      'join_name' => 'contacts',
      'dbType' => 'varchar',
      'source' => 'non-db',
      'len' => 36,
      'importable' => 'false',
      'studio' => 'false',
    ),
    'account' => 
    array (
      'name' => 'account',
      'type' => 'link',
      'relationship' => 'account_calls',
      'link_type' => 'one',
      'source' => 'non-db',
      'vname' => 'LBL_OLD_ACCOUNT_LINK',
    ),
    'opportunity' => 
    array (
      'name' => 'opportunity',
      'type' => 'link',
      'relationship' => 'opportunity_calls',
      'source' => 'non-db',
      'link_type' => 'one',
      'vname' => 'LBL_OPPORTUNITY',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'calls_leads',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'case' => 
    array (
      'name' => 'case',
      'type' => 'link',
      'relationship' => 'case_calls',
      'source' => 'non-db',
      'link_type' => 'one',
      'vname' => 'LBL_CASE',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'account_calls',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNT',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'calls_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS',
    ),
    'users' => 
    array (
      'name' => 'users',
      'type' => 'link',
      'relationship' => 'calls_users',
      'source' => 'non-db',
      'vname' => 'LBL_USERS',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'calls_notes',
      'module' => 'Notes',
      'bean_name' => 'Note',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'callspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_call_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_status',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'status',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_calls_date_start',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_start',
      ),
    ),
  ),
  'relationships' => 
  array (
    'calls_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'calls_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'calls_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'calls_notes' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);
?>
