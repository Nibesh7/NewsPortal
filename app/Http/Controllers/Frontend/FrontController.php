<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;

use App\Http\Controllers\Controller;


class FrontController extends Controller
{
    public function index(){
        // $categories = Category::orderBy('id', 'desc')->whereHas('posts')->with('posts')->limit(6)->get();

        // $breakings = Post::where('breaking','1')->get(); 

        // $internationalNews = Post::where('category_id', 6)->orderBy('id', 'desc')->get();
        $posts = Post::orderBy('id', 'asc')->get();

        $trendingPosts = Post::where('trending', '1')->get();

        $worldNews = Post::where('category_id', 5)->orderBy('id', 'desc')->get();



        
         

        // $news = Post::where('category_id', 4)->orderBy('id', 'desc')->limit(1)->get();
        // dd('$categories');
        return view('frontend.index', compact('tags', 'posts', 'trendingPosts','worldNews'));
    }

    public function show($id){
        // $post = Post::find($id);  
        $post = Post::where('id', $id)->firstOrFail();

        $tags = Tag::all();

        $relatedPosts = Post::where('category_id', $post->category_id)->where('id', '<>', $post->id)->orderBy('id', 'desc')->limit(3)->get();


        $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();

        return view('frontend.single-post', compact('post','tags','relatedPosts','previous','next'));
    }
}
