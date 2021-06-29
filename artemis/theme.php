<?php

if (!defined('e107_INIT')) {
    exit();
}


e107::getSingleton('theme_settings', THEME.'theme_settings.php');

e107::lan('theme');

 

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
        }
            
        public function set_metas()
        {
            e107::meta("viewport", "width=device-width, initial-scale=1, shrink-to-fit=no");
        }

        public function register_css()
        {
            e107::css('theme', 'assets/css/soft-design-system.css');
            //e107::css('theme', 'style.css');
        }
            
        public function register_js()
        {
            e107::js('theme', 'assets/js/soft-design-system.js', 'jquery');
            e107::js('theme', 'assets/js/plugins/countup.min.js', 'jquery');
            e107::js('theme', 'assets/js/plugins/tilt.min.js', 'jquery');
            e107::link('src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"');
        }
           
        public function register_fonts()
        {
            e107::css('url', 'https://fonts.googleapis.com/css?family=Montserrat:200,400,700');
            e107::css('url', 'https://fonts.googleapis.com/icon?family=Roboto:200,400,700');
        }
          
        public function register_icons()
        {
        }
  
        public function getInlineCodes()
        {
            $inlinecss = e107::pref('theme', 'custom_css', false);
            if ($inlinecss) {
                e107::css("inline", $inlinecss);
            }
            $inlinejs = e107::pref('theme', 'inlinejs');
            if ($inlinejs) {
                e107::js("footer-inline", $inlinejs);
            }
        }
         

        /**
         * @param string $text
         * @return string without p tags added always with bbcodes
         * note: this solves W3C validation issue and CSS style problems
         * use this carefully, mainly for custom menus, let decision on theme developers
         */

        public function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
        {
            $text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

            return $text;
        }


        public function tablestyle($caption, $text, $mode='', $options = array())
        {
            $style = varset($options['setStyle'], 'default');
            
            if (e_DEBUG) {
                echo "
				<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->
				";
                echo "\n<!-- \n";

                echo json_encode($options, JSON_PRETTY_PRINT);

                echo "\n-->\n\n";
            }

            switch ($mode) {
                case 'wmessage':
                case 'wm':
                    $style = 'wmessage';
                break;

                case "news":
                    //homepage
                    if ($style == "section") {
                        $style = "frontpage";
                    }
                break;

                case "coppa":
                case "signup":
                case "fpw":
                 $style = 'card-plain';
                break;

                case "login_page":
                 $style = 'card-plain';
                break;

                case "forumsearch":
                 $style = "nocaption";
                break;
            }
 
            if (e_DEBUG) {
                echo "
				<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->
				";
                echo "\n<!-- \n";

                echo json_encode($options, JSON_PRETTY_PRINT);

                echo "\n-->\n\n";
            }
 
            switch ($style) {
                case 'wmessage':         
					if (!empty($caption)) {
						echo '<h1 class="text-white pt-3 mt-n5" >'.$caption.'</h1>';
					}
					echo '<p class="lead text-white mt-3">'.$this->remove_ptags($text).'</p>';		
				break;
    
				// for homepage sections 
                case "section":
                    echo '<section class="features-3 mt-n10 py-7">
					             ';
                    if (!empty($caption)) {
                        echo '
						<div class="row text-center justify-content-center pt-10">
						 <h2>' . $caption . '</h2>';
						 echo '</div> '; 
                    }
                    echo $text;
                    echo " </section>";
                    break;
 
                case 'nocaption':
                case 'main':
                    echo $text;
                    break;
    
                case 'main':
                    echo '<div class="card-body p-5">';
                    echo $text;
                    echo '</div>';
                    break;
         
				/* page with colored header */	
				case "page-header": {
					echo ' <div class="card shadow-lg mb-5">
							<div class="card-header bg-gradient-primary p-5 position-relative">
							<h1 class="text-white mb-0">' . $caption . '</h1>
							<div class="position-absolute w-100 z-index-1 bottom-0 ms-n5">
								<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto" style="height:7vh;min-height:50px;">
								<defs>
									<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
								</defs>
								<g class="moving-waves">
									<use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40"></use>
									<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
									<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
									<use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
									<use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
									<use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95"></use>
								</g>
								</svg>
							</div>
							</div>
							<div class="card-body p-5">
							'.$text.'
							</div>
						</div>';
						break;
				}

				/* menu with colored header */	
				case "menu-header": {
					echo ' <div class="card shadow-lg mb-5">
						<div class="card-header bg-gradient-primary p-5 pt-3 position-relative">
						<h3 class="text-white  ">' . $caption . '</h3>
						<div class="position-absolute w-100 z-index-1 bottom-0 ms-n5">
							<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto" style="height:7vh;min-height:50px;">
							<defs>
								<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
							</defs>
							<g class="moving-waves">
								<use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40"></use>
								<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
								<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
								<use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
								<use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
								<use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95"></use>
							</g>
							</svg>
						</div>
						</div>
						<div class="card-body">
						'.$text.'
						</div>
					</div>';
					break;
				}

                case "footer": {
                    echo '<div>';
                    if (!empty($caption)) {
                        echo '<h6 class="text-gradient text-primary text-sm">' . $caption . '</h6>';
                    }
                    echo $text;
                    echo '</div>';
                    break;
                }
 
                // for news on homepage
                case "frontpage": {
                    echo '<div class="container">';
                    if (!empty($caption)) {
                        echo '<h6 class="text-gradient text-primary text-sm">' . $caption . '</h6>';
                    }
                    echo $text;
                    echo '</div>';
                    break;

                }
                
                case "card-plain": {
					echo  '<div class="card card-plain">';
					if (!empty($caption)) {
						echo '<div class="card-header pb-0 text-left"><h4 class="font-weight-bolder">' . $caption . '</h4></div>';
					}
					echo  '<div class="card-body">';
					echo $text;
					echo '</div></div>';
                break;
               
                }
                default:
                    // default style
                    // only if this always work, play with different styles

                if (!empty($caption)) {
                    echo '<div class="my-4">' . $caption . '</div>';
                }
                echo $text;

                return;
            }
        }
    }
