<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use App\Comment;
use App\Post;
class CommentController extends Controller
{
    public function store(Request $request, Post $post){
        $input = $request->all();
        $post->comments()->create($input);

        return redirect()->back();    
    }
}
