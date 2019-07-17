<div class="newsletter-widget">
        @if (\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div><br />
       @endif
       @if (\Session::has('failure'))
        <div class="alert alert-danger">
          <p>{{ \Session::get('failure') }}</p>
        </div><br />
       @endif
    <h4>Newsletter</h4>
    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <form action="{{route('newsletter.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <button type="submit" class="btn w-100">Subscribe</button>
    </form>
</div>