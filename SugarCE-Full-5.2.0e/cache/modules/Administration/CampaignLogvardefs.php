<?php
// created: 2009-07-02 12:11:48
$GLOBALS["dictionary"]["CampaignLog"] = array (
  'audited' => false,
  'comment' => 'Tracks items of interest that occurred after you send an email campaign',
  'table' => 'campaign_log',
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
    'campaign_id' => 
    array (
      'name' => 'campaign_id',
      'vname' => 'LBL_CAMPAIGN_ID',
      'type' => 'id',
      'comment' => 'Campaign identifier',
    ),
    'target_tracker_key' => 
    array (
      'name' => 'target_tracker_key',
      'vname' => 'LBL_TARGET_TRACKER_KEY',
      'type' => 'varchar',
      'len' => '36',
      'comment' => 'Identifier of Tracker URL',
    ),
    'target_id' => 
    array (
      'name' => 'target_id',
      'vname' => 'LBL_TARGET_ID',
      'type' => 'varchar',
      'len' => '36',
      'comment' => 'Identifier of target record',
    ),
    'target_type' => 
    array (
      'name' => 'target_type',
      'vname' => 'LBL_TARGET_TYPE',
      'type' => 'varchar',
      'len' => '25',
      'comment' => 'Descriptor of the target record type (e.g., Contact, Lead)',
    ),
    'activity_type' => 
    array (
      'name' => 'activity_type',
      'vname' => 'LBL_ACTIVITY_TYPE',
      'type' => 'enum',
      'options' => 'campainglog_activity_type_dom',
      'len' => '25',
      'comment' => 'The activity that occurred (e.g., Viewed Message, Bounced, Opted out)',
    ),
    'activity_date' => 
    array (
      'name' => 'activity_date',
      'vname' => 'LBL_ACTIVITY_DATE',
      'type' => 'datetime',
      'comment' => 'The date the activity occurred',
    ),
    'related_id' => 
    array (
      'name' => 'related_id',
      'vname' => 'LBL_RELATED_ID',
      'type' => 'varchar',
      'len' => '36',
    ),
    'related_type' => 
    array (
      'name' => 'related_type',
      'vname' => 'LBL_RELATED_TYPE',
      'type' => 'varchar',
      'len' => '25',
    ),
    'archived' => 
    array (
      'name' => 'archived',
      'vname' => 'LBL_ARCHIVED',
      'type' => 'bool',
      'reportable' => false,
      'default' => '0',
      'comment' => 'Indicates if item has been archived',
    ),
    'hits' => 
    array (
      'name' => 'hits',
      'vname' => 'LBL_HITS',
      'type' => 'int',
      'default' => '0',
      'reportable' => true,
      'comment' => 'Number of times the item has been invoked (e.g., multiple click-thrus)',
    ),
    'list_id' => 
    array (
      'name' => 'list_id',
      'vname' => 'LBL_LIST_ID',
      'type' => 'id',
      'reportable' => false,
      'len' => '36',
      'comment' => 'The target list from which item originated',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'recipient_name' => 
    array (
      'name' => 'recipient_name',
      'type' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
    ),
    'recipient_email' => 
    array (
      'name' => 'recipient_email',
      'type' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
    ),
    'campaign_name1' => 
    array (
      'name' => 'campaign_name1',
      'rname' => 'name',
      'id_name' => 'campaign_id',
      'vname' => 'LBL_CAMPAIGN_NAME',
      'type' => 'relate',
      'table' => 'campaigns',
      'isnull' => 'true',
      'module' => 'Campaigns',
      'dbType' => 'varchar',
      'link' => 'campaign',
      'len' => '255',
      'source' => 'non-db',
    ),
    'campaign_name' => 
    array (
      'name' => 'campaign_name',
      'type' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
    ),
    'campaign_objective' => 
    array (
      'name' => 'campaign_objective',
      'type' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
    ),
    'campaign_content' => 
    array (
      'name' => 'campaign_content',
      'type' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
    ),
    'campaign' => 
    array (
      'name' => 'campaign',
      'type' => 'link',
      'relationship' => 'campaign_campaignlog',
      'source' => 'non-db',
      'vname' => 'LBL_CAMPAIGNS',
    ),
    'related_name' => 
    array (
      'source' => 'function',
      'function_name' => 'get_related_name',
      'function_class' => 'CampaignLog',
      'function_params' => 
      array (
        0 => 'related_id',
        1 => 'related_type',
      ),
      'function_params_source' => 'this',
      'type' => 'function',
      'name' => 'related_name',
      'reportable' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
    ),
    'more_information' => 
    array (
      'name' => 'more_information',
      'vname' => 'LBL_MORE_INFO',
      'type' => 'varchar',
      'len' => '100',
    ),
    'marketing_id' => 
    array (
      'name' => 'marketing_id',
      'vname' => 'LBL_MARKETING_ID',
      'type' => 'id',
      'reportable' => false,
      'comment' => 'ID of marketing email this entry is associated with',
    ),
    'created_contact' => 
    array (
      'name' => 'created_contact',
      'vname' => 'LBL_CREATED_CONTACT',
      'type' => 'link',
      'relationship' => 'campaignlog_contact',
      'source' => 'non-db',
    ),
    'created_lead' => 
    array (
      'name' => 'created_lead',
      'vname' => 'LBL_CREATED_LEAD',
      'type' => 'link',
      'relationship' => 'campaignlog_lead',
      'source' => 'non-db',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'campaign_log_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_camp_tracker',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'target_tracker_key',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_camp_campaign_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'campaign_id',
      ),
    ),
    3 => 
    array (
      'name' => 'idx_camp_more_info',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'more_information',
      ),
    ),
  ),
  'relationships' => 
  array (
    'campaignlog_contact' => 
    array (
      'lhs_module' => 'CampaignLog',
      'lhs_table' => 'campaign_log',
      'lhs_key' => 'related_id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'one-to-many',
    ),
    'campaignlog_lead' => 
    array (
      'lhs_module' => 'CampaignLog',
      'lhs_table' => 'campaign_log',
      'lhs_key' => 'related_id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'custom_fields' => false,
);
?>
