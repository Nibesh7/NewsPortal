@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card card-default">
        <div class="card-header">
            Create New Tag
        </div>

        <div class="card-body">
            <form action="{{route('tags.store')}}" method="post">
                @csrf
                {{-- @method('get') --}}
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="name" id="Name" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

    </div>

    
</div>
    
@endsection