$(document).ready(function(){
    $('.mobile_menu').on('click', function() {
        $(".mobile_nav_container").slideToggle('500'); 
    });


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

    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="three"){
            $(".tab_02,.tab_03,.tab_04").hide();
            $(".tab_01").show();
        }
        if($(this).attr("value")=="five"){
            $(".tab_01,.tab_03,.tab_04").hide();
            $(".tab_02").show();
        }
        if($(this).attr("value")=="eight"){
            $(".tab_01,.tab_02,.tab_04").hide();
            $(".tab_03").show();
        }
        if($(this).attr("value")=="amount"){
            $(".tab_01,.tab_02,.tab_03").hide();
            $(".tab_04").show();
        }
    });

});

// DONATE PAGE JS 
$('ul.faux-select').each(function() {
    var list = $(this),
        select = $(document.createElement('select')).insertBefore($(this).hide()).addClass('tabber');
    $('>li', this).each(function() {
        var ahref = $(this).children('a'),
            target = ahref.attr('target'),
            option = $(document.createElement('option'))
                .appendTo(select)
                .val(ahref.attr('href'))
                .html(ahref.html());
        if (ahref.attr('class') === 'dlspb-selected') {
            option.attr('selected', 'selected');
        }
    });
});

$('.tabber').on('change', function(){
    var index = $('#tabs div.tabContainer').index($(this.value));
    console.log(index);
    $('#tabs').tabs("option", "active", index);
});

$(function() {
    $( "#tabs" ).tabs({
      collapsible: true, history: true, active: 0
    });
});