$(document).ready(function(){
	$(".hamburger").on("click", function(){
		$(this).toggleClass("is-active");
		
		if($(".hamburger").hasClass("is-active")) {
			$("nav .cl-effect-5").css("display", "flex");
		} else {
			$("nav .cl-effect-5").css("display", "none");
		}
	});
});

$(document).ready(function(){
	$(".ingredients .item h3").click(function(){ // trigger
		$(this).next("p").slideToggle("slow");
	});
});

$(document).ready(function(){
	$(".ingredients .item h3").on("click", function(){
			$(this).find("span").toggleClass("rotate");
	})
	
		
		

})

/*
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("nav").addClass("bg");
    } else {
        $("nav").removeClass("bg");
    }
});

*/

$(function(){
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
    
        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');
    
            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
    
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
            
            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
    
            // Replace image with new SVG
            $img.replaceWith($svg);
    
        }, 'xml');
    
    });
});

/*
$(window).resize(function(){

       if ($(window).width() <= 992) {  

   

       }     

});
*/



