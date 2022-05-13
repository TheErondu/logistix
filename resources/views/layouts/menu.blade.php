<body>
<div id="preloader" class="preloader"></div>

<div class="header-wrapper header-transparent">
    <!-- .header.header-style01 start -->
    <header id="header" class="header-style01">
      <!-- .container start -->
      <div class="container">
        <!-- .main-nav start -->
        <div class="main-nav">
          <!-- .row start -->
          <div class="row">
            <div class="col-md-12">
              <nav class="navbar navbar-default nav-left" role="navigation">
                <!-- .navbar-header start -->
                <div class="navbar-header">
                  <div class="logo">
                    <a href="{{ route('welcome') }}"><img src="{{ asset ('home/img/logo.png') }}" alt="Logistix.ng is a world class Logistics service provider."></a>
                  </div><!-- .logo end -->
                </div><!-- .navbar-header start -->
                <!-- MAIN NAVIGATION -->
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li class="{{Request::segment(1) == 'home' ? 'dropdown current-menu-item' : null }}">
                      <a href="{{ route('welcome') }}">Home</a>
                    </li><!-- .dropdown end -->
                    <li>
                      <li class="{{Request::segment(1) == 'about' ? 'dropdown current-menu-item' : null }}">
                      <a href="{{ route('about') }}">About</a>
                    </li><!-- .dropdown end -->
                    <li>
                      <li class="{{Request::segment(1) == 'blog' ? 'dropdown current-menu-item' : null }}">
                      <a href="{{ route('blogetc.index') }}">Blog</a>
                    </li><!-- .dropdown end -->
                    <li>
                      <li class="{{Request::segment(1) == 'careers' ? 'dropdown current-menu-item' : null }}">
                      <a href="{{ route('careers') }}">Careers</a>
                    </li>
                    <li>
                      <li class="{{Request::segment(1) == 'contact-us' ? 'dropdown current-menu-item' : null }}">
                      <a href="{{ route('contactetc.form.main_contact_form') }}">Contact</a>
                    </li><!-- .dropdown end -->
                    <li>
                      <li class="{{Request::segment(1) == 'customer' ? 'dropdown current-menu-item' : null }}">
                      <a href="{{ route('customer') }}">Dashboard</a>
                    </li><!-- .dropdown end -->
                      </ul><!-- .dropdown-menu end -->
                    </li><!-- .dropdown end -->
                  </ul><!-- .nav.navbar-nav end -->
                  <!-- RESPONSIVE MENU -->
                  <div id="dl-menu" class="dl-menuwrapper">
                    <button class="dl-trigger"></button>
                    <ul class="dl-menu">
                      <li>
                        <a href="{{ route('welcome') }}">Home</a>
                      </li>
                      <li>
                        <a href="{{ route('about') }}">About</a>
                      </li>
                      <li>
                        <a href="{{ route('blogetc.index') }}">Blog</a>
                      </li>
                      <li>
                        <a href="{{ route('careers') }}">Careers</a>
                      </li>
                      <li>
                        <a href="{{ route('contactetc.form.main_contact_form') }}">Contact</a>
                      </li>
                      <li>
                        <a href="{{ route('customer') }}">Dashboard</a>
                      </li>
                        </ul><!-- .dl-submenu end -->
                      </li>
                    </ul><!-- .dl-menu end -->
                  </div><!-- #dl-menu end -->
                  <!-- #search start -->
                  <div id="search">
                    <form action="#" method="get">
                      <input class="search-submit" type="submit"> <input id="m_search" name="s" type="text" placeholder="Type and hit enter...">
                    </form>
                  </div><!-- #search end -->
                </div><!-- MAIN NAVIGATION END -->
              </nav><!-- .navbar.navbar-default end -->
            </div><!-- .col-md-12 end -->
          </div><!-- .row end -->
        </div><!-- .main-nav end -->
      </div><!-- .container end -->
    </header><!-- .header.header-style01 -->
  </div><!-- .header-wrapper.header-transparent end -->

  