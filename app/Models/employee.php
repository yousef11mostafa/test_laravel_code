<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class employee extends Model
{
    use HasFactory;
    public function car():MorphOne
    {
        return $this->morphOne(Car::class,"carable");
    }
}
