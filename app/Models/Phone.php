<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $fillable=[
        'number',
        'code',
        'user_id',
    ];
    protected $hidden=['created_at','updated_at','user_id'];

    public function user(){
        return $this->belongsto(user::class,'user_id');
    }

    public $timestamp=false;
}
