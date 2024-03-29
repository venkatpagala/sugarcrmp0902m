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
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('XTemplate/xtpl.php');
require_once('modules/ProspectLists/ProspectList.php');

require_once('include/utils.php');
require_once('modules/Campaigns/utils.php');

global $mod_strings, $app_list_strings, $app_strings, $current_user, $import_bean_map;
global $import_file_name, $theme;

echo "\n<p>\n";
echo "<h2>".$mod_strings['LBL_MANAGE_SUBSCRIPTIONS_TITLE']."</h2>";
echo "\n</p>\n";


$focus = 0;
if(isset($_REQUEST['return_module'])){
    if($_REQUEST['return_module'] == 'Contacts'){
        require_once('modules/Contacts/Contact.php');
        $focus = new Contact();
    }
    if($_REQUEST['return_module'] == 'Leads'){
        require_once('modules/Leads/Lead.php');
        $focus = new Lead();
    }
    if($_REQUEST['return_module'] == 'Prospects'){
        require_once('modules/Prospects/Prospect.php');
        $focus = new Prospect();
    }        
}

if(isset($_REQUEST['record'])) {
    $GLOBALS['log']->debug("In Subscriptions, about to retrieve record: ".$_REQUEST['record']);
    $result = $focus->retrieve($_REQUEST['record']);
    if($result == null)
    {
        sugar_die($app_strings['ERROR_NO_RECORD']);
    }
}


echo "\n<p>\n";
//echo get_module_title($mod_strings['LBL_MODULE_NAME'], $mod_strings['LBL_MODULE_NAME']." ".$mod_strings['LBL_STEP_3_TITLE'], true);
echo "\n</p>\n";
$xtpl=new XTemplate ('modules/Campaigns/Subscriptions.html');
$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);

if(isset($_REQUEST['return_module'])){$xtpl->assign("RETURN_MODULE", $_REQUEST['return_module']);}
if(isset($_REQUEST['return_id'])){$xtpl->assign("RETURN_ID", $_REQUEST['return_id']);}
if(isset($_REQUEST['return_action'])){$xtpl->assign("RETURN_ACTION", $_REQUEST['return_action']);}
if(isset($_REQUEST['record'])){$xtpl->assign("RECORD", $_REQUEST['record']);}

//if subsaction has been set, then process subscriptions
if(isset($_REQUEST['subs_action'])){manageSubscriptions($focus);}

$xtpl->assign("FOCUS_NAME", $focus->name);

$orig_vals = printOriginalValues($focus, $xtpl);  
$xtpl->assign("ORIG_SUBS_VALUES",$orig_vals[0]);
$xtpl->assign("ORIG_UNSUBS_VALUES",$orig_vals[1]);

$classname = "SUGAR_GRID";
$xtpl->assign("CLASSNAME",$classname);
$xtpl->assign("DRAG_DROP_CHOOSER", constructDDSubscriptionList($focus,$classname));

$xtpl->parse("main");
$xtpl->out("main");



/*
 *This function constructs Drag and Drop multiselect box of subscriptions for display in manage subscription form  
*/
function constructDDSubscriptionList($focus,$classname){
require_once("include/templates/TemplateDragDropChooser.php");    
global $mod_strings;
$unsubs_arr = ''; 
$subs_arr =  '';

// Lets start by creating the subscription and unsubscription arrays 
    $subscription_arrays = get_subscription_lists($focus);
    $unsubs_arr = $subscription_arrays['unsubscribed']; 
    $subs_arr =  $subscription_arrays['subscribed'];
    $unsubs_arr_rev = array();
    $subs_arr_rev = array(); 

    foreach ($unsubs_arr as $key=>$val){
        $temp = array();
        $temp[]=$key;
        $temp[]=$val;
        $unsubs_arr_rev[] =$temp;
    }

    foreach ($subs_arr as $key=>$val){
        $temp = array();
        $temp[]=$key;
        $temp[]=$val;
        $subs_arr_rev[] =$temp;
    }    
    //now call function that creates javascript for invoking DDChooser object 
    $dd_chooser = new TemplateDragDropChooser();
    $dd_chooser->args['classname']  = $classname;
    $dd_chooser->args['left_header']  = $mod_strings['LBL_ALREADY_SUBSCRIBED_HEADER'];
    $dd_chooser->args['right_header'] = $mod_strings['LBL_UNSUBSCRIBED_HEADER'];
    $dd_chooser->args['left_data']    = $subs_arr_rev;
    $dd_chooser->args['right_data']   = $unsubs_arr_rev;
    $dd_chooser->args['title']        =  ' ';
    $dd_chooser->args['left_div_name']      = 'ddgrid0';
    $dd_chooser->args['right_div_name']     = 'ddgrid1';
    $dd_chooser->args['gridcount'] = 'two';    
    $str = $dd_chooser->displayScriptTags();  
    $str .= $dd_chooser->displayDefinitionScript();
    $str .= $dd_chooser->display();
    
    return $str;  
       
}


/*
 *This function constructs multiselect box of subscriptions for display in manage subscription form  
*/
function printOriginalValues($focus, $xtpl){
    global $app_strings;
    $unsubs_arr = ''; 
    $subs_arr =  '';
    $return_arr =  '';
        
     // Lets start by creating the subscription and unsubscription arrays 
        $subscription_arrays = get_subscription_lists($focus);
        $unsubs_arr = $subscription_arrays['unsubscribed']; 
        $subs_arr =  $subscription_arrays['subscribed'];
    
//    ORIG_UNSUBS_VALUES
        $unsubs_vals = ' ';
        $subs_vals = ' ';
        foreach($subs_arr as $name => $id){
            $subs_vals .= ", $id";
        }
        $return_arr[]=$subs_vals;
//        $xtpl->assign("ORIG_SUBS_VALUES",$subs_vals);

        foreach($unsubs_arr as $name => $id){
            $unsubs_vals .= ", $id";
        }
//        $xtpl->assign("ORIG_UNSUBS_VALUES",$unsubs_vals);
        $return_arr[]=$unsubs_vals;
    
    return $return_arr;        
    }
    

/*
 * Perform Subscription management work.  This function processes selected subscriptions and calls the
 * right methods to subscribe or unsubscribe the user
 * */

function manageSubscriptions($focus){


    //Process Subscription Lists first
    //compare current list of subscriptions to original list and see if there are any additions
    $orig_subscription_arr = array();
    $curr_subscription_arr = array();
    //build array of original subscriptions
    if(isset($_REQUEST['orig_grid0values'])  && ! empty($_REQUEST['orig_grid0values'])){
     $orig_subscription_arr = explode(",", $_REQUEST['orig_grid0values']);
     $orig_subscription_arr = process_subscriptions($orig_subscription_arr);   
    }        

    //build array of current subscriptions
    if(isset($_REQUEST['grid0values'])  && ! empty($_REQUEST['grid0values'])){
     $curr_subscription_arr = explode(",", $_REQUEST['grid0values']);
     $curr_subscription_arr = process_subscriptions($curr_subscription_arr);   
    }        

    //compare both arrays and find differences
    $i=0;
    while($i<(count($curr_subscription_arr)/2)){    
        //if current subscription existed in original subscription list, do nothing
        if(in_array($curr_subscription_arr['campaign'.$i], $orig_subscription_arr)){
            //nothing to process
        }else{
         //current subscription is new, so subscribe
            subscribe($curr_subscription_arr['campaign'.$i], $curr_subscription_arr['prospect_list'.$i], $focus);
        }
        $i = $i +1;   
    }        


    //Now process UnSubscription Lists first
    //compare current list of subscriptions to original list and see if there are any additions
    $orig_unsubscription_arr = array();
    $curr_unsubscription_arr = array();

    //build array of original subscriptions
    if(isset($_REQUEST['orig_grid1values'])  && ! empty($_REQUEST['orig_grid1values'])){
     $orig_unsubscription_arr = explode(",", $_REQUEST['orig_grid1values']);
     $orig_unsubscription_arr = process_subscriptions($orig_unsubscription_arr);   
    }        

    //build array of current subscriptions
    if(isset($_REQUEST['grid1values'])  && ! empty($_REQUEST['grid1values'])){
     $curr_unsubscription_arr = explode(",", $_REQUEST['grid1values']);
     $curr_unsubscription_arr = process_subscriptions($curr_unsubscription_arr);   
    }        

    //compare both arrays and find differences
    $i=0;
    while($i<(count($curr_unsubscription_arr)/2)){    
        //if current subscription existed in original subscription list, do nothing
        if(in_array($curr_unsubscription_arr['campaign'.$i], $orig_unsubscription_arr)){
            //nothing to process
        }else{
         //current subscription is new, so subscribe
            unsubscribe($curr_unsubscription_arr['campaign'.$i], $focus);
        }
        $i = $i +1;   
    }        
}

?>
