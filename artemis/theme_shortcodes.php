<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/
 
$sitetheme = e107::getPref('sitetheme');

require_once(e_THEME.$sitetheme."/shortcodes/theme_shortcodes.php");

class theme_shortcodes extends default_theme_shortcodes
{
	// public $override = true;
	public $forumpref;
	public $forum;
	
	function __construct()
	{
		$this->forumpref = (array) e107::pref('forum');
 		
	}

	/* {NAVBAR_BRANDING} */
	function sc_navbar_branding()
	{
		$pref_branding = e107::pref('theme', 'branding');

		switch ($pref_branding)
		{
			case 'logo':
				$brand = '{NAVBAR_SITELOGO: h=60}';
				break;
			//class="d-inline-block align-text-top"
			case 'sitenamelogo':
				$brand = "{NAVBAR_SITELOGO: h=60} " . SITENAME;
				break;

			case 'sitename':
			case 'sitenametag':
			default:
				$brand = SITENAME;
				break;
		}
 
		$text = '<a class="navbar-brand mb-0 h1  mx-auto " href="{SITEURL}" alt="{SITENAME}">' . $brand . '</a>';
		if($pref_branding == 'sitenametag')  {
			$text .= '<div class="dtitle">{SITETAG}</div>';

		}
 
		$text = e107::getParser()->parseTemplate($text);
		return $text;
	}

	function sc_navbar_sitelogo($parm = array())
	{
 
		// Paths to image file, link are relative to site base
		$tp = e107::getParser();

		$logopref = e107::getConfig('core')->get('sitelogo');
		$logop = $tp->replaceConstants($logopref);
			
		if(vartrue($logopref) && is_readable($logop))
		{
			$logo = $tp->replaceConstants($logopref,'abs');
			$path = $tp->replaceConstants($logopref);
		}

		$dimensions = array();
		
		if((isset($parm['w']) || isset($parm['h'])))
		{
			//
			$dimensions[0] = isset($parm['w']) ? $parm['w'] : 0;
			$dimensions[1] = !empty($parm['h']) ? $parm['h'] : 0;
 
			if(empty($parm['noresize']) && !empty($logopref)) // resize by default - avoiding large files.
			{
				 $logo = $logopref;
			}
		}
 
		$opts = array('alt'=>SITENAME, 'class'=>'sitelogo d-inline-block align-text-middle');

		if(!empty($dimensions[0]))
		{
			$opts['w'] = $dimensions[0];

		}

		if(!empty($dimensions[1]))
		{
			$opts['h'] = $dimensions[1];
		}
 
		$image = $tp->toImage($logo,$opts);
 
		return $image;
	}


	/* {NAVBAR_SITELOGOx} */
	/* core sitelogo for bootstrap5 see {SITELOGO} */
	function sc_navbar_sitelogos($parm=null)
	{
		$tp = e107::getParser();
		$logopref = e107::getConfig('core')->get('sitelogo');
		$logop = $tp->replaceConstants($logopref);
		 
		if(vartrue($logopref) && is_readable($logop))
		{
			$logo = $tp->replaceConstants($logopref,'abs');
			$path = $logop;
		}

		$dimensions = array();
		if((isset($parm['w']) || isset($parm['h'])))
		{
			//
			$dimensions[0] = isset($parm['w']) ? $parm['w'] : 0;
			$dimensions[1] = !empty($parm['h']) ? $parm['h'] : 0;

			if(empty($parm['noresize']) && !empty($logopref)) // resize by default - avoiding large files.
			{
				 $logo = $logopref;
			}
		}

		$opts = array('alt'=>SITENAME, 'class'=>'logo img-responsive img-fluid');
		if(!empty($dimensions[0]))
		{
			$opts['w'] = $dimensions[0];

		}

		if(!empty($dimensions[1]))
		{
			$opts['h'] = $dimensions[1];
		}

	//	$imageStyle = (empty($dimensions)) ? '' : " style='width: ".$dimensions[0]."px; height: ".$dimensions[1]."px' ";
	//	$image = "<img class='logo img-responsive' src='".$logo."' ".$imageStyle." alt='".SITENAME."' />\n";

		$image = $tp->toImage($logo,$opts);

		if (isset($link) && $link)
		{
			if ($link == 'index')
			{
				$image = "<a href='".e_HTTP."index.php'>".$image."</a>";
			}
			else
			{
				$image = "<a href='".e_HTTP.$link."'>".$image."</a>";
			}
		}

		return $image;

	}
 
 
}



 