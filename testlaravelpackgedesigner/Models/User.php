<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function posts()
    {
        return $this->hasMany('Post', 'user_id');
    }

}