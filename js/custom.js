var $ = jQuery.noConflict();

$('.slider-home').slick({
  dots:true,
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  autoplay: false,
  autoplaySpeed: 2500,
  arrows: false,
  fade: true,
  responsive: [
      {
          breakpoint: 991,
          settings: { 
            arrows: false,                    
          }
      },          
  ] 
});

/*DESLIZAR AL HREF DEL BOTON*/
$('a.go-to').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top
      }, 150);
      return false;
    }
  }
});   

/*
$(window).scroll(function(){
    if($(window).scrollTop() > 180){
      $('#cabecera-site').addClass('menu-fijo')
    } else {
      $('#cabecera-site').removeClass('menu-fijo')
    }
}) */