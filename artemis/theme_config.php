<?php

if (!defined('e107_INIT')) { exit; }    

$sitetheme = e107::getPref('sitetheme');  /* fix me */

e107::themeLan('admin', $sitetheme, true);
 

class theme_config implements e_theme_config
{

	function __construct()
	{
 
	}


	function config()
	{
        
    //  $brandingOpts = array('sitename'=>LAN_THEMEPREF_05, 'logo' => LAN_THEMEPREF_06, 'sitenamelogo'=>LAN_THEMEPREF_07);
 
	/*	return array(
		    'branding' => array('title'=>LAN_THEMEPREF_04, 'type'=>'dropdown', 'writeParms'=>array('optArray'=> $brandingOpts)),
			'cardmenu_look' => array('title' => LAN_THEMEPREF_02, 'type'=>'boolean', 'writeParms'=>array(),'help'=>''),
			'login_iframe' => array('title' => LAN_THEMEPREF_03, 'type'=>'boolean', 'writeParms'=>array(),'help'=>''),
			);
    */
	
		return array(
				'frontimage' => array('title'=>'Frontend image', 'type'=>'image', 'writeParms'=>array()),
			);
	}

	function help()
	{
		return null; 
	}
	
	function process()
	{
	 	return null;
	}

}

