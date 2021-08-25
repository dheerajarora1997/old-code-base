$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
/*  jQuery for Portfolio*/
$(function() {
		var selectedClass = "";
		$(".fil-cat").click(function(){ 
		selectedClass = $(this).attr("data-rel"); 
     $("#portfolio").fadeTo(100, 1);
		$("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#portfolio").fadeTo(300, 1);
    }, 300); 
		
	});
});	
/*  jQuery for Creative circle*/
	$(document).ready(function(){
		$(".circle").on("mouseover", function(){
			var circleName = $(this).closest('.circle');
			var cName = circleName.data('cname');
			var hoverCircle =  cName;/* data var value(1,2,3,4,5,6,7,8)  */
			$('.oncircle').removeClass('oncircle');
			$(this).addClass('oncircle');
		
		
			var textClass = '.circle-text'+cName;
			$(".showText").removeClass("showText");
			$(textClass).addClass("showText");
		
	});
	/*  jQuery for portfolio page animation*/
	$(".overlay").on("mouseover", function(){
		$(this).closest("figure").find("img").css({"transform":"scale(1.1,1.1)"});
		$(this).find(".fa").fadeIn("slow");
	});
	$(".overlay").on("mouseout", function(){
		$(this).closest("figure").find("img").css({"transform":"scale(1,1)"})
		$(this).find(".fa").fadeOut("slow");
	});
	$(".frame").find("figcaption").on("mouseover", function(){
		$(this).parent("div").find("figure img").css({"transform":"scale(1.1,1.1)"});
	});
	$(".frame").find("figcaption").on("mouseout", function(){
		$(this).parent("div").find("figure img").css({"transform":"scale(1,1)"});
	});
		
});

