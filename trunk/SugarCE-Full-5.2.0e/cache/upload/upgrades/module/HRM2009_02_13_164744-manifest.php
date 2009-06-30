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

	$manifest = array (
		 'acceptable_sugar_versions' => 
		  array (
	     	
		  ),
		  'acceptable_sugar_flavors' =>
		  array(
		  	'CE', 'PRO','ENT'
		  ),
		  'readme'=>'This package is Human Ressource Manager developed for /b y Simstream ( www.simstream.com ).

A few parts (Calculated fields) have been made with EnhancedStudio 2.2 to enable SQL requests.



',
		  'key'=>'HRM',
		  'author' => 'Gael',
		  'description' => 'Human Ressource Management 
Gestion des Ressources Humaines',
		  'icon' => '',
		  'is_uninstallable' => true,
		  'name' => 'HRM',
		  'published_date' => '2009-02-13 15:47:41',
		  'type' => 'module',
		  'version' => '1234540061',
		  'remove_tables' => 'prompt',
		  );
$installdefs = array (
  'id' => 'HRM',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'HRM_Bonus',
      'class' => 'HRM_Bonus',
      'path' => 'modules/HRM_Bonus/HRM_Bonus.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'HRM_Disease',
      'class' => 'HRM_Disease',
      'path' => 'modules/HRM_Disease/HRM_Disease.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'HRM_Employees',
      'class' => 'HRM_Employees',
      'path' => 'modules/HRM_Employees/HRM_Employees.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'HRM_Holydays',
      'class' => 'HRM_Holydays',
      'path' => 'modules/HRM_Holydays/HRM_Holydays.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'HRM_HR_Report',
      'class' => 'HRM_HR_Report',
      'path' => 'modules/HRM_HR_Report/HRM_HR_Report.php',
      'tab' => true,
    ),
    5 => 
    array (
      'module' => 'HRM_Incomes',
      'class' => 'HRM_Incomes',
      'path' => 'modules/HRM_Incomes/HRM_Incomes.php',
      'tab' => true,
    ),
    6 => 
    array (
      'module' => 'HRM_Payment',
      'class' => 'HRM_Payment',
      'path' => 'modules/HRM_Payment/HRM_Payment.php',
      'tab' => true,
    ),
    7 => 
    array (
      'module' => 'HRM_RTT',
      'class' => 'HRM_RTT',
      'path' => 'modules/HRM_RTT/HRM_RTT.php',
      'tab' => true,
    ),
    8 => 
    array (
      'module' => 'HRM_Ticketresto',
      'class' => 'HRM_Ticketresto',
      'path' => 'modules/HRM_Ticketresto/HRM_Ticketresto.php',
      'tab' => true,
    ),
    9 => 
    array (
      'module' => 'HRM_Training',
      'class' => 'HRM_Training',
      'path' => 'modules/HRM_Training/HRM_Training.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrm_employees_hrm_incomesMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrm_employees_hrm_bonusMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrm_employees_hrm_holydaysMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrm_employees_hrm_rttMetaData.php',
    ),
    4 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrm_employees_hrm_trainingMetaData.php',
    ),
    5 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrm_employees_hrm_diseaseMetaData.php',
    ),
    6 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrm_employees_hrm_paymentMetaData.php',
    ),
    7 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/hrm_employees_hrm_ticketrestoMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_Bonus',
      'to' => 'modules/HRM_Bonus',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_Disease',
      'to' => 'modules/HRM_Disease',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_Employees',
      'to' => 'modules/HRM_Employees',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_Holydays',
      'to' => 'modules/HRM_Holydays',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_HR_Report',
      'to' => 'modules/HRM_HR_Report',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_Incomes',
      'to' => 'modules/HRM_Incomes',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_Payment',
      'to' => 'modules/HRM_Payment',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_RTT',
      'to' => 'modules/HRM_RTT',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_Ticketresto',
      'to' => 'modules/HRM_Ticketresto',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/modules/HRM_Training',
      'to' => 'modules/HRM_Training',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Incomes.php',
      'to_module' => 'HRM_Incomes',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Bonus.php',
      'to_module' => 'HRM_Bonus',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Holydays.php',
      'to_module' => 'HRM_Holydays',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
      'language' => 'en_us',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_RTT.php',
      'to_module' => 'HRM_RTT',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
      'language' => 'en_us',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Training.php',
      'to_module' => 'HRM_Training',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
      'language' => 'en_us',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Disease.php',
      'to_module' => 'HRM_Disease',
      'language' => 'en_us',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
      'language' => 'en_us',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Payment.php',
      'to_module' => 'HRM_Payment',
      'language' => 'en_us',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
      'language' => 'en_us',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Ticketresto.php',
      'to_module' => 'HRM_Ticketresto',
      'language' => 'en_us',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
      'language' => 'en_us',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
      'to_module' => 'application',
      'language' => 'fr_FR',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Incomes.php',
      'to_module' => 'HRM_Incomes',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Bonus.php',
      'to_module' => 'HRM_Bonus',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Holydays.php',
      'to_module' => 'HRM_Holydays',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_RTT.php',
      'to_module' => 'HRM_RTT',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Training.php',
      'to_module' => 'HRM_Training',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Disease.php',
      'to_module' => 'HRM_Disease',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Payment.php',
      'to_module' => 'HRM_Payment',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Ticketresto.php',
      'to_module' => 'HRM_Ticketresto',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/HRM_Employees.php',
      'to_module' => 'HRM_Employees',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    5 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    6 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    7 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);