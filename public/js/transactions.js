(function($) {
	$(".main-transaction-container").on("click", function(){
		returnpannels();
		var parent=$(this).parent();		
		$(this).addClass("active-transaction").parent().siblings().children("active-transaction").removeClass("active-transaction");
		$(this).siblings(".transaction-more-details").addClass("display-flex");
		$(this).siblings(".transaction-more-details").slideDown();
		parente.siblings(".transaction-more-details").removeClass("display-flex");
		
//		$(".transaction-more-details").eq(index).removeClass("display-none");
//		console.log(index);
		
	});
	
	$(".close-panel-container").on("click", function(){
		$(this).parent().slideUp();	
		$(this).parent().removeClass("display-flex");
	});
	
	
	
	
	function returnpannels()
	{
		$(".main-transaction-container").removeClass("active-transaction");
		$(".transaction-more-details").slideUp();
		$(".transaction-more-details").removeClass("display-flex");
		
	}
	
})(jQuery);
