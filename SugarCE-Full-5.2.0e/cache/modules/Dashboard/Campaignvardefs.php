<?php
// created: 2009-06-23 12:24:30
$GLOBALS["dictionary"]["Campaign"] = array (
  'audited' => true,
  'comment' => 'Campaigns are a series of operations undertaken to accomplish a purpose, usually acquiring leads',
  'table' => 'campaigns',
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
      'vname' => 'LBL_CAMPAIGN_NAME',
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => '50',
      'comment' => 'The name of the campaign',
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
      'type' => 'none',
      'comment' => 'inhertied but not used',
      'source' => 'non-db',
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
      'relationship' => 'campaigns_created_by',
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
      'relationship' => 'campaigns_modified_user',
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
      'relationship' => 'campaigns_assigned_user',
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
    'tracker_key' => 
    array (
      'name' => 'tracker_key',
      'vname' => 'LBL_TRACKER_KEY',
      'type' => 'int',
      'required' => true,
      'len' => '11',
      'auto_increment' => true,
      'comment' => 'The internal ID of the tracker used in a campaign; no longer used as of 4.2 (see campaign_trkrs)',
    ),
    'tracker_count' => 
    array (
      'name' => 'tracker_count',
      'vname' => 'LBL_TRACKER_COUNT',
      'type' => 'int',
      'len' => '11',
      'default' => '0',
      'comment' => 'The number of accesses made to the tracker URL; no longer used as of 4.2 (see campaign_trkrs)',
    ),
    'refer_url' => 
    array (
      'name' => 'refer_url',
      'vname' => 'LBL_REFER_URL',
      'type' => 'varchar',
      'len' => '255',
      'default' => 'http://',
      'comment' => 'The URL referenced in the tracker URL; no longer used as of 4.2 (see campaign_trkrs)',
    ),
    'tracker_text' => 
    array (
      'name' => 'tracker_text',
      'vname' => 'LBL_TRACKER_TEXT',
      'type' => 'varchar',
      'len' => '255',
      'comment' => 'The text that appears in the tracker URL; no longer used as of 4.2 (see campaign_trkrs)',
    ),
    'start_date' => 
    array (
      'name' => 'start_date',
      'vname' => 'LBL_CAMPAIGN_START_DATE',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Starting date of the campaign',
    ),
    'end_date' => 
    array (
      'name' => 'end_date',
      'vname' => 'LBL_CAMPAIGN_END_DATE',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Ending date of the campaign',
      'importable' => 'required',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_CAMPAIGN_STATUS',
      'type' => 'enum',
      'options' => 'campaign_status_dom',
      'len' => '25',
      'audited' => true,
      'comment' => 'Status of the campaign',
      'importable' => 'required',
    ),
    'impressions' => 
    array (
      'name' => 'impressions',
      'vname' => 'LBL_CAMPAIGN_IMPRESSIONS',
      'type' => 'int',
      'default' => 0,
      'reportable' => true,
      'comment' => 'Expected Click throughs manually entered by Campaign Manager',
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'id',
      'group' => 'currency_id',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
      'required' => false,
      'do_report' => false,
      'reportable' => false,
      'comment' => 'Currency in use for the campaign',
    ),
    'budget' => 
    array (
      'name' => 'budget',
      'vname' => 'LBL_CAMPAIGN_BUDGET',
      'type' => 'currency',
      'dbType' => 'double',
      'comment' => 'Budgeted amount for the campaign',
    ),
    'expected_cost' => 
    array (
      'name' => 'expected_cost',
      'vname' => 'LBL_CAMPAIGN_EXPECTED_COST',
      'type' => 'currency',
      'dbType' => 'double',
      'comment' => 'Expected cost of the campaign',
    ),
    'actual_cost' => 
    array (
      'name' => 'actual_cost',
      'vname' => 'LBL_CAMPAIGN_ACTUAL_COST',
      'type' => 'currency',
      'dbType' => 'double',
      'comment' => 'Actual cost of the campaign',
    ),
    'expected_revenue' => 
    array (
      'name' => 'expected_revenue',
      'vname' => 'LBL_CAMPAIGN_EXPECTED_REVENUE',
      'type' => 'currency',
      'dbType' => 'double',
      'comment' => 'Expected revenue stemming from the campaign',
    ),
    'campaign_type' => 
    array (
      'name' => 'campaign_type',
      'vname' => 'LBL_CAMPAIGN_TYPE',
      'type' => 'enum',
      'options' => 'campaign_type_dom',
      'len' => '25',
      'audited' => true,
      'comment' => 'The type of campaign',
      'importable' => 'required',
    ),
    'objective' => 
    array (
      'name' => 'objective',
      'vname' => 'LBL_CAMPAIGN_OBJECTIVE',
      'type' => 'text',
      'comment' => 'The objective of the campaign',
    ),
    'content' => 
    array (
      'name' => 'content',
      'vname' => 'LBL_CAMPAIGN_CONTENT',
      'type' => 'text',
      'comment' => 'The campaign description',
    ),
    'prospectlists' => 
    array (
      'name' => 'prospectlists',
      'type' => 'link',
      'relationship' => 'prospect_list_campaigns',
      'source' => 'non-db',
    ),
    'emailmarketing' => 
    array (
      'name' => 'emailmarketing',
      'type' => 'link',
      'relationship' => 'campaign_email_marketing',
      'source' => 'non-db',
    ),
    'queueitems' => 
    array (
      'name' => 'queueitems',
      'type' => 'link',
      'relationship' => 'campaign_emailman',
      'source' => 'non-db',
    ),
    'log_entries' => 
    array (
      'name' => 'log_entries',
      'type' => 'link',
      'relationship' => 'campaign_campaignlog',
      'source' => 'non-db',
      'vname' => 'LBL_LOG_ENTRIES',
    ),
    'tracked_urls' => 
    array (
      'name' => 'tracked_urls',
      'type' => 'link',
      'relationship' => 'campaign_campaigntrakers',
      'source' => 'non-db',
      'vname' => 'LBL_TRACKED_URLS',
    ),
    'frequency' => 
    array (
      'name' => 'frequency',
      'vname' => 'LBL_CAMPAIGN_FREQUENCY',
      'type' => 'enum',
      'len' => '25',
      'comment' => 'Frequency of the campaign',
      'options' => 'newsletter_frequency_dom',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'campaign_leads',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'relationship' => 'campaign_opportunities',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITIES',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'campaign_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_CONTACTS',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'campaign_accounts',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'campaignspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'camp_auto_tracker_key',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tracker_key',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_campaign_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
  ),
  'relationships' => 
  array (
    'campaigns_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaigns_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'campaigns_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_accounts' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_contacts' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_leads' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_prospects' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Prospects',
      'rhs_table' => 'prospects',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_opportunities' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_email_marketing' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'EmailMarketing',
      'rhs_table' => 'email_marketing',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_emailman' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'EmailMan',
      'rhs_table' => 'emailman',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_campaignlog' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'CampaignLog',
      'rhs_table' => 'campaign_log',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'campaign_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Campaigns',
      'rhs_table' => 'campaigns',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);
?>
