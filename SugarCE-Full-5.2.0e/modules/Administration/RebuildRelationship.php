<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
    die ( 'Not A Valid Entry Point' ) ;
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
include ('include/modules.php') ;
require_once ('data/SugarBean.php') ;
require_once ('include/SugarObjects/VardefManager.php') ;

global $db, $mod_strings ;
$log = & $GLOBALS [ 'log' ] ;

$query = "DELETE FROM relationships" ;
$db->query ( $query ) ;

//clear cache before proceeding..
VardefManager::clearVardef () ;

// loop through all of the modules and create entries in the Relationships table (the relationships metadata) for every standard relationship, that is, relationships defined in the /modules/<module>/vardefs.php
// SugarBean::createRelationshipMeta just takes the relationship definition in a file and inserts it as is into the Relationships table
// It does not override or recreate existing relationships 
foreach ( $GLOBALS['beanFiles'] as $bean => $file )
{
    if (strlen ( $file ) > 0 && file_exists ( $file ))
    {
        if (! class_exists ( $bean ))
        {
            require ($file) ;
        }
        $focus = new $bean ( ) ;
        $table_name = $focus->table_name ;
        $empty = '' ;
        if (empty ( $_REQUEST [ 'silent' ] ))
            echo $mod_strings [ 'LBL_REBUILD_REL_PROC_META' ] . $focus->table_name . "..." ;
        SugarBean::createRelationshipMeta ( $focus->getObjectName (), $db, $table_name, $empty, $focus->module_dir ) ;
        if (empty ( $_REQUEST [ 'silent' ] ))
            echo $mod_strings [ 'LBL_DONE' ] . '<br>' ;
    }
}

// do the same for custom relationships (true in the last parameter to SugarBean::createRelationshipMeta) - that is, relationships defined in the custom/modules/<modulename>/Ext/vardefs/ area
foreach ( $GLOBALS['beanFiles'] as $bean => $file )
{
    if (! class_exists ( $bean ))
    {
        require ($file) ;
    }
    $focus = new $bean ( ) ;
    $table_name = $focus->table_name ;
    $empty = '' ;
    if (empty ( $_REQUEST [ 'silent' ] ))
        echo $mod_strings [ 'LBL_REBUILD_REL_PROC_C_META' ] . $focus->table_name . "..." ;
    SugarBean::createRelationshipMeta ( $focus->getObjectName (), $db, $table_name, $empty, $focus->module_dir, true ) ;
    if (empty ( $_REQUEST [ 'silent' ] ))
        echo $mod_strings [ 'LBL_DONE' ] . '<br>' ;
}

// finally, whip through the list of relationships defined in TableDictionary.php, that is all the relationships in the metadata directory, and install those
    $dictionary = array ( ) ;
    require ('modules/TableDictionary.php') ;
    //for module installer incase we alredy loaded the table dictionary
    if (file_exists ( 'custom/application/Ext/TableDictionary/tabledictionary.ext.php' ))
    {
        include ('custom/application/Ext/TableDictionary/tabledictionary.ext.php') ;
    }
    $rel_dictionary = $dictionary ;
    foreach ( $rel_dictionary as $rel_name => $rel_data )
    {
        $table = $rel_data [ 'table' ] ;
        
        if (empty ( $_REQUEST [ 'silent' ] ))
            echo $mod_strings [ 'LBL_REBUILD_REL_PROC_C_META' ] . $rel_name . "..." ;
        SugarBean::createRelationshipMeta ( $rel_name, $db, $table, $rel_dictionary, '' ) ;
        if (empty ( $_REQUEST [ 'silent' ] ))
            echo $mod_strings [ 'LBL_DONE' ] . '<br>' ;
    }

//clean relationship cache..will be rebuilt upon first access.
if (empty ( $_REQUEST [ 'silent' ] ))
    echo $mod_strings [ 'LBL_REBUILD_REL_DEL_CACHE' ] ;
Relationship::delete_cache () ;

//////////////////////////////////////////////////////////////////////////////
// Remove the "Rebuild Relationships" red text message on admin logins


if (empty ( $_REQUEST [ 'silent' ] ))
    echo $mod_strings [ 'LBL_REBUILD_REL_UPD_WARNING' ] ;
    
// clear the database row if it exists (just to be sure)
$query = "DELETE FROM versions WHERE name='Rebuild Relationships'" ;
$log->info ( $query ) ;
$db->query ( $query ) ;

// insert a new database row to show the rebuild relationships is done
$id = create_guid () ;
$gmdate = gmdate ($GLOBALS['timedate']->get_db_date_time_format()) ;
$date_entered = db_convert ( "'$gmdate'", 'datetime' ) ;
$query = 'INSERT INTO versions (id, deleted, date_entered, date_modified, modified_user_id, created_by, name, file_version, db_version) ' . "VALUES ('$id', '0', $date_entered, $date_entered, '1', '1', 'Rebuild Relationships', '4.0.0', '4.0.0')" ;
$log->info ( $query ) ;
$db->query ( $query ) ;

// unset the session variable so it is not picked up in DisplayWarnings.php
if (isset ( $_SESSION [ 'rebuild_relationships' ] ))
{
    unset ( $_SESSION [ 'rebuild_relationships' ] ) ;
}

if (empty ( $_REQUEST [ 'silent' ] ))
    echo $mod_strings [ 'LBL_DONE' ] ;
?>
