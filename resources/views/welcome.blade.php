@include('layouts.head',['title' => 'World Class Logistics Service Provider '])
@include('layouts.menu')
  <div id="masterslider" class="master-slider ms-skin-default">
    <!-- slide -->
    <div class="ms-slide">
      <!-- slide background -->
      <img src="{{ asset('home/masterslider/blank.gif') }}" data-src="{{ asset('home/img/slider/truck.jpg') }}" alt="Strongest distribution network">
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 300px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="300">Africa's Largest</h2>
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 380px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="600">Truck Fleet</h2>
      <p class="ms-layer pi-text" style="left: 10px; top: 460px;" data-type="text" data-effect="Left(short)" data-duration="300" data-hide-effect="fade" data-delay="1200">We're All About Logistics</p>
      <h3 class="ms-layer pi-text" style="left: 700px; top: 460px;" data-type="text" data-effect="Left(short)" data-duration="300" data-hide-effect="fade" data-delay="1200">Click Here to Register a Truck</h3><a href="{{ route('truck-create') }}">Continue</a>
    </div><!-- .ms-slide end -->
    <!-- slide -->
    <div class="ms-slide">
      <!-- slide background -->
      <img src="{{ asset('home/masterslider/blank.gif') }}" data-src="{{ asset('home/img/slider/ware1.jpg') }}" alt="Strongest distribution network">
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 300px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="300">Africa's Largest</h2>
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 380px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="600">Chain of Independent</h2>
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 460px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="900">Warehouses</h2>
      <p class="ms-layer pi-text" style="Left: 10px; top: 540px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="1200">We're All About Logistics</p>
      <h3 class="ms-layer pi-text" style="left: 500px; top: 540px;" data-type="text" data-effect="Left(short)" data-duration="300" data-hide-effect="fade" data-delay="1200">Click Here to Register your Warehouse</h3><a href="{{ route('warehouse-create') }}">Continue</a>
    </div><!-- .ms-slide end -->
    <!-- slide -->
    <div class="ms-slide">
      <!-- slide background -->
      <img src="{{ asset('home/masterslider/blank.gif') }}" data-src="{{ asset('home/img/slider/w3.jpg') }}" alt="Strongest distribution network">
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 300px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="300">Warehouse</h2>
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 380px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="600">Management</h2>
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 460px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="900">Solutions</h2>
      <p class="ms-layer pi-text" style="Left: 10px; top: 540px;" data-type="text" data-effect="top(short)" data-duration="300" data-hide-effect="fade" data-delay="1200">We're All About Logistics</p>
      <h3 class="ms-layer pi-text" style="left: 500px; top: 540px;" data-type="text" data-effect="Left(short)" data-duration="300" data-hide-effect="fade" data-delay="1200">Click Here to Book a Warehouse</h3><a href="{{ route('booking-create') }}">Continue</a>
    </div><!-- .ms-slide end -->
    <!-- slide -->
    <div class="ms-slide">
      <!-- slide background -->
      <img src="{{ asset('home/masterslider/blank.gif') }}" data-src="{{ asset('home/img/slider/blue9.jpg') }}" alt="Strongest distribution network">
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 300px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="300">Reliable</h2>
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 380px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="600">Haulage</h2>
      <h2 class="ms-layer pi-caption01" style="left: 10px; top: 460px;" data-type="text" data-effect="left(short)" data-duration="300" data-hide-effect="fade" data-delay="900">Services</h2>
      <p class="ms-layer pi-text" style="Left: 10px; top: 540px;" data-type="text" data-effect="top(short)" data-duration="300" data-hide-effect="fade" data-delay="1200">We're All About Logistics.</p>
      <h3 class="ms-layer pi-text" style="left: 500px; top: 540px;" data-type="text" data-effect="Left(short)" data-duration="300" data-hide-effect="fade" data-delay="1200">Click Here to Request for a Truck</h3><a href="{{ route('truck_request-create') }}">Continue</a>
    </div><!-- .ms-slide end -->
  </div><!-- #masterslider end -->
  <div class="page-content mb-70">
    <div class="container-fluid">
      <div class="row mb-0">
        <ul class="services-gallery clearfix">
          <li class="col-md-3">
            <figure class="service-item-container">
              <div class="service-item">
                <img src="{{ asset('home/img/pics/img04.jpg') }}" alt="less-than-truckload">
                <div class="hover-mask-container">
                  <div class="hover-mask"></div>
                  <div class="hover-details">
                    <a href="{{ route('truck_request-create') }}"><span>Click Here</span></a>
                  </div><!-- .hover-details end -->
                </div><!-- .hover-mask-container end -->
              </div><!-- .service-item end -->
              <figcaption>
                <h3>REQUEST TRUCK</h3>
              </figcaption>
            </figure><!-- .service-item end -->
          </li><!-- .service-item end -->
          <li class="col-md-3">
            <figure class="service-item-container">
              <div class="service-item">
                <img src="{{ asset('home/img/pics/w7.jpg') }}" alt="less-than-truckload"></a>
                <div class="hover-mask-container">
                  <div class="hover-mask"></div>
                  <div class="hover-details">
                    <a href="{{ route('booking-create') }}"><span>Click Here</span></a>
                  </div><!-- .hover-details end -->
                </div><!-- .hover-mask-container end -->
              </div><!-- .service-item end -->
              <figcaption>
                <h3>BOOK WAREHOUSE</h3>
              </figcaption>
            </figure><!-- .service-item end -->
          </li><!-- .service-item end -->
          <li class="col-md-3">
            <figure class="service-item-container">
              <div class="service-item">
                <img src="{{ asset('home/img/pics/img06.jpg') }}" alt="less-than-truckload"></a>
                <div class="hover-mask-container">
                  <div class="hover-mask"></div>
                  <div class="hover-details">
                    <a href="{{ route('truck-create') }}"><span>Click Here</span></a>
                  </div><!-- .hover-details end -->
                </div><!-- .hover-mask-container end -->
              </div><!-- .service-item end -->
              <figcaption>
                <h3>REGISTER TRUCK</h3>
              </figcaption>
            </figure><!-- .service-item end -->
          </li><!-- .service-item end -->
          <li class="col-md-3">
            <figure class="service-item-container">
              <div class="service-item">
                <img src="{{ asset('home/img/pics/ware4.jpg') }}" alt="less-than-truckload"></a>
                <div class="hover-mask-container">
                  <div class="hover-mask"></div>
                  <div class="hover-details">
                    <a href="{{ route('warehouse-create') }}"><span>Click Here</span></a>
                  </div><!-- .hover-details end -->
                </div><!-- .hover-mask-container end -->
              </div><!-- .service-item end -->
              <figcaption>
                <h3>REGISTER WAREHOUSE</h3>
              </figcaption>
            </figure><!-- .service-item end -->
          </li><!-- .service-item end -->
        </ul><!-- #services-gallery end -->
      </div><!-- .row end -->
    </div><!-- .container-fluid end -->
  </div><!-- .page-content end -->
  <div class="row">
    <div class="col-md-12 custom-bkg bkg-grey" style="background-image: url({{ asset('home/track1.jpg') }});">
      <div class="col-md-12">
        <div class="custom-heading02">
          <h2 style="color:white;">TRACK YOUR CONSIGNMENT</h2>
        </div>
        <h4 style="text-align: center; color:white;">Already have a shipping number, please insert it below.</h4>
        <div class="row">
          <div class="col-md-12">
            <form class="tracking">
              <input class="package-id" type="text" placeholder="#PACKAGE ID"> <input type="submit" class="submit" value="">
            </form>
          </div>
        </div>
      </div>
    </div><!-- .col-md-4.custom-bkg.bkg-grey end -->
  </div><!-- .row end -->
  <!-- .container end -->
  <!-- .page-content end -->
  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="custom-heading02">
            <h2>Our Promise</h2>
            <p>CUSTOMER-DRIVEN LOGISTICS SERVICES</p>
          </div><!-- .custom-heading02 end -->
        </div><!-- .col-md-12 end -->
      </div><!-- .row end -->
      <div class="row mb-30">
        <div class="col-md-6 col-sm-6">
          <div class="service-icon-left-boxed">
            <div class="icon-container animated triggerAnimation" data-animate="zoomIn"><img src="{{ asset('home/img/svg/prompt.png') }}" alt="checklist icon"></div><!-- .icon-container end -->
            <div class="service-details">
              <h3>Prompt Order Fulfillment</h3>
              <p>We offer a consistently high on-time-arrival-percentage to service your logistics needs timely and efficiently.</p>
            </div><!-- .service-details end -->
          </div><!-- .service-icon-left-boxed end -->
        </div><!-- .col-md-6 end -->
        <div class="col-md-6 col-sm-6">
          <div class="service-icon-left-boxed">
            <div class="icon-container animated triggerAnimation" data-animate="zoomIn"><img src="{{ asset('home/img/svg/product-safety.png') }}" alt="globe icon"></div><!-- .icon-container end -->
            <div class="service-details">
              <h3>Product Safety</h3>
              <p>We ensure your consignments are safe and secured from pick up to destination, and every other time in between</p>
            </div><!-- .service-details end -->
          </div><!-- .service-icon-left-boxed end -->
        </div><!-- .col-md-6 end -->
      </div><!-- .row.mb-30 end -->
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="service-icon-left-boxed">
            <div class="icon-container animated triggerAnimation" data-animate="zoomIn"><img src="{{ asset('home/img/svg/customer.png') }}" alt="forktruck icon"></div><!-- .icon-container end -->
            <div class="service-details">
              <h3>24/7 Customer Support</h3>
              <p>Logistix.ng provides round the clock customer support to service your enquiries promptly.</p>
            </div><!-- .service-details end -->
          </div><!-- .service-icon-left-boxed end -->
        </div><!-- .col-md-6 end -->
        <div class="col-md-6 col-sm-6">
          <div class="service-icon-left-boxed">
            <div class="icon-container animated triggerAnimation" data-animate="zoomIn"><img src="{{ asset('home/img/svg/pi-touch-desktop.svg') }}" alt="touch icon"></div><!-- .icon-container end -->
            <div class="service-details">
              <h3>Ease of Use</h3>
              <p>With our simplified platform, it is very easy to navigate and access our services without difficulties</p>
            </div><!-- .service-details end -->
          </div><!-- .service-icon-left-boxed end -->
        </div><!-- .col-md-6 end -->
      </div><!-- .row end-->
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="service-icon-left-boxed">
            <div class="icon-container animated triggerAnimation" data-animate="zoomIn"><img src="{{ asset('home/img/svg/dependability.png') }}" alt="touch icon"></div><!-- .icon-container end -->
            <div class="service-details">
              <h3>Dependability</h3>
              <p>We are reliable, we are trustworthy, and we are dependable. We deliver our promises, consistently.</p>
            </div><!-- .service-details end -->
          </div><!-- .service-icon-left-boxed end -->
        </div><!-- .col-md-6 end -->
      </div><!-- .row end -->
    </div><!-- .container end -->
  </div><!-- .page-content end -->
  <section id="tabs" class="project-tab">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>CURRENT TRUCK REQUESTS</h2>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <table class="table" cellspacing="0">
                <thead>
                  <tr>
                    <th>Pickup Location</th>
                    <th>Destination</th>
                    <th>Truck Class</th>
                    <th>E.T.D</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($truck_requests as $truck_request)
                  <tr>
                    <td>{{ $truck_request->pickup_location }}</td>
                    <td>{{ $truck_request->destination}}</td>
                    <td>{{ $truck_request->truck_class }}</td>
                    <td>{{ $truck_request->e_t_d }}</td>
                  </tr> 
                  @empty
                    <p>There are no current truck requests.</p>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>CURRENT WAREHOUSE REQUESTS</h2>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <table class="table" cellspacing="0">
                <thead>
                  <tr>
                    <th>Location</th>
                    <th>Cargo Type</th>
                    <th>E.T.A</th>
                    <th>E.T.D</th>
                    <th>Capacity(In Tonnes)</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($bookings as $booking)
                  <tr>
                    <td>{{ $booking->location }}</td>
                    <td>{{ $booking->cargo_type }}</td>
                    <td>{{ $booking->e_t_a }}</td>
                    <td>{{ $booking->e_t_d }}</td>
                    <td>{{ $booking->capacity }}</td>
                  </tr>
                   @empty
                    <p>There are no current Warehouse requests.</p>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="custom-heading">
            <h3>Our Mission</h3>
          </div><!-- .custom-heading end -->
          <p>To be the number one logistics service provider in the eyes of our customer, employees and government.</p>
        </div><!-- .col-md-4 end -->
        <div class="col-md-4 col-sm-6">
          <div class="custom-heading">
            <h3>company Blog</h3>
          </div><!-- .custom-heading end -->
          <ul class="pi-latest-posts clearfix">
            @forelse(\WebDevEtc\BlogEtc\Models\BlogEtcPost::orderBy("posted_at","desc")->limit(5)->get() as $post)
              <li>
                  <div class="post-media">
                      <?=$post->image_tag("thumbnail", false, 'd-block mx-auto'); ?>
                  </div><!-- .post-media end -->

        <div class="post-details">
            <div class="post-date">
                <p>
                    <i class="fa fa-calendar"></i>
                    {{$post->posted_at->format('F, d, Y')}}
                </p>
            </div>
            <a href="{{$post->url()}}">
              <h4>
                  {{$post->title}}
              </h4>
          </a>

          <a href="{{$post->url()}}" class="read-more">
              <span>
                  Read more
                  <i class="fa fa-chevron-right"></i>
              </span>
          </a>
      </div><!-- .post-details end -->
  </li>
   @empty
                <div class='alert alert-danger'>No posts</div>
            @endforelse

</ul>


        </div><!-- .col-md-4 end -->
      </div><!-- .row end -->
    </div><!-- .container end -->
  </div><!-- .page-content end -->
  <div class="row">
    <div class="col-md-12">
      <div class="custom-heading02">
        <h2>Meet Our Customers</h2>
      </div><!-- .custom-heading02 end -->
    </div><!-- .col-md-12 end -->
  </div><!-- .row end -->
  <div class="page-content custom-bkg bkg-grey">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel-container">
            <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
              <div class="owl-item"><img src="{{ asset('home/img/pics/client01.png') }}" alt=""></div>
              <div class="owl-item"><img src="{{ asset('home/img/pics/client02.png') }}" alt=""></div>
              <div class="owl-item"><img src="{{ asset('home/img/pics/client03.png') }}" alt=""></div>
              <!-- <div class="owl-item"><img src="{{ asset('home/img/pics/client04.png') }}" alt=""></div>
              <div class="owl-item"><img src="{{ asset('home/img/pics/client05.png') }}" alt=""></div>
              <div class="owl-item"><img src="{{ asset('home/img/pics/client06.png') }}" alt=""></div> -->
            </div><!-- .owl-carousel.owl-carousel-navigation end -->
          </div><!-- .carousel-container end -->
        </div><!-- .col-md-12 end -->
      </div><!-- .row end -->
    </div><!-- .container end -->
  </div><!-- .page-content end -->
  <div id="footer-wrapper" class="footer-dark">
    <footer id="footer">
      <div class="container">
        <div class="row">
          <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
            <!-- .widget.widget_text -->
            <li class="widget widget_newsletterwidget">
              <div class="title">
                <h3>Stay Updated</h3>
              </div>
              <p>Subscribe to our Blog and we will inform you about newest projects and promotions.</p><br>
              <form class="newsletter">
                <input class="email" type="email" placeholder="Your email..."> <input type="submit" class="submit" value="">
              </form>
            </li><!-- .widget.widget_newsletterwidget end -->
          </ul><!-- .col-md-3.footer-widget-container end -->
          <ul class="col-md-3 col-sm-6 footer-widget-container">
            <li class="widget widget-text">
              <div class="title">
                <h3>contact us</h3>
              </div>
              <address>
                Plot 23, Otunba Adeleke Adeshina off Admiralty way, Lekki Phase1 Lagos Nigeria,
              </address><span class="text-big">+234 811 086 3383,</span><br>
              <br>
              <p class="text-big">+234 701 647 6145</p><a href="mailto:">info@Logistix.ng</a><br>
              <ul class="footer-social-icons">
                <li>
                  <a href="#" class="fa fa-facebook"></a>
                </li>
                <li>
                  <a href="#" class="fa fa-twitter"></a>
                </li>
                <li>
                  <a href="#" class="fa fa-google-plus"></a>
                </li>
              </ul><!-- .footer-social-icons end -->
            </li><!-- .widget.widget-text end -->
          </ul><!-- .col-md-3.footer-widget-container end -->
        </div><!-- .row end -->
      </div><!-- .container end -->
    </footer><!-- #footer end -->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <strong style="color:white">Logistix 2019. All RIGHTS RESERVED.</strong>
        </div><!-- .col-md-6 end -->
      </div><!-- .row end -->
    </div><!-- .container end -->
  </div><!-- .copyright-container end -->
  <a href="#" class="scroll-up">Scroll</a> <!-- #footer-wrapper end -->
@include('layouts.scripts')
</body>
</html>
