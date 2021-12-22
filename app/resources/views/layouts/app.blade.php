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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700%7CSource+Sans+Pro:200,300,400,500,600,700,900" rel="stylesheet">

    <!-- Styles -->
  <link href="{{asset('/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/animsition.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/themify-icons/themify-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/bootsnav.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/owl-carousel/owl.theme.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/fluidbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
</head>
<body class="blog-layout">
  <div class="main-content animsition">
      <div class="page-outer-wrap">
          <div class="top-header">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-6 col-md-7">
                          <div class="header-nav">
                              <ul>
                                  <li><span class="headre-weather"><i class="fa fa-calendar-check-o"></i>&nbsp; Thursday, January 25</span></li>
                                  <li><a href="contact.html">Contact</a></li>
                                  <li><a href="about-me.html">about</a></li>
                                  <li><a href="#">Buy now!</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-sm-6 col-md-5">
                          <ul class="top-socia-share">
                              <li>
                                  <a href="#"><i class="fa fa-facebook"></i></a>
                                  <a href="#"><i class="fa fa-twitter"></i></a>
                                  <a href="#"><i class="fa fa-instagram"></i></a>
                                  <a href="#"><i class="fa fa-linkedin"></i></a>
                                  <a href="#"><i class="fa fa-youtube-play"></i></a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal">Login / Register</a>
                              </li>
                              <li>
                                  <div class="weather-top">
                                      <i class="fa fa-cloud"></i>
                                      <div class="weather-now">
                                          <span class="degrees">- 5.9</span>
                                          <span class="unit">C</span>
                                      </div>
                                      <div class="weather-city">New York</div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /.End of top header -->
  

            @yield('content')


          <footer class="footer-2">
            <div class="container">
                <div class="footer-inner">
                    <a href="#" class="footer-logo"><i class="ico-logo-footer"></i></a>
                    <!-- /.footer Loog -->
                    <div class="footer-copyright">
                        <p>All rights reserved © 2018 The Osru</p>
                        <p><a href="#">Terms and Conditions of Use</a></p>
                    </div>
                    <!-- /.footer Copyright -->
                    <div class="footer-credits">
                        <p>Design:<a target="_blank" href="#">bdtask </a></p>
                    </div>
                    <!-- /.footer Credits -->
                </div>
            </div>
        </footer>
    </div>





  <!-- - - - - - - - - - - - JS files - - - - - - - - - - - - - - -->
 
       <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/assets/js/animsition.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootsnav.js')}}"></script>
        <script src="{{asset('/assets/js/macy.js')}}"></script>
        <script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('/assets/js/ResizeSensor.min.js')}}"></script>
        <script src="{{asset('/assets/js/theia-sticky-sidebar.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('/assets/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/assets/js/modernizr.custom.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.gridrotator.min.js')}}"></script>
        <script src="{{asset('/assets/js/parallax-background.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.simpleSocialShare.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.fluidbox.min.js')}}"></script>
        <script src="{{asset('/assets/js/retina.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{asset('/assets/js/readingTime.min.js')}}"></script>
        <script src="{{asset('/assets/js/custom.js')}}"></script>
        <script>
            var masonry = new Macy({
                container: '#blog-grid',
                trueOrder: false,
                waitForImages: false,
                useOwnImageLoader: false,
                debug: true,
                mobileFirst: true,
                columns: 1,
                margin: 30,
                breakAt: {
                    1200: 2,
                    992: 2,
                    768: 2,
                    480: 2
                }
            });
        </script>
</body>
</html>
