<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;

class Hospital extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'address',

    ];


    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function doctors(){
        return $this->hasMany(Doctor::class);
    }
}
