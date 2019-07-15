<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name', 'email', 'website', 'comment', 'post_id'];

    public function post(){
        return $this->belongsTo(\App\Post::class);

    }
}
