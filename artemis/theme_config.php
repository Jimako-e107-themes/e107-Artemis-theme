<?php

if (!defined('e107_INIT')) { exit; }

$sitetheme = e107::getPref('sitetheme');

e107::themeLan('admin', $sitetheme, true);

class theme_config implements e_theme_config
{

	function __construct()
	{
		e107::themeLan('admin','RideBlue2', true);
	}
	
	function config()
	{
		$brandingOpts = array(
			'sitename'=>LAN_RB_THEMEPREF_01, 
			'logo' => LAN_RB_THEMEPREF_02, 
			'sitenamelogo'=>LAN_RB_THEMEPREF_03,
			'sitenametag'=>LAN_RB_THEMEPREF_04,
		);

		$fields = array(
			'branding'          => array('title'=>LAN_RB_THEMEPREF_00, 'type'=>'dropdown', 'writeParms'=>array('optArray'=> $brandingOpts)),
			'inlinecss'  				=> array('title' => LAN_RB_THEMEPREF_06, 'type'=>'textarea', 'writeParms'=>array('size'=>'block-level'),'help'=>''),
			'inlinejs'   				=> array('title' => LAN_RB_THEMEPREF_07, 'type'=>'textarea', 'writeParms'=>array('size'=>'block-level'),'help'=>''),			
		);

		return $fields;
 
	}

	function help()
	{
	 	return '';
	}
	
	function process()
	{
	 	return '';
	}
}


?>