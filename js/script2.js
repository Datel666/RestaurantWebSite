
$(document).ready(function()
{
	// toggler btn
	$('.navbar-toggler').click(function(){

		$('.navbar-toggler').toggleClass('change')
	})
	// sticky navbar

	$(window).scroll(function(){

		let position = $(this).scrollTop();
		if(position>= 710){
			$('.navbar').addClass('navbar-background');
			$('.navbar').addClass('fixed-top');
		}
		else{

			$('.navbar').removeClass('navbar-background');
			$('.navbar').removeClass('fixed-top');
		}

	})


	$('.popup').magnificPopup();

	
	// magnific popup
	$('.parent-container').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery:{
			enabled:true
		}
	})
})