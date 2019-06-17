@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card card-default">
        <div class="card-header">
             Add New Post
        
        </div>
        <div class="card-body">
            <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
               @csrf
               @method('patch')
                <div class="form-group">
                    <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{$post->name}}">
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
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="5" rows="5" ></textarea>
                </div>

                {{-- <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" class="form-control" name="image" value="">
                </div>                 --}}

                <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </form >
        </div>
    </div>

</div>
    
@endsection