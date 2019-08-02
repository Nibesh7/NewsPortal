@extends('layouts.frontend')
@section('content')
     
    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <!-- Single Featured Post -->
                        @foreach ($posts as $post)
                            
                        
                        <div class="single-blog-post featured-post mb-30">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset('storage/images/posts/'.$post->image)}}" alt=""></a>
                            </div>
                            <div class="post-data">
                            <a href="{{route('category.show', $post->category->id)}}" class="post-catagory">{{$post->category->name}}</a>
                                <a href="{{route('front.show', $post->id)}}" class="post-title">
                                    <h6>{{$post->name}}</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">{{$post->user->name}}</a></p>
                                    <p class="post-excerp">{{str_limit($post->description, '200')}} </p>
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


                    <nav aria-label="Page navigation example center">
                        {!! $posts->render() !!}                       
                    </nav>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">
                            <!-- Single Featured Post -->
                            @include('frontend.partials.sidebar')
                        </div>

                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-50">
                            {{-- <h3>4 Most Popular News</h3> --}}
                            @include('frontend.partials.mostpopular')
                        </div>
                        @include('frontend.partials.newsletter')

                        <!-- Latest Comments Widget -->
                        <div class="latest-comments-widget">
                            <h3>Latest Comments</h3>
                            @include('frontend.partials.comments')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection