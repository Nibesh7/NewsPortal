@extends('layouts.app')

@section('content')


<div class="container">
    <a href="{{route('posts.create')}}" class="btn btn-success" method="GET"> Add Posts</a>

    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Category</td>
            <td>user</td>
            <td>tags</td>
            <td>Description</td>
            <td>image</td>
            <td>Trending</td>
            <td>Breaking</td>
            <td>Actions</td>
        </tr>
      @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
           
            <td>{{$post->name}}</td>
            <td>{{$post->category->name}}</td>
            <td>{{$post->user->name}}</td>
            <td>
                @foreach($post->tags as $tag) 
                    <a href="{{ route('tags.show', $tag->id)}}">{{$tag->name}}</a>  
                @endforeach
                
            </td>   
            <td>{{str_limit($post->description, 50)}}</td>
           
            <td>
                <img src="{{asset('storage/images/posts/'. $post->image)}}" alt="image" height="100">
            </td>
            <td>
                {{$post-> trending ? 'yes' : 'no'}}
                
            </td>
            <td>
                {{$post-> breaking ? 'yes' : 'no'}}
            </td>
           
            <td>
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary brn-sm">Edit</a> 

            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                  @csrf
                  @method('delete')
                  <input type="submit" value="delete" class="btn btn-danger btn-sm ">
                </form>
            </td>
        </tr>
      @endforeach
        
    </table>
</div>
@endsection