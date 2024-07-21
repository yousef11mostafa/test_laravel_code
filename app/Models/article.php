<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class article extends Model
{
    use HasFactory;

    protected $fillable = [
        "article"
    ];


    public function notes():MorphMany
    {
        return $this->morphMany(note::class,'noteable');
    }
}
