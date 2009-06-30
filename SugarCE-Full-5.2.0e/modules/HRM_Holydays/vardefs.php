<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2008 SugarCRM Inc.
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
$dictionary['HRM_Holydays'] = array(
	'table'=>'hrm_holydays',
	'audited'=>true,
	'fields'=>array (
  'hol_mois' => 
  array (
    'required' => '1',
    'name' => 'hol_mois',
    'vname' => 'LBL_HOL_MOIS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '1',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => 100,
    'options' => 'dom_cal_month_long',
    'studio' => 'visible',
  ),
  'hol_year' => 
  array (
    'required' => '1',
    'name' => 'hol_year',
    'vname' => 'LBL_HOL_YEAR',
    'type' => 'int',
    'massupdate' => 0,
    'default' => '2009',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '11',
    'disable_num_format' => '1',
    'validation' => 
    array (
      'type' => 'range',
      'min' => '2000',
      'max' => '2020',
    ),
  ),
  'hol_type' => 
  array (
    'required' => '1',
    'name' => 'hol_type',
    'vname' => 'LBL_HOL_TYPE',
    'type' => 'radioenum',
    'massupdate' => '1',
    'default' => '-1',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => 100,
    'options' => 'hol_type_list',
    'studio' => 'visible',
    'dbType' => 'enum',
    'separator' => '<br>',
  ),
  'hol_quan' => 
  array (
    'required' => '1',
    'name' => 'hol_quan',
    'vname' => 'LBL_HOL_QUAN',
    'type' => 'float',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '18',
    'precision' => '2',
  ),
  'hol_qtyp' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'hol_qtyp',
    'vname' => 'LBL_HOL_QTYP',
    'type' => 'code',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'ext2' => NULL,
    'ext4' => 'global $connection_code_field;

$type =  $bean-&gt;hol_type;
$quan = $bean-&gt;hol_quan;

echo &quot;&lt;DIV align=right&gt;&quot;;
echo $type*$quan;
echo &quot;&lt;/DIV&gt;&quot;;',
    'studio' => 'visible',
    'dbtype' => ' varchar()',
  ),
),
	'relationships'=>array (
),
	'optimistic_lock'=>true,
);
require_once('include/SugarObjects/VardefManager.php');
VardefManager::createVardef('HRM_Holydays','HRM_Holydays', array('basic','assignable'));