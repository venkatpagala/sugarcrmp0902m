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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array (
//e.g. auf Deutsch 'Contacts'=>'Contakten',
  'language_pack_name' => 'US English',
  'moduleList' =>
  array (
    'Home' => 'Home',
    'Dashboard' => 'Dashboard',
    'Contacts' => 'Contacts',
    'Accounts' => 'Accounts',
    'Opportunities' => 'Opportunities',
    'Cases' => 'Cases',
    'Notes' => 'Notes',
    'Calls' => 'Calls',
    'Emails' => 'Emails',
    'Meetings' => 'Meetings',
    'Tasks' => 'Tasks',
    'Calendar' => 'Calendar',
    'Leads' => 'Leads',
    'Currencies' => 'Currencies',















    'Activities' => 'Activities',
    'Bugs' => 'Bug Tracker',
    'Feeds' => 'RSS',
    'iFrames'=>'My Portal',
    'TimePeriods'=>'Time Periods',
    'Project'=>'Projects',
    'ProjectTask'=>'Project Tasks',
    'Campaigns'=>'Campaigns',
    'CampaignLog'=>'Campaign Log',
    'Documents'=>'Documents',
    'Sync'=>'Sync',






    'Users' => 'Users',
    'Releases' => 'Releases',
    'Prospects' => 'Targets',
    'Queues' => 'Queues',
    'EmailMarketing' => 'Email Marketing',
    'EmailTemplates' => 'Email Templates',
    'ProspectLists' => 'Target Lists',
    'SavedSearch' => 'Saved Searches',
    'Trackers' => 'Trackers',
    'TrackerPerfs' => 'Tracker Performance',
    'TrackerSessions' => 'Tracker Sessions',
    'TrackerQueries' => 'Tracker Queries',
    'FAQ' => 'FAQ',
    'Newsletters' => 'Newsletters',
    'SugarFeed'=>'Sugar Feed',








        ),
  'moduleListSingular' =>
  array (
    'Home' => 'Home',
    'Dashboard' => 'Dashboard',
    'Contacts' => 'Contact',
    'Accounts' => 'Account',
    'Opportunities' => 'Opportunity',
    'Cases' => 'Case',
    'Notes' => 'Note',
    'Calls' => 'Call',
    'Emails' => 'Email',
    'Meetings' => 'Meeting',
    'Tasks' => 'Task',
    'Calendar' => 'Calendar',
    'Leads' => 'Lead',









    'Activities' => 'Activitie',
    'Bugs' => 'Bug Tracker',
    'Feeds' => 'RSS',
    'iFrames'=>'My Portal',
    'TimePeriods'=>'Time Period',
    'Project'=>'Projects',
    'ProjectTask'=>'Project Task',
    'Campaigns'=>'Campaigns',
    'Documents'=>'Documents',
    'Sync'=>'Sync',






    'Users' => 'User'
        ),

  'checkbox_dom'=> array(
    ''=>'',
    '1'=>'Yes',
    '2'=>'No',
  ),

  //e.g. en fran�ais 'Analyst'=>'Analyste',
  'account_type_dom' =>
  array (
    '' => '',
    'Analyst' => 'Analyst',
    'Competitor' => 'Competitor',
    'Customer' => 'Customer',
    'Integrator' => 'Integrator',
    'Investor' => 'Investor',
    'Partner' => 'Partner',
    'Press' => 'Press',
    'Prospect' => 'Prospect',
    'Reseller' => 'Reseller',
    'Other' => 'Other',
  ),
  //e.g. en espa�ol 'Apparel'=>'Ropa',
  'industry_dom' =>
  array (
    '' => '',
    'Apparel' => 'Apparel',
    'Banking' => 'Banking',
    'Biotechnology' => 'Biotechnology',
    'Chemicals' => 'Chemicals',
    'Communications' => 'Communications',
    'Construction' => 'Construction',
    'Consulting' => 'Consulting',
    'Education' => 'Education',
    'Electronics' => 'Electronics',
    'Energy' => 'Energy',
    'Engineering' => 'Engineering',
    'Entertainment' => 'Entertainment',
    'Environmental' => 'Environmental',
    'Finance' => 'Finance',
    'Government' => 'Government',
    'Healthcare' => 'Healthcare',
    'Hospitality' => 'Hospitality',
    'Insurance' => 'Insurance',
    'Machinery' => 'Machinery',
    'Manufacturing' => 'Manufacturing',
    'Media' => 'Media',
    'Not For Profit' => 'Not For Profit',
    'Recreation' => 'Recreation',
    'Retail' => 'Retail',
    'Shipping' => 'Shipping',
    'Technology' => 'Technology',
    'Telecommunications' => 'Telecommunications',
    'Transportation' => 'Transportation',
    'Utilities' => 'Utilities',
    'Other' => 'Other',
  ),
  'lead_source_default_key' => 'Self Generated',
  'lead_source_dom' =>
  array (
    '' => '',
    'Cold Call' => 'Cold Call',
    'Existing Customer' => 'Existing Customer',
    'Self Generated' => 'Self Generated',
    'Employee' => 'Employee',
    'Partner' => 'Partner',
    'Public Relations' => 'Public Relations',
    'Direct Mail' => 'Direct Mail',
    'Conference' => 'Conference',
    'Trade Show' => 'Trade Show',
    'Web Site' => 'Web Site',
    'Word of mouth' => 'Word of mouth',
    'Email' => 'Email',
    'Campaign'=>'Campaign',
    'Other' => 'Other',
  ),
  'opportunity_type_dom' =>
  array (
    '' => '',
    'Existing Business' => 'Existing Business',
    'New Business' => 'New Business',
  ),
  'roi_type_dom' =>
    array (
    'Revenue' => 'Revenue',
    'Investment'=>'Investment',
    'Expected_Revenue'=>'Expected Revenue',
    'Budget'=>'Budget',

  ),
  //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
  'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
  'opportunity_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Primary Decision Maker',
    'Business Decision Maker' => 'Business Decision Maker',
    'Business Evaluator' => 'Business Evaluator',
    'Technical Decision Maker' => 'Technical Decision Maker',
    'Technical Evaluator' => 'Technical Evaluator',
    'Executive Sponsor' => 'Executive Sponsor',
    'Influencer' => 'Influencer',
    'Other' => 'Other',
  ),
  //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
  'case_relationship_type_default_key' => 'Primary Contact',
  'case_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Contact' => 'Primary Contact',
    'Alternate Contact' => 'Alternate Contact',
  ),
  'payment_terms' =>
  array (
    '' => '',
    'Net 15' => 'Net 15',
    'Net 30' => 'Net 30',
  ),
  'sales_stage_default_key' => 'Prospecting',
  'sales_stage_dom' =>
  array (
    'Prospecting' => 'Prospecting',
    'Qualification' => 'Qualification',
    'Needs Analysis' => 'Needs Analysis',
    'Value Proposition' => 'Value Proposition',
    'Id. Decision Makers' => 'Id. Decision Makers',
    'Perception Analysis' => 'Perception Analysis',
    'Proposal/Price Quote' => 'Proposal/Price Quote',
    'Negotiation/Review' => 'Negotiation/Review',
    'Closed Won' => 'Closed Won',
    'Closed Lost' => 'Closed Lost',
  ),
  'in_total_group_stages' => array (
    'Draft' => 'Draft',
    'Negotiation' => 'Negotiation',
    'Delivered' => 'Delivered',
    'On Hold' => 'On Hold',
    'Confirmed' => 'Confirmed',
    'Closed Accepted' => 'Closed Accepted',
    'Closed Lost' => 'Closed Lost',
    'Closed Dead' => 'Closed Dead',
  ),
  'sales_probability_dom' => // keys must be the same as sales_stage_dom
  array (
    'Prospecting' => '10',
    'Qualification' => '20',
    'Needs Analysis' => '25',
    'Value Proposition' => '30',
    'Id. Decision Makers' => '40',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Negotiation/Review' => '80',
    'Closed Won' => '100',
    'Closed Lost' => '0',
  ),
  'activity_dom' =>
  array (
    'Call' => 'Call',
    'Meeting' => 'Meeting',
    'Task' => 'Task',
    'Email' => 'Email',
    'Note' => 'Note',
  ),
  'salutation_dom' =>
      array (
        '' => '',
        'Mr.' => 'Mr.',
        'Ms.' => 'Ms.',
        'Mrs.' => 'Mrs.',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
      ),
  //time is in seconds; the greater the time the longer it takes;
  'reminder_max_time'=>3600,
  'reminder_time_options' => array( 60=> '1 minute prior',
                                  300=> '5 minutes prior',
                                  600=> '10 minutes prior',
                                  900=> '15 minutes prior',
                                  1800=> '30 minutes prior',
                                  3600=> '1 hour prior',
                                 ),

  'task_priority_default' => 'Medium',
  'task_priority_dom' =>
  array (
    'High' => 'High',
    'Medium' => 'Medium',
    'Low' => 'Low',
  ),
  'task_status_default' => 'Not Started',
  'task_status_dom' =>
  array (
    'Not Started' => 'Not Started',
    'In Progress' => 'In Progress',
    'Completed' => 'Completed',
    'Pending Input' => 'Pending Input',
    'Deferred' => 'Deferred',
  ),
  'meeting_status_default' => 'Planned',
  'meeting_status_dom' =>
  array (
    'Planned' => 'Planned',
    'Held' => 'Held',
    'Not Held' => 'Not Held',
  ),
  'call_status_default' => 'Planned',
  'call_status_dom' =>
  array (
    'Planned' => 'Planned',
    'Held' => 'Held',
    'Not Held' => 'Not Held',
  ),
  'call_direction_default' => 'Outbound',
  'call_direction_dom' =>
  array (
    'Inbound' => 'Inbound',
    'Outbound' => 'Outbound',
  ),
  'lead_status_dom' =>
  array (
    '' => '',
    'New' => 'New',
    'Assigned' => 'Assigned',
    'In Process' => 'In Process',
    'Converted' => 'Converted',
    'Recycled' => 'Recycled',
    'Dead' => 'Dead',
  ),
   'gender_list' =>
  array (
    'male' => 'Male',
    'female' => 'Female',
  ),
  //Note:  do not translate case_status_default_key
//       it is the key for the default case_status_dom value
  'case_status_default_key' => 'New',
  'case_status_dom' =>
  array (
    'New' => 'New',
    'Assigned' => 'Assigned',
    'Closed' => 'Closed',
    'Pending Input' => 'Pending Input',
    'Rejected' => 'Rejected',
    'Duplicate' => 'Duplicate',
  ),
  'case_priority_default_key' => 'P2',
  'case_priority_dom' =>
  array (
    'P1' => 'High',
    'P2' => 'Medium',
    'P3' => 'Low',
  ),
  'user_status_dom' =>
  array (
    'Active' => 'Active',
    'Inactive' => 'Inactive',
  ),
  'employee_status_dom' =>
  array (
    'Active' => 'Active',
    'Terminated' => 'Terminated',
    'Leave of Absence' => 'Leave of Absence',
  ),
  'messenger_type_dom' =>
  array (
    '' => '',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
    'AOL' => 'AOL',
  ),

    'project_task_priority_options' => array (
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'project_task_priority_default' => 'Medium',

    'project_task_status_options' => array (
        'Not Started' => 'Not Started',
        'In Progress' => 'In Progress',
        'Completed' => 'Completed',
        'Pending Input' => 'Pending Input',
        'Deferred' => 'Deferred',
    ),
    'project_task_utilization_options' => array (
        '0' => 'none',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array (
        'Draft' => 'Draft',
        'In Review' => 'In Review',
        'Published' => 'Published',
    ),
    'project_status_default' => 'Draft',

    'project_duration_units_dom' => array (
        'Days' => 'Days',
        'Hours' => 'Hours',
    ),

    'project_priority_options' => array (
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'project_priority_default' => 'Medium',

  //Note:  do not translate record_type_default_key
//       it is the key for the default record_type_module value
  'record_type_default_key' => 'Accounts',
  'record_type_display' =>
  array (
    '' => '',
    'Accounts' => 'Account',
    'Opportunities' => 'Opportunity',
    'Cases' => 'Case',
    'Leads' => 'Lead',
    'Contacts' => 'Contacts', // cn (11/22/2005) added to support Emails




    'Bugs' => 'Bug',
    'Project' => 'Project',



    'ProjectTask' => 'Project Task',
    'Tasks' => 'Task',
    'Prospects' => 'Target',
  ),

  'record_type_display_notes' =>
  array (

    'Accounts' => 'Account',
    'Contacts' => 'Contact',
    'Opportunities' => 'Opportunity',
    'Cases' => 'Case',
    'Leads' => 'Lead',






    'Bugs' => 'Bug',
    'Emails' => 'Email',
    'Project' => 'Project',
    'ProjectTask' => 'Project Task',
    'Meetings' => 'Meeting',
    'Calls' => 'Call',








  ),

  'parent_type_display' =>
  array (

    'Accounts' => 'Account',
    'Bugs' => 'Bug Tracker',
    'Cases' => 'Case',
    'Contacts' => 'Contact',
    'Leads' => 'Lead',
    'Opportunities' => 'Opportunity',



    'Project' => 'Project',
    'ProjectTask' => 'Project Task',
    'Prospects' => 'Target',



    'Tasks' => 'Task',








  ),







































  'quote_type_dom' =>
  array (
    'Quotes' => 'Quote',
    'Orders' => 'Order',
  ),
  'default_quote_stage_key' => 'Draft',
  'quote_stage_dom' =>
  array (
    'Draft' => 'Draft',
    'Negotiation' => 'Negotiation',
    'Delivered' => 'Delivered',
    'On Hold' => 'On Hold',
    'Confirmed' => 'Confirmed',
    'Closed Accepted' => 'Closed Accepted',
    'Closed Lost' => 'Closed Lost',
    'Closed Dead' => 'Closed Dead',
  ),
  'default_order_stage_key' => 'Pending',
  'order_stage_dom' =>
  array (
    'Pending' => 'Pending',
    'Confirmed' => 'Confirmed',
    'On Hold' => 'On Hold',
    'Shipped' => 'Shipped',
    'Cancelled' => 'Cancelled',
  ),

//Note:  do not translate quote_relationship_type_default_key
//       it is the key for the default quote_relationship_type_dom value
  'quote_relationship_type_default_key' => 'Primary Decision Maker',
  'quote_relationship_type_dom' =>
  array (
    '' => '',
    'Primary Decision Maker' => 'Primary Decision Maker',
    'Business Decision Maker' => 'Business Decision Maker',
    'Business Evaluator' => 'Business Evaluator',
    'Technical Decision Maker' => 'Technical Decision Maker',
    'Technical Evaluator' => 'Technical Evaluator',
    'Executive Sponsor' => 'Executive Sponsor',
    'Influencer' => 'Influencer',
    'Other' => 'Other',
  ),
  'layouts_dom' =>
  array (
    'Standard' => 'Proposal',
    'Invoice' => 'Invoice',
    'Terms' => 'Payment Terms'
  ),

  'issue_priority_default_key' => 'Medium',
  'issue_priority_dom' =>
  array (
    'Urgent' => 'Urgent',
    'High' => 'High',
    'Medium' => 'Medium',
    'Low' => 'Low',
  ),
  'issue_resolution_default_key' => '',
  'issue_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Accepted',
    'Duplicate' => 'Duplicate',
    'Closed' => 'Closed',
    'Out of Date' => 'Out of Date',
    'Invalid' => 'Invalid',
  ),

  'issue_status_default_key' => 'New',
  'issue_status_dom' =>
  array (
    'New' => 'New',
    'Assigned' => 'Assigned',
    'Closed' => 'Closed',
    'Pending' => 'Pending',
    'Rejected' => 'Rejected',
  ),

  'bug_priority_default_key' => 'Medium',
  'bug_priority_dom' =>
  array (
    'Urgent' => 'Urgent',
    'High' => 'High',
    'Medium' => 'Medium',
    'Low' => 'Low',
  ),
   'bug_resolution_default_key' => '',
  'bug_resolution_dom' =>
  array (
    '' => '',
    'Accepted' => 'Accepted',
    'Duplicate' => 'Duplicate',
    'Fixed' => 'Fixed',
    'Out of Date' => 'Out of Date',
    'Invalid' => 'Invalid',
    'Later' => 'Later',
  ),
  'bug_status_default_key' => 'New',
  'bug_status_dom' =>
  array (
    'New' => 'New',
    'Assigned' => 'Assigned',
    'Closed' => 'Closed',
    'Pending' => 'Pending',
    'Rejected' => 'Rejected',
  ),
   'bug_type_default_key' => 'Bug',
  'bug_type_dom' =>
  array (
    'Defect' => 'Defect',
    'Feature' => 'Feature',
  ),
 'case_type_dom' =>
  array (
    'Administration' => 'Administration',
    'Product' => 'Product',
    'User' => 'User',
  ),

  'source_default_key' => '',
  'source_dom' =>
  array (
    '' => '',
    'Internal' => 'Internal',
    'Forum' => 'Forum',
    'Web' => 'Web',
    'InboundEmail' => 'Email'
  ),

  'product_category_default_key' => '',
  'product_category_dom' =>
  array (
    '' => '',
    'Accounts' => 'Accounts',
    'Activities' => 'Activities',
    'Bug Tracker' => 'Bug Tracker',
    'Calendar' => 'Calendar',
    'Calls' => 'Calls',
    'Campaigns' => 'Campaigns',
    'Cases' => 'Cases',
    'Contacts' => 'Contacts',
    'Currencies' => 'Currencies',
    'Dashboard' => 'Dashboard',
    'Documents' => 'Documents',
    'Emails' => 'Emails',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Forecasts',
    'Help' => 'Help',
    'Home' => 'Home',
    'Leads' => 'Leads',
    'Meetings' => 'Meetings',
    'Notes' => 'Notes',
    'Opportunities' => 'Opportunities',
    'Outlook Plugin' => 'Outlook Plugin',
    'Product Catalog' => 'Product Catalog',
    'Products' => 'Products',
    'Projects' => 'Projects',
    'Quotes' => 'Quotes',
    'Releases' => 'Releases',
    'RSS' => 'RSS',
    'Studio' => 'Studio',
    'Upgrade' => 'Upgrade',
    'Users' => 'Users',
  ),

  /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
  'campaign_status_dom' =>
  array (
        '' => '',
        'Planning' => 'Planning',
        'Active' => 'Active',
        'Inactive' => 'Inactive',
        'Complete' => 'Complete',
        'In Queue' => 'In Queue',
        'Sending'=> 'Sending',
  ),
  'campaign_type_dom' =>
  array (
        '' => '',
        'Telesales' => 'Telesales',
        'Mail' => 'Mail',
        'Email' => 'Email',
        'Print' => 'Print',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Television',
        'NewsLetter' => 'Newsletter',
        ),

  'newsletter_frequency_dom' =>
  array (
        '' => '',
        'Weekly' => 'Weekly',
        'Monthly' => 'Monthly',
        'Quarterly' => 'Quarterly',
        'Annually' => 'Annually',
        ),
        
  'notifymail_sendtype' =>
  array (


    'sendmail' => 'sendmail',


    'SMTP' => 'SMTP',
  ),
  'dom_timezones' => array('-12'=>'(GMT - 12) International Date Line West',
                            '-11'=>'(GMT - 11) Midway Island, Samoa',
                            '-10'=>'(GMT - 10) Hawaii',
                            '-9'=>'(GMT - 9) Alaska',
                            '-8'=>'(GMT - 8) San Francisco',
                            '-7'=>'(GMT - 7) Phoenix',
                            '-6'=>'(GMT - 6) Saskatchewan',
                            '-5'=>'(GMT - 5) New York',
                            '-4'=>'(GMT - 4) Santiago',
                            '-3'=>'(GMT - 3) Buenos Aires',
                            '-2'=>'(GMT - 2) Mid-Atlantic',
                            '-1'=>'(GMT - 1) Azores',
                            '0'=>'(GMT)',
                            '1'=>'(GMT + 1) Madrid',
                            '2'=>'(GMT + 2) Athens',
                            '3'=>'(GMT + 3) Moscow',
                            '4'=>'(GMT + 4) Kabul',
                            '5'=>'(GMT + 5) Ekaterinburg',
                            '6'=>'(GMT + 6) Astana',
                            '7'=>'(GMT + 7) Bangkok',
                            '8'=>'(GMT + 8) Perth',
                            '9'=>'(GMT + 9) Seol',
                            '10'=>'(GMT + 10) Brisbane',
                            '11'=>'(GMT + 11) Solomone Is.',
                            '12'=>'(GMT + 12) Auckland',
                            ),
      'dom_cal_month_long'=>array(
                '0'=>"",
                '1'=>"January",
                '2'=>"February",
                '3'=>"March",
                '4'=>"April",
                '5'=>"May",
                '6'=>"June",
                '7'=>"July",
                '8'=>"August",
                '9'=>"September",
                '10'=>"October",
                '11'=>"November",
                '12'=>"December",
                ),
        'dom_cal_month_short'=>array(
                '0'=>"",
                '1'=>"Jan",
                '2'=>"Feb",
                '3'=>"Mar",
                '4'=>"Apr",
                '5'=>"May",
                '6'=>"Jun",
                '7'=>"Jul",
                '8'=>"Aug",
                '9'=>"Sep",
                '10'=>"Oct",
                '11'=>"Nov",
                '12'=>"Dec",
                ),
        'dom_cal_day_long'=>array(
                '0'=>"",
                '1'=>"Sunday",
                '2'=>"Monday",
                '3'=>"Tuesday",
                '4'=>"Wednesday",
                '5'=>"Thursday",
                '6'=>"Friday",
                '7'=>"Saturday",
                ),
        'dom_cal_day_short'=>array(
                '0'=>"",
                '1'=>"Sun",
                '2'=>"Mon",
                '3'=>"Tue",
                '4'=>"Wed",
                '5'=>"Thu",
                '6'=>"Fri",
                '7'=>"Sat",
        ),
    'dom_meridiem_lowercase'=>array(
                'am'=>"am",
                'pm'=>"pm"
        ),
    'dom_meridiem_uppercase'=>array(
                 'AM'=>'AM',
                 'PM'=>'PM'
        ),
    'dom_report_types'=>array(
                'tabular'=>'Rows and Columns',
                'summary'=>'Summation',
                'detailed_summary'=>'Summation with details',
                'Matrix' => 'Matrix',
        ),
    'dom_email_types'=> array(
        'out'       => 'Sent',
        'archived'  => 'Archived',
        'draft'     => 'Draft',
        'inbound'   => 'Inbound',
        'campaign'  => 'Campaign'
    ),
    'dom_email_status' => array (
        'archived'  => 'Archived',
        'closed'    => 'Closed',
        'draft'     => 'In Draft',
        'read'      => 'Read',
        'replied'   => 'Replied',
        'sent'      => 'Sent',
        'send_error'=> 'Send Error',
        'unread'    => 'Unread',
    ),
    'dom_email_archived_status' => array (
        'archived'  => 'Archived',
    ),

    'dom_email_server_type' => array(   ''          => '--None--',
                                        'imap'      => 'IMAP',
                                        'pop3'      => 'POP3',
    ),
    'dom_mailbox_type'      => array(/*''           => '--None Specified--',*/
                                     'pick'     => '--None--',
                                     'createcase'  => 'Create Case',
                                     'bounce'   => 'Bounce Handling',
    ),
    'dom_email_distribution'=> array(''             => '--None--',
                                     'direct'       => 'Direct Assign',
                                     'roundRobin'   => 'Round-Robin',
                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_distribution_for_auto_create'=> array('roundRobin'   => 'Round-Robin',
                                                     'leastBusy'    => 'Least-Busy',
    ),
    'dom_email_errors'      => array(1 => 'Only select one user when Direct Assigning items.',
                                     2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool'        => array('bool_true' => 'Yes',
                                     'bool_false' => 'No',
    ),
    'dom_int_bool'          => array(1 => 'Yes',
                                     0 => 'No',
    ),
    'dom_switch_bool'       => array ('on' => 'Yes',
                                        'off' => 'No',
                                        '' => 'No', ),
    'dom_email_link_type'   => array(   ''          => 'System Default Mail Client',
                                        'sugar'     => 'SugarCRM Mail Client',
                                        'mailto'    => 'External Mail Client'),

    'dom_email_editor_option'=> array(  ''          => 'Default Email Format',
                                        'html'      => 'HTML Email',
                                        'plain'     => 'Plain Text Email'),


    'schedulers_times_dom'  => array(   'not run'       => 'Past Run Time, Not Executed',
                                        'ready'         => 'Ready',
                                        'in progress'   => 'In Progress',
                                        'failed'        => 'Failed',
                                        'completed'     => 'Completed',
                                        'no curl'       => 'Not Run: No cURL available',
    ),

    'scheduler_status_dom' =>
        array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
        ),

    'scheduler_period_dom' =>
        array (
        'min' => 'Minutes',
        'hour' => 'Hours',
        ),

    'forecast_schedule_status_dom' =>
    array (
    'Active' => 'Active',
    'Inactive' => 'Inactive',
  ),
    'forecast_type_dom' =>
    array (
    'Direct' => 'Direct',
    'Rollup' => 'Rollup',
  ),

    'document_category_dom' =>
    array (
    '' => '',
    'Marketing' => 'Marketing',
    'Knowledege Base' => 'Knowledge Base',
    'Sales' => 'Sales',
  ),

    'document_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Marketing Collateral',
    'Product Brochures' => 'Product Brochures',
    'FAQ' => 'FAQ',
  ),

    'document_status_dom' =>
    array (
    'Active' => 'Active',
    'Draft' => 'Draft',
    'FAQ' => 'FAQ',
    'Expired' => 'Expired',
    'Under Review' => 'Under Review',
    'Pending' => 'Pending',
  ),
  'document_template_type_dom' =>
  array(
    ''=>'',
    'mailmerge'=>'Mail Merge',
    'eula'=>'EULA',
    'nda'=>'NDA',
    'license'=>'License Agreement',
  ),
    'dom_meeting_accept_options' =>
    array (
    'accept' => 'Accept',
    'decline' => 'Decline',
    'tentative' => 'Tentative',
  ),
    'dom_meeting_accept_status' =>
    array (
    'accept' => 'Accepted',
    'decline' => 'Declined',
    'tentative' => 'Tentative',
    'none'      => 'None',
  ),





















































































































































































































































































































































































































    'duration_intervals' => array('0'=>'00',
                                    '15'=>'15',
                                    '30'=>'30',
                                    '45'=>'45'),


// deferred
/*// QUEUES MODULE DOMs
'queue_type_dom' => array(
    'Users' => 'Users',



    'Mailbox' => 'Mailbox',
),
*/

//prospect list type dom
  'prospect_list_type_dom' =>
  array (
    'default' => 'Default',
    'seed' => 'Seed',
    'exempt_domain' => 'Suppression List - By Domain',
    'exempt_address' => 'Suppression List - By Email Address',
    'exempt' => 'Suppression List - By Id',
    'test' => 'Test',
  ),

  'email_marketing_status_dom' =>
  array (
    '' => '',
    'active'=>'Active',
    'inactive'=>'Inactive'
  ),

  'campainglog_activity_type_dom' =>
  array (
    ''=>'',
    'targeted' => 'Message Sent/Attempted',
    'send error'=>'Bounced Messages,Other',
    'invalid email'=>'Bounced Messages,Invalid Email',
    'link'=>'Click-thru Link',
    'viewed'=>'Viewed Message',
    'removed'=>'Opted Out',
    'lead'=>'Leads Created',
    'contact'=>'Contacts Created',
    'blocked'=>'Suppressed by address or domain',
  ),

  'campainglog_target_type_dom' =>
  array (
    'Contacts' => 'Contacts',
    'Users'=>'Users',
    'Prospects'=>'Targets',
    'Leads'=>'Leads',
  ),

  'merge_operators_dom' => array (
    'like'=>'Contains',
    'exact'=>'Exactly',
    'start'=>'Starts With',
  ),

  'custom_fields_importable_dom' => array (
    'true'=>'Yes',
    'false'=>'No',
    'required'=>'Required',
  ),

  'custom_fields_merge_dup_dom'=> array (
        0=>'Disabled',
        1=>'Enabled',





  ),

  'navigation_paradigms' => array(
        'm'=>'Modules',
        'gm'=>'Grouped Modules',
  ),











































    'projects_priority_options' => array (
        'high'      => 'High',
        'medium'    => 'Medium',
        'low'       => 'Low',
    ),

    'projects_status_options' => array (
        'notstarted'    => 'Not Started',
        'inprogress'    => 'In Progress',
        'completed'     => 'Completed',
    ),

    // strings to pass to Flash charts
    'chart_strings' => array (
        'expandlegend'      => 'Expand Legend',
        'collapselegend'    => 'Collapse Legend',
        'clickfordrilldown' => 'Click for Drilldown',
        'drilldownoptions'  => 'Drill Down Options',
        'detailview'        => 'More Details...',
        'piechart'          => 'Pie Chart',
        'groupchart'        => 'Group Chart',
        'stackedchart'      => 'Stacked Chart',
        'barchart'			=> 'Bar Chart',
        'horizontalbarchart'   => 'Horizontal Bar Chart',
        'linechart'         => 'Line Chart',
        'noData'            => 'Data not available',
        'print'				=> 'Print',
        'pieWedgeName'      => 'sections',
    ),










































































































    'release_status_dom' =>
    array (
        'Active' => 'Active',
        'Inactive' => 'Inactive',
    ),
);

$app_strings = array (
    'LBL_SORT'                              => 'Sort',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER'         => 'Add Server...',

    'LBL_ROUTING_ADD_RULE'                  => 'Add Rule',
    'LBL_ROUTING_ALL'                       => 'All',
    'LBL_ROUTING_ANY'                       => 'Any',
    'LBL_ROUTING_BREAK'                     => '-',
    'LBL_ROUTING_BUTTON_CANCEL'             => 'Cancel',
    'LBL_ROUTING_BUTTON_SAVE'               => 'Save Rule',

    'LBL_ROUTING_ACTIONS_COPY_MAIL'         => 'Copy Mail',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN'       => 'Delete Sugar Object',
    'LBL_ROUTING_ACTIONS_DELETE_FILE'       => 'Delete File',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL'       => 'Delete Email',
    'LBL_ROUTING_ACTIONS_FORWARD'           => 'Forward Email',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED'      => 'Flag Email',
    'LBL_ROUTING_ACTIONS_MARK_READ'         => 'Mark Read',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD'       => 'Mark Unread',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL'         => 'Move Email',
    'LBL_ROUTING_ACTIONS_PEFORM'            => 'Perform the following actions',
    'LBL_ROUTING_ACTIONS_REPLY'             => 'Reply to Email',

    'LBL_ROUTING_CHECK_RULE'                => "An error was detected:\n",
    'LBL_ROUTING_CHECK_RULE_DESC'           => 'Please verify all fields that are marked.',
    'LBL_ROUTING_CONFIRM_DELETE'            => "Are you sure you want to delete this rule?\nThis cannot be undone.",

    'LBL_ROUTING_FLAGGED'                   => 'flag set',
    'LBL_ROUTING_FORM_DESC'                 => 'Saved Rules are immediately active.',
    'LBL_ROUTING_FW'                        => 'FW: ',
    'LBL_ROUTING_LIST_TITLE'                => 'Rules',
    'LBL_ROUTING_MATCH'                     => 'If',
    'LBL_ROUTING_MATCH_2'                   => 'of the following conditions are met:',

    'LBL_ROUTING_MATCH_CC_ADDR'             => 'CC',
    'LBL_ROUTING_MATCH_DESCRIPTION'         => 'Body Content',
    'LBL_ROUTING_MATCH_FROM_ADDR'           => 'From',
    'LBL_ROUTING_MATCH_NAME'                => 'Subject',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH'       => 'High Priority',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL'     => 'Normal Priority',
    'LBL_ROUTING_MATCH_PRIORITY_LOW'        => 'Low Priority',
    'LBL_ROUTING_MATCH_TO_ADDR'             => 'To',
    'LBL_ROUTING_MATCH_TYPE_MATCH'          => 'Contains',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH'      => 'Does not contain',

    'LBL_ROUTING_NAME'                      => 'Rule Name',
    'LBL_ROUTING_NEW_NAME'                  => 'New Rule',
    'LBL_ROUTING_ONE_MOMENT'                => 'One moment please...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS'  => 'Original message follows.',
    'LBL_ROUTING_RE'                        => 'RE: ',
    'LBL_ROUTING_SAVING_RULE'               => 'Saving Rule',
    'LBL_ROUTING_SUB_DESC'                  => 'Checked rules are active. Click name to edit.',
    'LBL_ROUTING_TO'                        => 'to',
    'LBL_ROUTING_TO_ADDRESS'                => 'to address',
    'LBL_ROUTING_WITH_TEMPLATE'             => 'with template',

	'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'You currently have values in your form for the Phone and Address fields. To overwrite these values with the phone/address of the Acccount that you selected, click "OK". To keep the current values, click "Cancel".',

    'LBL_EMAIL_ACCOUNTS_EDIT'               => 'Edit',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS'     => 'Set Gmail Defaults',
    'LBL_EMAIL_ACCOUNTS_NAME'               => 'Name',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND'           => 'Outbound Mail Server',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE'           => 'Mail transfer agent',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ'       => 'Use SMTP Authentication?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS'           => 'SMTP Password',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT'           => 'SMTP Port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER'         => 'SMTP Server',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL'            => 'Use SSL when connecting',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER'           => 'SMTP Username',
    'LBL_EMAIL_ACCOUNTS_TITLE'              => 'Mail Account Management',

    'LBL_EMAIL_ADD'                         => 'Add Address',

    'LBL_EMAIL_ADDRESS_BOOK_ADD'            => 'Add',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST'       => 'New List',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR'     => 'Email Address',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT'=> 'Only Contact editting is supported at this time.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER'         => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME'     => 'First Name',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME'      => 'Last Name',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS'    => 'My Contacts',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS'       => 'My Mailing Lists',
    'LBL_EMAIL_ADDRESS_BOOK_NAME'           => 'Name',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND'      => 'No Addresses Found',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD'   => 'Save & Add to Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH'         => 'Search',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE'   => 'Select Address Book Entries',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE'          => 'Address Book',
    'LBL_EMAIL_REPORTS_TITLE'               => 'Reports',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON'     => '<img src=themes/default/images/icon_email_addressbook.gif align=absmiddle border=0> Address Book',

    'LBL_EMAIL_ADDRESSES'                   => 'Email Address(es)',
    'LBL_EMAIL_ADDRESS_PRIMARY'             => 'Email Address',
    'LBL_EMAIL_ADDRESSES_TITLE'             => 'Email Addresses',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR'            => 'Import to Sugar',
    'LBL_EMAIL_ASSIGNMENT'                  => 'Assignment',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL'        => 'Attach',
    'LBL_EMAIL_ATTACHMENT'                  => 'Attach',
    'LBL_EMAIL_ATTACHMENTS'                 => 'From Local System',
    'LBL_EMAIL_ATTACHMENTS2'                => 'From Sugar Documents',
    'LBL_EMAIL_ATTACHMENTS3'                => 'Template Attachments',
    'LBL_EMAIL_ATTACHMENTS_FILE'            => 'File',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT'        => 'Document',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED'         => 'Embeded',
    'LBL_EMAIL_BCC'                         => 'BCC',
    'LBL_EMAIL_CANCEL'                      => 'Cancel',
    'LBL_EMAIL_CC'                          => 'CC',
    'LBL_EMAIL_CHARSET'                     => 'Character Set',
    'LBL_EMAIL_CHECK'                       => 'Check Mail',
    'LBL_EMAIL_CHECKING_NEW'                => 'Checking for New Email',
    'LBL_EMAIL_CHECKING_DESC'               => 'Checking for New Email. <br><br>If this is the first check for the mail account, it may take some time.',
    'LBL_EMAIL_CLOSE'                       => 'Close',
    'LBL_EMAIL_COFFEE_BREAK'                => 'Checking for New Email. <br><br>Large mail accounts may take a considerable amount of time.',
    'LBL_EMAIL_COMMON'                      => 'Common',

    'LBL_EMAIL_COMPOSE'                     => 'Compose Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS'   => 'Please enter recipient(s) for this email.',
    'LBL_EMAIL_COMPOSE_LINK_TO'             => 'Associate with',
    'LBL_EMAIL_COMPOSE_NO_BODY'             => 'The body of this email is empty.  Send anyway?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT'          => 'This email has no subject.  Send anyway?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL'  => '(no subject)',
    'LBL_EMAIL_COMPOSE_READ'                => 'Read & Compose Email',
    'LBL_EMAIL_COMPOSE_SEND_FROM'           => 'Send From Mail Account',
    'LBL_EMAIL_COMPOSE_OPTIONS'             => 'Options',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS'     => 'Please enter valid email address for To, CC and BCC fields',

    'LBL_EMAIL_CONFIRM_CLOSE'               => 'Discard this email?',
    'LBL_EMAIL_CONFIRM_DELETE'              => 'Remove these entries from your Address Book?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE'    => 'Are you sure you want to delete this signature?',

    'LBL_EMAIL_CREATE_NEW'                  => '--Create On Save--',

    'LBL_EMAIL_DATE_RECEIVED'               => 'Date Received',
    'LBL_EMAIL_ASSIGNED_TO_USER'            =>'Assigned to User',
    'LBL_EMAIL_DATE_TODAY'                  => 'Today',
    'LBL_EMAIL_DATE_YESTERDAY'              => 'Yesterday',
    'LBL_EMAIL_DD_TEXT'                     => 'email(s) selected.',
    'LBL_EMAIL_DEFAULTS'                    => 'Defaults',
    'LBL_EMAIL_DELETE'                      => 'Delete',
    'LBL_EMAIL_DELETE_CONFIRM'              => 'Delete selected messages?',
    'LBL_EMAIL_DELETE_SUCCESS'              => 'Email deleted successfully.',
    'LBL_EMAIL_DELETING_MESSAGE'            => 'Deleting Message',
    'LBL_EMAIL_DETAILS'                     => 'Details',
    'LBL_EMAIL_DISPLAY_MSG'                 => 'Displaying email(s) {0} - {1} of {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG'            => 'Displaying email address(es) {0} - {1} of {2}',

    'LBL_EMAIL_EDIT_CONTACT'                => 'Edit Contact',
    'LBL_EMAIL_EDIT_CONTACT_WARN'           => 'Only the Primary address will be used when working with Contacts.',
    'LBL_EMAIL_EDIT_MAILING_LIST'           => 'Edit Mailing List',

    'LBL_EMAIL_EMPTYING_TRASH'              => 'Emptying Trash',
    'LBL_EMAIL_DELETING_OUTBOUND'           => 'Deleteting outbound server',
    'LBL_EMAIL_CLEARING_CACHE_FILES'        => 'CLearing cache files',
    'LBL_EMAIL_EMPTY_MSG'                   => 'No emails to display.',
    'LBL_EMAIL_EMPTY_ADDR_MSG'              => 'No email addresses to display.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER'      => 'Folder name be unique and not empty. Please try again.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER'   => 'Cannot delete a folder. Either the folder or its children has a mail box associated to it.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE'      => 'Cannot determine the intended folder from context.  Try again.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS'     => 'Please check your settings.',
    'LBL_EMAIL_ERROR_CONTACT_NAME'          => 'Please make sure you enter a last name.',
    'LBL_EMAIL_ERROR_DESC'                  => 'Errors were detected: ',
    'LBL_EMAIL_DELETE_ERROR_DESC'           => 'You do not have access to this area. Contact your site administrator to obtain access.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'      => 'Sugar Folder names must be unique.',
    'LBL_EMAIL_ERROR_EMPTY'                 => 'Please enter some search criteria.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE'         => 'An error has occured',
    'LBL_EMAIL_ERROR_LIST_NAME'             => 'An email list with that name already exists',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED'       => 'Message Removed from Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'  => 'Either message Removed from Server or moved to a different folder',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION'  => 'Connection to the mail server failed. Please contact your Administrator',
    'LBL_EMAIL_ERROR_MOVE'                  => 'Moving email between servers and/or mail accounts is not supported at this time.',
    'LBL_EMAIL_ERROR_MOVE_TITLE'            => 'Move Error',
    'LBL_EMAIL_ERROR_NAME'                  => 'A name is required.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS'          => 'From Address is required.',
    'LBL_EMAIL_ERROR_NO_FILE'               => 'Please provide a file.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP folder renaming is not supported at this time.',
    'LBL_EMAIL_ERROR_SERVER'                => 'A mail server address is required.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT'          => 'The mail account may not have been saved.',
    'LBL_EMAIL_ERROR_TIMEOUT'               => 'An error has occured while communicating with the mail server.',
    'LBL_EMAIL_ERROR_USER'                  => 'A login name is required.',
    'LBL_EMAIL_ERROR_PASSWORD'              => 'A password is required.',
    'LBL_EMAIL_ERROR_PORT'                  => 'A mail server port is required.',
    'LBL_EMAIL_ERROR_PROTOCOL'              => 'A server protocol is required.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER'      => 'Monitored Folder is required.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER'          => 'Trash Folder is required.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'       => 'This information is not available',

    'LBL_EMAIL_FOLDERS'                     => '<img src=themes/default/images/icon_email_folder.gif align=absmiddle border=0> Folders',
    'LBL_EMAIL_FOLDERS_ACTIONS'             => 'Move To',
    'LBL_EMAIL_FOLDERS_ADD'                 => 'Add',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE'    => 'Add New Folder',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER'      => 'Save',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO'         => 'Add this folder to',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME'         => 'This folder cannot be changed',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM'      => 'Are you sure you would like to delete this folder?\nThis process cannot be reversed.\nFolder deletions will cascade to all contained folders.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER'          => 'New Folder Name',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE'       => 'Please select a folder before performing this action.',
    'LBL_EMAIL_FOLDERS_TITLE'               => 'Sugar Folder Management',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER'    => 'Using Group',




    'LBL_EMAIL_FORWARD'                     => 'Forward',
    'LBL_EMAIL_DELIMITER'                   => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS'             => 'Downloaded [[count]] of [[total]] emails',
    'LBL_EMAIL_FOUND'                       => 'Found',
    'LBL_EMAIL_FROM'                        => 'From',
    'LBL_EMAIL_GROUP'                       => 'group',
    'LBL_EMAIL_UPPER_CASE_GROUP'            => 'Group',
    'LBL_EMAIL_HOME_FOLDER'                 => 'Home',
    'LBL_EMAIL_HTML_RTF'                    => 'Send HTML',
    'LBL_EMAIL_IE_DELETE'                   => 'Deleting Mail Account',
    'LBL_EMAIL_IE_DELETE_SIGNATURE'         => 'Deleting signature',
    'LBL_EMAIL_IE_DELETE_CONFIRM'           => 'Are you sure you would like to delete this mail account?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL'        => 'Deletion successful.',
    'LBL_EMAIL_IE_SAVE'                     => 'Saving Mail Account Information',
    'LBL_EMAIL_IMPORTING_EMAIL'             => 'Importing Email',
    'LBL_EMAIL_IMPORT_EMAIL'                => 'Import to Sugar',
    'LBL_EMAIL_IMPORT_SETTINGS'                => 'Import Settings',
    'LBL_EMAIL_INVALID'                     => 'Invalid',





    'LBL_EMAIL_LOADING'                     => 'Loading...',
    'LBL_EMAIL_MARK'                        => 'Mark',
    'LBL_EMAIL_MARK_FLAGGED'                => 'As Flagged',
    'LBL_EMAIL_MARK_READ'                   => 'As Read',
    'LBL_EMAIL_MARK_UNFLAGGED'              => 'As Unflagged',
    'LBL_EMAIL_MARK_UNREAD'                 => 'As Unread',
    'LBL_EMAIL_ASSIGN_TO'                   => 'Assign To',

    'LBL_EMAIL_MENU_ADD_FOLDER'             => 'Create Folder',
    'LBL_EMAIL_MENU_COMPOSE'                => 'Compose to',
    'LBL_EMAIL_MENU_DELETE_FOLDER'          => 'Delete Folder',
    'LBL_EMAIL_MENU_EDIT'                   => 'Edit',
    'LBL_EMAIL_MENU_EMPTY_TRASH'            => 'Empty Trash',
    'LBL_EMAIL_MENU_SYNCHRONIZE'            => 'Synchronize',
    'LBL_EMAIL_MENU_CLEAR_CACHE'            => 'Clear cache files',
    'LBL_EMAIL_MENU_REMOVE'                 => 'Remove',
    'LBL_EMAIL_MENU_RENAME'                 => 'Rename',
    'LBL_EMAIL_MENU_RENAME_FOLDER'          => 'Rename Folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER'        => 'Renaming Folder',
    'LBL_EMAIL_MENU_MAKE_SELECTION'         => 'Please make a selection before trying this operation.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER'        => 'Create a Folder (remote or in Sugar)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE'           => 'Archive these email(s) to SugarCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST'   => 'Email selected Mailing Lists',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE'   => 'Email this Contact',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE'    => 'Remove a Contact',
    'LBL_EMAIL_MENU_HELP_DELETE'            => 'Delete these email(s)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER'     => 'Delete a Folder (remote or in Sugar)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT'      => 'Edit a Contact',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST'         => 'Edit a Mailing List',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH'       => 'Empties all Trash folders for your mail accounts',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED'      => 'Mark these email(s) flagged',
    'LBL_EMAIL_MENU_HELP_MARK_READ'         => 'Mark these email(s) read',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED'    => 'Mark these email(s) unflagged',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD'       => 'Mark these email(s) unread',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST'       => 'Removes Mailing Lists',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER'     => 'Rename a Folder (remote or in Sugar)',
    'LBL_EMAIL_MENU_HELP_REPLY'             => 'Reply to these email(s)',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL'         => 'Reply to all recipients for these email(s)',

    'LBL_EMAIL_MESSAGES'                    => 'messages',

    'LBL_EMAIL_ML_NAME'                     => 'List Name',
    'LBL_EMAIL_ML_ADDRESSES_1'              => 'Selected List Addresses',
    'LBL_EMAIL_ML_ADDRESSES_2'              => 'Available List Addresses',

    'LBL_EMAIL_MULTISELECT'                 => '<b>Ctrl-Click</b> to select multiples<br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO'                          => 'No',

    'LBL_EMAIL_OK'                          => 'OK',
    'LBL_EMAIL_ONE_MOMENT'                  => 'One moment please...',
    'LBL_EMAIL_OPEN_ALL'                    => 'Open Multiple Messages',
    'LBL_EMAIL_OPTIONS'                     => 'Options',
    'LBL_EMAIL_OPT_OUT'                     => 'Opted Out',
    'LBL_EMAIL_PAGE_AFTER'                  => 'of {0}',
    'LBL_EMAIL_PAGE_BEFORE'                 => 'Page',
    'LBL_EMAIL_PERFORMING_TASK'             => 'Performing Task',
    'LBL_EMAIL_PRIMARY'                     => 'Primary',
    'LBL_EMAIL_PRINT'                       => 'Print',

    'LBL_EMAIL_QC_BUGS'                     => 'Bug',
    'LBL_EMAIL_QC_CASES'                    => 'Case',
    'LBL_EMAIL_QC_LEADS'                    => 'Lead',
    'LBL_EMAIL_QC_CONTACTS'                 => 'Contact',
    'LBL_EMAIL_QC_TASKS'                    => 'Task',
    'LBL_EMAIL_QUICK_CREATE'                => 'Quick Create',

    'LBL_EMAIL_REBUILDING_FOLDERS'          => 'Rebuilding Folders',
    'LBL_EMAIL_RELATE_TO'                   => 'Relate',
    'LBL_EMAIL_VIEW_RELATIONSHIPS'          => 'View Relationships',
    'LBL_EMAIL_RECORD'          			=> 'Email Record',
    'LBL_EMAIL_REMOVE'                      => 'Remove',
    'LBL_EMAIL_REPLY'                       => 'Reply',
    'LBL_EMAIL_REPLY_ALL'                   => 'Reply All',
    'LBL_EMAIL_REPLY_TO'                    => 'Reply-to',
    'LBL_EMAIL_RETRIEVING_LIST'             => 'Retrieving Email List',
    'LBL_EMAIL_RETRIEVING_MESSAGE'          => 'Retrieving Message',
    'LBL_EMAIL_RETRIEVING_RECORD'           => 'Retrieving Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD'           => 'Please select only one email record',
    'LBL_EMAIL_RETURN_TO_VIEW'              => 'Return to Previous Module?',
    'LBL_EMAIL_REVERT'                      => 'Revert',
    'LBL_EMAIL_RELATE_EMAIL'                => 'Relate Email',

    'LBL_EMAIL_RULES_TITLE'                 => 'Rule Management',

    'LBL_EMAIL_SAVE'                        => 'Save',
    'LBL_EMAIL_SAVE_AND_REPLY'              => 'Save & Reply',
    'LBL_EMAIL_SAVE_DRAFT'                  => 'Save Draft',

    'LBL_EMAIL_SEARCHING'                   => 'Conducting Search',
    'LBL_EMAIL_SEARCH'                      => '<img src=themes/default/images/Search.gif align=absmiddle border=0> Search',
    'LBL_EMAIL_SEARCH_ADVANCED'             => 'Advanced Search',
    'LBL_EMAIL_SEARCH_DATE_FROM'            => 'Date From',
    'LBL_EMAIL_SEARCH_DATE_UNTIL'           => 'Date Until',
    'LBL_EMAIL_SEARCH_FULL_TEXT'            => 'Body Text',
    'LBL_EMAIL_SEARCH_NO_RESULTS'           => 'No results match your search criteria.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE'        => 'Search Results',
    'LBL_EMAIL_SEARCH_TITLE'                => 'Simple Search',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS'       => 'Search email account',

    'LBL_EMAIL_SELECT'                      => 'Select',

    'LBL_EMAIL_SEND'                        => 'Send',
    'LBL_EMAIL_SENDING_EMAIL'               => 'Sending Email',

    'LBL_EMAIL_SETTINGS'                    => 'Settings',
    'LBL_EMAIL_SETTINGS_2_ROWS'             => '2 Rows',
    'LBL_EMAIL_SETTINGS_3_COLS'             => '3 Columns',
    'LBL_EMAIL_SETTINGS_LAYOUT'             => 'Layout Style',
    'LBL_EMAIL_SETTINGS_ACCOUNTS'           => 'Mail Accounts',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT'        => 'Clear Form',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT'        => 'Import Email Upon View',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL'     => 'Check for New Mail',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE'     => 'Use Preview Pane',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP'      => 'Use Popup Window',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM'        => 'Number emails per page',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT'       => 'Edit Mail Account',
    'LBL_EMAIL_SETTINGS_FOLDERS'            => 'Folders',
    'LBL_EMAIL_SETTINGS_FROM_ADDR'          => 'From Address',
    'LBL_EMAIL_SETTINGS_FROM_NAME'          => 'From Name',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN'        => 'Full Screen',
    'LBL_EMAIL_SETTINGS_FULL_SYNC'          => 'Synchronize All Mail Accounts',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC'     => 'Performing this action will synchronize mail accounts and their contents.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN'     => 'Perform a full synchronization?\nLarge mail accounts may take a few minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP'    => 'Click the Shift key or the Ctrl key to select multiple folders.',
    'LBL_EMAIL_SETTINGS_GENERAL'            => 'General',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS'      => 'Available Group Folders',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE'   => 'Create Group Folders',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Saving Group Folders',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP'   => 'Retrieving Group Folder',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Edit Group Folder',

    'LBL_EMAIL_SETTINGS_NAME'               => 'Name',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH'    => 'These settings may require a page-refresh to activate.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Retrieving Mail Account',
    'LBL_EMAIL_SETTINGS_RULES'              => 'Rules',
    'LBL_EMAIL_SETTINGS_SAVED'              => 'The settings have been saved.\n\nYou must reload the page for the new settings to take effect.',
    'LBL_EMAIL_SETTINGS_SAVE_OUTBOUND'      => 'Copy to Sent Email',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS'      => 'Send Email as Plain Text',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS'    => 'Active Mail Accounts',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST'   => 'Number of Emails per Page',
    'LBL_EMAIL_SETTINGS_TAB_POS'            => 'Place Tabs at Bottom',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT'       => 'Visual Settings',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES'  => 'Preferences',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV'         => 'Show Advanced',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS'       => 'Available User Folders',

    'LBL_EMAIL_SHOW_READ'                   => 'Show All',
    'LBL_EMAIL_SHOW_UNREAD_ONLY'            => 'Show Unread Only',
    'LBL_EMAIL_SIGNATURES'                  => 'Signatures',
    'LBL_EMAIL_SIGNATURE_CREATE'            => 'Create Signature',
    'LBL_EMAIL_SIGNATURE_NAME'              => 'Signature Name',
    'LBL_EMAIL_SIGNATURE_TEXT'              => 'Signature Body',
    'LBL_EMAIL_SPACER_MAIL_SERVER'          => '[ Remote Folders ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER'         => '[ Sugar Folders ]',
    'LBL_EMAIL_SUBJECT'                     => 'Subject',
    'LBL_EMAIL_TO'                     		=> 'To',
    'LBL_EMAIL_SUCCESS'                     => 'Success',
    'LBL_EMAIL_SUGAR_FOLDER'                => 'SugarFolder',



    'LBL_EMAIL_TEMPLATES'                   => 'Templates',
    'LBL_EMAIL_TEXT_FIRST'                  => 'First Page',
    'LBL_EMAIL_TEXT_PREV'                   => 'Previous Page',
    'LBL_EMAIL_TEXT_NEXT'                   => 'Next Page',
    'LBL_EMAIL_TEXT_LAST'                   => 'Last Page',
    'LBL_EMAIL_TEXT_REFRESH'                => 'Refresh',
    'LBL_EMAIL_TO'                          => 'To',
    'LBL_EMAIL_TOGGLE_LIST'                 => 'Toggle List',
    'LBL_EMAIL_VIEW'                        => 'View',
    'LBL_EMAIL_VIEWS'                       => 'Views',
    'LBL_EMAIL_VIEW_HEADERS'                => 'Display Headers',
    'LBL_EMAIL_VIEW_PRINTABLE'              => 'Printable Version',
    'LBL_EMAIL_VIEW_RAW'                    => 'Display Raw Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED'            => 'This feature is unsupported when used with POP3.',
    'LBL_DEFAULT_LINK_TEXT'                 => 'Default link text.',
    'LBL_EMAIL_YES'                         => 'Yes',

    'LBL_EMAIL_CHECK_INTERVAL_DOM'          => array(
        '-1' => "Manually",
        '5' => 'Every 5 minutes',
        '15' => 'Every 15 minutes',
        '30' => 'Every 30 minutes',
        '60' => 'Every hour'
    ),
    'LBL_EMAIL_SETTING_NUM_DOM'             => array(
        '10'    => '10',
        '20'    => '20',
        '50'    => '50'
    ),

    'LBL_EMAIL_MESSAGE_NO'                  => 'Message No',
    'LBL_EMAIL_IMPORT_SUCCESS'              => 'Import Passed',
    'LBL_EMAIL_IMPORT_FAIL'                 => 'Import Failed because either the message is already imported or deleted from server',

    'LBL_LINK_NONE'=> 'None',
    'LBL_LINK_ALL'=> 'All',
    'LBL_LINK_RECORDS'=> 'Records',
    'LBL_LINK_SELECT'=> 'Select',



















    'ERR_CREATING_FIELDS' => 'Error filling in additional detail fields: ',
    'ERR_CREATING_TABLE' => 'Error creating table: ',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'  => "The decimal separator cannot use the same character as the thousands separator.\\n\\n  Please change the values.",
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'ERR_EXPORT_DISABLED' => 'Exports Disabled.',
    'ERR_EXPORT_TYPE' => 'Error exporting ',
    'ERR_INVALID_AMOUNT' => 'Please enter a valid amount.',
    'ERR_INVALID_DATE_FORMAT' => 'The date format must be: ',
    'ERR_INVALID_DATE' => 'Please enter a valid date.',
    'ERR_INVALID_DAY' => 'Please enter a valid day.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'not a valid email address.',
    'ERR_INVALID_FILE_REFERENCE' => 'Invalid File Reference',
    'ERR_INVALID_HOUR' => 'Please enter a valid hour.',
    'ERR_INVALID_MONTH' => 'Please enter a valid month.',
    'ERR_INVALID_TIME' => 'Please enter a valid time.',
    'ERR_INVALID_YEAR' => 'Please enter a valid 4 digit year.',
    'ERR_NEED_ACTIVE_SESSION' => 'An active session is required to export content.',
    'ERR_NO_HEADER_ID' => 'This feature is unavailable in this theme.',
    'ERR_NOT_ADMIN' => "Unauthorized access to administration.",
    'ERR_MISSING_REQUIRED_FIELDS' => 'Missing required field:',
    'ERR_INVALID_VALUE' => 'Invalid Value:',
    'ERR_NO_SUCH_FILE' =>'File does not exist on system',
    'ERR_NO_SINGLE_QUOTE' => 'Cannot use the single quotation mark for ',
    'ERR_NOTHING_SELECTED' =>'Please make a selection before proceeding.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'An opportunity with the name %s already exists.  Please enter another name below.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'An opportunity name was not entered.  Please enter an opportunity name below.',
    'ERR_POTENTIAL_SEGFAULT' => 'A potential Apache segmentation fault was detected.  Please notify your system administrator to confirm this problem and have her/him report it to SugarCRM.',
    'ERR_SELF_REPORTING' => 'User cannot report to him or herself.',
    'ERR_SINGLE_QUOTE'  => 'Using the single quote is not supported for this field.  Please change the value.',
    'ERR_SQS_NO_MATCH_FIELD' => 'No match for field: ',
    'ERR_SQS_NO_MATCH' =>'No Match',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the Meta-Data definition',
    'ERR_EXISTING_PORTAL_USERNAME'=>'Error: The Portal Name is already assigned to another contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Field value is not compatible with precision value',

    'LBL_ACCOUNT'=>'Account',
    'LBL_OLD_ACCOUNT_LINK'=>'Old Account',
    'LBL_ACCOUNTS'=>'Accounts',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activities',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'View Summary',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'View Summary [Alt+H]',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Add [Alt+A]',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_DOCUMENT' => 'Add Document',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Add To Target List',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Add To Target List',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Click to Close',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Close',
    'LBL_ADDITIONAL_DETAILS' => 'Additional Details',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => 'Alt+',
    'LBL_ARCHIVE' => 'Archive',
    'LBL_ASSIGNED_TO_USER'=>'Assigned to User',
    'LBL_ASSIGNED_TO' => 'Assigned to:',
    'LBL_BACK' => 'Back',
    'LBL_BILL_TO_ACCOUNT'=>'Bill to Account',
    'LBL_BILL_TO_CONTACT'=>'Bill to Contact',
    'LBL_BILLING_ADDRESS'=>'Billing Address',




    'LBL_BROWSER_TITLE' => 'SugarCRM - Commercial Open Source CRM',

    'LBL_BUGS'=>'Bugs',
    'LBL_BY' => 'by',
    'LBL_CALLS'=>'Calls',
    'LBL_CALL'=>'Call',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send Queued Campaign Emails',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Cancel',
    'LBL_CANCEL_BUTTON_TITLE' => 'Cancel [Alt+X]',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Submit',
    'LBL_CASE'=>'Case',
    'LBL_CASES'=>'Cases',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_BUTTON_LABEL' => 'Change',
    'LBL_CHANGE_BUTTON_TITLE' => 'Change [Alt+G]',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Check All',
    'LBL_CITY' => 'City',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Clear',
    'LBL_CLEAR_BUTTON_TITLE' => 'Clear [Alt+C]',
    'LBL_CLEARALL' => 'Clear All',
    'LBL_CLOSE_BUTTON_TITLE' =>'Close',
    'LBL_CLOSE_BUTTON_KEY'=>'Q',
    'LBL_CLOSE_WINDOW'=>'Close Window',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Close All',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Close All [Alt+I]',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Close and Create New',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Close and Create New',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Compose Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Compose Email [Alt+L]',
    'LBL_SEARCH_DROPDOWN_YES'=>'Yes',
    'LBL_SEARCH_DROPDOWN_NO'=>'No',
    'LBL_CONTACT_LIST' => 'Contact List',
    'LBL_CONTACT'=>'Contact',
    'LBL_CONTACTS'=>'Contacts',
    'LBL_CONTRACTS'=>'Contracts',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATE_BUTTON_LABEL' => 'Create',
    'LBL_CREATED_BY_USER'=>'Created by User',
    'LBL_CREATED_USER'=>'Created by User',
    'LBL_CREATED_ID' => 'Created By Id',
    'LBL_CREATED' => 'Created by',
    'LBL_CURRENT_USER_FILTER' => 'Only my items:',
    'LBL_CURRENCY'=>'Currency:',
    'LBL_DOCUMENTS'=>'Documents',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'Last Modified:',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Delete',
    'LBL_DELETE_BUTTON_TITLE' => 'Delete [Alt+D]',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_DELETE' => 'Delete',
    'LBL_DELETED'=>'Deleted',
    'LBL_DIRECT_REPORTS'=>'Direct Reports',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Done',
    'LBL_DONE_BUTTON_TITLE' => 'Done [Alt+X]',
    'LBL_DST_NEEDS_FIXIN' => 'The application requires a Daylight Saving Time fix to be applied.  Please go to the <a href="index.php?module=Administration&action=DstFix">Repair</a> link in the Admin console and apply the Daylight Saving Time fix.',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplicate',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplicate [Alt+U]',
    'LBL_DUPLICATE_BUTTON' => 'Duplicate',
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Edit',
    'LBL_EDIT_BUTTON_TITLE' => 'Edit [Alt+E]',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Edit As New',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Edit As New',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'View',
    'LBL_VIEW_BUTTON_TITLE' => 'View [Alt+V]',
    'LBL_VIEW_BUTTON' => 'View',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email as PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email as PDF [Alt+M]',
    'LBL_EMAILS'=>'Emails',
    'LBL_EMPLOYEES' => 'Employees',
    'LBL_ENTER_DATE' => 'Enter Date',
    'LBL_EXPORT_ALL' => 'Export All',
    'LBL_EXPORT' => 'Export',
    'LBL_GO_BUTTON_LABEL' => 'Go',
    'LBL_HIDE'=>'Hide',
    'LBL_ID'=>'ID',
    'LBL_IMPORT_PROSPECTS'=>'Import Targets',
    'LBL_IMPORT' => 'Import',
    'LBL_IMPORT_STARTED' => 'Import Started: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Must specify a custom delimiter.',
    'LBL_LAST_VIEWED' => 'Last Viewed',
    'LBL_TODAYS_ACTIVITIES' => 'Today\'s Activities',
    'LBL_LEADS'=>'Leads',
    'LBL_LESS' => 'less',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGNLOG' => 'CampaignLog',
    'LBL_CAMPAIGN_CONTACT'=>'Campaigns',
    'LBL_CAMPAIGN_ID'=>'campaign_id',
    'LBL_SITEMAP'=>'Sitemap',
    'LBL_FOUND_IN_RELEASE'=>'Found In Release',
    'LBL_FIXED_IN_RELEASE'=>'Fixed In Release',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_ASSIGNED_USER' => 'User',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_CONTACT_ROLE' => 'Contact Role',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_OF' => 'of',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Are you sure you want to update the entire list?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Please select at least 1 record to proceed.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Please select at least 2 records to proceed.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Please select less than 10 records to proceed.',
    'LBL_LISTVIEW_ALL' => 'All',
    'LBL_LISTVIEW_NONE' => 'None',
    'LBL_LISTVIEW_OPTION_CURRENT' => 'This Page',
    'LBL_LISTVIEW_OPTION_ENTIRE' => 'All Records',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Selected Records',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selected: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'John',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Doe',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Mr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'Please sign in to access this area.',
    'LBL_LOGOUT' => 'Logout',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Mail Merge',
    'LBL_MASS_UPDATE' => 'Mass Update',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt out Primary Email',
    'LBL_MEETINGS'=>'Meetings',
    'LBL_MEETING'=>'Meeting',
    'LBL_MEMBERS'=>'Members',
    'LBL_MEMBER_OF'=>'Member Of',
    'LBL_MODIFIED_BY_USER'=>'Modified by User',
    'LBL_MODIFIED_USER'=>'Modified by User',
    'LBL_MODIFIED' => 'Modified by',
    'LBL_MODIFIED_NAME'=>'Modified By Name',
    'LBL_MODIFIED_ID'=>'Modified By Id',
    'LBL_MORE' => 'more',
    'LBL_MY_ACCOUNT' => 'My Account',
    'LBL_NAME' => 'Name',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Create',
    'LBL_NEW_BUTTON_TITLE' => 'Create [Alt+N]',
    'LBL_NEXT_BUTTON_LABEL' => 'Next',
    'LBL_NONE' => '--None--',
    'LBL_NOTES'=>'Notes',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Open All',
    'LBL_OPENALL_BUTTON_TITLE' => 'Open All [Alt+O]',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Open To: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Open To: [Alt+T]',
    'LBL_OPPORTUNITIES'=>'Opportunities',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name',
    'LBL_OPPORTUNITY'=>'Opportunity',
    'LBL_OR' => 'OR',
    'LBL_LOWER_OR' => 'or',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Phase',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_PRODUCT_BUNDLES'=>'Product Bundles',
    'LBL_PRODUCT_BUNDLES'=>'Product Bundles',
    'LBL_PRODUCTS'=>'Products',
    'LBL_PROJECT_TASKS'=>'Project Tasks',
    'LBL_PROJECTS'=>'Projects',
    'LBL_PROJECTS'=>'Projects',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Create Opportunity from Quote',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Create Opportunity from Quote [Alt+O]',
    'LBL_QUOTES_SHIP_TO'=>'Quotes Ship to',
    'LBL_QUOTES'=>'Quotes',
    'LBL_QUOTES_OBSOLETE'=>'Quotes(Obsolete)',
    'LBL_RELATED' => 'Related',
    'LBL_RELATED_INFORMATION' => 'Related Information',
    'LBL_RELATED_RECORDS' => 'Related Records',
    'LBL_REMOVE' => 'Remove',
    'LBL_REPORTS_TO' => 'Reports To',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Save',
    'LBL_SAVE_BUTTON_TITLE' => 'Save [Alt+S]',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Save As',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Save As [Alt+A]',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Full Form',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Full Form [Alt+F]',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Save & Create New',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Save & Create New [Alt+V]',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Search',
    'LBL_SEARCH_BUTTON_TITLE' => 'Search [Alt+Q]',
    'LBL_SEARCH' => 'Search',
    'LBL_SEE_ALL' => 'See All',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Select',
    'LBL_SELECT_BUTTON_TITLE' => 'Select [Alt+T]',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Browse Documents',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Browse Documents [Alt+B]',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Select Contact',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Select Contact [Alt+T]',
    'LBL_GRID_SELECTED_FILE' => 'selected file',
    'LBL_GRID_SELECTED_FILES' => 'selected files',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Select from Reports',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Select Reports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Select User',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Select User [Alt+U]',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Resources used to construct this page (queries, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'seconds.',
    'LBL_SERVER_RESPONSE_TIME' => 'Server response time:',
    'LBL_SHIP_TO_ACCOUNT'=>'Ship to Account',
    'LBL_SHIP_TO_CONTACT'=>'Ship to Contact',
    'LBL_SHIPPING_ADDRESS'=>'Shipping Address',
    'LBL_SHORTCUTS' => 'Shortcuts',
    'LBL_SHOW'=>'Show',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'State:',
    'LBL_STATUS_UPDATED'=>'Your Status for this event has been updated!',
    'LBL_STATUS'=>'Status:',
    'LBL_SUBJECT' => 'Subject',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */
    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2009 SugarCRM Inc. The Program is provided AS IS, without warranty.  Licensed under <a href="LICENSE.txt" target="_blank" class="copyRightLink">GPLv3</a>.',



    'LBL_SYNC' => 'Sync',
    'LBL_SYNC' => 'Sync',
    'LBL_TABGROUP_ALL' => 'All',
    'LBL_TABGROUP_ACTIVITIES' => 'Activities',
    'LBL_TABGROUP_COLLABORATION' => 'Collaboration',
    'LBL_TABGROUP_HOME' => 'Home',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_MY_PORTALS' => 'My Portals',
    'LBL_TABGROUP_OTHER' => 'Other',
    'LBL_TABGROUP_REPORTS' => 'Reports',
    'LBL_TABGROUP_SALES' => 'Sales',
    'LBL_TABGROUP_SUPPORT' => 'Support',
    'LBL_TABGROUP_TOOLS' => 'Tools',



    'LBL_TASKS'=>'Tasks',
    'LBL_TEAMS_LINK'=>'Team',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archive Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive Email [Alt+K]',
    'LBL_UNAUTH_ADMIN' => 'Unauthorized access to administration',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Undelete',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Undelete [Alt+D]',
    'LBL_UNDELETE_BUTTON' => 'Undelete',
    'LBL_UNDELETE' => 'Undelete',
    'LBL_UNSYNC' => 'Unsync',
    'LBL_UPDATE' => 'Update',
    'LBL_USER_LIST' => 'User List',
    'LBL_USERS_SYNC'=>'Users Sync',
    'LBL_USERS'=>'Users',
    'LBL_VERIFY_EMAIL_ADDRESS'=>'Checking for existing email entry...',
    'LBL_VERIFY_PORTAL_NAME'=>'Checking for existing portal name...',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Print as PDF',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Print as PDF [Alt+P]',

    'LNK_ABOUT' => 'About',
    'LNK_ADVANCED_SEARCH' => 'Advanced Search',
    'LNK_BASIC_SEARCH' => 'Basic Search',
    'LNK_SAVED_VIEWS' => 'Saved Search & Layout',
    'LNK_DELETE_ALL' => 'del all',
    'LNK_DELETE' => 'del',
    'LNK_EDIT' => 'edit',
    'LNK_GET_LATEST'=>'Get latest',
    'LNK_GET_LATEST_TOOLTIP'=>'Replace with latest version',
    'LNK_HELP' => 'Help',
    'LNK_LIST_END' => 'End',
    'LNK_LIST_NEXT' => 'Next',
    'LNK_LIST_PREVIOUS' => 'Previous',
    'LNK_LIST_RETURN' => 'Return to List',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED'=>'Sign',
    'LNK_LOAD_SIGNED_TOOLTIP'=>'Replace with signed document',
    'LNK_PRINT' => 'Print',
    'LNK_REMOVE' => 'rem',
    'LNK_RESUME' => 'Resume',
    'LNK_VIEW_CHANGE_LOG' => 'View Change Log',


    'NTC_CLICK_BACK' => 'Please click the browser back button and fix the error.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Are you sure you want to delete selected record(s)?',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Are you sure you want to delete the ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Are you sure you want to update the ',
    'NTC_DELETE_SELECTED_RECORDS' =>' selected record(s)?',
    'NTC_LOGIN_MESSAGE' => 'Please enter your user name and password:',
    'NTC_NO_ITEMS_DISPLAY' => 'none',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this relationship?',
    'NTC_REQUIRED' => 'Indicates required field',
    'NTC_SUPPORT_SUGARCRM' => 'Support the SugarCRM open source project with a donation through PayPal - it\'s fast, free and secure!',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Welcome',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'LOGIN_LOGO_ERROR'=> 'Please replace the SugarCRM logos.',
    'ERROR_FULLY_EXPIRED'=> "Your company's license for SugarCRM has expired for more than 30 days and needs to be brought up to date. Only admins may login.",
    'ERROR_LICENSE_EXPIRED'=> "Your company's license for SugarCRM needs to be updated. Only admins may login",
    'ERROR_LICENSE_VALIDATION'=> "Your company's license for SugarCRM needs to be validated. Only admins may login",
    'WARN_LICENSE_SEATS'=>  "Warning: The number of active users is already the maximum number of licenses allowed.",
    'WARN_ONLY_ADMINS'=> "Only admins may log in.",    
    'ERROR_NO_RECORD' => 'Error retrieving record.  This record may be deleted or you may not be authorized to view it.',
    'ERROR_TYPE_NOT_VALID' => 'Error. This type is not valid.',
    'LBL_DUP_MERGE'=>'Find Duplicates',
    'LBL_MANAGE_SUBSCRIPTIONS'=>'Manage Subscriptions',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Manage Subscriptions for ',
    'LBL_SUBSCRIBE'=>'Subscribe',
    'LBL_UNSUBSCRIBE'=>'Unsubscribe',
    // Ajax status strings
    'LBL_LOADING' => 'Loading ...',
    'LBL_SEARCHING' => 'Searching...',
    'LBL_SAVING_LAYOUT' => 'Saving Layout ...',
    'LBL_SAVED_LAYOUT' => 'Layout has been saved.',
    'LBL_SAVED' => 'Saved',
    'LBL_SAVING' => 'Saving',
    'LBL_FAILED' => 'Failed!',
    'LBL_DISPLAY_COLUMNS' => 'Display Columns',
    'LBL_HIDE_COLUMNS' => 'Hide Columns',
    'LBL_SEARCH_CRITERIA' => 'Search Criteria',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST'=>'Processing..',
    'LBL_REQUEST_PROCESSED'=>'Done',





    'LBL_MERGE_DUPLICATES'  => 'Merge Duplicates',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Saved Searches',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Perform a search using the search form above',
    'LBL_DETAILVIEW'=>'Detail View',
    'LBL_LISTVIEW'=>'List View',
    'LBL_EDITVIEW'=>'Edit View',
    'LBL_SEARCHFORM'=>'Search Form',
    'LBL_SAVED_SEARCH_ERROR' => 'Please provide a name for this view.',
    'LBL_DISPLAY_LOG' => 'Display Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Your session is about to timeout in 2 minutes. Please save your work.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'Your session has timed out.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Meeting',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Call',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Time: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Location: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Description: ',
    'MSG_JS_ALERT_MTG_REMINDER_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Add to My Favorites',
    'LBL_MARK_AS_FAVORITES' => 'Mark as Favorite',
    'LBL_CREATE_CONTACT' => 'Create Contact',
    'LBL_CREATE_CASE' => 'Create Case',
    'LBL_CREATE_NOTE' => 'Create Note',
    'LBL_CREATE_OPPORTUNITY' => 'Create Opportunity',
    'LBL_SCHEDULE_CALL' => 'Schedule Call',
    'LBL_SCHEDULE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_TASK' => 'Create Task',
    'LBL_REMOVE_FROM_FAVORITES' => 'Remove From My Favorites',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generate Form',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Save Web To Lead Form',

    'LBL_PLEASE_SELECT' => 'Please Select',
    'LBL_REDIRECT_URL'=>'Redirect URL',
    'LBL_RELATED_CAMPAIGN' =>'Related campaign',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Add All Fields',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Remove All Fields',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Only image type attachment can be embedded',
    'LBL_REMOVE' => 'Remove',
    'LBL_TRAINING' => 'Training',
    'ERR_DATABASE_CONN_DROPPED'=>'Error executing a query. Possibly, your database dropped the connection. Please refresh this page, you may need to restart you web server.',
    'ERR_MSSQL_DB_CONTEXT' =>'Changed database context to',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Warning: field [[field]] does not have a mapped entry in [moduleDir] vardefs.php file',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: File [[file]] is missing.  Unable to create because no corresponding HTML file was found.',
	'ERR_CANNOT_FIND_MODULE' => 'Error: Module [module] does not exist.',
	'LBL_ALT_ADDRESS' => 'Other Address:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Missing index in displayParams Array for: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'My Items Only',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Creating New Page ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You may add new content with the Add Sugar Dashlets menu option.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Are you sure you want to delete this page?',
    'LBL_SAVING_PAGE_TITLE' => 'Saving Page Title ...',
    'LBL_RETRIEVING_PAGE' => 'Retrieving Page ...',
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of Sugar Dashlets your adminstrator has set. Please remove a Sugar Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Adding Sugar Dashlet ...',
    'LBL_ADDED_DASHLET' => 'Sugar Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove the Sugar Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing Sugar Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'Sugar Dashlet Removed',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Add Page',
    'LBL_DELETE_PAGE' => 'Delete Page',
    'LBL_CHANGE_LAYOUT' => 'Change Layout',
    'LBL_RENAME_PAGE' => 'Rename Page',

    'LBL_LOADING_PAGE' => 'Loading page, please wait...',

    'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this Sugar Dashlet.',
    'LBL_ADD_DASHLETS' => 'Add Sugar Dashlets',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    'LBL_NUMBER_OF_COLUMNS' => 'Select the number of columns',
    'LBL_1_COLUMN' => '1 Column',
    'LBL_2_COLUMN' => '2 Column',
    'LBL_3_COLUMN' => '3 Column',
    'LBL_PAGE_NAME' => 'Page Name',

    'LBL_SEARCH_RESULTS' => 'Search Results',
    'LBL_SEARCH_MODULES' => 'Modules',
    'LBL_SEARCH_CHARTS' => 'Charts',
    'LBL_SEARCH_REPORT_CHARTS' => 'Report Charts',
    'LBL_SEARCH_TOOLS' => 'Tools',
    'LBL_SEARCH_HELP_TITLE' => 'Working with Multiselects and Saved Searches',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Close',

    'ERR_BLANK_PAGE_NAME' => 'Please enter a page name.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'No Image',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copy address from left:',
    'LBL_SAVE_AND_CONTINUE' => 'Save and Continue',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol>' ,

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Error: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Error: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitor Id',




    'LBL_USER_ID' => 'User Id',
    'LBL_MODULE_NAME' => 'Module Name',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Item Summary',
    'LBL_ACTION' => 'Action',
    'LBL_SESSION_ID' => 'Session Id',
    'LBL_VISIBLE' => 'Record Visible',
    'LBL_DATE_LAST_ACTION' => 'Date of Last Action',







































    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'is not before',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welcome to Sugar Portal 5.1.0',
    'LBL_PORTAL_WELCOME_INFO' => 'Sugar Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to Sugar that can be deployed within any website.  Stay tuned for more customer self service features like Project Management and Forums in our future releases.',
    'LBL_LIST' => 'List',
    'LBL_CREATE_CASE' => 'Create Case',
    'LBL_CREATE_BUG' => 'Create Bug',
    'LBL_NO_RECORDS_FOUND' => '- 0 Records Found -',

    'DATA_TYPE_DUE' => 'Due:',
  	'DATA_TYPE_START' => 'Start:',
  	'DATA_TYPE_SENT' => 'Sent:',
  	'DATA_TYPE_MODIFIED' => 'Modified:',


    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Count',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'object image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Select Date',

    'LBL_VALIDATE_RANGE' => 'is not within the valid range',

    //jchi #	20776
    'LBL_DROPDOWN_LIST_ALL' => 'All',

    'LBL_OPERATOR_IN_TEXT' => 'is one of the following:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'is not one of the following:',


	//Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
	'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
	'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector.  The service may currently be inaccessible or the configuration settings may be invalid.  Connector error message: ({1}).',
	'LBL_MERGE_CONNECTORS' => 'Get Data',
	'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
	'LBL_REMOVE_MODULE_ENTRY' => 'Are you sure you want to disable connector integration for this module?',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM'=> 'Sorry, you cannot delete the global team. Aborting',
    'LBL_MASSUPDATE_DELETE_PRIVATE_TEAMS'=>'Sorry, you cannot delete private team(s). Aborting',
    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Hello, you either have Flash turned off or an old version of Adobe\'s Flash Player. Please <a href="http://www.adobe.com/go/getflashplayer/">get the latest Flash player</a> or turn on the flash.',

);

$app_list_strings['moduleList']['Library'] = 'Library';
$app_list_strings['library_type'] = array('Books'=>'Book', 'Music'=>'Music', 'DVD'=>'DVD', 'Magazines'=>'Magazines');
$app_list_strings['moduleList']['EmailAddresses'] = 'Email Address';

$app_list_strings['kbdocument_status_dom'] = 'Draft';
$app_list_strings['kbdocument_status_dom'] = array (
    'Draft' => 'Draft',
    'In Review' => 'In Review',
    'Published' => 'Published',
);

$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array (
    'High' => 'High',
    'Medium' => 'Medium',
    'Low' => 'Low',
);


  $app_list_strings['kbdocument_status_dom'] =
    array (
    'Draft' => 'Draft',
    'Expired' => 'Expired',
    'In Review' => 'In Review',
    'Published' => 'Published',
  );

   $app_list_strings['kbadmin_actions_dom'] =
    array (
    ''          => '--Admin Actions--',
    'Create New Tag' => 'Create New Tag',
    'Delete Tag'=>'Delete Tag',
    'Rename Tag'=>'Rename Tag',
    'Move Selected Articles'=>'Move Selected Articles',
    'Apply Tags On Articles'=>'Apply Tags To Articles',
    'Delete Selected Articles'=>'Delete Selected Articles',
  );


  $app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        ''=>'',
        'some' => 'Has Attachments',
        'none' => 'Has None',
        'mime' => 'Specify Mime Type',
        'name' => 'Specify Name',
    );

  $app_list_strings['moduleList']['KBDocuments'] = 'Knowledge Base';
  $app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
  $app_list_strings['kbdocument_viewing_frequency_dom'] =
  array(
    ''=>'',
    'Top_5'  => 'Top 5',
    'Top_10' => 'Top 10',
    'Top_20' => 'Top 20',
    'Bot_5'  => 'Bottom 5',
    'Bot_10' => 'Bottom 10',
    'Bot_20' => 'Bottom 20',
  );

   $app_list_strings['kbdocument_canned_search'] =
    array(
        'all'=>'All',
        'added' => 'Added Last 30 days',
        'pending' => 'Pending my Approval',
        'updated' =>'Updated Last 30 days',
        'faqs' => 'FAQs',
    );
    $app_list_strings['kbdocument_date_filter_options'] =
        array(
    '' => '',
    'on' => 'On',
    'before' => 'Before',
    'after' => 'After',
    'between_dates' => 'Is Between',
    'last_7_days' => 'Last 7 Days',
    'next_7_days' => 'Next 7 Days',
    'last_month' => 'Last Month',
    'this_month' => 'This Month',
    'next_month' => 'Next Month',
    'last_30_days' => 'Last 30 Days',
    'next_30_days' => 'Next 30 Days',
    'last_year' => 'Last Year',
    'this_year' => 'This Year',
    'next_year' => 'Next Year',
    'isnull' => 'Is Null',
        );

    $app_list_strings['countries_dom'] = array(
        '' => '',
        'ABU DHABI' => 'ABU DHABI',
        'ADEN' => 'ADEN',
        'AFGHANISTAN' => 'AFGHANISTAN',
        'ALBANIA' => 'ALBANIA',
        'ALGERIA' => 'ALGERIA',
        'AMERICAN SAMOA' => 'AMERICAN SAMOA',
        'ANDORRA' => 'ANDORRA',
        'ANGOLA' => 'ANGOLA',
        'ANTARCTICA' => 'ANTARCTICA',
        'ANTIGUA' => 'ANTIGUA',
        'ARGENTINA' => 'ARGENTINA',
        'ARMENIA' => 'ARMENIA',
        'ARUBA' => 'ARUBA',
        'AUSTRALIA' => 'AUSTRALIA',
        'AUSTRIA' => 'AUSTRIA',
        'AZERBAIJAN' => 'AZERBAIJAN',
        'BAHAMAS' => 'BAHAMAS',
        'BAHRAIN' => 'BAHRAIN',
        'BANGLADESH' => 'BANGLADESH',
        'BARBADOS' => 'BARBADOS',
        'BELARUS' => 'BELARUS',
        'BELGIUM' => 'BELGIUM',
        'BELIZE' => 'BELIZE',
        'BENIN' => 'BENIN',
        'BERMUDA' => 'BERMUDA',
        'BHUTAN' => 'BHUTAN',
        'BOLIVIA' => 'BOLIVIA',
        'BOSNIA' => 'BOSNIA',
        'BOTSWANA' => 'BOTSWANA',
        'BOUVET ISLAND' => 'BOUVET ISLAND',
        'BRAZIL' => 'BRAZIL',
        'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
        'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
        'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
        'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
        'BRUNEI' => 'BRUNEI',
        'BULGARIA' => 'BULGARIA',
        'BURKINA FASO' => 'BURKINA FASO',
        'BURUNDI' => 'BURUNDI',
        'CAMBODIA' => 'CAMBODIA',
        'CAMEROON' => 'CAMEROON',
        'CANADA' => 'CANADA',
        'CANAL ZONE' => 'CANAL ZONE',
        'CANARY ISLAND' => 'CANARY ISLAND',
        'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
        'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
        'CEVLON' => 'CEVLON',
        'CHAD' => 'CHAD',
        'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
        'CHILE' => 'CHILE',
        'CHINA' => 'CHINA',
        'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
        'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
        'COLOMBIA' => 'COLOMBIA',
        'COMORO ISLANDS' => 'COMORO ISLANDS',
        'CONGO' => 'CONGO',
        'CONGO KINSHASA' => 'CONGO KINSHASA',
        'COOK ISLANDS' => 'COOK ISLANDS',
        'COSTA RICA' => 'COSTA RICA',
        'CROATIA' => 'CROATIA',
        'CUBA' => 'CUBA',
        'CURACAO' => 'CURACAO',
        'CYPRUS' => 'CYPRUS',
        'CZECH REPUBLIC' => 'CZECH REPUBLIC',
        'DAHOMEY' => 'DAHOMEY',
        'DENMARK' => 'DENMARK',
        'DJIBOUTI' => 'DJIBOUTI',
        'DOMINICA' => 'DOMINICA',
        'DOMINICAN REPUBLIC' => 'DOMINICAN REPUBLIC',
        'DUBAI' => 'DUBAI',
        'ECUADOR' => 'ECUADOR',
        'EGYPT' => 'EGYPT',
        'EL SALVADOR' => 'EL SALVADOR',
        'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
        'ESTONIA' => 'ESTONIA',
        'ETHIOPIA' => 'ETHIOPIA',
        'FAEROE ISLANDS' => 'FAEROE ISLANDS',
        'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
        'FIJI' => 'FIJI',
        'FINLAND' => 'FINLAND',
        'FRANCE' => 'FRANCE',
        'FRENCH GUIANA' => 'FRENCH GUIANA',
        'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
        'GABON' => 'GABON',
        'GAMBIA' => 'GAMBIA',
        'GEORGIA' => 'GEORGIA',
        'GERMANY' => 'GERMANY',
        'GHANA' => 'GHANA',
        'GIBRALTAR' => 'GIBRALTAR',
        'GREECE' => 'GREECE',
        'GREENLAND' => 'GREENLAND',
        'GUADELOUPE' => 'GUADELOUPE',
        'GUAM' => 'GUAM',
        'GUATEMALA' => 'GUATEMALA',
        'GUINEA' => 'GUINEA',
        'GUYANA' => 'GUYANA',
        'HAITI' => 'HAITI',
        'HONDURAS' => 'HONDURAS',
        'HONG KONG' => 'HONG KONG',
        'HUNGARY' => 'HUNGARY',
        'ICELAND' => 'ICELAND',
        'IFNI' => 'IFNI',
        'INDIA' => 'INDIA',
        'INDONESIA' => 'INDONESIA',
        'IRAN' => 'IRAN',
        'IRAQ' => 'IRAQ',
        'IRELAND' => 'IRELAND',
        'ISRAEL' => 'ISRAEL',
        'ITALY' => 'ITALY',
        'IVORY COAST' => 'IVORY COAST',
        'JAMAICA' => 'JAMAICA',
        'JAPAN' => 'JAPAN',
        'JORDAN' => 'JORDAN',
        'KAZAKHSTAN' => 'KAZAKHSTAN',
        'KENYA' => 'KENYA',
        'KOREA' => 'KOREA',
        'KOREA, SOUTH' => 'KOREA, SOUTH',
        'KUWAIT' => 'KUWAIT',
        'KYRGYZSTAN' => 'KYRGYZSTAN',
        'LAOS' => 'LAOS',
        'LATVIA' => 'LATVIA',
        'LEBANON' => 'LEBANON',
        'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
        'LESOTHO' => 'LESOTHO',
        'LIBYA' => 'LIBYA',
        'LIECHTENSTEIN' => 'LIECHTENSTEIN',
        'LITHUANIA' => 'LITHUANIA',
        'LUXEMBOURG' => 'LUXEMBOURG',
        'MACAO' => 'MACAO',
        'MACEDONIA' => 'MACEDONIA',
        'MADAGASCAR' => 'MADAGASCAR',
        'MALAWI' => 'MALAWI',
        'MALAYSIA' => 'MALAYSIA',
        'MALDIVES' => 'MALDIVES',
        'MALI' => 'MALI',
        'MALTA' => 'MALTA',
        'MARTINIQUE' => 'MARTINIQUE',
        'MAURITANIA' => 'MAURITANIA',
        'MAURITIUS' => 'MAURITIUS',
        'MELANESIA' => 'MELANESIA',
        'MEXICO' => 'MEXICO',
        'MOLDOVIA' => 'MOLDOVIA',
        'MONACO' => 'MONACO',
        'MONGOLIA' => 'MONGOLIA',
        'MOROCCO' => 'MOROCCO',
        'MOZAMBIQUE' => 'MOZAMBIQUE',
        'MYANAMAR' => 'MYANAMAR',
        'NAMIBIA' => 'NAMIBIA',
        'NEPAL' => 'NEPAL',
        'NETHERLANDS' => 'NETHERLANDS',
        'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
        'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
        'NEW CALADONIA' => 'NEW CALADONIA',
        'NEW HEBRIDES' => 'NEW HEBRIDES',
        'NEW ZEALAND' => 'NEW ZEALAND',
        'NICARAGUA' => 'NICARAGUA',
        'NIGER' => 'NIGER',
        'NIGERIA' => 'NIGERIA',
        'NORFOLK ISLAND' => 'NORFOLK ISLAND',
        'NORWAY' => 'NORWAY',
        'OMAN' => 'OMAN',
        'OTHER' => 'OTHER',
        'PACIFIC ISLAND' => 'PACIFIC ISLAND',
        'PAKISTAN' => 'PAKISTAN',
        'PANAMA' => 'PANAMA',
        'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
        'PARAGUAY' => 'PARAGUAY',
        'PERU' => 'PERU',
        'PHILIPPINES' => 'PHILIPPINES',
        'POLAND' => 'POLAND',
        'PORTUGAL' => 'PORTUGAL',
        'PORTUGUESE TIMOR' => 'PORTUGUESE TIMOR',
        'PUERTO RICO' => 'PUERTO RICO',
        'QATAR' => 'QATAR',
        'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
        'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
        'REUNION' => 'REUNION',
        'ROMANIA' => 'ROMANIA',
        'RUSSIA' => 'RUSSIA',
        'RWANDA' => 'RWANDA',
        'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
        'SABAH' => 'SABAH',
        'SAN MARINO' => 'SAN MARINO',
        'SAUDI ARABIA' => 'SAUDI ARABIA',
        'SENEGAL' => 'SENEGAL',
        'SERBIA' => 'SERBIA',
        'SEYCHELLES' => 'SEYCHELLES',
        'SIERRA LEONE' => 'SIERRA LEONE',
        'SINGAPORE' => 'SINGAPORE',
        'SLOVAKIA' => 'SLOVAKIA',
        'SLOVENIA' => 'SLOVENIA',
        'SOMALILIAND' => 'SOMALILIAND',
        'SOUTH AFRICA' => 'SOUTH AFRICA',
        'SOUTH YEMEN' => 'SOUTH YEMEN',
        'SPAIN' => 'SPAIN',
        'SPANISH SAHARA' => 'SPANISH SAHARA',
        'SRI LANKA' => 'SRI LANKA',
        'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
        'ST. LUCIA' => 'ST. LUCIA',
        'SUDAN' => 'SUDAN',
        'SURINAM' => 'SURINAM',
        'SW AFRICA' => 'SW AFRICA',
        'SWAZILAND' => 'SWAZILAND',
        'SWEDEN' => 'SWEDEN',
        'SWITZERLAND' => 'SWITZERLAND',
        'SYRIA' => 'SYRIA',
        'TAIWAN' => 'TAIWAN',
        'TAJIKISTAN' => 'TAJIKISTAN',
        'TANZANIA' => 'TANZANIA',
        'THAILAND' => 'THAILAND',
        'TONGA' => 'TONGA',
        'TRINIDAD' => 'TRINIDAD',
        'TUNISIA' => 'TUNISIA',
        'TURKEY' => 'TURKEY',
        'UGANDA' => 'UGANDA',
        'UKRAINE' => 'UKRAINE',
        'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
        'UNITED KINGDOM' => 'UNITED KINGDOM',
        'UPPER VOLTA' => 'UPPER VOLTA',
        'URUGUAY' => 'URUGUAY',
        'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
        'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
        'USA' => 'USA',
        'UZBEKISTAN' => 'UZBEKISTAN',
        'VANUATU' => 'VANUATU',
        'VATICAN CITY' => 'VATICAN CITY',
        'VENEZUELA' => 'VENEZUELA',
        'VIETNAM' => 'VIETNAM',
        'WAKE ISLAND' => 'WAKE ISLAND',
        'WEST INDIES' => 'WEST INDIES',
        'WESTERN SAHARA' => 'WESTERN SAHARA',
        'YEMEN' => 'YEMEN',
        'ZAIRE' => 'ZAIRE',
        'ZAMBIA' => 'ZAMBIA',
        'ZIMBABWE' => 'ZIMBABWE',
    );

  $app_list_strings['charset_dom'] = array(
    'BIG-5'     => 'BIG-5 (Taiwan and Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251'    => 'CP1251 (MS Cyrillic)',
    'CP1252'    => 'CP1252 (MS Western European & US)',
    'EUC-CN'    => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP'    => 'EUC-JP (Unix Japanese)',
    'EUC-KR'    => 'EUC-KR (Korean)',
    'EUC-TW'    => 'EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1'  => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-2'  => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3'  => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4'  => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5'  => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6'  => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7'  => 'ISO-8859-7 (Greek)',
    'ISO-8859-8'  => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9'  => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R'    => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U'    => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS'      => 'SJIS (MS Japanese)',
    'UTF-8'     => 'UTF-8',
  );

  $app_list_strings['timezone_dom'] = array(

      'Africa/Algiers' => 'Africa/Algiers',
  'Africa/Luanda' => 'Africa/Luanda',
  'Africa/Porto-Novo' => 'Africa/Porto-Novo',
  'Africa/Gaborone' => 'Africa/Gaborone',
  'Africa/Ouagadougou' => 'Africa/Ouagadougou',
  'Africa/Bujumbura' => 'Africa/Bujumbura',
  'Africa/Douala' => 'Africa/Douala',
  'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
  'Africa/Bangui' => 'Africa/Bangui',
  'Africa/Ndjamena' => 'Africa/Ndjamena',
  'Indian/Comoro' => 'Indian/Comoro',
  'Africa/Kinshasa' => 'Africa/Kinshasa',
  'Africa/Lubumbashi' => 'Africa/Lubumbashi',
  'Africa/Brazzaville' => 'Africa/Brazzaville',
  'Africa/Abidjan' => 'Africa/Abidjan',
  'Africa/Djibouti' => 'Africa/Djibouti',
  'Africa/Cairo' => 'Africa/Cairo',
  'Africa/Malabo' => 'Africa/Malabo',
  'Africa/Asmera' => 'Africa/Asmera',
  'Africa/Addis_Ababa' => 'Africa/Addis_Ababa',
  'Africa/Libreville' => 'Africa/Libreville',
  'Africa/Banjul' => 'Africa/Banjul',
  'Africa/Accra' => 'Africa/Accra',
  'Africa/Conakry' => 'Africa/Conakry',
  'Africa/Bissau' => 'Africa/Bissau',
  'Africa/Nairobi' => 'Africa/Nairobi',
  'Africa/Maseru' => 'Africa/Maseru',
  'Africa/Monrovia' => 'Africa/Monrovia',
  'Africa/Tripoli' => 'Africa/Tripoli',
  'Indian/Antananarivo' => 'Indian/Antananarivo',
  'Africa/Blantyre' => 'Africa/Blantyre',
  'Africa/Bamako' => 'Africa/Bamako',
  'Africa/Nouakchott' => 'Africa/Nouakchott',
  'Indian/Mauritius' => 'Indian/Mauritius',
  'Indian/Mayotte' => 'Indian/Mayotte',
  'Africa/Casablanca' => 'Africa/Casablanca',
  'Africa/El_Aaiun' => 'Africa/El_Aaiun',
  'Africa/Maputo' => 'Africa/Maputo',
  'Africa/Windhoek' => 'Africa/Windhoek',
  'Africa/Niamey' => 'Africa/Niamey',
  'Africa/Lagos' => 'Africa/Lagos',
  'Indian/Reunion' => 'Indian/Reunion',
  'Africa/Kigali' => 'Africa/Kigali',
  'Atlantic/St_Helena' => 'Atlantic/St_Helena',
  'Africa/Sao_Tome' => 'Africa/Sao_Tome',
  'Africa/Dakar' => 'Africa/Dakar',
  'Indian/Mahe' => 'Indian/Mahe',
  'Africa/Freetown' => 'Africa/Freetown',
  'Africa/Mogadishu' => 'Africa/Mogadishu',
  'Africa/Johannesburg' => 'Africa/Johannesburg',
  'Africa/Khartoum' => 'Africa/Khartoum',
  'Africa/Mbabane' => 'Africa/Mbabane',
  'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam',
  'Africa/Lome' => 'Africa/Lome',
  'Africa/Tunis' => 'Africa/Tunis',
  'Africa/Kampala' => 'Africa/Kampala',
  'Africa/Lusaka' => 'Africa/Lusaka',
  'Africa/Harare' => 'Africa/Harare',
  'Antarctica/Casey' => 'Antarctica/Casey',
  'Antarctica/Davis' => 'Antarctica/Davis',
  'Antarctica/Mawson' => 'Antarctica/Mawson',
  'Indian/Kerguelen' => 'Indian/Kerguelen',
  'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
  'Antarctica/Syowa' => 'Antarctica/Syowa',
  'Antarctica/Vostok' => 'Antarctica/Vostok',
  'Antarctica/Rothera' => 'Antarctica/Rothera',
  'Antarctica/Palmer' => 'Antarctica/Palmer',
  'Antarctica/McMurdo' => 'Antarctica/McMurdo',
  'Asia/Kabul' => 'Asia/Kabul',
  'Asia/Yerevan' => 'Asia/Yerevan',
  'Asia/Baku' => 'Asia/Baku',
  'Asia/Bahrain' => 'Asia/Bahrain',
  'Asia/Dhaka' => 'Asia/Dhaka',
  'Asia/Thimphu' => 'Asia/Thimphu',
  'Indian/Chagos' => 'Indian/Chagos',
  'Asia/Brunei' => 'Asia/Brunei',
  'Asia/Rangoon' => 'Asia/Rangoon',
  'Asia/Phnom_Penh' => 'Asia/Phnom_Penh',
  'Asia/Harbin' => 'Asia/Harbin',
  'Asia/Shanghai' => 'Asia/Shanghai',
  'Asia/Chongqing' => 'Asia/Chongqing',
  'Asia/Urumqi' => 'Asia/Urumqi',
  'Asia/Kashgar' => 'Asia/Kashgar',
  'Asia/Hong_Kong' => 'Asia/Hong_Kong',
  'Asia/Taipei' => 'Asia/Taipei',
  'Asia/Macau' => 'Asia/Macau',
  'Asia/Nicosia' => 'Asia/Nicosia',
  'Asia/Tbilisi' => 'Asia/Tbilisi',
  'Asia/Dili' => 'Asia/Dili',
  'Asia/Calcutta' => 'Asia/Calcutta',
  'Asia/Jakarta' => 'Asia/Jakarta',
  'Asia/Pontianak' => 'Asia/Pontianak',
  'Asia/Makassar' => 'Asia/Makassar',
  'Asia/Jayapura' => 'Asia/Jayapura',
  'Asia/Tehran' => 'Asia/Tehran',
  'Asia/Baghdad' => 'Asia/Baghdad',
  'Asia/Jerusalem' => 'Asia/Jerusalem',
  'Asia/Tokyo' => 'Asia/Tokyo',
  'Asia/Amman' => 'Asia/Amman',
  'Asia/Almaty' => 'Asia/Almaty',
  'Asia/Qyzylorda' => 'Asia/Qyzylorda',
  'Asia/Aqtobe' => 'Asia/Aqtobe',
  'Asia/Aqtau' => 'Asia/Aqtau',
  'Asia/Oral' => 'Asia/Oral',
  'Asia/Bishkek' => 'Asia/Bishkek',
  'Asia/Seoul' => 'Asia/Seoul',
  'Asia/Pyongyang' => 'Asia/Pyongyang',
  'Asia/Kuwait' => 'Asia/Kuwait',
  'Asia/Vientiane' => 'Asia/Vientiane',
  'Asia/Beirut' => 'Asia/Beirut',
  'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur',
  'Asia/Kuching' => 'Asia/Kuching',
  'Indian/Maldives' => 'Indian/Maldives',
  'Asia/Hovd' => 'Asia/Hovd',
  'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
  'Asia/Choibalsan' => 'Asia/Choibalsan',
  'Asia/Katmandu' => 'Asia/Katmandu',
  'Asia/Muscat' => 'Asia/Muscat',
  'Asia/Karachi' => 'Asia/Karachi',
  'Asia/Gaza' => 'Asia/Gaza',
  'Asia/Manila' => 'Asia/Manila',
  'Asia/Qatar' => 'Asia/Qatar',
  'Asia/Riyadh' => 'Asia/Riyadh',
  'Asia/Singapore' => 'Asia/Singapore',
  'Asia/Colombo' => 'Asia/Colombo',
  'Asia/Damascus' => 'Asia/Damascus',
  'Asia/Dushanbe' => 'Asia/Dushanbe',
  'Asia/Bangkok' => 'Asia/Bangkok',
  'Asia/Ashgabat' => 'Asia/Ashgabat',
  'Asia/Dubai' => 'Asia/Dubai',
  'Asia/Samarkand' => 'Asia/Samarkand',
  'Asia/Tashkent' => 'Asia/Tashkent',
  'Asia/Saigon' => 'Asia/Saigon',
  'Asia/Aden' => 'Asia/Aden',
  'Australia/Darwin' => 'Australia/Darwin',
  'Australia/Perth' => 'Australia/Perth',
  'Australia/Brisbane' => 'Australia/Brisbane',
  'Australia/Lindeman' => 'Australia/Lindeman',
  'Australia/Adelaide' => 'Australia/Adelaide',
  'Australia/Hobart' => 'Australia/Hobart',
  'Australia/Currie' => 'Australia/Currie',
  'Australia/Melbourne' => 'Australia/Melbourne',
  'Australia/Sydney' => 'Australia/Sydney',
  'Australia/Broken_Hill' => 'Australia/Broken_Hill',
  'Indian/Christmas' => 'Indian/Christmas',
  'Pacific/Rarotonga' => 'Pacific/Rarotonga',
  'Indian/Cocos' => 'Indian/Cocos',
  'Pacific/Fiji' => 'Pacific/Fiji',
  'Pacific/Gambier' => 'Pacific/Gambier',
  'Pacific/Marquesas' => 'Pacific/Marquesas',
  'Pacific/Tahiti' => 'Pacific/Tahiti',
  'Pacific/Guam' => 'Pacific/Guam',
  'Pacific/Tarawa' => 'Pacific/Tarawa',
  'Pacific/Enderbury' => 'Pacific/Enderbury',
  'Pacific/Kiritimati' => 'Pacific/Kiritimati',
  'Pacific/Saipan' => 'Pacific/Saipan',
  'Pacific/Majuro' => 'Pacific/Majuro',
  'Pacific/Kwajalein' => 'Pacific/Kwajalein',
  'Pacific/Truk' => 'Pacific/Truk',
  'Pacific/Ponape' => 'Pacific/Ponape',
  'Pacific/Kosrae' => 'Pacific/Kosrae',
  'Pacific/Nauru' => 'Pacific/Nauru',
  'Pacific/Noumea' => 'Pacific/Noumea',
  'Pacific/Auckland' => 'Pacific/Auckland',
  'Pacific/Chatham' => 'Pacific/Chatham',
  'Pacific/Niue' => 'Pacific/Niue',
  'Pacific/Norfolk' => 'Pacific/Norfolk',
  'Pacific/Palau' => 'Pacific/Palau',
  'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
  'Pacific/Pitcairn' => 'Pacific/Pitcairn',
  'Pacific/Pago_Pago' => 'Pacific/Pago_Pago',
  'Pacific/Apia' => 'Pacific/Apia',
  'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
  'Pacific/Fakaofo' => 'Pacific/Fakaofo',
  'Pacific/Tongatapu' => 'Pacific/Tongatapu',
  'Pacific/Funafuti' => 'Pacific/Funafuti',
  'Pacific/Johnston' => 'Pacific/Johnston',
  'Pacific/Midway' => 'Pacific/Midway',
  'Pacific/Wake' => 'Pacific/Wake',
  'Pacific/Efate' => 'Pacific/Efate',
  'Pacific/Wallis' => 'Pacific/Wallis',
  'Europe/London' => 'Europe/London',
  'Europe/Dublin' => 'Europe/Dublin',
  'WET' => 'WET',
  'CET' => 'CET',
  'MET' => 'MET',
  'EET' => 'EET',
  'Europe/Tirane' => 'Europe/Tirane',
  'Europe/Andorra' => 'Europe/Andorra',
  'Europe/Vienna' => 'Europe/Vienna',
  'Europe/Minsk' => 'Europe/Minsk',
  'Europe/Brussels' => 'Europe/Brussels',
  'Europe/Sofia' => 'Europe/Sofia',
  'Europe/Prague' => 'Europe/Prague',
  'Europe/Copenhagen' => 'Europe/Copenhagen',
  'Atlantic/Faeroe' => 'Atlantic/Faeroe',
  'America/Danmarkshavn' => 'America/Danmarkshavn',
  'America/Scoresbysund' => 'America/Scoresbysund',
  'America/Godthab' => 'America/Godthab',
  'America/Thule' => 'America/Thule',
  'Europe/Tallinn' => 'Europe/Tallinn',
  'Europe/Helsinki' => 'Europe/Helsinki',
  'Europe/Paris' => 'Europe/Paris',
  'Europe/Berlin' => 'Europe/Berlin',
  'Europe/Gibraltar' => 'Europe/Gibraltar',
  'Europe/Athens' => 'Europe/Athens',
  'Europe/Budapest' => 'Europe/Budapest',
  'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
  'Europe/Rome' => 'Europe/Rome',
  'Europe/Riga' => 'Europe/Riga',
  'Europe/Vaduz' => 'Europe/Vaduz',
  'Europe/Vilnius' => 'Europe/Vilnius',
  'Europe/Luxembourg' => 'Europe/Luxembourg',
  'Europe/Malta' => 'Europe/Malta',
  'Europe/Chisinau' => 'Europe/Chisinau',
  'Europe/Monaco' => 'Europe/Monaco',
  'Europe/Amsterdam' => 'Europe/Amsterdam',
  'Europe/Oslo' => 'Europe/Oslo',
  'Europe/Warsaw' => 'Europe/Warsaw',
  'Europe/Lisbon' => 'Europe/Lisbon',
  'Atlantic/Azores' => 'Atlantic/Azores',
  'Atlantic/Madeira' => 'Atlantic/Madeira',
  'Europe/Bucharest' => 'Europe/Bucharest',
  'Europe/Kaliningrad' => 'Europe/Kaliningrad',
  'Europe/Moscow' => 'Europe/Moscow',
  'Europe/Samara' => 'Europe/Samara',
  'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
  'Asia/Omsk' => 'Asia/Omsk',
  'Asia/Novosibirsk' => 'Asia/Novosibirsk',
  'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
  'Asia/Irkutsk' => 'Asia/Irkutsk',
  'Asia/Yakutsk' => 'Asia/Yakutsk',
  'Asia/Vladivostok' => 'Asia/Vladivostok',
  'Asia/Sakhalin' => 'Asia/Sakhalin',
  'Asia/Magadan' => 'Asia/Magadan',
  'Asia/Kamchatka' => 'Asia/Kamchatka',
  'Asia/Anadyr' => 'Asia/Anadyr',
  'Europe/Belgrade' => 'Europe/Belgrade' ,
  'Europe/Madrid' =>'Europe/Madrid' ,
  'Africa/Ceuta' => 'Africa/Ceuta',
  'Atlantic/Canary' => 'Atlantic/Canary',
  'Europe/Stockholm' => 'Europe/Stockholm',
  'Europe/Zurich' => 'Europe/Zurich' ,
  'Europe/Istanbul' => 'Europe/Istanbul',
  'Europe/Kiev' => 'Europe/Kiev',
  'Europe/Uzhgorod' => 'Europe/Uzhgorod',
  'Europe/Zaporozhye' => 'Europe/Zaporozhye',
  'Europe/Simferopol' => 'Europe/Simferopol',
  'America/New_York' => 'America/New_York',
  'America/Chicago' =>'America/Chicago' ,
  'America/North_Dakota/Center' => 'America/North_Dakota/Center',
  'America/Denver' => 'America/Denver',
  'America/Los_Angeles' => 'America/Los_Angeles',
  'America/Juneau' => 'America/Juneau',
  'America/Yakutat' => 'America/Yakutat',
  'America/Anchorage' => 'America/Anchorage',
  'America/Nome' =>'America/Nome' ,
  'America/Adak' => 'America/Adak',
  'Pacific/Honolulu' => 'Pacific/Honolulu',
  'America/Phoenix' => 'America/Phoenix',
  'America/Boise' => 'America/Boise',
  'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
  'America/Indiana/Marengo' => 'America/Indiana/Marengo',
  'America/Indiana/Knox' =>  'America/Indiana/Knox',
  'America/Indiana/Vevay' => 'America/Indiana/Vevay',
  'America/Kentucky/Louisville' =>'America/Kentucky/Louisville'  ,
  'America/Kentucky/Monticello' =>  'America/Kentucky/Monticello' ,
  'America/Detroit' => 'America/Detroit',
  'America/Menominee' => 'America/Menominee',
  'America/St_Johns' => 'America/St_Johns',
  'America/Goose_Bay' => 'America/Goose_Bay' ,
  'America/Halifax' => 'America/Halifax',
  'America/Glace_Bay' =>'America/Glace_Bay' ,
  'America/Montreal' => 'America/Montreal',
  'America/Toronto' => 'America/Toronto',
  'America/Thunder_Bay' => 'America/Thunder_Bay' ,
  'America/Nipigon' => 'America/Nipigon',
  'America/Rainy_River' => 'America/Rainy_River',
  'America/Winnipeg' => 'America/Winnipeg',
  'America/Regina' => 'America/Regina',
  'America/Swift_Current' => 'America/Swift_Current',
  'America/Edmonton' =>  'America/Edmonton',
  'America/Vancouver' => 'America/Vancouver',
  'America/Dawson_Creek' => 'America/Dawson_Creek',
  'America/Pangnirtung' => 'America/Pangnirtung'  ,
  'America/Iqaluit' => 'America/Iqaluit' ,
  'America/Coral_Harbour' => 'America/Coral_Harbour' ,
  'America/Rankin_Inlet' => 'America/Rankin_Inlet',
  'America/Cambridge_Bay' => 'America/Cambridge_Bay',
  'America/Yellowknife' => 'America/Yellowknife',
  'America/Inuvik' =>'America/Inuvik' ,
  'America/Whitehorse' => 'America/Whitehorse' ,
  'America/Dawson' => 'America/Dawson',
  'America/Cancun' => 'America/Cancun',
  'America/Merida' => 'America/Merida',
  'America/Monterrey' => 'America/Monterrey',
  'America/Mexico_City' => 'America/Mexico_City',
  'America/Chihuahua' => 'America/Chihuahua',
  'America/Hermosillo' => 'America/Hermosillo',
  'America/Mazatlan' => 'America/Mazatlan',
  'America/Tijuana' => 'America/Tijuana',
  'America/Anguilla' => 'America/Anguilla',
  'America/Antigua' => 'America/Antigua',
  'America/Nassau' =>'America/Nassau' ,
  'America/Barbados' => 'America/Barbados',
  'America/Belize' => 'America/Belize',
  'Atlantic/Bermuda' => 'Atlantic/Bermuda',
  'America/Cayman' => 'America/Cayman',
  'America/Costa_Rica' => 'America/Costa_Rica',
  'America/Havana' => 'America/Havana',
  'America/Dominica' => 'America/Dominica',
  'America/Santo_Domingo' => 'America/Santo_Domingo',
  'America/El_Salvador' => 'America/El_Salvador',
  'America/Grenada' => 'America/Grenada',
  'America/Guadeloupe' => 'America/Guadeloupe',
  'America/Guatemala' => 'America/Guatemala',
  'America/Port-au-Prince' => 'America/Port-au-Prince',
  'America/Tegucigalpa' => 'America/Tegucigalpa',
  'America/Jamaica' => 'America/Jamaica',
  'America/Martinique' => 'America/Martinique',
  'America/Montserrat' => 'America/Montserrat',
  'America/Managua' => 'America/Managua',
  'America/Panama' => 'America/Panama',
  'America/Puerto_Rico' =>'America/Puerto_Rico' ,
  'America/St_Kitts' => 'America/St_Kitts',
  'America/St_Lucia' => 'America/St_Lucia',
  'America/Miquelon' => 'America/Miquelon',
  'America/St_Vincent' => 'America/St_Vincent',
  'America/Grand_Turk' => 'America/Grand_Turk',
  'America/Tortola' => 'America/Tortola',
  'America/St_Thomas' => 'America/St_Thomas',
  'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires',
  'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
  'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
  'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
  'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
  'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
  'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
  'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
  'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos',
  'America/Argentina/Ushuaia' =>  'America/Argentina/Ushuaia',
  'America/Aruba' => 'America/Aruba',
  'America/La_Paz' => 'America/La_Paz',
  'America/Noronha' => 'America/Noronha',
  'America/Belem' => 'America/Belem',
  'America/Fortaleza' => 'America/Fortaleza',
  'America/Recife' => 'America/Recife',
  'America/Araguaina' => 'America/Araguaina',
  'America/Maceio' => 'America/Maceio',
  'America/Bahia' => 'America/Bahia',
  'America/Sao_Paulo' => 'America/Sao_Paulo',
  'America/Campo_Grande' => 'America/Campo_Grande',
  'America/Cuiaba' => 'America/Cuiaba',
  'America/Porto_Velho' => 'America/Porto_Velho',
  'America/Boa_Vista' => 'America/Boa_Vista',
  'America/Manaus' => 'America/Manaus',
  'America/Eirunepe' => 'America/Eirunepe',
  'America/Rio_Branco' => 'America/Rio_Branco',
  'America/Santiago' => 'America/Santiago',
  'Pacific/Easter' => 'Pacific/Easter' ,
  'America/Bogota' => 'America/Bogota',
  'America/Curacao' => 'America/Curacao',
  'America/Guayaquil' => 'America/Guayaquil',
  'Pacific/Galapagos' => 'Pacific/Galapagos' ,
  'Atlantic/Stanley' => 'Atlantic/Stanley',
  'America/Cayenne' => 'America/Cayenne',
  'America/Guyana' => 'America/Guyana',
  'America/Asuncion' => 'America/Asuncion',
  'America/Lima' => 'America/Lima',
  'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
  'America/Paramaribo' => 'America/Paramaribo',
  'America/Port_of_Spain' => 'America/Port_of_Spain',
  'America/Montevideo' => 'America/Montevideo',
  'America/Caracas' => 'America/Caracas',
  );

?>
