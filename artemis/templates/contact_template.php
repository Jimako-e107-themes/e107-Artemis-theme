<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Contact Template
 */
 // $Id$

if (!defined('e107_INIT')) { exit; }
 

$CONTACT_TEMPLATE['info'] = '
<h3 class="text-white">Contact Information</h3>
                    <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get back to you within 24 hours.</p>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fa fa-phone text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">{CONTACT_INFO: type=phone1}</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fa fa-envelope text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">{CONTACT_INFO: type=email1}</span>
                      </div>
                    </div>
                    <div class="d-flex p-2 text-white">
                      <div>
                        <i class="fa fa-map-marker  text-sm"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-sm opacity-8">{CONTACT_INFO: type=address}</span>
                      </div>
                    </div>
                    <div class="mt-4">
						{XURL_ICONS: template=contact}
                    </div>
                  </div>
';


$CONTACT_TEMPLATE['menu'] =  '
	<div class="contactMenuForm">
         {CONTACT_INFO: type=message} 
		<div class="control-group form-group mb-3">
			<label for="contactName">{LAN=CONTACT_03}</label>
				{CONTACT_NAME}
		 </div>
		 
		<div class="control-group form-group mb-3">
			<label class="control-label" for="contactEmail">{LAN=CONTACT_04}</label>
				{CONTACT_EMAIL}
		</div>
		<div class="control-group form-group mb-3">
			<label for="contactBody" >{LAN=CONTACT_06}</label>
				{CONTACT_BODY=rows=5&cols=30}
		</div>
		<div class="form-group mb-3"><label for="gdpr">{LAN=CONTACT_24}</label>
			<div class="checkbox form-check">
				<label>{CONTACT_GDPR_CHECK} {LAN=CONTACT_21}</label>
				<div class="help-block">{CONTACT_GDPR_LINK}</div> 
			</div>
		</div>
		{CONTACT_SUBMIT_BUTTON: class=btn btn-sm btn-small btn-primary button}
	</div>       
 ';
 


// Shortcode wrappers.
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= "<div class='control-group form-group'><label for='code-verify'>{CONTACT_IMAGECODE_LABEL}</label> {---}";
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= "{---}</div>";
$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}{LAN=CONTACT_07}</div>";
$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>{LAN=CONTACT_14}</label>{---}</div>";




$CONTACT_TEMPLATE['form'] = "
	<form action='".e_SELF."' method='post' id='contactForm' class='mt-5' >"
	.'
	<div class="card-header px-4 py-sm-2 py-1">
                    <h2>Say Hi!</h2>
                    <p class="lead"> {CONTACT_INFO: type=message}</p>
    </div>
	<div class="card-body pt-1">
		<div class="row">
				  <div class="col-md-12 pe-2 mb-3">
						<label for="contactName">{LAN=CONTACT_03}</label>
						{CONTACT_NAME}
				  </div>
				  <div class="col-md-12 pe-2 mb-3">
				  		<label for="contactEmail">{LAN=CONTACT_04}</label>
					  	{CONTACT_EMAIL}
				  </div>
				  <div class="col-md-12 pe-2 mb-3">
					  <label for="contactSubject">{LAN=CONTACT_05}</label>
					   {CONTACT_SUBJECT}
					</div>
					<div class="col-md-12 pe-2 mb-3">
					<label for="contactBody">{LAN=CONTACT_06}</label>
					 {CONTACT_BODY}
				  </div>
		</div>
		<div class="row">
			<div class="m-2">
			{CONTACT_SUBMIT_BUTTON: class='.theme_settings::class_submit_button().'}
			</div>
		</div>
	</div>
	</form>';


// Set the layout and  order of the info and form.
$CONTACT_TEMPLATE['layout'] = '
<div class="row">
	<div class="col-lg-6">
	{---CONTACT-FORM---}
	</div>
	<div class="col-lg-6 position-relative bg-cover px-0" style="background-image: url({THEME_PATH}assets/img/curved_images/curved8.jpg)">
		<div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
			<img src="{THEME_PATH}assets/img/wave-1.svg" class="h-100 ms-n2" alt="vertical-wave">
		</div>
		<div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
			<div class="mask bg-gradient-primary opacity-9"></div>
			<div class="p-5 ps-sm-8 position-relative text-left my-auto z-index-2">
			{---CONTACT-INFO---}
			</div>
		</div>
	</div>
</div';
 
 
$CONTACT_TEMPLATE['email']['subject'] = "{CONTACT_SUBJECT}";





