<?php

if (!defined('e107_INIT'))
{
	exit();
}

define('e_DEBUG_JS_FOOTER', true); //render jquery in footer


class theme implements e_theme_render
{

	public function init()
	{

		e107::lan('theme');

		////// Your own css fixes ////////////////////////////////////////////////////
		define("CORE_CSS", false);
		e107::css('theme', 'e107.css');

		////// Theme meta tags /////////////////////////////////////////////////////////
		$this->set_metas();

		/////// Theme css  /////////////////////////////////////////////////////////////
		$this->register_css();

		/////// Theme js  /////////////////////////////////////////////////////////////
		$this->register_js();

		/////// Theme fonts ///////////////////////////////////////////////////////////
		$this->register_fonts();

		/////// Theme icons ///////////////////////////////////////////////////////////
		$this->register_icons();

		$this->getInlineCodes();

		//e107::meta('apple-mobile-web-app-capable','yes');

		if ($bootswatch = e107::pref('theme', 'bootswatch', false))
		{
			e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
			e107::css('url', 'https://bootswatch.com/4/' . $bootswatch . '/bootstrap.min.css');
		}

		$login_iframe  = e107::pref('theme', 'login_iframe', false);

		if (THEME_LAYOUT === "splash" && $login_iframe)
		{
			define('e_IFRAME', '0');
		}
	}

	public function set_metas()
	{
		e107::meta("viewport", "width=device-width, initial-scale=1, shrink-to-fit=no");
	}


	public function register_css()  //fix me, use sass only for needed stuff
	{
		e107::css('theme',  'soft-ui-design-system/css/soft-design-system.css');
	}

	public function register_js()
	{

		//  e107::css('url', $this->assets_path.'/js/soft-design-system.min.js', 'jquery');
		e107::js('footer',  THEME . 'soft-ui-design-system/js/soft-design-system.js', 'jquery');

		e107::js('footer',  THEME . 'soft-ui-design-system//js/plugins/countup.min.js', 'jquery');
		e107::js('footer',  THEME . 'soft-ui-design-system//js/plugins/tilt.min.js', 'jquery');
	}

	public function register_fonts()
	{
		e107::css('url', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
	}

	public function register_icons()
	{
		e107::css('theme',  'soft-ui-design-system/css/nucleo-icons.css');
		e107::css('theme',  'soft-ui-design-system/css/nucleo-svg.css');
	}


	public function getInlineCodes()
	{
		$inlinecss = e107::pref('theme', 'custom_css', false);
		if ($inlinecss)
		{
			e107::css("inline", $inlinecss);
		}
		$inlinejs = e107::pref('theme', 'inlinejs');
		if ($inlinejs)
		{
			e107::js("footer-inline", $inlinejs);
		}
	}


	/**
	 * @param string $text
	 * @return string without p tags added always with bbcodes
	 * note: this solves W3C validation issue and CSS style problems
	 * use this carefully, mainly for custom menus, let decision on theme developers
	 */

	function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
	{

		$text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

		return $text;
	}


	function tablestyle($caption, $text, $mode = '', $options = array())
	{

		$style = varset($options['setStyle'], 'default');

		$text = $this->remove_ptags($text);

		// Override style based on mode.
		switch ($mode)
		{
			case 'wmessage':
			case 'wm':
				$style = 'wmessage';
				break;

			case "login_page":
			case "fpw":
			case "coppa":
			case "signup":
				$style = 'splash';
				break;
		}

		echo "\n<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";


		if ($style === 'listgroup' && empty($options['list']))
		{
			$style = 'cardmenu';
		}

		if ($style === 'cardmenu' && !empty($options['list']))
		{
			$style = 'listgroup';
		}

		/* Changing card look via prefs */
		if (!e107::pref('theme', 'cardmenu_look') && $style == 'cardmenu')
		{
			$style = 'menu';
		}

		//		echo "\n<!-- tablestyle:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";

		if (deftrue('e_DEBUG'))
		{
			echo "\n<!-- \n";
			echo json_encode($options, JSON_PRETTY_PRINT);
			echo "\n-->\n\n";
		}

		switch ($style)
		{

			case 'wmessage':
				if (!empty($caption))
				{
					echo '<h1 class="text-white pt-3 mt-n5" >' . $caption . '</h1>';
				}
				echo '<p class="lead text-white mt-3">' . $text . '</p>';
				break;

			case 'actionbox':
				echo '<h3 class="text-white">Be the first who see the news</h3>
					<p class="text-white opacity-8 mb-5 pe-5">
					  Your company may not be in the software business,
					  but eventually, a software company will be in your business.
					</p>
					<div class="row">
					' . $text . '
					</div>';
				break;

			case 'bare':
				echo $this->remove_ptags($text);
				break;


			case 'nocaption':
			case 'main':
				echo $text;
				break;

			case 'section':
				echo '<div class="container">';
				echo $text;
				echo '</div>';
				break;

			case 'menu':
				echo '<div class=" mb-4">';
				if (!empty($caption))
				{
					echo '<h5 >' . $caption . '</h5>';
				}
				echo $text;
				echo '</div>';
				break;

			case 'footer':
				echo '<div class=" mb-4">';
				if (!empty($caption))
				{
					echo '<h5 >' . $caption . '</h5>';
				}
				echo $text;
				echo '</div>';
				break;

			case 'cardmenu':
				echo '<div class="card mb-4">';
				if (!empty($caption))
				{
					echo '<h5 class="card-header">' . $caption . '</h5>';
				}
				echo '<div class="card-body">';
				echo $text;
				echo '</div>
						</div>';
				break;


			case 'listgroup':
				echo '<div class="card mb-4">';
				if (!empty($caption))
				{
					echo '<h5 class="card-header">' . $caption . '</h5>';
				}
				echo $text;

				if (!empty($options['footer'])) // XXX @see news-months menu.
				{
					echo '<div class="card-footer">
		                      ' . $options['footer'] . '
		                    </div>';
				}


				echo '</div>';
				break;

			case 'splash':
				echo '<div class="container  justify-content-center  my-5" id="' . $mode . '">
	                 <div class="row  align-items-center">
	                 <div class="card card-signin col-md-6 offset-md-3 " id="login-template"><div class="card-body">';

				if (!empty($caption))
				{
					echo '<h5 class="card-title">' . $caption . '</h5>';
				}

				echo $text;

				if (!empty($options['footer'])) // XXX @see news-months menu.
				{
					echo '<div class="card-footer">
  		                   ' . $options['footer'] . '
  		                   </div>';
				}

				echo '</div></div>
						</div></div>';

				break;


			default:

				// default style
				// only if this always work, play with different styles

				if (!empty($caption))
				{
					echo '<h4>' . $caption . '</h4>';
				}
				echo $text;

				return;
		}
	}
}
