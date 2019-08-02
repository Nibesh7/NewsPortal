@foreach ($latestComments as $comments)
<div class="single-comments d-flex">
        <div class="comments-thumbnail mr-15">
            <img src="img/bg-img/29.jpg" alt="">
        </div>
        <div class="comments-text">
        <a href="#">{{$comments->name}} <span>on</span> {{$comments->comment}}</a>
            <p>06:34 am, April 14, 2018</p>
        </div>
    </div>
@endforeach
 

  