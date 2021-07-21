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

require_once(e_THEME.$sitetheme."/shortcodes/default_shortcodes.php");

class theme_shortcodes extends default_theme_shortcodes
{
 
    
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
        $text = '<a class="'.$class.'" href="{SITEURL}">'. $brand .'</a>';


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

        $opts = array('alt'=>SITENAME, 'class'=>'sitelogo d-inline-block align-text-middle');
    
        $opts['h'] = 0;
        $opts['w'] = 0;

        $image = $tp->toImage($logo, $opts);

        return $image;
    }

	public function sc_footer()
    {
       if (e_PAGE=="menus.php") {
			$parm['type'] = 'footer'; 
			$parm['key'] = 'default';
 
		    if(THEME_LAYOUT == 'home') $parm['key'] = 'default';
			if(THEME_LAYOUT == 'index') $parm['key'] = 'efiction';
			
            $text = $this->sc_html_fragment($parm);
		 
            return $text;
        } else {
            return "";
        }
    }
    
    /* {JS_INLINE_BOXES} */
    public function sc_js_inline_boxes()
    {
        $code = "
            if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById('state1').getAttribute('countTo'));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById('state2').getAttribute('countTo'));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById('state3').getAttribute('countTo'));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
        ";
        
        e107::js('footer-inline', $code);
    }

    /* {FORUM_SEARCH} */
    public function sc_forum_search()
    {
        $text = '
			<form method="get" action="'.e_HTTP.'search.php">
			<div class="row">
				<input type="hidden" name="r" value="0">
				<input type="hidden" name="t" value="forum">
				<input type="hidden" name="forum" value="all">
              <div class="col-md-8 col-7">
                <div class="input-group">
                  <span class="input-group-text"><i class="fa  fa-search" aria-hidden="true"></i></span>
                  <input class="form-control" type="text" name="q"  placeholder="Search" value="" maxlength="50" data-original-title="" title="">
                </div>
              </div>
              <div class="col-md-4 col-5 text-start ps-0">
			  <button class="btn bg-gradient-info w-100 mb-0 h-10" type="submit" name="s" value="search" data-original-title="" title="">Search forum</button>
              </div>
            </div>
 
				</form>';
        return e107::getRender()->tablerender('Search just forum', $text, 'forumsearch');
    }
}
