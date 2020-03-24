$(function() {
	


	$(window).on('load', function () {
		$preloader = $('.loaderArea'),
		$loader = $preloader.find('.loader');
		$loader.fadeOut();
		$preloader.delay(350).fadeOut('slow');
		if($('.stat__count').length > 0){
			let percent_number_step2 = $.animateNumber.numberStepFactories.append('+');
			$('.stat__count').eq(0).animateNumber({
				number: 3,
			}, 3000);
			$('.stat__count').eq(1).animateNumber({
			  number: 500,
			  numberStep: percent_number_step2
			}, 3000);
			$('.stat__count').eq(2).animateNumber({
			  number: 200,
			  numberStep: percent_number_step2
			}, 3000);
		}
	});

	$("#nav__toggle").on("click", function() {

		$("body").toggleClass("active");

	});

	$("#nav__cat a").on("click", function(event) {

		var $this = $(this);
		var blockId = $(this).attr('href');
		var blockOffset = $(blockId).offset().top;
		$("body").removeClass("active")

		 $("html, body").animate({
			scrollTop: blockOffset
		}, 500);
		
	});
	 
});