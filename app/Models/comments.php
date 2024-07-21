<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class comments extends Model
{
    use HasFactory;

    public function posts():BelongsTo{
        return $this->belongsTo(posts::class,'post_id');
    }

      public function User():HasManyThrough{
        return $this->hasManyThrough(User::class, posts::class,'user_id','id','post_id','id');
      }

}
