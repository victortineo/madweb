$(document).ready(function(){
setTimeout(function(){
	// Scroll effect ancor
	$('.link-animation').find('a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname ==      this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: (target.offset().top) - 64
        }, 1000);
        return false;
      }
    }
  });
	// Multiples carousel bootstrap
	$('.carousel.bootstrap').each(function(){
        $(this).carousel({
            interval: 5000
        });
    });
	// BXSLIDER NOSSOS CLIENTES
	  $('.bxslider').bxSlider({
	    slideWidth: '350px',
	    minSlides: 1,
	    maxSlides: 4,
	    pager: false,
	    auto: true,
	    speed: 1000,
	    autoHover: true,
	    slideMargin: 10
	  });
	// CAROUSEL PARALLAX
	$('.container--parallax').each(function(){
		var $obj = $(this);
		$('#top').css('margin-bottom', $obj.height()+'px');
	 	$(window).resize(function() {
			$('#top').css('margin-bottom', $obj.height()+'px');
	 	}); 
	});
	// // CURRENT POSITION
	var parPosition = [];
	$('.vNav-section').each(function() {
	    parPosition.push($(this).offset().top);
	});

	$('.vNav a').click(function(){
		$('html, body').animate({
			scrollTop: ($( $.attr(this, 'href') ).offset().top)-70
		}, 500);
		return false;
	});

		$('.vNav ul li a').click(function () {
		$('.vNav ul li a').removeClass('active');
			$(this).addClass('active');
	}); 

	$('.vNav a').hover(function() {
	   $(this).find('.label').show();
	   }, function() {
	   $(this).find('.label').hide();
	});

	$(document).scroll(function(){
		var position = $(document).scrollTop(),
	        index; 
	        for (var i=0; i<parPosition.length; i++) {
	        if (position <= parPosition[i]) {
	            index = i;
	            break;
	        }
	    }
	$('.vNav ul li a').removeClass('active');
	    $('.vNav ul li a:eq('+index+')').addClass('active');
	});

		$('.vNav ul li a').click(function () {
		$('.vNav ul li a').removeClass('active');
			$(this).addClass('active');
	});

	$("#carousel-1").swiperight(function() { 
		$(this).carousel('prev'); 
	}); 
	$("#carousel-1").swipeleft(function() { 
		$(this).carousel('next'); 
	}); 

	// ZIGZAG HEIGHT FIX
	for (var i=1;i <= 4; i++){
		var $zigHeight = $('.zig__n'+i+' .zig__content-n2');
		var $height = $zigHeight.innerHeight();
		$zigContent2 = $('.zig__n'+i+' .zig__content-n1').css('height', $height+'px');
	}
	$(window).resize(function() {
		for (var i=1;i <= 4; i++){
			var $zigHeight = $('.zig__n'+i+' .zig__content-n2');
			var $height = $zigHeight.innerHeight();
			$zigContent2 = $('.zig__n'+i+' .zig__content-n1').css('height', $height+'px');
		}
	}); 
	
}, 500);//SET TIME OUT
// READY 
});