<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function images()
    {
        return $this->belongsToMany('App\Posts');
    }
}
