                        
    <!-- Single Featured Post -->
    @foreach ($categories as $category)
        
    <div class="single-blog-post small-featured-post d-flex">
        <div class="post-thumb">
        <a href="#"><img src="{{asset('storage/images/posts/'.$category->posts->first()->image)}}" alt="" height="100"></a>
        </div>
        <div class="post-data">
            <a href="{{route('category.show', $category->id)}}" class="post-catagory">{{$category->name}}</a>
            <div class="post-meta">
                <a href="{{route('front.show', $category->posts->first()->id)}}">
                    {{str_limit($category->posts->first()->name)}}
                </a>
              
                <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
            </div>
        </div>
    </div>
    @endforeach                    
