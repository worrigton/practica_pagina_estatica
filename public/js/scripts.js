jQuery(function($) {
    "use strict";
   
    
});

//Boton Arriba


$(document).ready(function(){
	$('.up').hide();

	$(window).scroll(function(){
		if($(this).scrollTop() >200){
			$('.up').fadeIn('slow');
		}else{
			$('.up').fadeOut('slow');
		}
	});

	$('.up').click(function(){
		$('body, html').animate({
			scrollTop: 0
		},2000);
	});
});