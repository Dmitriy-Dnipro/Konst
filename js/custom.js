(function ($) {
	$(window).on('load', function () {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
		$('body').addClass('ios');
	} else{
		$('body').addClass('web');
	};
	$('body').removeClass('loaded'); 
});
/* viewport width */
function viewport(){
	var e = window, 
		a = 'inner';
	if ( !( 'innerWidth' in window ) )
	{
		a = 'client';
		e = document.documentElement || document.body;
	}
	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
};
/* viewport width */
$(function(){
	/* placeholder*/	   
	$('input, textarea').each(function(){
 		var placeholder = $(this).attr('placeholder');
 		$(this).focus(function(){ $(this).attr('placeholder', '');});
 		$(this).focusout(function(){			 
 			$(this).attr('placeholder', placeholder);  			
 		});
 	});
	/* placeholder*/

	$('.button-nav').click(function(){
		$(this).toggleClass('active'), 
		$('.main-nav-list').slideToggle(); 
		return false;
	});
	
	
	/*show search*/
	$(".seacrh-icon").on("click", function(){
		$(".header__search").toggleClass("show-seacrh");
	});
	/*end show search*/  

});

var handler = function(){
	
	var height_footer = $('footer').height();	
	var height_header = $('header').height();
	
	
	var viewport_wid = viewport().width;
	var viewport_height = viewport().height;

	
}
$(window).bind('load', handler);
$(window).bind('resize', handler);
})(jQuery);