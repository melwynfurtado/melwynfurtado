(function($, global) {
	$(document).ready(function(){
      	$('a').smoothScroll({
      		speed: 1000,
      		offset: -160
      	});

		$(".fancybox").fancybox();
	});
})(jQuery, window);