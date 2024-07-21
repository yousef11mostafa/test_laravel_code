<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

}