<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;

    protected $fillable=[
        'car_name',
        'registration_number',
        'buying_price',
        'car_colour',
        'car_type',
        'seat_number',
        'car_state',
        'car_brand',
        'description',
    ];
}
