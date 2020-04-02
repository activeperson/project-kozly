(function() {




	

















	// async function goFetch(){
	// 	console.log(fetch);
	// 	let request = `https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=TBS+TRUE+BARBERSHOP&inputtype=textquery&fields=photos,permanently_closed,types,place_id,formatted_address,name,rating,opening_hours,icon,geometry&key=`;


	// 	let API_KEY = `AIzaSyAcJC_cNg91dJKxDBR7_GJZ1ji32QzaTIw`;


	// 	fetch(`https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJN1t_tDeuEmsRUsoyG83frY4&fields=name,rating,formatted_phone_number&key=AIzaSyAcJC_cNg91dJKxDBR7_GJZ1ji32QzaTIw`, { mode: 'no-cors', method: 'GET' }).then(data => console.log(data));
	// }
	// goFetch();



// function initialize() {
// 	var map;

//   // Create a map centered in Pyrmont, Sydney (Australia).
//   map = new google.maps.Map(document.getElementById('map'), {
//     center: {lat: -33.8666, lng: 151.1958},
//     zoom: 15
//   });

//   // Search for Google's office in Australia.
//   var request = {
//     location: map.getCenter(),
//     radius: '500',
//     query: 'Google Sydney'
//   };

//   var service = new google.maps.places.PlacesService(map);
//   service.textSearch(request, callback);
// }

// Checks that the PlacesServiceStatus is OK, and adds a marker
// using the place ID and location from the PlacesService.
// function callback(results, status) {
//   if (status == google.maps.places.PlacesServiceStatus.OK) {
//     var marker = new google.maps.Marker({
//       map: map,
//       place: {
//         placeId: results[0].place_id,
//         location: results[0].geometry.location
//       }
//     });
//   }
// }

// google.maps.event.addDomListener(window, 'load', initialize);


	(function(){
		$(window).on('resize load', function(){
			if(window.innerHeight <= 850 && window.innerWidth >= 991){
				$('header').addClass('resize');
			} else {
				$('header').removeClass('resize');
			}
		})
	})();


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