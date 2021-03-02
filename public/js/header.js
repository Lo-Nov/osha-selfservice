$(window).on('load', function() {
	
	$(".toogle-btn").on("click", function(){
		$(".menu-items").toggleClass("left");
	});
	
	$(".links-container li").on("click", function(){
		$(".menu-items").addClass("left");
	});
	
	$(".link-back").on("click", function(){
		$(".sub-menu-container").addClass("left");
		$(".menu-items").removeClass("left");
	});
	
	$("#business").on("click", function(){
		$(".business").removeClass("left").siblings().addClass("left");
	});
	
	$("#parking").on("click", function(){
		$(".parking").removeClass("left").siblings().addClass("left");
	});
	
	$("#rent").on("click", function(){
		$(".rent").removeClass("left").siblings().addClass("left");
	});
	
	$("#land").on("click", function(){
		$(".land").removeClass("left").siblings().addClass("left");
	});
	
	$("#construction").on("click", function(){
		$(".construction").removeClass("left").siblings().addClass("left");
	});

	$("#hygiene").on("click", function(){
		$(".hygiene").removeClass("left").siblings().addClass("left");
	});

	$("#corporate").on("click", function(){
		$(".corporate").removeClass("left").siblings().addClass("left");
	});
	
	$("#misce").on("click", function(){
		$(".misce").removeClass("left").siblings().addClass("left");
	});
	
	$("#alcohol").on("click", function(){
		$(".alcohol").removeClass("left").siblings().addClass("left");
	});
	
	$("#billing").on("click", function(){
		$(".billing").removeClass("left").siblings().addClass("left");
	});
	
	$("#adv").on("click", function(){
		$(".adv").removeClass("left").siblings().addClass("left");
	});
	
	$("#ses").on("click", function(){
		$(".ses").removeClass("left").siblings().addClass("left");
	});
  
})(jQuery);

