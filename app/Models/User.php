<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;


    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'contact',
        'city',
        'password',
    ];
}
