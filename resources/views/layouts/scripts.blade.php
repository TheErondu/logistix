  
  <script src="{{ asset('dashboard/vendors/jquery/dist/jquery.min.js') }}"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script>
$(window).load(function() {
setTimeout(function(){
   $('.preloader').fadeOut('slow');
}, 3500);
});
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script src="{{ asset('home/js/jquery-2.1.4.min.js') }}"></script><!-- jQuery library -->
  
  <script src="{{ asset('home/js/jquery.srcipts.min.js') }}"></script>
  
  <script src="{{ asset('home/js/bootstrap.min.js') }}"></script><!-- .bootstrap script -->
  <script src="{{ asset('home/js/jquery.ui.map.full.min.js') }}"></script><!-- .bootstrap script -->

  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
  
  <script src="{{ asset('home/owl-carousel/owl.carousel.min.js') }}"></script><!-- Carousels script -->

  <script src="{{ asset('home/masterslider/masterslider.min.js') }}"></script><!-- Master slider main js -->

  <script src="{{ asset('home/js/jquery.dlmenu.min.js') }}"></script><!-- for responsive menu -->

  <script src="{{ asset('home/js/include.js') }}"></script><!-- custom js functions -->
  
  <script src="{{ asset('home/js/jquery.nivo.slider.pack.js') }}"></script><!-- Nivo Slider script -->

  <script src="{{ asset('home/js/jquery.isotope.min.js') }}"></script><!-- jQuery isotope plugin -->

  <script src="{{ asset('home/sharre/jquery.sharrre-1.3.4.min.js') }}"></script><!-- .for post likes -->

  <script>


            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                // MASTER SLIDER START
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1140, // slider standard width
                    height: 854, // slider standard height
                    space: 0,
                    speed: 50,
                    layout: "fullwidth",
                    centerControls: false,
                    loop: true,
                    autoplay: true
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');

                // CLIENTS CAROUSEL START
                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });
            });
            /* ]]> */
  </script>