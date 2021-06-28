<?php
// $Id$

if (!defined('e107_INIT')) { exit; }

$c_class == '';
if(defined('e_IFRAME') AND e_IFRAME == true)  {
	$w_class =  ' class="container"';

};
 
// Starter for v2. - Bootstrap 
$LOGIN_TEMPLATE['page']['header'] = "
<div id='login-template' {$w_class} >
	<div class='text-center row'>
		<div class='col-md-offset-3 col-md-6 text-center'> 
			{LOGO=login}
		</div>
	</div>		
	";

$LOGIN_TEMPLATE['page']['body'] = '{SETSTYLE=nocaption} 
<div class="row">  
	<div class="col-md-offset-3 col-md-6 text-center"> 
	{LOGIN_TABLE_LOGINMESSAGE}
	<h3 class="hometoptitle">'.LAN_LOGIN_3.' | '.SITENAME.'</h3>
</div>
    
	 ';
	if (e107::pref('core', 'password_CHAP') == 2)
	{
		$LOGIN_TEMPLATE['page']['body'] .= "
    	<div style='text-align: center' id='nologinmenuchap'>"."Javascript must be enabled in your browser if you wish to log into this site"."
		</div>
    	<span style='display:none' id='loginmenuchap'>";
	}
	else
	{
	  $LOGIN_TEMPLATE['page']['body'] .= "</div>";
	}

/* workround */	
/*$LOGIN_TEMPLATE['page']['header'] .= $LOGIN_TEMPLATE['page']['body'];
$LOGIN_TEMPLATE['page']['body'] = '';*/


$LOGIN_WRAPPER['page']['LOGIN_TABLE_USERNAME'] = "";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_PASSWORD'] = "";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_SECIMG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_TEXTBOC'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_REMEMBERME'] = "<div class='form-group checkbox'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SUBMIT'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_FOOTER_USERREG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_LOGINMESSAGE'] = "<div class='alert alert-danger'>{---}</div>";


// $LOGIN_WRAPPER['page']['LOGIN_TABLE_FPW_LINK'] = "<div class='form-group'>{---}</div>";

$LOGIN_TEMPLATE['page']['body'] .= '
<div class="row">  
  	<div class="col-md-offset-3 col-md-6 text-center" style="margin-bottom: 10px;"> 
        <div class="forumheader"  style="text-align:center;" ><img src="'.THEME_ABS.'images/password.png" alt="" /> '.LAN_THEME_LOGIN_4.'</div> 
    	</div>
		<div class="col-md-offset-3 col-md-6 text-center "> 
			{SOCIAL_LOGIN: size=3x}
		</div>
	    <div class="col-md-offset-3 col-md-6 text-center "> 
	     	<div class="form-group  row"><div class="col-md-3 col-sm-3 col-xs-12 vcenter"><label class="title_clean">'.LAN_LOGIN_1.'</label></div>
			 <div class="col-md-9 col-sm-9 col-xs-12 ">{LOGIN_TABLE_USERNAME}</div></div>
			 <div class="form-group row"><div class="col-md-3 col-sm-3 col-xs-12 vcenter"><label class="title_clean">'.LAN_LOGIN_2.'</label></div>
			 <div class="col-md-9  col-sm-9 col-xs-12">{LOGIN_TABLE_PASSWORD}</div></div>  
		</div> 
 	</div>
 
   <div class="col-md-12 text-center">
		{LOGIN_TABLE_SECIMG_SECIMG} {LOGIN_TABLE_SECIMG_TEXTBOC}
        {LOGIN_TABLE_REMEMBERME}
        {LOGIN_TABLE_SUBMIT}
  	</div>
 <div>';

$LOGIN_TEMPLATE['page']['footer'] =  "
   </div>
			<div style='font-weight: bold;' class='text-center' > 
			<div class='col-md-12  col-xs-12 '> 
				{LOGIN_TABLE_SIGNUP_LINK} &nbsp;&nbsp;&nbsp;
				{LOGIN_TABLE_FPW_LINK}
			</div> 
		</div>
	";
	



?>