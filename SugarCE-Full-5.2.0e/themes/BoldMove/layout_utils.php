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

 * Description:  Contains a variety of utility functions used to display UI
 * components such as form headers and footers.  Intended to be modified on a per
 * theme basis.
 ********************************************************************************/


global $app_strings, $current_user, $barChartColors, $pieChartColors, $even_bg, $odd_bg, $hilite_bg;

// list view colors
$even_bg = "#f9f9f9";
$odd_bg = "#eeeeee";
$hilite_bg = "#ffffff";
//$click_bg = "#FCB670";

//graph colors
$barChartColors = array(
"docBorder"=>"0xffffff",
"docBg1"=>"0xffffff",
"docBg2"=>"0xffffff",
"xText"=>"0x33485c",
"yText"=>"0x33485c",
"title"=>"0x333333",
"misc"=>"0x999999",
"altBorder"=>"0xffffff",
"altBg"=>"0xffffff",
"altText"=>"0x666666",
"graphBorder"=>"0xcccccc",
"graphBg1"=>"0xf6f6f6",
"graphBg2"=>"0xf6f6f6",
"graphLines"=>"0xcccccc",
"graphText"=>"0x333333",
"graphTextShadow"=>"0xf9f9f9",
"barBorder"=>"0xeeeeee",
"barBorderHilite"=>"0x333333",
"legendBorder"=>"0xffffff",
"legendBg1"=>"0xffffff",
"legendBg2"=>"0xffffff",
"legendText"=>"0x444444",
"legendColorKeyBorder"=>"0x777777",
"scrollBar"=>"0xcccccc",
"scrollBarBorder"=>"0xeeeeee",
"scrollBarTrack"=>"0xeeeeee",
"scrollBarTrackBorder"=>"0xcccccc"
);

$pieChartColors = array(
"docBorder"=>"0xffffff",
"docBg1"=>"0xffffff",
"docBg2"=>"0xffffff",
"title"=>"0x333333",
"subtitle"=>"0x666666",
"misc"=>"0x999999",
"altBorder"=>"0xffffff",
"altBg"=>"0xffffff",
"altText"=>"0x666666",
"graphText"=>"0x33485c",
"graphTextShadow"=>"0xf9f9f9",
"pieBorder"=>"0xffffff",
"pieBorderHilite"=>"0x333333",
"legendBorder"=>"0xffffff",
"legendBg1"=>"0xffffff",
"legendBg2"=>"0xffffff",
"legendText"=>"0x444444",
"legendColorKeyBorder"=>"0x777777",
"scrollBar"=>"0xdfdfdf",
"scrollBarBorder"=>"0xfafafa",
"scrollBarTrack"=>"0xeeeeee",
"scrollBarTrackBorder"=>"0xcccccc"
);


if ($current_user->getPreference('gridline') == 'on') {
$gridline = 1;
} else {
$gridline = 0;
}
/**
 * Create HTML to display formatted form title of a form in the left pane
 * param $left_title - the string to display as the title in the header
 */
function get_left_form_header ($left_title)
{
global $image_path;

$the_header = "";
       	$the_header .='<div class="leftColumnModuleName">'.$left_title.'</div>';
		$the_header .='<table width="100%" cellpadding="3" cellspacing="0" border="0"><tr><td align="left" class="leftColumnModuleS3">';


return $the_header;
}

/**
 * Create HTML to display formatted form footer of form in the left pane.
 */
function get_left_form_footer() {
return ("</td></tr></table>\n");
}

/**
 * Create HTML to display formatted form title.
 * param $form_title - the string to display as the title in the header
 * param $other_text - the string to next to the title.  Typically used for form buttons.
 * param $show_help - the boolean which determines if the print and help links are shown.
 */
function get_form_header ($form_title, $other_text, $show_help)
{
global $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $current_module, $current_action;
global $image_path;
global $app_strings;

$the_form = '';
if ( isset($_REQUEST['module']) && $_REQUEST['module'] != 'Calendar')
{
$the_form = '</p>';
}
else {
$the_form = "<p>";
}
$the_form .= '<table width="100%" cellpadding="0" cellspacing="0" border="0" class="h3Row"><tr>';
$is_min_max = strpos($other_text,"_search.gif");

if($is_min_max === false) {
	$the_form .= "<td nowrap><h3><IMG height='12' width='12' src='include/images/blank.gif' alt='' class='h3Arrow' >".$form_title."</h3></td>";
} else {
	$the_form .= "<td nowrap><h3>{$other_text}&nbsp;{$form_title}</h3></td>";
}


$keywords = array("/class=\"button\"/","/class='button'/","/class=button/","/<\/form>/");
$match="";

	foreach ($keywords as $left) {
		 if (preg_match($left,$other_text)) {$match=true;}
	}
if ($other_text && $match) {
$the_form .= "<td colspan='10' width='100%'><IMG height='1' width='1' src='include/images/blank.gif' alt=''></td>\n";
	$the_form .= "</tr><tr>\n";
	$the_form .= "<td align='left' valign='middle' nowrap style='padding-bottom: 2px;'>$other_text</td>\n";
	$the_form .= "<td width='100%'><IMG height='1' width='1' src='include/images/blank.gif' alt=''></td>\n";

	if ($show_help==true) {
		$the_form .= "<td align='right' nowrap>";
		if ($_REQUEST['action'] != "EditView") {
	     	$the_form .= "<A
href='index.php?".$GLOBALS['request_string']."' class='utilsLink'><img
src='".$image_path."print.gif' width='13' height='13' alt='Print' border='0'
align='absmiddle'></a>&nbsp;<A
href='index.php?".$GLOBALS['request_string']."'
class='utilsLink'>".$app_strings['LNK_PRINT']."</A>\n";
	    }
	    $the_form .= "&nbsp;<A href='index.php?module=Administration&action=SupportPortal&view=documentation&version=".$sugar_version."&edition=".$sugar_flavor."&lang=".$current_language."&help_module=".$current_module."&help_action=".$current_action."&key=".$server_unique_key."'
 class='utilsLink'><img src='".$image_path."help.gif'
width='13' height='13' alt='Help' border='0' align='absmiddle'></a>&nbsp;<A
href='index.php?module=Administration&action=SupportPortal&view=documentation&version=".$sugar_version."&edition=".$sugar_flavor."&lang=".$current_language."&help_module=".$current_module."&help_action=".$current_action."&key=".$server_unique_key."'
class='utilsLink'>".$app_strings['LNK_HELP']."</A></td>\n";
	}


} else {
	if ($other_text && $is_min_max === false) {
		$the_form .= "<td width='20'><IMG height='1' width='20' src='include/images/blank.gif' alt=''></td>\n";
		$the_form .= "<td valign='middle' nowrap width='100%'>$other_text</td>\n";
	}
	else {
		$the_form .= "<td width='100%'><IMG height='1' width='1' src='include/images/blank.gif' alt=''></td>\n";
	}

	if ($show_help==true) {
		$the_form .= "<td align='right' nowrap>";
		if ($_REQUEST['action'] != "EditView") {
	     	$the_form .= "<A
href='index.php?".$GLOBALS['request_string']."' class='utilsLink'><img
src='".$image_path."print.gif' width='13' height='13' alt='Print' border='0'
align='absmiddle'></a>&nbsp;<A
href='index.php?".$GLOBALS['request_string']."'
class='utilsLink'>".$app_strings['LNK_PRINT']."</A>\n";
	    }
	    $the_form .= "&nbsp;<A href='index.php?module=Administration&action=SupportPortal&view=documentation&version=".$sugar_version."&edition=".$sugar_flavor."&lang=".$current_language."&help_module=".$current_module."&help_action=".$current_action."&key=".$server_unique_key."'
 class='utilsLink'><img src='".$image_path."help.gif'
width='13' height='13' alt='Help' border='0' align='absmiddle'></a>&nbsp;<A
href='index.php?module=Administration&action=SupportPortal&view=documentation&version=".$sugar_version."&edition=".$sugar_flavor."&lang=".$current_language."&help_module=".$current_module."&help_action=".$current_action."&key=".$server_unique_key."'
class='utilsLink'>".$app_strings['LNK_HELP']."</A></td>\n";
	}


}



$the_form .= <<<EOQ
	  </tr>
</table>


EOQ;

return $the_form;
}

/**
 * Create HTML to display formatted form footer
 */
function get_form_footer() {
}

/**
 * Create HTML to display formatted module title.
 * param $module - the string to next to the title.  Typically used for form buttons.
 * param $module_title - the string to display as the module title
 * param $show_help - the boolean which determines if the print and help links are shown.
 */
function get_module_title ($module, $module_title, $show_help)
{
global $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $action;
global $image_path;
global $app_strings;

$the_title = "<table width='100%' cellpadding='0' cellspacing='0' border='0' class='moduleTitle'><tr><td valign='top'>\n";
$module = preg_replace("/ /","",$module);
if (is_file($image_path.$module.".gif")) {
	$the_title .= "<IMG src='".$image_path.$module.".gif' width='16' height='16' border='0' style='margin-top: 3px; margin-right: 3px;' alt='".$module."'>&nbsp;</td><td width='100%'>";
}
$the_title .= "<h2>".$module_title."</h2></td>\n";

if ($show_help) {

        $the_title .= "<td valign='top' align='right' nowrap style='padding-top:3px; padding-left: 5px;'>";
        if ($_REQUEST['action'] != "EditView") {
            $the_title .= "<A href=\"javascript:void window.open('index.php?".$GLOBALS['request_string']."','printwin',"
                        . "'menubar=1,status=0,resizable=1,scrollbars=1,toolbar=0,location=1')\" class='utilsLink'><img src='"
                        . $image_path."print.gif' width='13' height='13' alt='".$app_strings['LNK_PRINT']."' border='0' align='absmiddle'>"
                        . "</a>&nbsp;<A href=\"javascript:void window.open('index.php?".$GLOBALS['request_string']."','printwin',"
                        . "'menubar=1,status=0,resizable=1,scrollbars=1,toolbar=0,location=1')\" class='utilsLink'>" . $app_strings['LNK_PRINT']."</A>\n";
        }
        $the_title .= "&nbsp;<A href=\"javascript:void window.open('index.php?module=Administration&action=SupportPortal&view=documentation&version="
                    . $sugar_version."&edition=".$sugar_flavor."&lang=".$current_language."&help_module=".$module."&help_action=".$action."&key="
                    . $server_unique_key."','helpwin','width=600,height=600,menubar=1,status=0,resizable=1,scrollbars=1,toolbar=0,location=1')\"  class='utilsLink'>" .
                      "<img src='".$image_path."help.gif' width='13' height='13' alt='".$app_strings['LNK_HELP']."' border='0' align='absmiddle'></a>";
        
        $the_title .= "&nbsp;<A href=\"javascript:void window.open('index.php?module=Administration&action=SupportPortal&view=documentation&version="
                    . $sugar_version."&edition=".$sugar_flavor."&lang=".$current_language."&help_module=".$module."&help_action=".$action."&key="
                    . $server_unique_key."','helpwin','width=600,height=600,menubar=1,status=0,resizable=1,scrollbars=1,toolbar=0,location=1');\" class='utilsLink'>"
                    . $app_strings['LNK_HELP']."</A></td>\n";
    }


$the_title .= "</tr></table>\n";

return $the_title;

}

/**
 * @return The current color stylesheet
 */
function get_style_color($theme)
{
	require_once('themes/'.$theme.'/config.php');
    global $theme_colors;
    if(isset($_COOKIE[$theme.'_color_style']) && in_array($_COOKIE[$theme.'_color_style'], $theme_colors))
    {
        $color = $_COOKIE[$theme.'_color_style'];
    }
    else
    {
        $color = $theme_colors[0];
    }
    
    return $color;
}

/**
 * Create a header for a popup.
 * param $theme - The name of the current theme
 */
function insert_popup_header($theme)
{
global $app_strings, $sugar_config, $sugar_version;

$charset = $sugar_config['default_charset'];

if(isset($app_strings['LBL_CHARSET']))
{
	$charset = $app_strings['LBL_CHARSET'];
}

$colorTheme = get_style_color($theme);

$out  = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">';
$out .=	'<HTML><HEAD>';
$out .=	'<meta http-equiv="Content-Type" content="text/html; charset='.$charset.'">';
$out .=	'<title>'.$app_strings['LBL_BROWSER_TITLE'].'</title>';
$out .=	'<style type="text/css">@import url("themes/'.$theme.'/style.css?s=' . $sugar_version . '&c=' . $sugar_config['js_custom_version'] . '"); </style>';
$out .= '<link href="themes/'.$theme.'/colors.'.$colorTheme.'.css?s=' . $sugar_version . '&c=' . $sugar_config['js_custom_version'] . '" rel="stylesheet" type="text/css" title="'.$colorTheme.'" />';
$out .=	'</HEAD><BODY style="margin: 10px">';

echo $out;
}

/**
 * Create a footer for a popup.
 */
function insert_popup_footer()
{
echo <<< EOQ
	</BODY>
	</HTML>
EOQ;
}

?>
