jQuery(document).ready(function($){
	var navOffset = $(".navmenu").offset().top;

	$(window).scroll(function(){
		var scrollPos = $(window).scrollTop();

		if(scrollPos >= navOffset){
			$(".navmenu").addClass("fixed-top");
			$(".navmenu").removeClass("sticky-top");
		}
		else{
			$(".navmenu").removeClass("fixed-top");
			$(".navmenu").addClass("sticky-top");
		}
	})

})