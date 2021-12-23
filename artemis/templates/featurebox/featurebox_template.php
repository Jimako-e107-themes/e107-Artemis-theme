<?php
/*
* Copyright (c) e107 Inc 2009 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id$
*
* Featurebox core item templates
*/

global $sc_style;


// e107 v2.x Defaults. 

$FEATUREBOX_TEMPLATE['bootstrap_carousel_default'] = '{SETIMAGE: w=0&h=0}
 
<div class="carousel-item {FEATUREBOX_ACTIVE}">
      <img src="{FEATUREBOX_IMAGE: src=1}" class="d-block w-100" alt="{FEATUREBOX_TITLE}">
      <div class="carousel-caption d-none d-md-block">
        <h5>{FEATUREBOX_TITLE}</h5>
        {FEATUREBOX_TEXT}
      </div>
    </div>
 ';

 
$FEATUREBOX_TEMPLATE['bootstrap_carousel_header'] = '{SETIMAGE: w=0&h=0}
<div class="carousel-item {FEATUREBOX_ACTIVE}">            
    <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url({FEATUREBOX_IMAGE: src=1});">              
      <span class="mask bg-gradient-dark">
      </span>              
<div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center mx-auto mt-n7">
 
              <h1 class="text-white">{FEATUREBOX_TITLE}</h1>
              <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">{FEATUREBOX_TEXT}</p>
              
            </div>
          </div>
        </div>    
  </div>      
</div>
 '; 
 
/* START HEADER 2 w/ waves and typed text */
 
$FEATUREBOX_TEMPLATE['bootstrap_header2'] = '{SETIMAGE: w=0&h=0}
<div class="carousel-item {FEATUREBOX_ACTIVE}"> 
<div class="page-header min-vh-75 border-radius-xl" style="background-image: url({FEATUREBOX_IMAGE: src=1});">
    <span class="mask bg-gradient-dark"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-start">
          <h1 class="text-white">{FEATUREBOX_TITLE}</h1>
             
          <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">{FEATUREBOX_TEXT}</p>
          <br />
          <div class="buttons">
           {FEATUREBOX_BUTTON}
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
 '; 


$FEATUREBOX_INFO = array(
	
	'bootstrap_carousel_default' 	=> array('title' => 'Bootstrap', 				 	'description' => 'Title and Description'),
    'bootstrap_carousel_header' 	=> array('title' => 'Carousel Header', 		 	'description' => 'Title and Description'),
    'bootstrap_header2' 	=> array('title' => 'Carousel Header 2', 		 	'description' => 'Title and Description'),
);
