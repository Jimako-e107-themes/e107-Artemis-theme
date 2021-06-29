<?php

class theme_settings
{
    public static $membersonly_start = '';
    public static $membersonly_end = '';

    public function __construct()
    {
        $this->membersonly_start = 'xxx';
    }

    public static function get_membersonly_template()
    {
        $tmp['membersonly_start'] = '
          <section class="page-header section-height-100">
            <div class="container">
              <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7 mx-auto">';

        $tmp['membersonly_end'] = '
        </div></div></div></section>
        ';

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
}
