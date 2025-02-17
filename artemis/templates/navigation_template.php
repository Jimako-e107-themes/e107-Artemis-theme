<?php
/*
* Copyright (c) 2012 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Navigation Template 
*/

 
$main_li_class = "nav-item dropdown dropdown-hover mx-2";
$main_a_class  = "nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center";
$main_sub_a_class = "dropdown-item border-radius-md";
$main_caret = '<img src="'.e_THEME_ABS.'artemis/soft-ui-design-system/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">';
 
// TEMPLATE FOR {NAVIGATION=main}
$NAVIGATION_TEMPLATE['main']['start'] = '<ul class="navbar-nav navbar-nav-hover w-80 ">';
$NAVIGATION_TEMPLATE['main']['end'] = '</ul>';

// Main Link
$NAVIGATION_TEMPLATE['main']['item'] = '
	<li class="'.$main_li_class.'">
		<a class="'.$main_a_class.'" role="button" href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">
		 {LINK_ICON}&nbsp;{LINK_NAME} 
		</a> 
	</li>
';

// Main Link - active state
$NAVIGATION_TEMPLATE['main']['item_active'] = '
	<li class="'.$main_li_class.' active">
		<a class="'.$main_a_class. ' active" role="button"  data-target="#" href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">
		 {LINK_ICON}&nbsp;{LINK_NAME}
		</a>
	</li>
';

// Main Link which has a sub menu. 
$NAVIGATION_TEMPLATE['main']['item_submenu'] = '
	<li class="'.$main_li_class.' dropdown {LINK_IDENTIFIER}">
		<a class="'.$main_a_class.' "  role="button" data-bs-toggle="dropdown" data-target="#"  title="{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		 '.$main_caret.'
		</a> 
		{LINK_SUB}
	</li>
';

// Main Link which has a sub menu - active state.
$NAVIGATION_TEMPLATE['main']['item_submenu_active'] = '
	<li class="'.$main_li_class.' dropdown active {LINK_IDENTIFIER}">
		<a class="'.$main_a_class.'" role="button" data-bs-toggle="dropdown" data-target="#" href="{LINK_URL}">
		 {LINK_ICON}{LINK_NAME}
		 '.$main_caret.'
		</a>
		{LINK_SUB}
	</li>
';	

	

// Sub menu 
$NAVIGATION_TEMPLATE['main']['submenu_start'] = '
		<div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" >
';

// Sub menu Link 
$NAVIGATION_TEMPLATE['main']['submenu_item'] = '
		 
				<a class="'.$main_sub_a_class.'" href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
	 
';

// Sub menu Link - active state
$NAVIGATION_TEMPLATE['main']['submenu_item_active'] = '
		 
				<a class="'.$main_sub_a_class.' active" href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
		 
';

// Sub Menu Link which has a sub menu. 
$NAVIGATION_TEMPLATE['main']['submenu_loweritem'] = '
	 
				<a class="'.$main_sub_a_class.'" href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				<img src="{THEME_PATH}soft-ui-design-system/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
				{LINK_SUB}
		 
';

$NAVIGATION_TEMPLATE['main']['submenu_loweritem_active'] = '
		 
				<a class="'.$main_sub_a_class.' active " href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				<img src="{THEME_PATH}soft-ui-design-system/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
				{LINK_SUB}
	 
';


$NAVIGATION_TEMPLATE['main']['submenu_end'] = '</div>';


// TEMPLATE FOR {NAVIGATION=side}

$NAVIGATION_TEMPLATE['side']['start'] 				= '<ul class="nav nav-list"><li class="nav-header">Sidebar</li>
														';

$NAVIGATION_TEMPLATE['side']['item'] 				= '<li><a href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['item_submenu'] 		= '<li class="nav-header">{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>
														';

$NAVIGATION_TEMPLATE['side']['item_active'] 		= '<li class="active"{LINK_OPEN}><a href="{LINK_URL}" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['end'] 				= '</ul>
														';

$NAVIGATION_TEMPLATE['side']['submenu_start'] 		= '';

$NAVIGATION_TEMPLATE['side']['submenu_item']		= '<li><a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['side']['submenu_item_active'] = '<li class="active"><a href="{LINK_URL}">{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_end'] 		= '';


// Footer links.  - ie. 3 columns of links.
 /*           <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Company
          </a> */ 
$NAVIGATION_TEMPLATE["footer"]["start"] 				= "";
$NAVIGATION_TEMPLATE["footer"]["item"] 					= '<a class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2" href"{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a>';
$NAVIGATION_TEMPLATE["footer"]["item_submenu"] 			= $NAVIGATION_TEMPLATE["footer"]["item"];
$NAVIGATION_TEMPLATE["footer"]["item_active"] 			= $NAVIGATION_TEMPLATE["footer"]["item"];
$NAVIGATION_TEMPLATE["footer"]["end"] 					= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_start"] 		= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_item"]			= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_loweritem"] 	= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_item_active"] 	= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_end"] 			= "";


$NAVIGATION_TEMPLATE["footer-column"]["start"] 				= "<ul class='list-unstyled'>\n";
$NAVIGATION_TEMPLATE["footer-column"]["item"] 					= "<li><a href='{LINK_URL}'{LINK_OPEN} title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer-column"]["item_submenu"] 			= "<li>{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>\n";
$NAVIGATION_TEMPLATE["footer-column"]["item_active"] 			= "<li class='active'{LINK_OPEN}><a href='{LINK_URL}' title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer-column"]["end"] 					= "</ul>\n";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_start"] 		= "<ul class='list-unstyled'>";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_item"]			= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_loweritem"] 	= "<li><a href='{LINK_URL}'{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>{LINK_SUB}</li>\n";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_item_active"] 	= "<li class='active'><a href='{LINK_URL}'>{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_end"] 			= "</ul>";



$NAVIGATION_TEMPLATE['alt'] 						= $NAVIGATION_TEMPLATE['main'];
$NAVIGATION_TEMPLATE["alt"]["start"] = '';
$NAVIGATION_TEMPLATE['alt']['item'] = '
	<li>
		<a  class="page-scroll" role="button" data-toggle="modal" href="#aboutModal" title="{LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		</a> 
	</li>
';                
                
$NAVIGATION_TEMPLATE['alt5'] 						= $NAVIGATION_TEMPLATE['side'];
$NAVIGATION_TEMPLATE['alt6'] 						= $NAVIGATION_TEMPLATE['side'];

?>
