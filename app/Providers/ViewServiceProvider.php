<?php

namespace App\Providers;
use App\Post;
use App\Category;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.partials.news', function ($view) {
            $view->with('breakings', Post::where('breaking','1')->get()); 
            $view->with('internationalNews', Post::where('category_id', 6)->orderBy('id', 'desc')->get()); 

           
       });
     

        View::composer('frontend.partials.sidebar', function ($view) {
            $view->with('categories', Category::orderBy('id', 'desc')->whereHas('posts')->with('posts')->limit(6)->get()); 
           
        });
        View::composer('frontend.partials.header', function ($view) {
            $view->with('categories', Category::orderBy('id', 'desc')->whereHas('posts')->with('posts')->limit(6)->get()); 
           
        });

        View::composer('frontend.partials.mostpopular', function($view){
            $view->with('populars', Post::orderBy('count', 'desc')->limit(4)->get());

        });
        
    }
}
