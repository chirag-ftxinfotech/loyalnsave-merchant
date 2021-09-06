@import 'source/js/vendors/_vendor.js';

$(document).ready(function () {
    $('.client-slider').slick({
      arrows: false,
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
    });

    $('.animated-row').each(function(){
    var $this = $(this);
    $this.find('.animate').each(function(i){
      var $item = $(this);
      var animation = $item.data("animate");
      $item.waypoint(function(){
        $item.addClass('animated '+animation).removeClass('animate');
      },
      {
        offset: '85%',
        triggerOnce: true
      });
    });
  }); 
  
});
