$(window).on('load', function() {
	
	$(".parking-btn").on("click",function()
						{
		$(this).css("transform","scale(1.5)");
		$(".parking-btns").css("display","flex");
		
	});
	
	$(".sub-menu-buttons .close").on("click",function()
									{
		$(".sub-menu-buttons-container").css("display","none");
		$(".revenue-container").css("transform","scale(1)");
	})
	
	$(".revenue-container").on("click", function(){
		$(this).css("transform","scale(1.5)");
	})
	
	$(".owl-carousel").owlCarousel({
		items:4,
		loop:false
	});
  
})(jQuery);

