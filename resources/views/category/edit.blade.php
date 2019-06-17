@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card card-default">
        <div class="card-header">
            Category Create Form
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body">
        <form action="{{route('categories.update', $category->id)}}" method="post">
           @csrf
           @method('patch')
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" id="name" class="form-control" name="name" value="{{ $category->name}}">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form >
        </div>
   </div>
</div>

    
@endsection