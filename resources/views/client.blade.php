<div class="clearfix"></div><!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic"><img src="{{ asset('dashboard/main/images/img.jpg') }}" alt="..." class="img-circle profile_img"></div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{ Auth::user()->name }}</h2>
            </div>
          </div><!-- /menu profile quick info -->
          <br>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Business</h3>
              <ul class="nav side-menu">
                <li>
                  <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{ route('customer') }}">Dashboard</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a><i class="fa fa-truck"></i> Trucks <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{ route('truck_request-create') }}">Request Trucks</a>
                    </li>
                    <li>
                      <a href="#">Track Consigment</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a><i class="fa fa-building"></i> Warehouses <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="{{ route('booking-create') }}">Request Warehouse</a>
                    </li>
                    <li>
                      <a href="#">Track Consigment</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </div>
          </div><!-- /sidebar menu -->
        </div>
      </div><!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="{{ asset('dashboard/main/images/img.jpg') }}" alt="">{{ Auth::user()->name }}<span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li>
                    <a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div><!-- /top navigation -->
      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Registered Trucks</span>
            <div class="count">
              30
            </div><span class="count_bottom"><i class="green">4%</i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Total Truck Requests</span>
            <div class="count">
              12
            </div><span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3%</i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Km Hauled</span>
            <div class="count">
              4,567
            </div><span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12%</i> From last Week</span>
          </div>
        </div>
          @include('partials.alerts.success')
          <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Truck Request </h2>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>You can check the current  truck request</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings"> 
                            <th class="column-title">Client</th>
                            <th class="column-title">Pickup Location</th>
                            <th class="column-title">Destination</th>
                            <th class="column-title">Truck Class</th>
                            <th class="column-title">E.T.D</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          @forelse ($truck_requests->slice(0, 5) as $truck_request)
                          <tr class="odd pointer">
                            <td class=" ">{{ $truck_request->user->name }}</td>
                            <td class=" ">{{ $truck_request->pickup_location }}</td>
                            <td class=" ">{{ $truck_request->destination}}</td>
                            <td class=" ">{{ $truck_request->truck_class }}</td>
                            <td class=" ">{{ $truck_request->e_t_d }}<i class="success fa fa-long-arrow-up"></i></td>
                          </tr>


                          @empty
                                <p>There are no current truck requests.</p>


                          @endforelse
                        </tbody>
                        
                      </table>
                    </div>

                   <div class="x_title">
                    <h2>Warehouse Request </h2>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                  <p>You can check the current warehouse requests</p>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">

                            <th class="column-title">Location</th>
                            <th class="column-title">Cargo Type</th>
                            <th class="column-title">E.T.A</th>
                            <th class="column-title">E.T.D</th>
                            <th class="column-title">Capacity in (&#13221;)</th>

                          </tr>
                        </thead>

                        <tbody>
                          @forelse ($bookings->slice(0, 5) as $booking)
                          <tr class="odd pointer">
                            <td class=" ">{{ $booking->location }}</td>
                            <td class=" ">{{ $booking->cargo_type }}</td>
                            <td class=" ">{{ $booking->e_t_a }}</td>
                            <td class=" ">{{ $booking->e_t_d }}</td>
                            <td class=" ">{{ $booking->capacity }}</td>
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


          <!-- start of weather widget -->

          <!-- end of weather widget -->
        </div>

      </div>



    </div><!-- /page content -->
    <!-- footer content -->
    <footer>
      <div class="pull-right">
        <a href="https://logistix.ng">&copy;2019 Logistix. All rights reserved.  </a>
      </div>
      <div class="clearfix"></div>
    </footer><!-- /footer content -->