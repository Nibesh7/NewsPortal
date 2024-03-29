@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card card-default">
        <div class="card-header">
             Add New Post
        
        </div>
        <div class="card-body">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" name="name" value="">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" class="form-control" id="category">
                        @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                    {{-- <input type="text" id="category" class="form-control" name="category" value=""> --}}
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                        <select name="tags[]" class="form-control" multiple >
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select >
                        
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="5" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" class="form-control" name="image" value="">
                </div>             
                
                <div class="form-control my-5">
                    <label>News Type</label> <br>
                    <input type="checkbox" name="breaking" value="1" class="panel">Breaking<br>
                    <input type="checkbox" name="trending" value="1"> Trending<br>
                </div>

                <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </form >
        </div>
    </div>

</div>



{{-- api concept --}}

{{-- <script
			  src="http://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
              
<script> --}}
    
{{-- $.ajax({
  url: "{{url('admin/categories/get_ajax')}}",
  method: "post",
  data: 
  
}).done(function(result) {
    // console.log($.parseJSON(result))
    console.log($(result))
    $(result).each(function(category){
        console.log(category)
    })
});
</script> --}}
    
@endsection