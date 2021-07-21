<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/user_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

//  Bootstrap 4 v2.x Standards.


	$USER_TEMPLATE = array(); // reset the legacy template above.
	$USER_WRAPPER = array(); // reset all the legacy wrappers above.

//<li class="d-flex"><p class="mb-0">{LAN=USER_63}</p><div class="ms-auto">{USER_REALNAME}</li><li><hr class="horizontal dark"></li>
	$USER_TEMPLATE['addon']  = '<li class="d-flex"><p class="mb-0">{USER_ADDON_LABEL}</p><div class="ms-auto">{USER_ADDON_TEXT}</li><li><hr class="horizontal dark"></li>';

	$USER_TEMPLATE['extended']['start'] = '';
	$USER_TEMPLATE['extended']['end']   = '';

	$USER_TEMPLATE['extended']['item'] = '
		<div class="row {EXTENDED_ID}">
		    <div class="ue-label col-xs-12 col-md-4">{EXTENDED_NAME}</div>
		    <div class="ue-value col-xs-12 col-md-8">{EXTENDED_VALUE}</div>
		</div>
		';


	$USER_TEMPLATE['list']['start']  = "
		<div class='content user-list'>
		<div class='center'>{LAN=USER_56} {TOTAL_USERS} 
		<br />
        {USER_FORM_START}
        <div class='row row-cols-lg-auto g-3 align-items-center justify-content-end user-records'>
          <div class='col-auto'> 
            {LAN=SHOW}:  
          </div>
          <div class='col-auto'>
              {USER_FORM_RECORDS}
          </div>
          <div class='col-auto'>
            {LAN=USER_57}:  
          </div>
          <div class='col-auto'>
              {USER_FORM_ORDER}
          </div>
            <div class='col-auto'>
              {USER_FORM_SUBMIT}
          </div>
        </div>
        {USER_FORM_END}
		</div>
		 
		<br />
		<br />
		<table style='".USER_WIDTH."' class='table fborder e-list'>
		<thead>
		<tr>
		<th class='fcaption' style='width:2%'>&nbsp;</th>
		<th class='fcaption' style='width:20%'>{LAN=USER_58}</th>
		<th class='fcaption' style='width:20%'>{LAN=USER_60}</th>
		<th class='fcaption' style='width:20%'>{LAN=USER_59}</th>
		</tr>
		</thead>
		<tbody>
		{SETIMAGE: w=40}
	";


	$USER_TEMPLATE['list']['item']  = "
	<tr>
		<td class='forumheader3' style='width:2%'>{USER_PICTURE}</td>
		<td class='forumheader3' style='width:20%'>{USER_ID}: {USER_NAME_LINK}</td>
		<td class='forumheader3' style='width:20%'>{USER_EMAIL}</td>
		<td class='forumheader3' style='width:20%'>{USER_JOIN}</td>
	</tr>
	";

	$USER_TEMPLATE['list']['end']  = "
	</tbody>
	</table>
	</div>
	";

//<li class="d-flex"><p class="mb-0">{LAN=USER_66}</p><div class="ms-auto">{USER_VISITS}</span></li><li><hr class="horizontal dark"></li> 
	// View shortcode wrappers.
	$USER_WRAPPER['view']['USER_COMMENTPOSTS']      = '<li class="d-flex"><p class="mb-0">{LAN=USER_68}</p><div class="ms-auto">{---}';
	$USER_WRAPPER['view']['USER_COMMENTPER']        = ' ( {---}% )</span></li><li><hr class="horizontal dark"></li>';
	$USER_WRAPPER['view']['USER_SIGNATURE']         = '<div>{---}</div>';
	$USER_WRAPPER['view']['USER_RATING']            = '<div>{---}</div>';
	$USER_WRAPPER['view']['USER_SENDPM']            = '<div>{---}</div>';
	$USER_WRAPPER['view']['PROFILE_COMMENTS']       = '<div class="clearfix">{---}</div>';
//	$USER_WRAPPER['view']['PROFILE_COMMENT_FORM']   = '{---} </div>';

	$USER_TEMPLATE['view'] 				= '
	{SETIMAGE: w=600}
     <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url({USER_PHOTO: type=url}); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
     </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">  
                {USER_PICTURE: shape=circle&link=1&class=w-100 border-radius-lg shadow-sm}
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {USER_NAME}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                {USER_SIGNATURE}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item">
                  {USER_SENDPM}
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    
                    <span class="ms-1">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                     
                    <span class="ms-1">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>    
      
     <div class="container py-4">
      <div class="row">
        <div class="col-12 col-lg-6">
           <div class="card mb-3 mt-lg-0 mt-4">
            <div class="card-body pb-0">
              <div class="row align-items-center mb-3"><h5 class="mb-1 text-gradient text-primary">
                   About
              </h5>
              </div>
              <ul class="list-unstyled mx-auto">
                <li class="d-flex"><p class="mb-0">{LAN=USER_63}</p><div class="ms-auto">{USER_REALNAME}</li><li><hr class="horizontal dark"></li>
                <li class="d-flex"><p class="mb-0">{LAN=USER_02}</p><div class="ms-auto">{USER_LOGINNAME}</li><li><hr class="horizontal dark"></li> 
                <li class="d-flex"><p class="mb-0">{LAN=USER_60}</p><div class="ms-auto">{USER_EMAIL}</li><li><hr class="horizontal dark"></li> 
                <li class="d-flex"><p class="mb-0">{LAN=USER_54}:</p><div class="ms-auto">{USER_LEVEL}</li><li><hr class="horizontal dark"></li> 
                <li class="d-flex"><p class="mb-0">{LAN=USER_59}:</p><div class="ms-auto">{USER_JOIN}<br /><small class="padding-left">{USER_DAYSREGGED}</small></li><li><hr class="horizontal dark"></li> 
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
           <div class="card mb-3 mt-lg-0 mt-4">
            <div class="card-body pb-0">
              <div class="row align-items-center mb-3"><h5 class="mb-1 text-gradient text-primary">
                   Activity 
              </h5>
              </div>
              <ul class="list-unstyled mx-auto">
                <li class="d-flex"><p class="mb-0">{LAN=USER_65}</p><div class="ms-auto">{USER_LASTVISIT}<br /><small class="padding-left">{USER_LASTVISIT_LAPSE}</small></li><li><hr class="horizontal dark"></li>
                
                <li class="d-flex"><p class="mb-0">{LAN=USER_66}</p><div class="ms-auto">{USER_VISITS}</span></li><li><hr class="horizontal dark"></li> 
                {USER_COMMENTPOSTS}{USER_COMMENTPER} 
                {USER_ADDONS}
              </ul>
            </div>
          </div>
        </div>          
        </div>
         
	<div class="user-profile user-profile-bs4 row">
	    <div class="col-md-12">
	        <div class="panel panel-default panel-profile card card-profile  clearfix">
	             
	            <div class="panel-body card-body text-center">
	                
	                <div class="profile-header">
	                    <h4>{USER_NAME}</h4>
	                    {USER_SIGNATURE}
	                    {USER_RATING}
	                    {USER_SENDPM}
	                </div>
	            </div>
	            <div class="panel-body card-body">
	      
	                
	                 
	                {USER_EXTENDED_ALL}
                    
	                <div class="row"></div>
	            </div>
	            <div class="panel-body card-body text-center">
	                {USER_UPDATE_LINK}
	            </div>
                   <div class="panel-body card-body">
	                <ul class="pagination d-flex justify-content-between user-view-nextprev">
	                    <li class="page-item previous">
	                       {USER_JUMP_LINK=prev}
	                    </li>
		               <li>
	                       <!-- Back to List? -->
	                    </li>
	                    <li class="page-item next">
	                       {USER_JUMP_LINK=next}
	                    </li>
	                </ul>
	            </div>
	        </div>
			
	          
		
		
	    </div>
	</div>
		<!-- Start Comments -->
	  {PROFILE_COMMENTS}
	  <!-- End Comments -->
	 
	';








