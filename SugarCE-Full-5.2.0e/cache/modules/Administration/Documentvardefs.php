<?php
// created: 2009-07-02 12:11:48
$GLOBALS["dictionary"]["Document"] = array (
  'table' => 'documents',
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
      'source' => 'non-db',
      'type' => 'varchar',
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
      'relationship' => 'documents_created_by',
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
      'relationship' => 'documents_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'document_name' => 
    array (
      'name' => 'document_name',
      'vname' => 'LBL_NAME',
      'type' => 'varchar',
      'len' => '255',
      'required' => true,
      'importable' => 'required',
    ),
    'filename' => 
    array (
      'name' => 'filename',
      'vname' => 'LBL_FILENAME',
      'type' => 'file',
      'source' => 'non-db',
      'comment' => 'The filename of the document attachment',
    ),
    'uploadfile' => 
    array (
      'name' => 'uploadfile',
      'vname' => 'LBL_FILENAME',
      'type' => 'file',
      'source' => 'non-db',
    ),
    'active_date' => 
    array (
      'name' => 'active_date',
      'vname' => 'LBL_DOC_ACTIVE_DATE',
      'type' => 'date',
      'importable' => 'required',
    ),
    'exp_date' => 
    array (
      'name' => 'exp_date',
      'vname' => 'LBL_DOC_EXP_DATE',
      'type' => 'date',
    ),
    'category_id' => 
    array (
      'name' => 'category_id',
      'vname' => 'LBL_SF_CATEGORY',
      'type' => 'enum',
      'len' => '25',
      'options' => 'document_category_dom',
      'reportable' => false,
    ),
    'subcategory_id' => 
    array (
      'name' => 'subcategory_id',
      'vname' => 'LBL_SF_SUBCATEGORY',
      'type' => 'enum',
      'len' => '25',
      'options' => 'document_subcategory_dom',
      'reportable' => false,
    ),
    'status_id' => 
    array (
      'name' => 'status_id',
      'vname' => 'LBL_DOC_STATUS',
      'type' => 'enum',
      'len' => '25',
      'options' => 'document_status_dom',
      'reportable' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_DOC_STATUS',
      'type' => 'varchar',
      'source' => 'non-db',
      'Comment' => 'Document status for Meta-Data framework',
    ),
    'document_revision_id' => 
    array (
      'name' => 'document_revision_id',
      'vname' => 'LBL_LATEST_REVISION',
      'type' => 'varchar',
      'len' => '36',
      'reportable' => false,
    ),
    'revisions' => 
    array (
      'name' => 'revisions',
      'type' => 'link',
      'relationship' => 'document_revisions',
      'source' => 'non-db',
      'vname' => 'LBL_REVISIONS',
    ),
    'revision' => 
    array (
      'name' => 'revision',
      'vname' => 'LBL_DOC_VERSION',
      'type' => 'varchar',
      'reportable' => false,
      'required' => true,
      'source' => 'non-db',
      'importable' => 'required',
    ),
    'last_rev_created_name' => 
    array (
      'name' => 'last_rev_created_name',
      'vname' => 'LBL_LAST_REV_CREATOR',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'last_rev_mime_type' => 
    array (
      'name' => 'last_rev_mime_type',
      'vname' => 'LBL_LAST_REV_MIME_TYPE',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'latest_revision' => 
    array (
      'name' => 'latest_revision',
      'vname' => 'LBL_LATEST_REVISION',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'last_rev_create_date' => 
    array (
      'name' => 'last_rev_create_date',
      'type' => 'date',
      'table' => 'document_revisions',
      'link' => 'revisions',
      'join_name' => 'document_revisions',
      'vname' => 'LBL_LAST_REV_CREATE_DATE',
      'rname' => 'date_entered',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'contracts' => 
    array (
      'name' => 'contracts',
      'type' => 'link',
      'relationship' => 'contracts_documents',
      'source' => 'non-db',
      'vname' => 'LBL_CONTRACTS',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'leads_documents',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'related_doc_id' => 
    array (
      'name' => 'related_doc_id',
      'vname' => 'LBL_RELATED_DOCUMENT_ID',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'varchar',
      'len' => '36',
    ),
    'related_doc_name' => 
    array (
      'name' => 'related_doc_name',
      'vname' => 'LBL_DET_RELATED_DOCUMENT',
      'type' => 'relate',
      'table' => 'documents',
      'id_name' => 'related_doc_id',
      'module' => 'Documents',
      'source' => 'non-db',
      'comment' => 'The related document name for Meta-Data framework',
    ),
    'related_doc_rev_id' => 
    array (
      'name' => 'related_doc_rev_id',
      'vname' => 'LBL_RELATED_DOCUMENT_REVISION_ID',
      'reportable' => false,
      'dbType' => 'id',
      'type' => 'varchar',
      'len' => '36',
    ),
    'related_doc_rev_number' => 
    array (
      'name' => 'related_doc_rev_number',
      'vname' => 'LBL_DET_RELATED_DOCUMENT_VERSION',
      'type' => 'varchar',
      'source' => 'non-db',
      'comment' => 'The related document version number for Meta-Data framework',
    ),
    'is_template' => 
    array (
      'name' => 'is_template',
      'vname' => 'LBL_IS_TEMPLATE',
      'type' => 'bool',
      'default' => 0,
      'reportable' => false,
    ),
    'template_type' => 
    array (
      'name' => 'template_type',
      'vname' => 'LBL_TEMPLATE_TYPE',
      'type' => 'enum',
      'len' => '25',
      'options' => 'document_template_type_dom',
      'reportable' => false,
    ),
    'latest_revision_name' => 
    array (
      'name' => 'latest_revision_name',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'selected_revision_name' => 
    array (
      'name' => 'selected_revision_name',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'contract_status' => 
    array (
      'name' => 'contract_status',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'contract_name' => 
    array (
      'name' => 'contract_name',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'linked_id' => 
    array (
      'name' => 'linked_id',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'selected_revision_id' => 
    array (
      'name' => 'selected_revision_id',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'latest_revision_id' => 
    array (
      'name' => 'latest_revision_id',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
    'selected_revision_filename' => 
    array (
      'name' => 'selected_revision_filename',
      'type' => 'varchar',
      'reportable' => false,
      'source' => 'non-db',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'documentspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_doc_cat',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'category_id',
        1 => 'subcategory_id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'documents_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'documents_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'documents',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'document_revisions' => 
    array (
      'lhs_module' => 'Documents',
      'lhs_table' => 'documents',
      'lhs_key' => 'id',
      'rhs_module' => 'Documents',
      'rhs_table' => 'document_revisions',
      'rhs_key' => 'document_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);
?>
