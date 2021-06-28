<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

$SIGNIN_TEMPLATE = [];


$SIGNIN_WRAPPER['signin']['SIGNIN_LOGIN_HREF'] = '<li  class="nav-item"><a class="nav-link" href="{---}"><i class="fa fa-user"></i>&nbsp;{LAN=LAN_LOGINMENU_51}</a></li>';

$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<li  class="nav-item"><a class="nav-link" href="{---}"><i class="fa fa-sign-out"></i>&nbsp;{LAN=LAN_LOGINMENU_3}</a></li>';

$SIGNIN_TEMPLATE['signin'] = ' {SIGNIN_LOGIN_HREF}{SIGNIN_SIGNUP_HREF} ';



$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<li class="nav-item"><a class="nav-link" href="{---}"><i class="fa fa-cogs"></i>&nbsp;{LAN=LAN_LOGINMENU_11}</a></li>';
$SIGNIN_WRAPPER['signout']['SIGNIN_USERSETTINGS_HREF'] = '<li class="nav-item"><a class="nav-link" href="{---}"><i class="fa fa-cog"></i>&nbsp; {LAN=LAN_SETTINGS}</a></li>';
$SIGNIN_WRAPPER['signout']['SIGNIN_PROFILE_HREF'] = '<li class="nav-item"><a class="nav-link" href="{---}"><i class="fa fa-user"></i>&nbsp;  {LAN=LAN_LOGINMENU_13}</a></li>';
$SIGNIN_WRAPPER['signout']['SIGNIN_LOGOUT_HREF'] = '<li class="nav-item"><a class="nav-link" href="{---}"><i class="fa fa-power-off"></i>&nbsp;{LAN=LAN_LOGOUT}</a></li>';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '<li class="nav-item dropdown">{---}</li>';

 
$SIGNIN_TEMPLATE['signout'] = '
<style> .pm-nav {padding: 0rem; }</style>
 
	<li class="nav-item"><a class="nav-link" href="#"><span>{LAN=LAN_THEME_SIGNIN_01}{USER_AVATAR: w=20&h=20&crop=1&shape=circle} {SIGNIN_USERNAME: username=1}</span></a></li>
     {SIGNIN_PM_NAV}
     {SIGNIN_USERSETTINGS_HREF}
     {SIGNIN_PROFILE_HREF}
     {SIGNIN_ADMIN_HREF}
     {SIGNIN_LOGOUT_HREF}
 ';

