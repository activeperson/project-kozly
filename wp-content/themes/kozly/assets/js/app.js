$(function() {

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