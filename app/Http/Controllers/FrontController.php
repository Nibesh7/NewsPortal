<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;

class FrontController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'desc')->whereHas('posts')->with('posts')->limit(6)->get();
        $tags = Tag::all();
        $breakings = Post::all(); 
        $posts = Post::orderBy('id', 'asc')->get();
         

        // $news = Post::where('category_id', 4)->orderBy('id', 'desc')->limit(1)->get();
        // dd('$categories');
        return view('frontend.index', compact('categories', 'tags', 'posts', 'breakings'));
    }

    public function show($id){
        $post = Post::find($id);
        // $category = Category::find($id);
        $categories = Category::all();
        $breakings = Post::all();
        $posts = Post::all();
        $tags = Tag::all();

        $relatedPosts = Post::where('category_id', $post->category_id)->where('id', '<>', $post->id)->orderBy('id', 'desc')->limit(3)->get();

        return view('frontend.single-post', compact('categories', 'post', 'posts', 'breakings','category','tags','relatedPosts'));
    }
}
