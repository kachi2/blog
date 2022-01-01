@extends('layouts.app')

@section('content')
    
<div class="clearfix"></div>
<div class="parallax page_header"  data-parallax-bg-image="{{asset('/assets/img/header-bg.jpg')}}" data-parallax-direction="left">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Gallery Post Details</h3>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Post Formats</a></li>
                    <li class="active">Post</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container">
        <div class="row">
            <main class="col-sm-8 col-md-9 content p_r_40">
                <div class="details-body">
                    <div class="post_details stickydetails">
                        <header class="details-header">
                            <div class="post-cat"><a href="#">Fashion</a><a href="#">Travel</a><a href="#">Lifestyle</a></div>
                            <h2>There are many <em>variations of passages</em> of Lorem Ipsum available, but the majority.</h2>
                            <div class="element-block">
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span> 
                                    <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                </div>
                                <div class="reading-time"><span class="eta"></span> (<span class="words"></span> words)</div>
                            </div>
                        </header>
                        <div class="gallery_post popup-gallery">
                            <div id="sync1" class="owl-carousel">
                                <div class="item">
                                    <div class="gallery_grid">
                                        <figure class="effect-lily">
                                            <a href="assets/img/gallery/700x365-1.jpg" class="gallery_img" title="Title goes here">
                                                <div class="full_skin"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div>
                                                <img src="assets/img/gallery/700x365-1.jpg" class="img-responsive" alt="">
                                            </a>			
                                        </figure>
                                    </div>
                                    <!-- /.End of gallery grid -->
                                </div>
                                <!-- /.End of gallery item -->
                                <div class="item">
                                    <div class="gallery_grid">
                                        <figure class="effect-lily">
                                            <a  href="assets/img/gallery/700x365-2.jpg" class="gallery_img" title="Title goes here">
                                                <div class="full_skin"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div>
                                                <img src="assets/img/gallery/700x365-2.jpg" class="img-responsive" alt="">
                                            </a>			
                                        </figure>
                                    </div>
                                    <!-- /.End of gallery grid -->
                                </div>
                                <!-- /.End of gallery item -->
                                <div class="item">
                                    <div class="gallery_grid">
                                        <figure class="effect-lily">
                                            <a href="assets/img/gallery/700x365-3.jpg" class="gallery_img" title="Title goes here">
                                                <div class="full_skin"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div>
                                                <img src="assets/img/gallery/700x365-3.jpg" class="img-responsive" alt="">
                                            </a>			
                                        </figure>
                                    </div>
                                    <!-- /.End of gallery grid -->
                                </div>
                                <!-- /.End of gallery item -->
                                <div class="item">
                                    <div class="gallery_grid">
                                        <figure class="effect-lily">
                                            <a href="assets/img/gallery/700x365-4.jpg" class="gallery_img" title="Title goes here">
                                                <div class="full_skin"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div>
                                                <img src="assets/img/gallery/700x365-4.jpg" class="img-responsive" alt="">
                                            </a>	
                                        </figure>
                                    </div>
                                    <!-- /.End of gallery grid -->
                                </div>
                                <!-- /.End of gallery item -->
                                <div class="item">
                                    <div class="gallery_grid">
                                        <figure class="effect-lily">
                                            <a href="assets/img/gallery/700x365-5.jpg" class="gallery_img" title="Title goes here">
                                                <div class="full_skin"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div>
                                                <img src="assets/img/gallery/700x365-5.jpg" class="img-responsive" alt="">
                                            </a>		
                                        </figure>
                                    </div>
                                    <!-- /.End of gallery grid -->
                                </div>
                                <!-- /.End of gallery item -->
                                <div class="item">
                                    <div class="gallery_grid">
                                        <figure class="effect-lily">
                                            <a href="assets/img/gallery/700x365-6.jpg" class="gallery_img" title="Title goes here">
                                                <div class="full_skin"><i class="fa fa-arrows-alt" aria-hidden="true"></i></div>
                                                <img src="assets/img/gallery/700x365-6.jpg" class="img-responsive" alt="">
                                            </a>	
                                        </figure>
                                    </div>
                                    <!-- /.End of gallery grid -->
                                </div>
                                <!-- /.End of gallery item -->
                            </div>
                            <div id="sync2" class="owl-carousel">
                                <div class="item">
                                    <img src="assets/img/gallery/400x280-1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/gallery/400x280-2.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/gallery/400x280-3.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/gallery/400x280-4.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/gallery/400x280-5.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/gallery/400x280-6.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- /.End of gallery -->
                        <h3>It is a long established fact that a reader will be distracted. </h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                            humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need 
                            to be sure there isn't anything embarrassing hidden in the middle.</p>
                        <blockquote>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                            by injected humour, or randomised words which don't look even slightly believable.
                        </blockquote>
                        <h3>There are many variations of passages of Lorem Ipsum available.</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                            making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                            obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered 
                            the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
                            by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>
                    <!-- /.End of post details -->
                    <div class="stickyshare">
                        <aside class="share_article">
                            <a href="#" class="boxed_icon facebook" data-share-url="http://mightymedia.nl" data-share-network="facebook" data-share-text="Share this awesome link on Facebook" data-share-title="Facebook Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-facebook"></i><span>28</span></a>
                            <a href="#" class="boxed_icon twitter" data-share-url="http://mightymedia.nl" data-share-network="twitter" data-share-text="Share this awesome link on Twitter" data-share-title="Twitter Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-twitter"></i></a>
                            <a href="#" class="boxed_icon google-plus" data-share-url="http://mightymedia.nl" data-share-network="googleplus" data-share-text="Share this awesome link on Google+" data-share-title="Google+ Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="boxed_icon pinterest" data-share-url="http://mightymedia.nl" data-share-network="pinterest" data-share-text="Share this awesome link on Pinterest" data-share-title="Pinterest Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" class="boxed_icon comment"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="14" height="14" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve"><path d="M3.6 14c0 0-0.1 0-0.1 0 -0.1-0.1-0.2-0.2-0.2-0.3v-2.7h-2.9C0.2 11 0 10.8 0 10.6V0.4C0 0.2 0.2 0 0.4 0h13.3C13.8 0 14 0.2 14 0.4v10.2c0 0.2-0.2 0.4-0.4 0.4H6.9L3.9 13.9C3.8 14 3.7 14 3.6 14zM0.7 10.2h2.9c0.2 0 0.4 0.2 0.4 0.4v2.2l2.5-2.4c0.1-0.1 0.2-0.1 0.2-0.1h6.6v-9.5H0.7V10.2z"></path></svg><span>3</span></a>
                        </aside>
                    </div>
                    <!-- /End of share icon -->
                </div>
                <!-- /.End of details body -->
               
                <!-- /.End of about author -->
                <div class="post_related">
                    <h3 class="related_post_title">You Might Also Like...</h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <article class="post_article item_related">
                                <a class="post_img" href="#">
                                    <figure>
                                        <img class="img-responsive" src="assets/img/400x280-7.jpg" alt="">
                                    </figure>
                                </a>
                                <h4><a href="#">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                            </article>
                            <!-- /.End of related post -->
                        </div>
                        <div class="col-sm-4">
                            <article class="post_article item_related">
                                <a class="post_img" href="#">
                                    <figure>
                                        <img class="img-responsive" src="assets/img/400x280-8.jpg" alt="">
                                    </figure>
                                </a>
                                <h4><a href="#">Aliquam <em><strong>gravida urna</strong></em> ut ipsum hendrerit cursus.</a></h4>
                            </article>
                            <!-- /.End of related post -->
                        </div>
                        <div class="col-sm-4">
                            <article class="post_article item_related">
                                <a class="post_img" href="#">
                                    <figure>
                                        <img class="img-responsive" src="assets/img/400x280-9.jpg" alt="">
                                    </figure>
                                </a>
                                <h4><a href="#">Aliquam eu nunc at nulla efficitur <em><strong>pellentesque a quis.</strong></em></a></h4>
                            </article>
                            <!-- /.End of related post -->
                        </div>
                    </div>
                </div>
                <!-- /.End of  related post -->
                ]
                <!-- /.End of comment content -->
            </main>
            <aside class="col-sm-4 col-md-3 rightSidebar">
                <div class="latest_post_widget">
                    <div class="title-holder">
                        <h3 class="title">Latest Post</h3>
                        <span class="title-shape title-shape-dark"></span>
                    </div>
                    <!--  /.End of title -->
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
                <!-- /.End of tags -->
            </aside>
        </div>
    </div>
</div>
<div class="newslatter">
    <div class="container">
        <h3>Sign Up for Our <em>Newsletter</em></h3>
        <p>Subscribe now to get notified about exclusive offers<br> from The .... every week!</p>
        <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Your email address" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /. End of news latter -->
<div cl
@endsection