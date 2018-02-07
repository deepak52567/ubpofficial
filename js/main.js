$(document).ready(function () {
	$('a[href^="#"]').click(function(e) {
		e.preventDefault();
		var target = this.hash;
		var $target = $(target);
		$('html, body').animate({
			'scrollTop': $target.offset().top
		}, 800, 'swing');
	});
});

// $(window).scroll(function () {
// 	var windscroll = $(window).scrollTop();
// 	var dispvalue = ($(window).height()) - 70;
// 	if(headerColor !== undefined) {
// 		if (windscroll >= dispvalue) {
// 			$('header').css('background', headerColor);
// 		} else {
// 			$('header').css('background', 'transparent');
// 		}
// 	}
// });
$(document).ready(function () {
	var $ani_element = $('.item');
	var $window = $(window);
	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');
	function check_if_in_view() {
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = (window_top_position + window_height);

		$.each($ani_element, function() {
			var $element = $(this);
			// var element_height = $element.outerHeight();
			var element_top_position = $element.offset().top + 200;
			// var element_bottom_position = (element_top_position + element_height);
			if (element_top_position <= window_bottom_position) {
				$element.addClass('trans-ani');
			}
			//check to see if this current container is within viewport
			// if ((element_bottom_position >= window_top_position) &&
			//     (element_top_position <= window_bottom_position)) {
			// 	$element.addClass('trans-ani');
			// } else {
			// 	$element.removeClass('trans-ani');
			// }
		});
	}
});


function openCloseMenu() {
	var m = document.getElementById('sidenavdrawer');
	m.classList.toggle('reveal');
}

function testfunc(id) {
	$('.fullscreen-player').css('display', 'flex');
	$('.fullscreen-player').append('<iframe class="main-player" src="https://www.youtube.com/embed/' + id + '" frameborder="0" allowfullscreen></iframe>');
}

function galleryShow() {
	$.ajax({
		url: '/showcase.php',
		success: function (html) {
			$('.main').append(html);
		}
	});
}
