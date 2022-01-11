@extends('layouts.app')

@section('content')

<div class="blog-masonry">
    <div class="height_30"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div id="blog-slide" class="owl-carousel owl-theme">
                @foreach ($slider as $center )
                    <div class="item">
                        <div class="blog-item blog-item-lg">
                            <a href=""><figure><img src="assets/img/masonry/750x480-1.jpg" class="img-responsive" alt=""></figure></a>
                            <div class="blog-text">
                                <div class="content-border">
                                    <div class="post-cat"><a href="#">Inspiration & Design</a></div>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time> </span> 
                                        <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <h2 class="blog-title"><a href="#">It is a long <em>established</em> fact that a reader will be distracted by the readable content of a page</a></h2>
                                    <a href="#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.End of blog masonry item -->
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-sm-4">
            @foreach ($slider_right as $right)
                <div class="blog-item blog-item-sm">
                    <a href="#"><figure><img src="assets/img/masonry/360x227-2.jpg" class="img-responsive" alt=""></figure></a>
                    <div class="blog-text">
                        <div class="content-border">
                            <div class="post-cat"><a href="#">Travel</a></div>
                            <h4 class="blog-title"><a href="#">It is a long <em>established</em> fact that a reader.</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- /.End of blog masonry item -->
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <main class="col-sm-8 col-md-8 content">
                <!-- /.End of grid post -->
                <div id="blog-grid">
                          @foreach ($posts as $post )
                    <article class="grid_post text-center">
           <figure>
                            <a href="{{route('post.details', encrypt($post->id))}}" class="grid_image"><img src="{{asset('images/'.$post->image)}}" class="img-responsive" alt=""></a>
                            <figcaption>
                                <div class="post-cat"><a href="{{route('post.details', encrypt($post->id))}}">{{$post->category->name}}</a></div>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">{{$post->created_at->format('d, M Y')}}</time></span> 
                                </div>
                                <h4 class="grid_post_title"><a href="{{route('post.details', encrypt($post->id))}}">{{$post->title}}</a></h4>
                                <p>{{substr($post->content,0,100)}}.</p>
                                <a href="{{route('post.details', encrypt($post->id))}}" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                <!-- /.Post button -->
                            </figcaption>
                        </figure>
                         
                    </article>
                    @endforeach
               
                  
                </div>
            </main>
            <aside class="col-sm-4 col-md-4 p_l_40 rightSidebar">
                <!-- /.End of about -->
                <div class="latest_post_widget">
                    <div class="title-holder">
                        <h3 class="title">Most Popular</h3>
                        <span class="title-shape title-shape-dark"></span>
                    </div>
                    <!--  /.End of title -->
                    <div class="media latest_post">
                        <a class="media-left" href="#">
                            <img src="assets/img/100x70-1.jpg" class="media-object" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics From Copenhagen</a></h6>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time> </span> 
                            </div>
                        </div>
                    </div>
                    <!-- /.latest post -->
                    <div class="media latest_post">
                        <a class="media-left" href="#">
                            <img src="assets/img/100x70-2.jpg" class="media-object" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics From Copenhagen</a></h6>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time> </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.latest post -->
                    <div class="media latest_post">
                        <a class="media-left" href="#">
                            <img src="assets/img/100x70-3.jpg" class="media-object" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="#">The <em>Best Street-Style</em> Pics From Copenhagen</a></h6>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time> </span> 
                            </div>
                        </div>
                    </div>
                    <!-- /.latest post -->
                </div>
                <!-- /.End of latest post -->
               
                <!-- /.End of subscribe -->
                <div class="banner-content">
                    <img src="{{asset('/assets/img/ad-300x250-1.png')}}" class="img-responsive" alt="">
                </div>
                
                <!-- /.End of facebook like box -->
            </aside>
        </div>
    </div>
</div>

@endsection
