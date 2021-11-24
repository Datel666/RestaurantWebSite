$(document).ready(function()
{
	// toggler btn
	$('.navbar-toggler').click(function(){

		$('.navbar-toggler').toggleClass('change')
	})
	// sticky navbar

	$(window).scroll(function(){

		let position = $(this).scrollTop();
		if(position>= 0){
			$('.navbar').addClass('navbar-background');
			$('.navbar').addClass('fixed-top');
		}
		else{

			$('.navbar').removeClass('navbar-background');
			$('.navbar').removeClass('fixed-top');
		}

	})

	$('.popup').magnificPopup();

	

	$('.item').magnificPopup({
			type:'image',
			markup: '<div class="mfp-figure">'+
            '<div class="mfp-close"></div>'+
            '<div class="mfp-img"></div>'+ // Floated left
            '<div class="mfp-title"></div>'+ // This is floated right shows up on the right side
            '<div class="mfp-bottom-bar">'+
              '<div class="mfp-counter"></div>'+
            '</div>'+
          '</div>', // Popup HTML markup. `.mfp-img` div will be replaced with img tag, `.mfp-close` by close button

  cursor: 'mfp-zoom-out-cur', // Class that adds zoom cursor, will be added to body. Set to null to disable zoom out cursor. 

  tError: '<a href="%url%">The image</a> could not be loaded.' // Error message
	});
	// magnific popup
	$('.parent-container').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery:{
			enabled:true
		},
		markup: '<div class="mfp-figure">'+
            '<div class="mfp-close"></div>'+
            '<div class="mfp-img"></div>'+ // Floated left
            '<div class="mfp-title"></div>'+ // This is floated right shows up on the right side
            '<div class="mfp-bottom-bar">'+
              '<div class="mfp-counter"></div>'+
            '</div>'+
          '</div>', // Popup HTML markup. `.mfp-img` div will be replaced with img tag, `.mfp-close` by close button

  cursor: 'mfp-zoom-out-cur', // Class that adds zoom cursor, will be added to body. Set to null to disable zoom out cursor. 

  tError: '<a href="%url%">The image</a> could not be loaded.' // Error message
  
	})
})