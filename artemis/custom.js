


$(document).ready(function() {
 
 $( '.topics__control:empty' ).remove();
 
 
 $('span.glyphicon.glyphicon-envelope').each(function() {
 $(this).removeClass('glyphicon glyphicon-envelope');
 $(this).addClass('fas fa-envelope');
} )  

$('span.glyphicon.glyphicon-print').each(function() {
 $(this).removeClass('glyphicon glyphicon-print');
 $(this).addClass('fas fa-print');
} ) 
 
/*		$('i.fa-rss').each(function() {
			   $(this).addClass('fas');
		} ); 

		$('.btn-social i.fa-facebook').each(function() {
			$(this).removeClass('fa-facebook').addClass('fa-facebook-f');
	 	} );

		const pwd_button = document.getElementById('pwsubmit'); 
	    if(document.body.contains(pwd_button)){
			pwd_button.className = 'btn btn-primary btn-xl';
		}
		
      $('.dropdown-pm').find('ul.dropdown-menu').each(function() {
      	$(this).removeClass('dropdown-menu dropdown-menu-end').addClass('sub-menu');
      });
      
      $('.dropdown-pm').find('a.dropdown-item').each(function() {
      	$(this).removeClass('dropdown-item');
      }); 
*/	 	 
}); 