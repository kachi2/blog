<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="CryptoNewsUpdate24 is a cryptocurrency news service that covers latest bitcoin news today, technical analysis price for bitcoin and other altcoins">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'CryptoNewsUpdate24') }}</title>
    <!-- Scripts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700%7CSource+Sans+Pro:200,300,400,500,600,700,900" rel="stylesheet">
    <!-- Styles -->
  <link href="{{asset('/images/fav.png')}}" rel="icon">
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
                            <li><span class="headre-weather"><i class="fa fa-calendar-check-o"></i>&nbsp; {{Date('D, M, d')}}</span></li>
                            <li><a href="{{route('contact.us')}}">Contact</a></li>
                            <li><a href="{{route('about.us')}}">about</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5">
                    <ul class="top-socia-share">
                        <li>
                            {{-- <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a> --}}
                        </li>
                        <li>
                            <a href="{{route('advertise')}}" >Advertise with us</a>
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
    <nav class="navbar navbar-inverse navbar-sticky navbar-mobile bootsnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('images/logo_33.png')}}" style="top:20px" class="logo" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="navFadeInDown" data-out="navFadeOutUp">
                    <li class="dropdown ">
                        <a href="{{route('index')}}" >Crypto News</a>
                    </li>
                    <li class="dropdown"><a href="{{route('crypto.business')}}">Crypto Business</a></li>
                    <li><a href="{{route('crypto.brokers')}}">Crypto Brokers</a></li>
                    <li><a href="{{route('crypto.invest')}}">Invest in Crypto</a></li>
                    <li><a href="{{route('crypto.exchange')}}">Crypto Exchange</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
           
        </div>  
        <!-- /. End of side menu -->
        <div class="side-overlay"></div>
    </nav>
    <div class="clearfix"></div>
    <div class="container">
      <div class="newstricker_inner">
          <div class="trending"> Trending Post</div>
          <div id="newsTicker" class="owl-carousel owl-theme">
          @foreach ($heading as $pp )
          <div class="item">
                  <a href="#">{{$pp->title}}</a>
              </div>
               @endforeach
          </div>
      </div>
  </div>
    <!-- /.End of navigation -->       
            @yield('content')
 <!-- /. End of instagram -->
 <footer class="footer-white">
  <div class="main-footer">
      <div class="container">
          <div class="row">
              <div class="col-sm-5 col-md-5">
                  <h3 class="widget-title title-black">About Us</h3>
                  <div class="footer-box">
                      <p>CryptoNewsUpdate24 is cryptocurrency news service that covers bitcoin news today and other coins, technical analysis & forecasts for bitcoin price and other altcoins. Here at CrytoNews, we are dedicated to enlightening everyone about bitcoin and other cryptocurrencies.</p>
                      <p>Contact us on <a href="mailto:support@cryptonewsupdate24.com"><strong>support@cryptonewsupdate24.com</strong></a></p> 
                  </div>
              </div>
              <div class="col-sm-3 col-md-2">
                  <div class="footer-box">
                      <h3 class="widget-title title-black">Links</h3>
                      <ul class="footer-cat">
                      <a href="{{route('crypto.business')}}">Crypto Business</a></li>
                    <li><a href="{{route('crypto.brokers')}}">Crypto Brokers</a></li>
                    <li><a href="{{route('crypto.invest')}}">Invest in Crypto</a></li>
                    <li><a href="{{route('crypto.exchange')}}">Crypto Exchange</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-sm-5 col-md-4">
                  <div class="footer-box">
                      <h3 class="widget-title title-black">Recent Post</h3>
                      
                      @foreach ($popular as $pp)
                      <div class="media latest_post">
                          <a class="media-left" href="#">
                              <img src="{{asset('images/'.$pp->image)}}" class="media-object" alt="">
                          </a>
                          <div class="media-body">
                              <h6 class="media-heading"><a href="#">{{$pp->title}}</a></h6>
                              <div class="entry-meta">
                                  <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="">{{$pp->created_at->format('d, M Y')}}</time></span>
                              </div>
                          </div>
                      </div>
                       @endforeach
                      <!-- /.latest post -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="sub-footer">
      Copyright © {{Date('Y')}}. All Rights Reserved.
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

        @yield('script')
</body>
</html>
