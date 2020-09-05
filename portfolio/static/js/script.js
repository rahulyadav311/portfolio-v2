//  Page Loader
$(window).on("load", function(){
	$(".loader").fadeOut("slow");
});


//  Scroll to top on refresh
$(document).ready(function(){
	$(this).scrollTop(0);
});


//  Navbar Toggle
$(document).ready(function(){
	$("#headerToggle").click(function(){
		$(".navbar").slideDown(300);
	});
});
$(document).ready(function(){
	$("#navToggle").click(function(){
		$(".navbar").slideUp(300);
	});
});


//  Animation On Scroll
AOS.init();