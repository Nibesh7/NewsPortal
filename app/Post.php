<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'description', 'category_id', 'image', 'user_id' ];

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
        return $this->BelongsTo(\App\User::class);
    }
}
