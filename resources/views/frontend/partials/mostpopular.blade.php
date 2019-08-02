
    <!-- Popular News Widget -->
        <h3>4 Most Popular News</h3>

        <!-- Single Popular Blog -->
        @foreach ($populars as $popular)
            <div class="single-popular-post">
                <a href="{{route('front.show', $popular->id)}}">
                <h6><span>
                </span>{{$popular->name}}</h6>
                </a>
                {{-- <p>April 14, 2018</p> --}}
            </div>  
        @endforeach
        

