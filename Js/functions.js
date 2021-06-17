$(window).on('load', function(){
	$('.menu-mobile ul li , .menu-desktop ul li').click(function(){
		var href = $(this).attr('href');
		var offSetTop = $(href).offset().top;

		$('html,body').animate({'scrollTop':offSetTop});

		return false;
	});
	$('i#iconmenu').click(function(){
		$('.menu-mobile').slideToggle();
	});

});