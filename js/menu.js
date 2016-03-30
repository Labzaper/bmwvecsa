var main = function(){
	$('.icon-menu').click(function(){
		$('.menu').animate({
			left: '0px'
		}, 200);

		$('.container').animate({
			left: '285px'
		}, 200);
	});
};

$('.icon-close').click(function(){
	$('.menu').animate({
		left: '-285px'
	}, 200);

	$('.container').animate({
		left: '0px'
	}, 200);
});

$(document).ready(main);

// backtop button
(function($){$(document).ready(function(){$(".backtop").click(function(){$("html, body").animate({scrollTop:0},"1000")})})})(window.jQuery);