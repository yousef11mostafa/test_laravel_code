<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class thread extends Model
{
    use HasFactory;

    protected $fillable = [
        "thread"
    ];

    public function notes():MorphMany
    {
        return $this->morphMany(note::class,'noteable');
    }
}
