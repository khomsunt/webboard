<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        post_id,
        user_id,
        comment_date,
        comment
    ];
    public function user(){
        return $this->belongTo(User::class);
    }

    public function post(){
        return $this->belongTo(Post::class);
    }

    //
}
