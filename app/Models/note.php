<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class note extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function noteable():MorphTo
    {
        return $this->morphTo();
    }
}
