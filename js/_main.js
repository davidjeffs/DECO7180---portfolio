$(function() {
    	$('.myImg').on('click', function() {
			$('.enlargeImageModalSource').attr('src', $(this).attr('src'));
			$('#enlargeImageModal').modal('show');
		});
});

$(function() {
    	$('.imgTwo').on('click', function() {
			$('.enlargeImageModalSource').attr('src', $(this).attr('src'));
			$('#enlargeImageModal').modal('show');
		});
});

//this duration would be increased in portfolio. have lowered it for demostration purposes.
$(document).ready(function() {
    $('#openingSlides').carousel({interval: 5000});
  });

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".header").addClass("scrolling");
        $('.iconLookup').attr('src', 'Images/changedIcon.png');
    } else {
        $(".header").removeClass("scrolling");
        $('.iconLookup').attr('src', 'Images/iconInitial.png');
    }
});