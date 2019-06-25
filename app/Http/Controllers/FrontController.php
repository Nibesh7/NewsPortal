<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;

class FrontController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'desc')->limit(6)->get();
        $tags = Tag::all();
        $posts = Post::orderBy('id', 'desc')->limit(1)->get();
         

        // $news = Post::where('category_id', 4)->orderBy('id', 'desc')->limit(1)->get();
        // dd('$categories');
        return view('frontend.index', compact('categories', 'tags', 'posts', 'news', 'time'));
    }
}
