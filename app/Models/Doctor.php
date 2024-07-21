<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hospital;
use App\Models\DoctorService;


class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'hospital_id'
    ];


    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }

    public function services(){
        return $this->belongsToMany(Service::class,DoctorService::class);
    }
}
