<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\file;

use Illuminate\Support\Facades\Mail;



use Illuminate\Http\Request;

use App\Category;
use App\Post;
use App\Tag;

use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // dd($input);

        $input['user_id'] = auth()->id();
        /**
         * For uploading the image
         */
        if($request->hasFile('image')){
            $destination_path = 'public/images/posts';

            $image = $request->file('image');
            $image_name = time().'_'. $image->getClientOriginalName();

            $image->storeAs($destination_path, $image_name);
            // $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }
    
        $posts = Post::create($input);

        if(isset($input['tags'])){
            $posts->tags()->sync($input['tags']);   // to sync tag with post
        }
         
        /**
         * for  sending mail 
         */
        Mail::send('mail.mailtesting', compact('posts'), function($message){
            $message->to('ranjitnibesh7@gmail.com', 'Nibesh Ranjit')
                ->subject('post created');
        });
               
        session()->flash('success', 'Post Created Successfully');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::all();
        $categories = Category::all();
        $post = Post::find($id);

        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->name = request('name');
        $post->category_id = request('category_id');
        $post->description = request('description');
        $post->breaking = request('breaking');
        $post->trending = request('trending');
        // dd($request->all());
        /**
         * ===========================================
         *          For Editing Image
         * ============================================
         */
        if($request->hasFile('image')){
            $destination_path = 'public/images/posts';
            $image = $request->file('image');

            $old_image = public_path("storage/images/posts/{$post->image}");
            if(File::exists($old_image)){
                File::delete($old_image);
            }
            $image_name = time().'_'. $image->getClientOriginalName();

            $image->storeAs($destination_path, $image_name);
            // $request->file('image')->storeAs($destination_path, $image_name);

            $post->image = $image_name;
        }
        $post->save();
        if(isset($_POST['tags'])){
            $post->tags()->sync($request->get('tags'));

        }
        return redirect(route('posts.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        
        $old_image = public_path("storage/images/posts/{$post->image}");
        if(File::exists($old_image)){
            File::delete($old_image);
        }
        $post->delete();

        return redirect(route('posts.index'));
    }
}
