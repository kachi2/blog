<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="Crypto News blog is a cryptocurrency news service that covers latest bitcoin news today, technical analysis &amp; price for bitcoin and other altcoins">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'cryptonews') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700%7CSource+Sans+Pro:200,300,400,500,600,700,900" rel="stylesheet">

	

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/assets/font/demo-files/demo.css')}}">

	<!-- CSS theme files
	============================================ -->
	<link rel="stylesheet" href="{{asset('/assets/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/fontello.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
</head>
<body>
  <div class="loader"></div>



  <!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->

  <div id="wrapper" class="wrapper-container">

    <!-- - - - - - - - - - - - - Mobile Menu - - - - - - - - - - - - - - -->

    <nav id="mobile-advanced" class="mobile-advanced"></nav>

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="header sticky-header">
      
      <!-- searchform -->

      <div class="searchform-wrap">
        <div class="vc-child h-inherit">

          <form class="search-form">
            <button type="submit" class="search-button"></button>
            <div class="wrapper">
              <input type="text" name="search" placeholder="Start typing...">
            </div>
          </form>

          <button class="close-search-form"></button>

        </div>
      </div>
      
      <!-- pre-header -->

      <div class="pre-header">
        
        <div class="container">
          
          <div class="row justify-content-between">
            
            <div class="col">
              
              <div class="date" style="color:#fff">
               {{Date('D, M d, Y')}}
              </div>

            </div>

            <div class="col align-right">

              <div class="lang-area">

                <a href="#">English</a>
               

              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- top-header -->

      <div class="top-header">

        <div class="container">

          <div class="row justify-content-between align-items-center">


                  <div class="col">
              
              <!-- logo -->

              <div class="logo-wrap">

                <a href="index.html" class="logo"><img src="{{asset('/assets/images/logo.png')}}" alt=""></a>

              </div>

            </div>
            <div class="col">
              
              <!-- Socials -->

              <ul class="social-icons">

                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-rss"></i></a></li>
                <li><a href="#"><i class="icon-hash"></i></a></li>

              </ul>

            </div>
            
          

            <div class="col align-right">
              <a href="#" class="btn btn-style-4 btn-big"><i class="licon-mailbox-full"></i>Subscribe</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- - - - - - - - - - - - / Mobile Menu - - - - - - - - - - - - - -->

      <!--main menu-->

      <div class="menu-holder">
        <div class="container">
          <div class="menu-wrap">
            <div class="nav-item">
              <!-- - - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - - - -->
              <nav id="main-navigation" class="main-navigation">
                <ul id="menu" class="clearfix">
                  <li class="dropdown"><a href="#">Home</a>
                    <!--sub menu-->
                    <div class="sub-menu-wrap">
                      <ul>
                        <li><a href="index.html">Home - Blog</a></li>
                        <li><a href="home_2.html">Home - Corporate</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="dropdown"><a href="#">ICO Calendar</a>
                    <!--sub menu-->
                    <div class="sub-menu-wrap">
                      <ul>
                        <li><a href="ico_calendar.html">ICO List</a></li>
                        <li><a href="ico_single.html">Single ICO Page</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </nav>
              <!-- - - - - - - - - - - - - end Navigation - - - - - - - - - - - - - - - -->
            </div>

            <div class="search-holder">
              <button type="button" class="search-button"></button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <footer id="footer" class="footer">
      <!-- top footer -->
      <div class="top-footer">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-12">
              <a href="index.html" class="logo"><img src="images/logo2.png" alt=""></a>
            </div>
            <div class="col-lg-6 col-md-12 align-center">
              <ul class="menu-list">
                <li><a href="#">Write for Us</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Register</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-12 align-right">
              <ul class="social-icons">
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-rss"></i></a></li>
                <li><a href="#"><i class="icon-hash"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    @yield('content')


      <!-- main footer -->
      <div class="main-footer">
        
        <div class="container">
          
          <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-12">
              
              <div class="widget">
                
                <h6 class="widget-title">About</h6>

                <p>Nemo enim ipsam voluptatem quia voluptas aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                <p>Est, qui dolorem ipsum quia dolor sit amet, nsectetur, sed quia non numquam eius modi tempora incidunt ut labore. </p>

              </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              
              <div class="widget">
                
                <h6 class="widget-title">Live Charts</h6>

                <ul class="chart-list">
                
                  <li><a href="#">Bitcoin Price</a></li>
                  <li><a href="#">Bitcoin Cash Price</a></li>
                  <li><a href="#">Bitcoin Gold Price</a></li>
                  <li><a href="#">Ethereum Price</a></li>
                  <li><a href="#">Ethereum Classic Price</a></li>
                  <li><a href="#">Litecoin Price</a></li>

                </ul>

              </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              
              <div class="widget">
                
                <h6 class="widget-title">Newsletter Sign Up</h6>
                
                <p>Subscribe now and get exclusive news, interviews and stories.</p>
                <form id="newsletter" class="newsletter">
                  <input type="email" name="newsletter-email" placeholder="Enter your email address">
                  <button type="submit" data-type="submit" class="btn btn-style-4"><i class="licon-mailbox-full"></i>Subscribe</button>
                </form>

              </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              
              <div class="widget">
                
                <div class="banner-title">Advertisement</div>

                <a href="#" class="banner"><img src="images/300x250_banner.jpg" alt=""></a>

              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="copyright">
          
        <p>Copyright © 2018 Cryptox. All Rights Reserved.</p>

      </div>

    </footer>

    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

  </div>

  <!-- - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - -->
  <script src="{{asset('/assets/js/libs/jquery.modernizr.js')}}"></script>
  <script src="{{asset('/assets/js/libs/jquery-2.2.4.min.js')}}"></script>
  <script src="{{asset('/assets/js/libs/jquery-ui.min.js')}}"></script>
  <script src="{{asset('/assets/js/libs/retina.min.js')}}"></script>
  <script src="{{asset('/assets/plugins/jquery.queryloader2.min.js')}}"></script>
  <script src="{{asset('/assets/plugins/owl.carousel.min.js')}}"></script>
  <!-- JS theme files
  ============================================ -->
  <script src="{{asset('/assets/js/plugins.js')}}"></script>
  <script src="{{asset('/assets/js/script.js')}}"></script>
  
</body>
</html>
