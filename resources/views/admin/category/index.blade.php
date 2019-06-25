@extends('layouts.app')

@section('content')


<div class="container">
    <a href="{{route('categories.create')}}" class="btn btn-success" method="GET"> Add Category</a>

    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Created_at</td>
            <td>Updated_at</td>
            <td>Actions</td>
        </tr>
        @foreach ($categories as $category)
        <tr>
            
                <td> {{$category->id}}</td>
                <td> 
                    <a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a>
                 </td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td>
                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info">Edit</a>  | 
                    <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
          
        <tr>
        @endforeach
        
    </table>

    
</div>
@endsection