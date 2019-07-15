<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'description', 'category_id', 'image', 'user_id', 'trending', 'breaking'];

    public function category(){
        return $this->belongsTo(\App\Category::class);
    }

    /**
     * A single post can belong to category
     */
    public function tags(){
        return $this->belongsToMany(\App\Tag::class);
    }

    public function user(){
        return $this->belongsTo(\App\User::class);
    }

    public function comments(){
        return $this->hasMany(\App\Comment::class);
    }
}
