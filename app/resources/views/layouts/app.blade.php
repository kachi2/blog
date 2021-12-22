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
          <div class="logo-wrapper">
            <div class="container">
                <div class="header-logo">
                    <a href="index-2.html" class="logo-img">
                        <img src="assets/img/logo3.png" alt="">
                    </a>
                </div>
                <div class="header-soc-icon"><i class="icons ti-menu"></i></div>
                <div class="searchbox-icon"><i id="btn-search1" class="icons ti-search"></i></div>
            </div>
        </div>
        <!-- /.End of logo section -->
        <nav class="navbar navbar-default menu-bar navbar-sticky navbar-mobile bootsnav">
            <div class="container">
                <div class="attr-nav">
                    <ul>
                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal"><i class="fa fa-user"></i></a></li>
                        <li class="side-menu"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li>
                        <li id="btn-search2"><a href="javascript:void(0)"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index-2.html"><img src="assets/img/logo3.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="navFadeInDown" data-out="navFadeOutUp">
                        <li class="dropdown active">
                            <a href="index-2.html" class="dropdown-toggle">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index-2.html">News - Layout - one</a></li>
                                <li><a href="news-layout-2.html">News - Layout - Two</a></li>
                                <li><a href="news-layout-3.html">News - Layout - Three</a></li>
                                <li><a href="magazine.html">Magazine - Layout</a></li>
                                <li><a href="blog-layout-1.html">Blog - Layout - One</a></li>
                                <li class="active"><a href="blog-layout-2.html">Blog - Layout - Two</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Features</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-me.html">About</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" >Category Type</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="post-classic.html">Classic</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle">List Layout</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="post-list%2bleft-right.html">Post List + Left Right Sidebar</a></li>
                                                <li><a href="post-list%2bleft-sidebar.html">Post List + Left Sidebar</a></li>
                                                <li><a href="post-list%2bright-sidebar.html">Post List + Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle">Masonry Layout</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="post-masonry%2bleft-sidebar.html">Post Masonry + Left Sidebar</a></li>
                                                <li><a href="post-masonry%2bno-sidebar.html">Post Masonry + no Sidebar</a></li>
                                                <li><a href="post-masonry%2bright-sidebar.html">Post Masonry + Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">Post Type</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="details-classic.html">Post - Classic</a></li>
                                        <li><a href="details-image.html">Post - Image</a></li>
                                        <li><a href="details-gallery.html">Post - Gallery</a></li>
                                        <li><a href="details-video.html">Post - Video</a></li>
                                        <li><a href="details-video-2.html">Post - Video - Two</a></li>
                                        <li><a href="details-video-scrolldown.html">Post - Youtube - Video and Scrolldown</a></li>
                                        <li><a href="details-youtube.html">Post - Video - Youtube</a></li>
                                        <li><a href="details-vimeo.html">Post - Video - Vimeo</a></li>
                                        <li><a href="details-dailymotion.html">Post - Video - Dailymotion</a></li>
                                        <li><a href="details-soundcloud.html">Post - Audio - SoundCloud</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact-2.html">Contact Two</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                <li><a href="authors.html">Author</a></li>
                                <li><a href="author-post.html">Author Single Page</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="dropdown megamenu-fw megamenu-video">
                            <a href="#" class="dropdown-toggle">Video</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row m_0">
                                        <div class="col-menu-video col-md-3">
                                            <article class="post_article">
                                                <a class="post_img" href="details-video.html">
                                                    <figure><img class="img-responsive" alt="" src="assets/img/400x280-7.jpg"></figure>
                                                    <span class="post__icon post__icon--video"></span>
                                                </a>
                                                <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                            </article>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu-video col-md-3">
                                            <article class="post_article">
                                                <a class="post_img" href="details-video.html">
                                                    <figure><img class="img-responsive" alt="" src="assets/img/400x280-8.jpg"></figure>
                                                    <span class="post__icon post__icon--video"></span>
                                                </a>
                                                <h4><a href="details-video.html">Mauris eu orci rutrum, accumsan nulla ac.</a></h4>
                                            </article>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu-video col-md-3">
                                            <article class="post_article">
                                                <a class="post_img" href="details-video.html">
                                                    <figure><img class="img-responsive" alt="" src="assets/img/400x280-9.jpg"></figure>
                                                    <span class="post__icon post__icon--video"></span>
                                                </a>
                                                <h4><a href="details-video.html">Mauris eu orci rutrum, accumsan nulla ac.</a></h4>
                                            </article>
                                        </div>    
                                        <div class="col-menu-video col-md-3">
                                            <article class="post_article">
                                                <a class="post_img" href="details-video.html">
                                                    <figure><img class="img-responsive" alt="" src="assets/img/400x280-10.jpg"></figure>
                                                    <span class="post__icon post__icon--video"></span>
                                                </a>
                                                <h4><a href="details-video.html">Mauris eu orci rutrum, accumsan nulla ac.</a></h4>
                                            </article>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu-video col-md-3">
                                            <article class="post_article">
                                                <a class="post_img" href="details-video.html">
                                                    <figure><img class="img-responsive" alt="" src="assets/img/400x280-12.jpg"></figure>
                                                    <span class="post__icon post__icon--video"></span>
                                                </a>
                                                <h4><a href="details-video.html">Mauris eu orci rutrum, accumsan nulla ac.</a></h4>
                                            </article>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <!--/.End of video menu -->
                        <li class="dropdown megamenu-fw megamenu-nav-tabs">
                            <a href="#" class="dropdown-toggle">News</a>
                            <ul class="dropdown-menu megamenu-content">
                                <li>
                                    <div class="block-mega-menu">
                                        <div class="mega-cat-menu">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs menu-tabs">
                                                <li><a href="#cat1" data-toggle="tab">Fashion</a></li>
                                                <li><a href="#cat2" data-toggle="tab">Travel</a></li>
                                                <li class="active"><a href="#cat3" data-toggle="tab">Health & Fitness</a></li>
                                                <li><a href="#cat4" data-toggle="tab">Business</a></li>
                                                <li><a href="#cat5" data-toggle="tab">Foods</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-cat-article">
                                            <!-- Tab panes -->
                                            <div class="tab-content menu-tab-content">
                                                <div class="tab-pane" id="cat1">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-video.html">
                                                                    <figure><img class="img-responsive" alt="" src="assets/img/400x280-1.jpg"></figure>
                                                                    <span class="post__icon post__icon--video"></span>
                                                                </a>
                                                                <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-2.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-3.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam eu nunc at nulla efficitur <em>pellentesque .</em></a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-4.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="cat2">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-8.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-9.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-video.html">
                                                                    <figure><img class="img-responsive" alt="" src="assets/img/400x280-10.jpg"></figure>
                                                                    <span class="post__icon post__icon--video"></span>
                                                                </a>
                                                                <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-11.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane active" id="cat3">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-12.jpg" alt=""> </figure></a>
                                                                <h4><a href="details-post.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-video.html">
                                                                    <figure><img class="img-responsive" alt="" src="assets/img/400x280-13.jpg"></figure>
                                                                    <span class="post__icon post__icon--video"></span>
                                                                </a>
                                                                <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-14.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam eu nunc at nulla efficitur <em>pellentesque.</em></a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-video.html">
                                                                    <figure><img class="img-responsive" alt="" src="assets/img/400x280-15.jpg"></figure>
                                                                    <span class="post__icon post__icon--video"></span>
                                                                </a>
                                                                <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="cat4">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-16.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-17.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-18.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam eu nunc at nulla efficitur <em>pellentesque.</em></a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-19.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="cat5">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-20.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-21.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-22.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam eu nunc at nulla efficitur <em>pellentesque.</em></a></h4>
                                                            </article>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <article class="post_article">
                                                                <a class="post_img" href="details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-23.jpg" alt=""></figure></a>
                                                                <h4><a href="details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <!-- /.End of tab category menu -->
                        <li class="dropdown megamenu-fw">
                            <a href="javascript:void(0)" class="dropdown-toggle">Megamenu</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <ul class="menu-col">
                                                <li><a href="index-2.html">Newspaper One</a></li>
                                                <li><a href="news-layout-2.html">Newspaper Two</a></li>
                                                <li><a href="news-layout-3.html">Newspaper Three</a></li>
                                                <li><a href="magazine.html">Magazine - Layout</a></li>
                                                <li><a href="blog-layout-1.html">Blog Layout One</a></li>
                                                <li><a href="blog-layout-2.html">Blog Layout Two</a></li>
                                            </ul>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <ul class="menu-col">
                                                <li><a href="post-classic.html">Category Classic</a></li>
                                                <li><a href="post-list%2bleft-right.html">List + Left Right</a></li>
                                                <li><a href="post-list%2bleft-sidebar.html">List + Left Sidebar</a></li>
                                                <li><a href="post-list%2bright-sidebar.html">List + Right Sidebar</a></li>
                                                <li><a href="post-masonry%2bleft-sidebar.html">Masonry + Left</a></li>
                                                <li><a href="post-masonry%2bno-sidebar.html">Masonry + no Sidebar</a></li>
                                            </ul>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <ul class="menu-col">
                                                <li><a href="post-masonry%2bright-sidebar.html">Masonry + Right</a></li>
                                                <li><a href="details-classic.html">Post - Classic</a></li>
                                                <li><a href="details-image.html">Post - Image</a></li>
                                                <li><a href="details-gallery.html">Post - Gallery</a></li>
                                                <li><a href="details-video.html">Post - Video</a></li>
                                                <li><a href="details-video-2.html">Post - Video - Two</a></li>
                                            </ul>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <ul class="menu-col">
                                                <li><a href="details-video-scrolldown.html">Post - Scrolldown</a></li>
                                                <li><a href="details-youtube.html">Post - Youtube</a></li>
                                                <li><a href="details-vimeo.html">Post - Vimeo</a></li>
                                                <li><a href="details-dailymotion.html">Post - Dailymotion</a></li>
                                                <li><a href="details-soundcloud.html">Post - SoundCloud</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                            </ul>
                                        </div><!-- end col-3 -->  
                                        <div class="col-menu col-md-3">
                                            <ul class="menu-col">
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                                <li><a href="authors.html">Author</a></li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="about-me.html">About</a></li>
                                            </ul>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <!-- /.End of category menu -->
                        <li><a href="javascript:void(0)">Lyfestyle</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>   
            <div class="side-overlay"></div>
            <div class="side" id="side">
                <a href="#" class="close-side"><i class="ti-close"></i></a>
                <div class="widget">
                    <h3 class="widget-title">Custom Pages</h3>
                    <ul class="link">
                        <li><a href="about-me.html">About</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="latest_post_widget">
                    <h3 class="widget-title">Latest Post</h3>
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
                <!-- /.End of latest post -->
                <div class="social_share_btn">
                    <h3 class="widget-title">Subscribe</h3>
                    <ul>
                        <li class="li-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li class="li-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li class="li-google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i> Google +</a></li>
                        <li class="li-pinterest"><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i> Pinterest</a></li>
                    </ul>
                </div>
                <!-- /.End of subscribe -->
            </div>
            <!-- /. End of side menu -->
        </nav>
        <div class="clearfix"></div>
        <!-- /.End of navigation -->
                
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
