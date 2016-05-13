//Responsive
$(document).ready(function(){
	//Tooltip
	$('.mitooltip').tooltip();
});

//Toggle Class del icono de menu
$(document).ready(function(){
	$(".menu-burger").click(function(e){
	    $(this).toggleClass("open");
      $('.menu-productos').toggleClass('abierto');
	});
});

//jQuery to collapse the navbar on scroll
$(window).bind('scroll',function() {
  var cabecero =  $(".cabecero");
    if ($(this).resize().width < 927){
        if ($(window).scrollTop() > 0) {
            cabecero.addClass("fijo");
            $('body').css({'padding-top':'8.4rem'})
        } else {
            cabecero.removeClass("fijo");
            $('body').css({'padding-top':'0'})
        }
    }
});
