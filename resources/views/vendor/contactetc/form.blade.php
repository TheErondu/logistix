@include('layouts.head',['title' => 'Contact Us'])
@include('layouts.menu')
 <!-- .page-title start -->
  <div class="page-title-style01 page-title-negative-top pt-bkg08">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact us</h1>
        </div><!-- .col-md-12 end -->
      </div><!-- .row end -->
    </div><!-- .container end -->
  </div><!-- .page-title-style01.page-title-negative-top end -->
  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="custom-heading">
            <h3>CONTACT US</h3>
          </div><!-- .custom-heading.left end -->
          <strong>We want to hear from you! Kindly use the form below to tell us what you need and we will get back to you quickly.</strong><br>
          <!-- .contact form start -->

            <div style='max-width:800px;margin:20px auto'>

                @if (config("contactetc.show_errors_above_form",true) && isset($errors) && count($errors))
                    <div class="alert alert-danger">
                        <b>Sorry, but there was an error:</b>
                        <ul class='m-0'>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form method='post' action='{{$formUrl}}' class='wpcf7 clearfix'>

                        @csrf

                        @foreach($fields as $field)
                            <div class='contactetc_error'>
                                @includeFirst([$field->getView(),"contactetc::fields.default"])
                            </div>
                        @endforeach


                        <div class='contactetc_submit'>
                            <input type='submit' class='{{$contactFormDetails->submit_button_css_classes ?? 'btn btn-primary'}}'
                                   value='{{$contactFormDetails->submit_button_text ?? "Send!"}}'>
                        </div>

                    </form>
                </div>
            </div>
           <div class="col-md-6">
                <div class="custom-heading">
                    <h3>Trucking headquarters</h3>
                </div>

                      <div>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5561922858024!2d3.4772228140882318!3d6.45097639533297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4479d577ac3%3A0xfa9ee8738aad17ff!2s23+Otunba+Adeleke+Adeshina+St%2C+Lekki+Phase+I+100263%2C+Lagos!5e0!3m2!1sen!2sng!4v1556709950919!5m2!1sen!2sng" width="auto" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="custom-heading">
                    <p>You can also reach us through any of the toll free lines below:</p>
                  </div>

                  <strong>Phone: +234 701 647 6145, +234 811 086 3383, +234 901 464 9342</strong> 
                    <a href="">
                    <i class="fa fa-whatsapp" style="color: #012b4a;"></i>
                    </a>

                      <div><strong>Email</strong> : <span>info@logistix.ng</span></div> 

                        <div><strong>Or through any of our social media handles below;</strong>

                             <div class="service-icon-left-boxed">
                                <div
                                class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <a href="https://m.facebook.com/Logistixx.ng"><i class="fa fa-facebook-square" style="color: #012b4a;"></i></a>
                                </div>


                                <div 
                                class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <a href="https://mobile.twitter.com/LogistixN"><i class="fa fa-twitter-square" style="color: #012b4a;"></i></a>
                                </div> 
                                
                                <div 
                                class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <a href="https://www.instagram.com/logistix.ng">
                                    <i class="fa fa-instagram" style="color: #012b4a;"></i>
                                </a>
                                </div>  

                                <div 
                                class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <a href=""><i class="fa fa-linkedin-square" style="color: #012b4a"></i></a>
                                </div> 
                              </div>
                            </div>
                              </div>
                                <div class="col-md-6">
                                  <div class="custom-heading">
                                  <h3>Head Office:</h3>
                                </div>
                                  <address>Plot 23, Otunba Adeleke Adeshina off Admiralty way Lekki Phase1 Lagos Nigeria</address>
                                  <div class="custom-heading">
                                  <h3>Branches</h3>
                                </div>
                                  <address>#9 Rumuechinwere Plaza, East-West Road, Beside Rumuosi Market, Port Harcourt</address>
                              </div>
                        </div><!-- .row- end -->
                    </div><!-- .container end -->
            </div><!-- .pagecontent end -->
@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>

