<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;
use App\Comment;

use App\Http\Controllers\Controller;


class FrontController extends Controller
{
    public function index(){
        
        $posts = Post::orderBy('id', 'asc')->get();

        $trendingPosts = Post::where('trending', '1')->get();

        $worldNews = Post::where('category_id', 5)->orderBy('id', 'desc')->get();

        $popularPosts = Post::orderBy('count','desc')->limit(3)->get();







        
         

        // $news = Post::where('category_id', 4)->orderBy('id', 'desc')->limit(1)->get();
        // dd('$categories');
        return view('frontend.index', compact('tags', 'posts', 'trendingPosts','worldNews','popularPosts'));
    }

    public function show($id){
        // $post = Post::find($id);  
        $post = Post::where('id', $id)->firstOrFail();

        $post->increment('count');

        $tags = Tag::all();

        $relatedPosts = Post::where('category_id', $post->category_id)->where('id', '<>', $post->id)->orderBy('id', 'desc')->limit(3)->get();


        $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();

        $comments = $post->comments()->limit(3)->get();

        return view('frontend.single-post', compact('post','tags','relatedPosts','previous','next', 'comments'));
    }
}
