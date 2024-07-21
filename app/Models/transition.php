<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class transition extends Model
{
    use HasFactory;
    use HasTranslations;

    public $fillable=['name'];

    public $table='transitions';

    public $translatable = ['name'];
}
