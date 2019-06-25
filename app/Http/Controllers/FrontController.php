<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;

class FrontController extends Controller
{
    public function index(){
        $categories = Category::all();
        $tags = Tag::all();

        $posts = Post::all();
        // dd('$categories');
        return view('frontend.index', compact('categories', 'tags', 'posts'));
    }
}
