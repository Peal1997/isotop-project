
(function($){

$(document).ready(function(){
  
   $('.our-slider').owlCarousel({

      items :1,
      autoplay : true,
      loop:true,
      nav : true,
    animateIn : 'fadeIn',
    animateOut : 'fadeOut',
    navText : ['<i class="fa-solid fa-angles-left"></i>' ,'<i class="fa-solid fa-angles-right"></i>']


   });

  $('.testi-slider').owlCarousel({
     items :1,
     autoplay:true,
     loop:true,
  });

  $('.our-client').owlCarousel({
   items :5,
   autoplay:true,
   loop:true,
});

});

})(jQuery)


