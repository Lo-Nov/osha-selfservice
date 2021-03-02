(function($) {
	$("#category").on("click", function(){
		showcategory();
	});
	$("#location").on("click", function(){
		showlocation();
	});
	
	$('.location-toggle-btn').on("click", function(){
		showlocation();
	});
	
	$(".category-toggle-btn").on("click", function(){
		showlocation();
	});
	function showlocation()
	{
		$(".location-list").slideToggle();
		$(".location-droper").toggleClass("drop-shadow");
	}
	
	function showcategory()
	{
		$(".category-list").slideToggle();
	}
	
	function hidelist()
	{
		$(".Drop-down-items-container").slideUp();
	}
	
	$(".Drop-down-items-container ul li:not(.manual)").on("click", function(){
		hidelist();
	});
	
	$(".location-list li:not(.manual)").on("click", function(){
		var value=$(this).text();
		console.log(value);
		$("#location").val(value);
	});
	
	$(".category-list li").on("click", function(){
		var value=$(this).text();
		console.log(value);
		$("#category").val(value);
	});
	
	$("#category-manual").change(function(){
		var value=$(this).val();
		console.log(value);
		$("#category").val(value);
		hidelist();
	});
	
	$("#category-manual").change(function(){
		var value=$(this).val();
		console.log(value);
		$("#category").val(value);
		hidelist();
	});
	
	$("#location-manual").change(function(){
		var value=$(this).val();
		console.log(value);
		$("#location").val(value);
	});
	
})(jQuery);
