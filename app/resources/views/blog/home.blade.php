@extends('layouts.app')

@section('content')

<div class="blog-masonry">
    <div class="height_30"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div id="blog-slide" class="owl-carousel owl-theme">
                @foreach ($center as $cc)
                    <div class="item">
                        <div class="blog-item blog-item-lg">
                            <a href="{{route('post.details', encrypt($cc->id))}}"><figure><img src="{{asset('images/'.$cc->image)}}" class="img-responsive" alt=""></figure></a>
                            <div class="blog-text">
                                <div class="content-border">
                                    <div class="post-cat"><a href="{{route('post.details', encrypt($cc->id))}}">{{$cc->category->name}}</a></div>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">{{$cc->created_at->format('M d, Y')}}</time> </span> 
                                        <span class="comment-link"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$cc->views}}</a></span>
                                    </div>
                                    <h2 class="blog-title"><a href="{{route('post.details', encrypt($cc->id))}}">{{$cc->title}} </a></h2>
                                    <a href="{{route('post.details', encrypt($cc->id))}}" class="btn link-btn btn-outline btn-rounded">Read More &#8702;</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.End of blog masonry item -->
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-sm-4">
            @foreach ($right as $rr)
                <div class="blog-item blog-item-sm">
                    <a href="{{route('post.details', encrypt($rr->id))}}"><figure><img src="{{asset('images/'.$rr->image)}}" class="img-responsive" alt=""></figure></a>
                    <div class="blog-text">
                        <div class="content-border">
                            <div class="post-cat"><a href="{{route('post.details', encrypt($rr->id))}}">{{$rr->category->name}}</a></div>
                            <h5 class="blog-title"><a href="{{route('post.details', encrypt($rr->id))}}">{{$rr->title}}</a></h5>
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
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="{{$post->created_at->format('d, M Y')}}">{{$post->created_at->format('d, M Y')}}</time></span> 
                                        <span class="comment-link"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>{{$post->views}}</a></span>
                                
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
            <aside class="col-sm-2 col-md-2 p_l_40 rightSidebar">
                <!-- /.End of about -->
                <div class="latest_post_widget">
                    <div class="title-holder">
                        <h3 class="title">Most Popular</h3>
                        <span class="title-shape title-shape-dark"></span>
                    </div>
                    <!--  /.End of title -->
                    @foreach ($recent as $cc)
                    <div class="media latest_post">
                        <a href="{{route('post.details', encrypt($post->id))}}" class="grid_image"><img src="{{asset('images/'.$cc->image)}}" class="media-object" alt="">
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading"><a href="{{route('post.details', encrypt($cc->id))}}">{{$cc->title}}</a></h6>
                            <div class="entry-meta">
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="{{$cc->created_at->format('d, M Y')}}">{{$cc->created_at->format('d, M Y')}}</time> </span> 
                            </div>
                        </div>
                    </div>   
                    @endforeach
                    <!-- /.latest post -->
                   
                    
                    <!-- /.latest post -->
                </div>
                <!-- /.End of latest post -->
               
                <!-- /.End of subscribe -->
                {{-- <div class="banner-content">
                    <img src="{{asset('/assets/img/ad-300x250-1.png')}}" class="img-responsive" alt="">
                </div> --}}
                
                <!-- /.End of facebook like box -->
            </aside>
        </div>
    </div>
</div>

@endsection
