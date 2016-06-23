$(document).ready(function(){
//////////////////////////MENU SECOND {MOUSEENTER},{MOUSELEAVE} //////////////////////////
	// $("li").mouseenter(function(){
	// 	var imgSrc = $(this).children("a").children("img").attr("src");
	// 	var imgSrc = imgSrc.substr(0, imgSrc.length - 4);
	// 	$(this).children("a").children("img").attr("src",imgSrc+"-H.png");
	// 	$(this).children("a").css({"color": "#a54009"});
	// });
	// $("li").mouseleave(function(){
	// 	var imgSrc = $(this).children("a").children("img").attr("src");
	// 	var imgSrc = imgSrc.substr(0, imgSrc.length - 6);
	// 	$(this).children("a").children("img").attr("src",imgSrc+".png");
	// 	$(this).children("a").css({"color": "#ffffff"});
	// });

	// $(".reg-top a").mouseenter(function(){
	// 	$(this).css({margin-left: '8px'});
	// });

	// $("#content h1 span").css({"padding-left" : "10px"});

	$("#portfolioHome > div > img").mouseenter(function(){$(this).animate({opacity: '1'});});
	$("#portfolioHome > div > img").mouseleave(function(){$(this).animate({opacity: '0.8'});});

	$(".search-lup").click(function(){
    		$("#search-top").css("top","85px");
    		$("#search-top").find("input[name='search']").focus();
    	});

	$(".tp-close-search").click(function(){
		$(this).parent().parent().css("top","-85px");
	});

	});