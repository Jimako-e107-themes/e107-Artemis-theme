<?php
/*
* Copyright (c) e107 Inc 2013 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
*
* Featurebox core category templates
*/

// TODO - list of all available shortcodes & schortcode parameters
$FEATUREBOX_CATEGORY_TEMPLATE = array();

// Bootstrap 3
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['list_start'] = '
<header class="top-0">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
{FEATUREBOX_NAVIGATION|bootstrap5_carousel=loop&uselimit=1}
 
    
';

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['list_end'] = '
	  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
                    

</div>
</header> 
';


$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['nav_start'] = '<div class="carousel-indicators">';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['nav_item'] = '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{FEATUREBOX_COUNTER=0}" class="{FEATUREBOX_ACTIVE}" aria-current="true" aria-label="Slide {FEATUREBOX_COUNTER=0}"></button>';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['nav_end'] = '</div>';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap5_carousel']['nav_separator'] = '';

/**
 * Template information.
 * Allowed keys:
 * - title: Dropdown title (language constants are accepted e.g. 'MY_LAN')
 * - [optional] description: Template description (language constants are accepted e.g. 'MY_LAN') - UNDER CONSTRUCTION
 * - [optional] image: Template image preview (path constants are accepted e.g. '{e_PLUGIN}myplug/images/mytemplate_preview.png') - UNDER CONSTRUCTION
 *
 * @var array
 */
$FEATUREBOX_CATEGORY_INFO = array(
	'bootstrap_carousel' 	=> array('title' => 'Bootstrap v2 Carousel', 		'description' => "Bootstrap's Hero slider"),
	'bootstrap3_carousel' 	=> array('title' => 'Bootstrap v3 Carousel', 		'description' => "Bootstrap's Hero slider"),
	'bootstrap5_carousel' 	=> array('title' => 'Bootstrap v5 Carousel', 		'description' => "Bootstrap's Hero slider"),
);
