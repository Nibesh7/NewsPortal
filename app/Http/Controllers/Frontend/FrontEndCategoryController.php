<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Post;


use App\Http\Controllers\Controller;


class FrontEndCategoryController extends Controller
{
    public function show($id){
        $posts = Post::where('category_id', $id)->paginate(3);

        return view('frontend.categories', compact('posts'));
    }
}
