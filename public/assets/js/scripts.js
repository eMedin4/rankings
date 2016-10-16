$(document).ready(function() {


	$('.icon-responsive').on('click', function() {
		/*$(this).toggleClass('active');*/
		$('body').toggleClass('active');
	});

	$('html').on('click', function() {
		$('body').removeClass('active');
	});

	$('.sidebar').on('click', function(event){
    	event.stopPropagation();
 	});

	$('.icon-responsive').on('click', function(event){
    	event.stopPropagation();
 	});


});