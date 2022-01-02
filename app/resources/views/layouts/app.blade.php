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
<body>
  <div class="main-content animsition">
    <div class="top-header dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7">
                    <div class="header-nav">
                        <ul>
                            <li><span class="headre-weather"><i class="fa fa-calendar-check-o"></i>&nbsp; Thursday, January 25</span></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="about-me.html">about</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5">
                    <ul class="top-socia-share">
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal">Advertise with us</a>
                        </li>
                        <li>
                            <div class="weather-top">
                                <i class="fa fa-clock-o"></i>
                                <div class="weather-now">
                                    <span class="degrees">{{Date('h:i a')}}</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.End of top header -->
    <nav class="navbar navbar-inverse navbar-sticky navbar-mobile bootsnav">
        <div class="container">
            <!-- End Atribute Navigation -->
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index-2.html"><img src="assets/img/logo-white.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="navFadeInDown" data-out="navFadeOutUp">
                    <li class="dropdown active">
                        <a href="index-2.html" >Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Crypto Business</a>
                    </li>
                    <!-- /.End of category menu -->
                    <li><a href="javascript:void(0)">Crypto Brokers</a></li>
                    <li><a href="contact.html">Invest in Crypto</a></li>

                    <li><a href="contact.html">Crypto Exchange</a></li>

                    <li><a href="contact.html">Crypto Explainer</a></li>
                    <div class="attr-nav">
                      <ul>
                          <li id="btn-search1"><a href="javascript:void(0)" id="btn-search2"><i class="fa fa-search"></i></a></li>
                      </ul>
                  </div>
                </ul>
                
            </div><!-- /.navbar-collapse -->
           
        </div>  
        <!-- /. End of side menu -->
        <div class="side-overlay"></div>
    </nav>
    <div class="clearfix"></div>
    <div class="container">
      <div class="newstricker_inner">
          <div class="trending"><strong>Trending</strong> Now</div>
          <div id="newsTicker" class="owl-carousel owl-theme">
              <div class="item">
                  <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
              </div>
              <div class="item">
                  <a href="#">It is a long established fact that a reader will be distracted by the readable.</a>
              </div>
              <div class="item">
                  <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
              </div>
          </div>
      </div>
  </div>
    <!-- /.End of navigation -->
                
            @yield('content')

 <!-- /. End of instagram -->
 <footer class="footer-black">
  <div class="main-footer">
      <div class="container">
          <div class="row">
              <div class="col-sm-4 col-md-4">
                  <div class="footer-box">
                      <div class="footer-logo">
                          <img src="assets/img/logo-white.png" class="img-responsive" alt="">
                      </div>
                      <p>It is a long established fact that a reader<br>
                          will be distracted by the readable content of<br>
                          a page when looking at its layout. The point<br>
                          of using Lorem Ipsum</p>
                      <div class="textwidget"><p>457 BIgBlue Street, Suite 4A<br>
                              New York, NY 10013<br>
                              <span>(315) 5512-2579</span><br>
                              <!--<a href="mailto:info@example.com">info@example.com</a>-->
                          </p>
                      </div>
                      <p>Contact us on <a href="mailto:info@example.com"><strong>info@example.com</strong></a></p> 
                  </div>
              </div>
              <div class="hidden-sm col-md-3">
                  <div class="footer-box">
                      <h3 class="widget-title title-white">Twitter</h3>
                      <ul class="twitter-widget">
                          <li>
                              <div class="icon"><i class="ti-twitter"></i></div>
                              <div class="tweet-text">
                                  So proud to have become an <a target="_blank" href="#">@envato</a> Power Elite author. Drop our #ThemeForest: <a target="_blank" href="#">https://t.co/jGyLLggygN</a>
                              </div>
                          </li>
                          <li>
                              <div class="icon"><i class="ti-twitter"></i></div>
                              <div class="tweet-text">
                                  So proud to have become an <a target="_blank" href="#">@envato</a> Power Elite author. Drop out our #ThemeForest: <a target="_blank" href="#">https://t.co/jGyLLggygN</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-3 col-md-2">
                  <div class="footer-box">
                      <h3 class="widget-title title-white">Need help</h3>
                      <ul class="footer-cat">
                          <li><a href="#">Our Community</a></li>
                          <li><a href="#">See Our Portfolio</a></li>
                          <li><a href="#">Story About Us</a></li>
                          <li><a href="#">Keep in Touch</a></li>
                          <li><a href="#">Purchase Our Products</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-5 col-md-3">
                  <div class="footer-box">
                      <h3 class="widget-title title-white">Latest Post</h3>
                      <div class="media latest_post">
                          <a class="media-left" href="#">
                              <img src="assets/img/100x70-1.jpg" class="media-object" alt="">
                          </a>
                          <div class="media-body">
                              <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics Copenhagen</a></h6>
                              <div class="entry-meta">
                                  <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                              </div>
                          </div>
                      </div>
                      <!-- /.latest post -->
                      <div class="media latest_post">
                          <a class="media-left" href="#">
                              <img src="assets/img/100x70-2.jpg" class="media-object" alt="">
                          </a>
                          <div class="media-body">
                              <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics Copenhagen</a></h6>
                              <div class="entry-meta">
                                  <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                              </div>
                          </div>
                      </div>
                      <!-- /.latest post -->
                      <div class="media latest_post">
                          <a class="media-left" href="#">
                              <img src="assets/img/100x70-3.jpg" class="media-object" alt="">
                          </a>
                          <div class="media-body">
                              <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics Copenhagen</a></h6>
                              <div class="entry-meta">
                                  <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                              </div>
                          </div>
                      </div>
                      <!-- /.latest post -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="sub-footer">
      Copyright © 2017 by Bdtask. All Rights Reserved.
  </div>
</footer>
<!-- /.End of footer -->
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
