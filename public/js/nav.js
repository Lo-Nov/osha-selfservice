$(document).ready(function()
{
	$(".search-options-panel").slideUp();
	$(".search-prediction-pc-container").slideUp();
	$(".search-options-panel").css("left","0");
	$('.search-prediction-pc-container').css("left","45px");
	$('.search-prediction-pc-container').css("right","155px");
	$(".search-prediction-pc-container1").slideUp();
	$(".search-prediction-pc-container1").css("left","0");
	$(".search-prediction-pc-container1").css("right","0");
	$(window).scroll(function(){
		var height=$('#header').height();
		var vscroll=$(this).scrollTop();
		if(vscroll>=164)
			{
				$('#headerfixed').addClass('fixed');
			}
		else
			{
				$('#headerfixed').removeClass('fixed');
			}
		
	});
$(".svg-search").click(function(){
	$("#toogle-search-bar").addClass("show");
	$('.jqmOverlay').css('display','block');
						 });
	$('.jqmOverlay').click(function()
						  {
		remove_search_bar();
	});
	$('.svg-close').click(function()
						  {
		remove_search_bar();
	});
	$('.svg-inline-search').click(function()
						  {
		$("#toogle-search-bar").addClass("show");
	$('.jqmOverlay').css('display','block');
	});
	$('#mobilemenu-overlay').click(function(){
		remove_side_menu();
	});
	$('.pull-left').click(function(){
		show_side_menu();
	});
	$('#sale-bottom-icon').click(function(){
		show_sell_buttons();
	});
	$('.shop-item-container').click(function(){
		hide_sell_buttons();
	});
	function remove_search_bar()
	{
		$('.jqmOverlay').css('display','none');
		$("#toogle-search-bar").removeClass("show");
	}
	function remove_side_menu()
	{
		$('#mobilemenu-overlay').css('display','none');
		$('.leftside').removeClass('show');
	}
	function show_side_menu()
	{
		$('.leftside').addClass('show');
		$('#mobilemenu-overlay').css("display","block");
	}
	function hide_sell_buttons()
	{
		$('.shop-item-container').removeClass('animate-shop-item-container');
		$('.item-shop-trigger-btn').removeClass('btn-margin-change');
		$('.item-shop-trigger-btn img').css("margin-top","0");
		$('.item-shop-trigger-btn img').css("transform","scale(1.5)")
		$('.item-shop-trigger-btn img').css("transform","scale(1)")
	}
	function show_sell_buttons()
	{
		$('.shop-item-container').addClass('animate-shop-item-container');
		$('.item-shop-trigger-btn').addClass('btn-margin-change');
		$('.item-shop-trigger-btn img').css("margin-top","-100%");
		$('.item-shop-trigger-btn img').css("transform","scale(2)");
	}
	$(document).on('click','#mobilemenu .expanded>.dropdown .menu_back a', function(){
		$('.mobilemenu-v1').css("height","");
		$('.wrap').css("transform","translatex(0%)");
		$("#mobilemenu .menu .top>li").removeClass('expanded');
		
	});
	
	$("#mobilemenu .menu .top>li").click(function(){
		
		$('.mobilemenu-v1').css("height","635px");
		$('.wrap').css("transform","translatex(100%)");
		$(this).addClass('expanded');
	});
	$('.mobile-search-invoke').click(function(){
		
		$('#mobile-search-box').css("margin-right","0");
		$('#mobile-search-box').css("width","100%");
		$('#mobile-search-box').css("opacity","1");
		$('.txt-box-back').css("display","block");
		$('#mobile-search-box').focus();
		$('#mobile-search-box').css("z-index","400");
//		$('.txt-box-clear').css("display","block");
		
	});
	$('.txt-box-back').click(function(){
		$('#mobile-search-box').css("margin-right","-50%");
		$('#mobile-search-box').css("width","0");
		$('#mobile-search-box').css("opacity","0");
		$('.txt-box-back').css("display","none");
		$('.txt-box-clear').css("display","none");
		$('#mobile-search-box').css("z-index","");
		$(".search-options-panel").slideUp(300);
		
	});
	$('.txt-box-clear').click(function(){
		$('#mobile-search-box')[0].value ='';
		$('.txt-box-clear').css("display","none");
		$(".search-options-panel").slideUp(300);
		$(".sorting-filtering-mobile").css("z-index","1100");
	});
	$('#mobile-search-box').on('input', function() {
		$(".sorting-filtering-mobile").css("z-index","1");
		$(".search-options-panel").slideDown(800);
		var txt_val=$(this).val();
		if(txt_val==="")
			{
				$('.txt-box-clear').css("display","none");
			}
		if(txt_val!=="")
			{
				$('.txt-box-clear').css("display","block");
				$(".search-options-panel").slideDown(800);
			}
//    alert( $(this).val() );
    });
	$('.search-option  p').on('click', function(){
		var search_txt=$(this).children("b").text();
		$('#mobile-search-box').val(search_txt);
		$(".sorting-filtering-mobile").css("z-index","1100");
		$(".search-options-panel").slideUp(300);
	});
	$('.search-input2').on('input', function() {
//		$(".search-prediction-pc-container").slideDown(800);
	});
	$('.svg-close').on('click', function(){
		$(".search-prediction-pc-container").slideUp(300);
	});
	$('.search-option  p').on('click', function(){
		var search_txt=$(this).children("b").text();
		$('.search-input2').val(search_txt);
		$(".search-prediction-pc-container").slideUp(300);
	});
	$('.search-input2').on('input', function() {
		$(".search-prediction-pc-container").slideDown(800);
		var txt_val=$(this).val();
		if(txt_val==="")
			{
//				$('.txt-box-clear').css("display","none");
			}
		if(txt_val!=="")
			{
//				$('.txt-box-clear').css("display","block");
				$(".search-prediction-pc-container").slideDown(800);
			}
//    alert( $(this).val() );
    });
	$(".search-input1").on('input', function() {
		$(".search-prediction-pc-container1").slideDown(800);
	});
	$('.search-option  p').on('click', function(){
		var search_txt=$(this).children("b").text();
		$('.search-input1').val(search_txt);
		$(".search-prediction-pc-container1").slideUp(300);
	});
	$('.search-input1').on('input', function() {
		$(".search-prediction-pc-container1").slideDown(300);
		var txt_val=$(this).val();
		if(txt_val==="")
			{
//				$('.txt-box-clear').css("display","none");
			}
		if(txt_val!=="")
			{
//				$('.txt-box-clear').css("display","block");
				$(".search-prediction-pc-container1").slideDown(800);
			}
//    alert( $(this).val() );
    });
	
});