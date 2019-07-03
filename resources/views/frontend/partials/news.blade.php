<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Breaking News</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                            
                                @foreach ($breakings as $breaking)
                                    @if($breaking->Breaking_News == 'Breaking')
                                        <li> <a href="">{{$breaking->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>International</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                                @foreach ($breakings as $breaking)
                                    @if ($breaking->International_News == 'International_News')
                                        <li><a href="">{{$breaking->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="hero-add">
                        <a href="#"><img src="{{asset('img/bg-img/hero-add.gif')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->