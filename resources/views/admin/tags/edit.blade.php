@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card card-default">
        <div class="card-header">
            Edit A tag
        </div>

        <div class="card-body">
            <form action="{{route('tags.update', $tag->id)}}" method="post">
                @csrf
                @method('patch')
                {{-- @method('get') --}}
                <div class="form-group">
                    <label for="Name">Name</label>
                <input type="text" name="name" id="Name" class="form-control" value="{{$tag->name}}">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

    </div>

    
</div>
    
@endsection