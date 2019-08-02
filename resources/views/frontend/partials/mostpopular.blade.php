
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
        

        {{-- <!-- Single Popular Blog -->
        <div class="single-popular-post">
            <a href="#">
                <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
            </a>
            <p>April 14, 2018</p>
        </div>

        <!-- Single Popular Blog -->
        <div class="single-popular-post">
            <a href="#">
                <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
            </a>
            <p>April 14, 2018</p>
        </div>

        <!-- Single Popular Blog -->
        <div class="single-popular-post">
            <a href="#">
                <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
            </a>
            <p>April 14, 2018</p>
        </div>

    
    --}}
