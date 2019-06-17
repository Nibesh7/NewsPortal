@extends('layouts.app')

@section('content')

<div class="container">
<a href="{{route('tags.create')}}"  class="btn btn-primary"> Add Tag</a>

    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Actions</td>
        </tr>      
        @foreach ($tags as $tag)
        <tr>
            <td>{{$tag->id}}</td>

            {{-- to show tag related post --}}
            <td>
                <a href="{{route('tags.show', $tag->id)}}"> {{$tag->name}}</a> 
            </td> 

            <td>
            <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-primary"> Edit</a>  | 
            <form action="{{route('tags.destroy', $tag->id)}}" method="POST">
                @csrf
                @method('delete')

                <input type="submit" value="Delete" class="btn btn-danger">
            </form>   
           
            </td>
        </tr>
            
        @endforeach
    </table>
</div>
    
@endsection