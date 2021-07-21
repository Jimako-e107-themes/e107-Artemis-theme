<?php

class theme_settings
{
    public static function get_jmlayouts() {
    
        if (e107::isInstalled('jmlayouts')) {
            $tmp = e107::getDb()->retrieve('jmlayout', '*', null, true);
            foreach ($tmp as $layout) {
                $mode = $layout['layout_mode'] ;
                $layoutsOptions[$mode] =   $layout;
            }
        }
        else {
			/* without plugin do it manually... */
            $layoutsOptions['home']['layout_header'] = 'header_default.html';   
            $layoutsOptions['home']['layout_footer'] = 'footer_default.html';   
            $layoutsOptions['index']['layout_header'] = 'header_efiction.html';
            $layoutsOptions['index']['layout_footer'] = 'footer_default.html';
        } 
        return $layoutsOptions;
    }
    
    public static function get_membersonly_template()
    {
        $tmp['membersonly_start'] = '{LAYOUT_NAVBAR: key=default} 
          <section class="page-header section-height-85">
            <div class="container">
              <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7 mx-auto">';

        $tmp['membersonly_end'] = '
        </div></div></div></section>{LAYOUT_FOOTER: key=social}
        ';

        return $tmp;
    }
    
    public static function get_singleforms() {
	    //$tmp['login_logo'] = '<div class="center">{LOGO: login}</div>';
        return $tmp;
	}

	public static function main_li_class() {
		$main_li_class = "nav-item dropdown dropdown-hover mx-2";
		return $main_li_class;
	}

	public static function main_a_class() {
		$main_a_class  = "nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center";
		return $main_a_class;
	}

	public static function main_sub_a_class() {
		$main_sub_a_class = "dropdown-item border-radius-md";
		return $main_sub_a_class;
	}

	public static function main_caret($name ='') {
		$tmp ='<img src="{THEME_PATH}/assets/img/down-arrow'.$name.'.svg" alt="down-arrow" class="arrow ms-1">';
		return $tmp;
	} 

	public static function class_submit_button($name ='') {
		$tmp ='btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0';
		return $tmp;
	}
    
    public static function get_forum_template() {
	    $tmp['forum_header_background'] = 'bg-gradient-primary text-white';
        return $tmp;
	}	
}
