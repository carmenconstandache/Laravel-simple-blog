<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->hasOne('App\Category','id','category_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


}
