<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2021 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/


class theme_shortcodes extends e_shortcode
{

	/**
	 * Special Header Shortcode for dynamic menuarea templates.
	 * @shortcode {---HEADER---}
	 * @return string
	 */
	function sc_header()
	{
		return "<!-- Dynamic Header template -->\n";
	}


	/* {NAVBAR_BRANDING} */
	public function sc_navbar_branding($parm = array())
	{
		$type  = varset($parm['type'], "default");
		
		switch ($type) {
			case 'white':
			$class="navbar-brand text-white";
			break;
			case 'home':
			$class="navbar-brand font-weight-bolder ms-sm-3";
			break;
			default:
			$class="navbar-brand";
		}

		$pref = e107::pref('theme', 'branding');
		switch ($pref) {
		case 'logo':
			$brand = '{NAVBAR_SITELOGO}';
			$class .= ' navbar-logo';
			break;
		case 'sitenamelogo':
			$brand = "{NAVBAR_SITELOGO}&nbsp; <span class='sitename'>" . SITENAME ."</span>";
			$class .= ' navbar-logotext';
			break;
		case 'sitename':
		default:
			$brand = SITENAME;
			$class .= ' navbar-text';
			break;
		}
		$text = '<a class="'.$class.'" href="'.SITEURL.'">'. $brand .'</a>';


		$text = e107::getParser()->parseTemplate($text);
		return $text;
	}


    /* {NAVBAR_SITELOGO} */
    public function sc_navbar_sitelogo($parm = array())
    {

        // Paths to image file, link are relative to site base
        $tp = e107::getParser();

        $logopref = e107::getConfig('core')->get('sitelogo');
        $logop = $tp->replaceConstants($logopref);
            
        if (vartrue($logopref) && is_readable($logop)) {
            $logo = $tp->replaceConstants($logopref, 'abs');
            $path = $tp->replaceConstants($logopref);
        }

        $opts = array('alt'=>SITENAME, 'class'=>'navbar-brand-img');
    
        $opts['h'] = 40;
        $opts['w'] = 0;

        $image = $tp->toImage($logo, $opts);

        return $image;
    }




	/**
	 * Optional {---CAPTION---} processing.
	 * @shortcode {---CAPTION---}
	 * @return string
	 */
	function sc_caption($caption)
	{
		return $caption; 
	}


	/* {THEME_PREF: name=xy&default=abc&path=1} */
	public function sc_theme_pref($parm = [])
	{
		$themePrefs = e107::pref('theme');

		$name = $parm['name'];
		if (!isset($name))
		{
			return '';
		}
		
		$default = varset($parm['default'], '');
		$value = $themePrefs[$name];
		$value = varset($value, $default);

		if ($parm['path'])  {
			$value = e107::getParser()->replaceConstants($value, "full");
		}
		return $value;
	}
 
 
	/**
	 * Optional {---BREADCRUMB---} processing.
	 * @shortcode {---BREADCRUMB---}
	 * @return string
	 */
	 /*
	function sc_breadcrumb($array)
	{
		$route = e107::route();

		if(strpos($route,'news/') === 0)
		{
			$array[0]['text'] = 'Blog';
		}

		return e107::getForm()->breadcrumb($array, true);

	}
	*/

	/**
	 * Will only function on the news page.
	 * @example {THEME_NEWS_BANNER: type=date}
	 * @example, {THEME_NEWS_BANNER: type=image}
	 * @example {THEME_NEWS_BANNER: type=author}
	 * @param null $parm
	 * @return string|null
	 */
	function sc_theme_news_banner($parm=null)
	{
		/** @var news_shortcodes $news */
		$sc = e107::getScBatch('news');
		$news = $sc->getScVar('news_item');

		$ret = '';
		$type = varset($parm['type']);

		switch($type)
		{
			case "title":
				$ret = $sc->sc_news_title();
				break;

			case "date":
				$ret = $sc->sc_news_date();
				break;

			case "comment":
				$ret = $sc->sc_news_comment_count();
				break;

			case "author":
				$ret = $sc->sc_news_author();
				break;

			case "image":
			default:
			if(!empty($news['news_thumbnail']))
			{
				$tmp = explode(',', $news['news_thumbnail']);

				$opts = array(
					'w' => 1800,
					'h' => null,
					'crop' => false,
				);

				$ret = e107::getParser()->toImage($tmp[0], $opts);
			}
			
		}

		return $ret;


	}




}






