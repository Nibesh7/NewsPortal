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
                <input type="text" id="name" class="form-control" name="name" value="{{old('name')?:$post->name}}">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                <select name="category_id" class="form-control" id="category" >
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" selected="selcted">{{$category->name}} </option>
                        @endforeach

                </select>
                    {{-- <input type="text" id="category" class="form-control" name="category" value=""> --}}
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    {{-- <input type="text" id="description" class="form-control" name="description" value="{{old('description')?:$post->description}}"> --}}
                <textarea name="description" type="hidden" id="description" class="form-control" cols="5" rows="5" value="{{old('description')?:$post->description}}">{{$post->description}}</textarea>
                {{-- <input id="description" type="hidden" name="description"> --}}
                {{-- <trix-editor input="description" value="{{old('description')?:$post->description}}"> {{$post->description}}</trix-editor> --}}
            </div>

                <div class="form-group">
                        <label for="tags">Tags</label>
                        @php $selcted_tags = $post->tags->pluck('id')->toArray(); @endphp
                        <select name="tags[]" class="form-control" multiple>
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}" @if(in_array($tag->id, $selcted_tags)) selected="selcted" @endif > {{$tag->name}}</option>
                                @endforeach
                        </select>
                </div>


                <div class="form-group">
                    <img src="{{asset('storage/images/posts/'. $post->image)}}" alt="image" height="100"> 

                       <label for="Image">Image</label>
                       <input type="file" id="image" class="form-control" name="image">
                </div>

                <div class="form-control my-5">
                        {{-- <label>News Type</label> <br> --}}
                        {{-- <label for="breaking">Breaking</label> --}}
                        <input type="hidden" name="breaking" value="0">
                        <input type="checkbox" name="breaking" value="1" class="panel"> Breaking<br>


                        <br>
                        {{-- <label for="">Trending</label> --}}
                        <input type="hidden" name="trending" value="0">
                        <input type="checkbox" name="trending" value="1" class="panel"> Trending<br>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </form >
        </div>
    </div>

</div>
    
@endsection

{{-- @section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix-core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>
@endsection --}}
    
