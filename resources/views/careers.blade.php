@include('layouts.head',['title' => 'Careers '])
@include('layouts.menu')
  <!-- .page-title start -->
  <div class="page-title-style01 page-title-negative-top pt-bkg09">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Join Us</h1>
        </div><!-- .col-md-12 end -->
      </div><!-- .row end -->
    </div><!-- .container end -->
  </div><!-- .page-title-style01.page-title-negative-top end -->
  <div class="page-content">
    <div class="container">
      <div class="row">
        <ul class="col-md-9 blog-posts post-list">
          <li class="blog-post clearfix">
            <div class="post-media">
              <div class="nivo-wrapper">
                <div id="slider-1" class="nivoSlider"><img src="{{ asset('home/img/blog/post-img04.jpg') }}" alt="image 1" title="#slider-caption-1"> <img src="{{ asset('home/img/blog/post-img05.jpg') }}" alt="image" title="#slider-caption-2"></div><!-- .nivoSlider end -->
                <!-- .captions start -->
                <div id="slider-caption-1" class="nivo-caption">
                  <h3>Click Here for Experienced Hire</h3>
                  <p><span style="color: #FFFFFF">The only way to do great work is to love what you do, that is why your passion, expertise and experience in your chosen career is greatly welcome and enhanced when you join our talented team of experts.</span></p>
                </div>
                <div id="slider-caption-2" class="nivo-caption">
                  <h3>Students & Graduates Click here</h3>
                  <p><span style="color: #FFFFFF">Time to practice what you've learnt in college or university, right? At Logistix.ng, we offer you a world of opportunities to deliver business results, assume responsibility and make a positive contribution to the world as a young, fresh professional</span>.</p>
                </div>
              </div><!-- .nivo-wrapper end -->
            </div><!-- .post-media end -->
          </li>
        </ul>
        <div class="col-md-9">
          <div class="custom-heading">
            <h3>JOIN OUR TALENTED WORKFORCE TODAY</h3>
          </div>
          <p>Career opportunities within the Logistix.ng community span across professions and skill-sets, offering amazing work environment for a successful career growth and advancement.</p>
          <p>Discover life at Logistix.ng and take that bold career step today!</p>
        </div><!-- aside.aside-left start -->
        <aside class="col-md-3 aside aside-left">
          <!-- .aside-widgets start -->
          <ul class="aside-widgets">
            <!-- .widget.widget-search start -->
            <li id="search-2" class="widget widget_search clearfix">
              <div class="title">
                <h3>search</h3>
              </div>
              <form action="#" method="get">
                <input class="a_search" name="s" type="text" placeholder="Type and hit enter..."> <input class="search-submit" type="submit">
              </form>
            </li><!-- .widget.widget_search end -->
          </ul><!-- .aside-widgets end -->
        </aside><!-- .aside.aside-left end -->
      </div><!-- .row end -->
    </div><!-- .container end -->
  </div><!-- .page-content end -->
  @include('layouts.footer')
  @include('layouts.scripts')

  <script>


            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                $('#slider-1').nivoSlider({
                    controlNav: false
                });
            });
            /* ]]> */
  </script>
  <script>
$(window).load(function() {
setTimeout(function(){
   $('.preloader').fadeOut('slow');
}, 3500);
});
 </script> 
</body>
</html>
