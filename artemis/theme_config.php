<?php

if (!defined('e107_INIT')) { exit; }    

$sitetheme = e107::getPref('sitetheme');

e107::themeLan('admin', $sitetheme, true);

// FIXME Move all of this into class below.
if(isset($_POST['importThemeDemo']))
{
	$xmlArray = array();
	e107::getDebug()->log("Retrieving demo data from xml file");
	$themepath = e_THEME.$sitetheme."/install/install.xml";
	$xmlArray = e107::getSingleton('xmlClass')->loadXMLfile($themepath); 
	$ret = e107::getSingleton('xmlClass')->e107Import($xmlArray);
	if($ret)
	{
		$mes = e107::getMessage();
		$mes->add("Importing Theme Demo Content:", E_MESSAGE_SUCCESS);
	}
	
	$mes->render();
}

// Dummy Theme Configuration File.
class theme_config implements e_theme_config
{

	function __construct()
	{
 
	}

	public function config()
	{
			$brandingOpts = array('sitename'=>LAN_JM_THEMEPREF_09_01, 'logo' => LAN_JM_THEMEPREF_09_02, 'sitenamelogo'=>LAN_JM_THEMEPREF_09_03);
		 

			$fields = array( 
				'branding' => array('title'=>LAN_JM_THEMEPREF_09, 'type'=>'dropdown', 'writeParms'=>array('optArray'=> $brandingOpts)),
            //    'fonts_local' => array('title'=>LAN_JM_THEMEPREF_11_01, 'type'=>'boolean'),
            //    'fonts_subset' => array('title'=>LAN_JM_THEMEPREF_11_02, 'type'=>'boolean'),
				'extended' => array('title'=>LAN_JM_THEMEPREF_10, 'type'=>'method', 'data'=> false, 'writeParms'=>array('optArray'=> $brandingOpts)),
			);

            return $fields;
        

	}

	function help()
	{
		/* only if install.xml exists */
		/* check if all required plugins are installed */
		
		//$text = "<div class='center buttons-bar'><form method='post' action='".e_SELF."?".e_QUERY."' id='core-db-import-form'>";
		//$text .=  e107::getForm()->admin_button('importThemeDemo', 'Install Demo', 'other');
		//$text .= '</form></div>';
 
	 	return $text;
	}
	
	function process()
	{
	 	return '';
	}

}

class theme_config_form extends e_form  {

	function extended() {

		$themeoptions['custom_css'] = e_THEME . e107::getPref('sitetheme') . "/themeoptions/admin_" . "custom_css" . ".php";
        $themeoptions['masthead'] = e_THEME . e107::getPref('sitetheme') . "/themeoptions/masthead/admin_config.php";
        
		$buttons = e107::getNav()->renderAdminButton($themeoptions['custom_css'], "<b>" . LAN_JM_THEMEOPTIONS_01 . "</b><br>", LAN_JM_THEMEOPTIONS_01_HELP, "P", '<i class="S32 e-themes-32"></i>', "div");
       /* 
        $buttons .= e107::getNav()->renderAdminButton($themeoptions['masthead'], "<b>" . LAN_JM_THEMEOPTIONS_05 . "</b><br>", LAN_JM_THEMEOPTIONS_05_HELP, "P", '<i class="S32 e-themes-32"></i>', "div");
*/
		//$ns->setStyle('flexpanel');
		$mainPanel = " <style>a.core-mainpanel-link-icon { height: 100px; }</style>";
		$mainPanel .= " ";
		$mainPanel .= $buttons;
		$mainPanel .= "  ";
 
	 /*

		$text .= "<div class='panel-body'>
		        <form method='post' action='" . e_SELF . "?" . e_QUERY . "' id='core-db-import-form'>";
		$text .= e107::getForm()->admin_button('importThemeDemo', 'Install Demo', 'other');
		$text .= '</form></div>';

		$mainPanel .= $text; */
		$mainPanel .= " ";

		return $mainPanel;
	}

}