//navbar affix
$(window).on('scroll', function (event) {
    var scrollValue = $(window).scrollTop();
    if (scrollValue > 500) {
        $('.navbar').addClass('affix');
    } else{
        $('.navbar').removeClass('affix');
    }
});

//scrollUp link with fade in and out effect and with smooth scrollUp effect
$(document).ready(function(){
  // Add s  crollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});

  // Add smooth scrolling to the scroll-top
  $(".stp a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (1000) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 75, function(){

      // Add hash (#) to URL when done scrolling (default click behaviour
      window.location.hash = hash;
    });
  });
  $(window).scroll(function(){
		if($(this).scrollTop()>700)
		{
			$('.scrollup').fadeIn();
		}
		else
		{
			$('.scrollup').fadeOut();
		}
	});
});


