<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'houseName',
        'houseNumberStreet',
        'province',
        'city',
        'barangay',
        'zipCode',
        'squareMeters',
        'floors',
        'rooms',
        'bathrooms',
        'backyard',
        'basement',
        'attic',
        'description',
        'furnished',
        'price',
    ];

    public function houses()
    {
        return $this->hasMany('App\User');
    }

    
}