<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;

    protected $fillable=[
        'recovery_date',
        'rental_date',
        'rental_duration',
        'rental_city',
        'rental_price',
    ];
}
