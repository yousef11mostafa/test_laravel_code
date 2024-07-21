<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function car():MorphOne
    {
        return $this->morphOne(Car::class,"carable");
    }
}
