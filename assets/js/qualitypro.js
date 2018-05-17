jQuery( function($) {
  // Testimonials Carousel
  jQuery('.owl-testimonials').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:20000,
    autoplayHoverPause:false,
    // navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    navText: false,
    items:1,
    slideBy: 1,
    dots: true,
    animateOut: 'fadeOutDown',
    animateIn: 'fadeInDown'
  });
});
