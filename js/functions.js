$(function(){
    $('.slidecapa').slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        fade:true,
        autoplaySpeed: 4000,
      });

      $('.menuMobile').click(function(){
        $('.menuMobile').find('ul').slideToggle();
    })

    $('body').click(function(){
        $('.menuMobile').find('ul').fadeOut();
    })

    $('.menuMobile').click(function(e){
        e.stopPropagation();
    })
});
