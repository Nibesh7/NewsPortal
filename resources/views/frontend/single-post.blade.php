@extends('layouts.frontend')
@section('content')
    

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset('storage/images/posts/'.$post->image)}}" alt="" height="100"></a>
                                
                                {{-- <a href="#"><img src="{{assest('img/bg-img/25.jpg')}}" alt=""></a> --}}
                            </div>
                            <div class="post-data">
                                {{-- @foreach ($posts as $post) --}}
                                <a href="{{route('category.show', $post->category->id)}}" class="post-catagory">{{$post->category->name}}</a>
                                <a href="{{route('front.show', $post->id)}}" class="post-title">
                                     <h6>{{$post->name}}</h6>
                                </a>
                                <div class="post-meta">
                                <p class="post-author">By <a href="#">{{$post->user->name}}</a></p>
                                   {{$post->description}}

                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->
                                        <div class="newspaper-tags d-flex">
                                            <span>Tags:</span>
                                            <ul class="d-flex">
                                                
                                                
                                                 <li><a href="#">{{$tags->first()->name}}</a></li>   
                                                
                                                
                                            </ul>
                                        </div>
                                   {{-- {{dd($post)}} --}}


                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center post-like--comments">
                                            <a href="#" class="post-like"><img src="{{asset('img/core-img/like.png')}}" alt=""> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="{{asset('img/core-img/chat.png')}}" alt=""> <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                             

                        <!-- About Author -->
                        <div class="blog-post-author d-flex">
                            <div class="author-thumbnail">
                                <img src="{{asset('img/bg-img/32.jpg')}}" alt="">
                            </div>
                            <div class="author-info">
                                <a href="#" class="author-name">James Smith, <span>The Author</span></a>
                                <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                            </div>
                        </div>
                        
                        
                        
                        <div class="pager d-flex align-items-center justify-content-between">
                            <div class="prev">
                            <a href="{{ url()->previous()}}" class="active"><i class="fa fa-angle-left"></i> previous</a>
                            </div>
                            <div class="next">
                                <a href="#">Next <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        {{-- {{ $posts->links() }} --}}

                        <div class="row">
                            <div class="col-md-6">
                        
                                @if (isset($previous))
                                    <div class="alert alert-success">
                                    <a href="{{ route('front.show',$previous->id) }}">
                                        <div class="btn-content">
                                            <div class="btn-content-title"><i class="fa fa-arrow-left"></i> Previous Post</div>
                                            <p class="btn-content-subtitle">{{ $previous->title }}</p>
                                        </div>
                                    </a>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                        
                                @if (isset($next))
                                <div class="alert alert-success">
                                <a href="{{ route('front.show', $next->id) }}">
                                    <div class="btn-content">
                                        <div class="btn-content-title">Next Post <i class="fa fa-arrow-right"></i></div>
                                        <p class="btn-content-subtitle">{{ $next->title }}</p>
                                    </div>
                                </a>
                                </div>
                                @endif
                            </div>
                        </div> 
                        <div class="section-heading">
                            <h6>Related</h6>
                        </div>
                        
                        
                        <div class="row">
                        @foreach ($relatedPosts as $relate)

                            <!-- Single Post -->
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-3 mb-80">
                                    <div class="post-thumb">
                                        <a href="#"><img src="{{asset('storage/images/posts/'.$relate->image)}}" alt=""></a>
                                    </div>

                                    <div class="post-data">

                                        <a href="{{route('category.show',$post->category->id)}}" class="post-catagory">{{$post->category->name}}</a>
                                        <a href="{{route('front.show', $post->id)}}" class="post-title">
                                            <h6>
                                                {{$relate->name}}
                                            </h6>
                                        </a>
                                        <div class="post-meta d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="{{asset('img/core-img/like.png')}}" alt=""> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="{{asset('img/core-img/chat.png')}}" alt=""> <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>


                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <h5 class="title">3 Comments</h5>
                            @foreach ($comments as $comment)
                                
                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{asset('img/bg-img/')}}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">{{$comment->name}}</a>
                                            <a href="#" class="post-date">April 15, 2018</a>
                                            <p>{{$comment->comment}}</p>
                                        </div>
                                    </div>
                                    
                                </li>
                            </ol>
                            @endforeach

                        </div>

                        <div class="post-a-comment-area section-padding-80-0">
                            <h4>Leave a comment</h4>
                            
                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="{{route('comment.store', $post->id)}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="subject" name="website" placeholder="Website">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="comment" class="form-control" id="comment" name="" cols="30" rows="10" placeholder="Comment"></textarea>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">
                            @include('frontend.partials.sidebar')
                        </div>

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
    <!-- ##### Blog Area End ##### -->
    @endsection