$(document).ready(function() {

	//should be fixed in core
    $('i.fa-rss').each(function() {
      	 $(this).addClass('fas');
  	} ); 
  	
 
    //changing class for sending PM - alternative: fix with sass 
    $('.userprofile').find('.sendpm').each(function() {
  	 $(this).removeClass().addClass('sendpm btn btn-info');
  	} );     
  	
    //changing class for author link - alternative:  fix with sass 
    $('.userprofile').find('.efiction_links').each(function() {
  	 $(this).removeClass().addClass('btn btn-outline-info');
  	} ); 
      
    //changing class for update profile link - alternative: fix with sass   
    $('.userprofile').find('.btn.btn-default.btn-secondary').each(function() {
  	 $(this).removeClass().addClass('btn btn-info px-4');
  	} );      
      
    //changing class for user pager - alternative: fix with sass   
    $('.userprofile').find('.page-link').each(function() {
  	 $(this).removeClass().addClass('btn btn-info');
  	} ); 
      
                   
});