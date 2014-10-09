$(document).ready(function(){
    $('.mobile_menu').on('click', function() {
        $(".mobile_nav_container").slideToggle('500'); 
    });
});

$(document).ready(function(){

    $(".cta_button").click(function(){
        if($(this).hasClass("cta_button_open")){
            $(this).removeClass("cta_button_open").next();
        }else{
            $('.cta_button_open').removeClass("cta_button_open").next();
            $(this).addClass("cta_button_open").next();
        }
    });

    
    $('.info').hide();
    $('.info_01').show();

	$('.link').click(function() {
	    $('.info').hide();       
	    $('.info[data-link=' + $(this).data('link') + ']').fadeIn({
	        
	    }, 10);
	});
});
$(document).ready(function () {
    // Load the first 3 list items from another HTML file
    //$('#myList').load('externalList.html li:lt(3)');
    $('.news_grid li:lt(12)').show();
    $('.load_more').click(function () {
        $('.news_grid li:lt(50)').fadeIn(800);
        $(this).hide();
        $(".show_less").show();
    });
    $('.show_less').click(function () {
        $('.news_grid li').not(':lt(12)').hide();
        $(this).hide();
        $('.load_more').show();
    });
});
// $(function() {
//   $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('selected');
// });