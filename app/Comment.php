<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post_fk()
    {
        return $this->hasOne('App\Post','id','post_id');
    }
}
