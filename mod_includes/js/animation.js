jQuery(document).ready(function($){
	var $objetos = $('li.timeline');

	//hide timeline blocks which are outside the viewport
	$objetos.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).addClass('hidden');
		}
	});

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$objetos.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).hasClass('hidden') ) {
				$(this).removeClass('hidden').addClass('visible');			
			}
		});
	});
});

