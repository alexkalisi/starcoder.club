$(document).ready(function(){
    $(".work_block-gallery").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
      fade: false
  });

  $(".section_three_slider_wrapper").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: false,
    swipe: false,
    autoplay: false,
    arrows: true,
    prevArrow: $('.section_three_btn_prev'),
    nextArrow: $('.section_three_btn_next'),
    fade: true,
    speed: 300
  });

  $(".flex").slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    fade: false
});
});

