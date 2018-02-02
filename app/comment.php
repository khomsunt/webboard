<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function user(){
        return $this->belongTo(User::class);
    }

    public function post(){
        return $this->belongTo(Post::class);
    }

    //
}
