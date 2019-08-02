@extends('layouts.frontend')

@section('content')
    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">

                        @foreach ($featuredPost1 as $feature)
                          <!-- Single Featured Post -->
                        <div class="col-12 col-lg-7">
                                <div class="single-blog-post featured-post">
                                    <div class="post-thumb">
                                        <a href="#"><img src="{{asset('storage/images/posts/'.$feature->image)}}" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                    <a href="{{route('category.show', $feature->category->id)}}" class="post-catagory">{{$feature->category->name}}</a>
                                        
                                        {{-- aaaa --}}
                                     <a href="{{route('front.show', $feature->id)}}" class="post-title">
    
                                            <h6>{{$feature->name}}</h6>
                                        </a>
                                        <div class="post-meta">
                                            <p class="post-author">By <a href="#">{{$feature->user->name}}</a></p>
                                            <p class="post-excerp">{{str_limit($feature->description, '200')}}</p>
                                            <!-- Post Like & Post Comment -->
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        @endforeach

                        
                        
                        <div class="col-12 col-lg-5">
                            <!-- Single Featured Post -->
                            @foreach ($featuredPost2 as $featurePost)
                            <div class="single-blog-post featured-post-2">
                                    <div class="post-thumb">
                                        <a href="#"><img src="{{asset('storage/images/posts/'.$featurePost->image)}}" alt=""></a>

                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory">{{$featurePost->category->name}}</a>
                                        <div class="post-meta">
                                            <a href="{{route('front.show', $featurePost->id)}}" class="post-title">
                                                <h6>{{$featurePost->name}}</h6>
                                            </a>
                                            <!-- Post Like & Post Comment -->
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                                <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            @endforeach
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4">
                    @include('frontend.partials.sidebar')
                </div>
                
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Popular News</h6>
                    </div>

                    <div class="row">


                        <!-- Single Post -->
                        @foreach ($popularPosts as $popular)
                            
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                <a href="#"><img src="{{asset('storage/images/posts/'.$popular->image)}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                <a href="{{route('category.show', $popular->id)}}" class="post-catagory">{{$popular->category->name}}</a>
                                    <a href="{{route('front.show', $popular->id)}}" class="post-title">
                                    <h6>{{$popular->name}}</h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        
                    </div>
                </div> 

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Info</h6>
                    </div>
                    <div class="popular-news-widget mb-30">
                        @include('frontend.partials.mostpopular')    
                    </div>
                    @include('frontend.partials.newsletter')
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    <div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="img/bg-img/video1.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="img/bg-img/video2.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Video Post -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img src="img/bg-img/video3.jpg" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- ##### Video Post Area End ##### -->



    <!-- ##### Editorial Post Area Start ##### -->
    <div class="editors-pick-post-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="section-heading">
                        <h6>Trending </h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        @foreach ($trendingPosts as $trending)

                        <div class="col-12 col-lg-4">
                                
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('storage/images/posts/'.$trending->image)}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                <a href="{{route('front.show', $trending->id)}}" class="post-title">
                                        <h6>{{$trending->name}}</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="#">February 11, 2018</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- World News -->
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="section-heading">
                        <h6>World News</h6>
                    </div>

                    <!-- Single Post -->
                    @foreach ($worldNews as $worldNew)
                        
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                        <a href="#"><img src="{{asset('storage/images/posts/'.$worldNew->image)}}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6>{{$worldNew->name}}</h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="#">February 11, 2018</a></div>
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- ##### Editorial Post Area End ##### -->

    @endsection