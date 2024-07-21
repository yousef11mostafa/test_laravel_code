<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    public function carable():MorphTo
    {
        return $this->morphTo();
    }
}
