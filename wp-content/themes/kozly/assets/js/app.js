(function() {
	
	function openModal(){
		document.body.classList.remove('active');
		document.body.classList.add('open-modal');
	}
	var buttonSubmit = document.querySelector('#SEND_DATA');
	// var buttonSendMailer = document.querySelector('#SEND_MALLING');
	buttonSubmit.addEventListener('click', openModal);






	$(window).on('load', function () {
		$preloader = $('.loaderArea'),
		$loader = $preloader.find('.loader');
		$loader.fadeOut();
		$preloader.delay(350).fadeOut('slow');
		if($('.stat__count').length > 0){
			let percent_number_step2 = $.animateNumber.numberStepFactories.append('+');
			$('.stat__count').eq(0).animateNumber({ number: 3, }, 3000);
			$('.stat__count').eq(1).animateNumber({ number: 500, numberStep: percent_number_step2 }, 3000);
			$('.stat__count').eq(2).animateNumber({ number: 200, numberStep: percent_number_step2 }, 3000);
		}
	});

	$("#nav__toggle").on("click", function() {
		if($('body').hasClass('active')){
			$('body').removeClass('active');
		} else {
			if($('body').hasClass('open-modal')){
				$('body').removeClass('open-modal');
			} else{
				$('body').addClass('active');
			}

		}
	});

	$("#nav__cat a").on("click", function(event) {
		var blockId = $(this).attr('href');
		var blockOffset = $(blockId).offset().top;
		$("body").removeClass("active")
		 $("html, body").animate({
			scrollTop: blockOffset
		}, 500);
	});





	 
})();