<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class group extends Model
{
    use HasFactory;

    public function User():BelongsToMany
    {
        return $this->BelongsToMany(User::class,'Usergroup','group_id','user_id')
        ->as("community")
        ->withTimestamps();
    }
}
