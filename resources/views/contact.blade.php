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
          <form class="wpcf7 clearfix">
            <fieldset>
              <label><span class="required">*</span> Your request:</label> <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                <option value="I need an offer for contract logistics">
                  I need an offer for contract logistics
                </option>
                <option value="I need an offer for air freight">
                  I need an offer for air freight
                </option>
                <option value="I want to become your partner">
                  I want to become your partner
                </option>
                <option value="I have some other request">
                  I have some other request
                </option>
              </select>
            </fieldset>
            <fieldset>
              <label><span class="required">*</span> First Name:</label> <input type="text" class="wpcf7-text" id="contact-name">
            </fieldset>
            <fieldset>
              <label><span class="required">*</span> Last Name:</label> <input type="text" class="wpcf7-text" id="contact-last-name">
            </fieldset>
            <fieldset>
              <label><span class="required">*</span> Email:</label> <input type="url" class="wpcf7-text" id="contact-email">
            </fieldset>
            <fieldset>
              <label><span class="required">*</span> Message:</label>
              <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
            </fieldset><input type="submit" class="wpcf7-submit" value="send">
          </form><!-- .wpcf7 end -->
        </div><!-- .col-md-6 end -->

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

          <strong>Phone: +234 701 647 6145, +234 811 086 3383</strong>.  <i class="fa fa-whatsapp"></i>

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

  <script>

            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // GOOGLE MAPS START
                window.marker = null;

                function initialize() {
                    var map;

                    var nottingham = new google.maps.LatLng(52.934658, -1.131450);

                    var style = [
                        {"featureType": "road",
                            "elementType":
                                    "labels.icon",
                            "stylers": [
                                {"saturation": 1},
                                {"gamma": 1},
                                {"visibility": "on"},
                                {"hue": "#e6ff00"}
                            ]
                        },
                        {"elementType": "geometry", "stylers": [
                                {"saturation": -85}
                            ]
                        }
                    ];

                    var mapOptions = {
                        // SET THE CENTER
                        center: nottingham,
                        // SET THE MAP STYLE & ZOOM LEVEL
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        zoom: 9,
                        // SET THE BACKGROUND COLOUR
                        backgroundColor: "#eeeeee",
                        // REMOVE ALL THE CONTROLS EXCEPT ZOOM
                        panControl: true,
                        zoomControl: true,
                        mapTypeControl: true,
                        scaleControl: true,
                        streetViewControl: true,
                        overviewMapControl: true,
                        scrollwheel: false,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        }

                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);

                    // SET THE MAP TYPE
                    var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
                    map.mapTypes.set('grey', mapType);
                    map.setMapTypeId('grey');

                    //CREATE A CUSTOM PIN ICON
                    var marker_image = 'img/pin.png';
                    var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

                    marker = new google.maps.Marker({
                        position: nottingham,
                        map: map,
                        icon: pinIcon,
                        title: 'Trucking Headquarters, Nothingham'
                    });
                }

                google.maps.event.addDomListener(window, 'load', initialize);

                // CONTACT FORM AJAX SUBMIT START
                $('.wpcf7 .wpcf7-submit').on('click', function (event) {
                    event.preventDefault();
                    var inquiry = $('#contact-inquiry option:selected').text();
                    var name = $('#contact-name').val();
                    var lastname = $('#contact-last-name').val();
                    var email = $('#contact-email').val();
                    var contact_message = $('#contact-message').val();
                    var form_data = new Array({'inquiry': inquiry, 'name': name, 'last_name': lastname, 'email': email, 'message': contact_message});
                    $.ajax({
                        type: 'POST',
                        url: "contact.php",
                        data: ({'action': 'contact', 'form_data': form_data})
                    }).done(function (data) {
                        alert(data);
                    });
                }); // CONTACT FORM AJAX SUBMIT END

            });
            /* ]]> */
  </script>
</body>
</html>
