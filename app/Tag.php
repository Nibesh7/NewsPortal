<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    
    // a tags belongs to many products
    function posts(){
        return $this->belongsToMany(Post::class);
    }
}
