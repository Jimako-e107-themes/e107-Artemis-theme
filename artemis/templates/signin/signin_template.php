<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

$SIGNIN_TEMPLATE = [];

$main_li_class = "nav-item dropdown dropdown-hover mx-2";
$main_a_class  = "nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center";
$main_sub_a_class = "dropdown-item border-radius-md";
$main_caret = '<img src="'.e_THEME_ABS.'artemis/soft-ui/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">';
$main_caret_white = '<img src="'.e_THEME_ABS.'artemis/soft-ui/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-1">';

$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<li class="'.$main_li_class.'"><a class="btn btn-sm  bg-gradient-info  btn-round mb-0 me-1 btn-nowrap" href="{---}">{LAN=LAN_LOGINMENU_3}</a></li>';

$SIGNIN_TEMPLATE['signin'] = '
			<ul class="navbar-nav navbar-right  mx-auto  ms-auto">
				{SIGNIN_SIGNUP_HREF}
				<li class="divider-vertical"></li>
				<li class="'.$main_li_class.' dropdown">
				<a class="btn btn-nowrap btn-sm bg-gradient-primary btn-round mb-0 me-1" data-bs-toggle="dropdown" href="#" data-toggle="dropdown">{LAN=LAN_LOGINMENU_51} '.$main_caret_white .'</a>
					<div class="dropdown-menu col-sm-12" style="min-width:250px; padding: 15px; padding-bottom: 0px;">
					
					{SIGNIN_FORM=start}
					<p>{SIGNIN_INPUT_USERNAME}</p>
					<p>{SIGNIN_INPUT_PASSWORD}</p>
	
					<div class="form-group"></div>
					{SIGNIN_IMAGECODE_NUMBER}
					{SIGNIN_IMAGECODE_BOX}
					
					<div class="checkbox">		
					<label class="string optional" for="bs3-autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="bs3-autologin" value="1">
					{LAN=LAN_LOGINMENU_6}</label>
					</div>
					<div class="d-grid gap-2" style="padding-bottom:15px">
					<input class="btn btn-primary btn-block" type="submit" name="userlogin" id="bs3-userlogin" value="{LAN=LAN_LOGINMENU_51}">			
					<a href="{SIGNIN_FPW_HREF}" class="btn btn-default btn-secondary btn-sm  btn-block">{LAN=LAN_LOGINMENU_4}</a>
					<a href="{SIGNIN_RESEND_LINK=href}" class="btn btn-default btn-secondary btn-sm  btn-block">{LAN=LAN_LOGINMENU_40}</a>
					</div>
					{SIGNIN_FORM=end}
					</div>
				
				</li>
	
			</ul>';



$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = ' <a class="dropdown-item signin-sc admin" id="signin-sc-admin" href="{---}"><span class="fa fa-cogs"></span> {LAN=LAN_LOGINMENU_11}</a> ';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '<li class="dropdown dropdown-pm">{---}</li>';


$SIGNIN_TEMPLATE['signout'] = '

		<ul class="navbar-nav navbar-right mx-auto  ms-auto">
			{SIGNIN_PM_NAV}
			<li class="'.$main_li_class.'">
			 <a href="#" class="'.$main_a_class.'" data-bs-toggle="dropdown" data-toggle="dropdown">{USER_AVATAR: w=30&h=30&crop=1&shape=circle} {SIGNIN_USERNAME}'.$main_caret.'</a>
				<div class=" dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3">
			 
					<a class="dropdown-item border-radius-md" href="{SIGNIN_USERSETTINGS_HREF}"><span class="fa fa-cog"></span> {LAN=LAN_SETTINGS}</a>
				 
			 
					<a class="dropdown-item border-radius-md" role="button" href="{SIGNIN_PROFILE_HREF}"><span class="fa fa-user"></span> {LAN=LAN_LOGINMENU_13}</a>
			 
				 
				{SIGNIN_ADMIN_HREF}
			 
				<a class="dropdown-item border-radius-md" href="{SIGNIN_LOGOUT_HREF}"><span class="fa fa-power-off"></span> {LAN=LAN_LOGOUT}</a> 
				</div>
			</li>
		</ul>
		
		';
