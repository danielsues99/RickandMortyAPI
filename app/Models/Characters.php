<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;

    //public $timestamps = false;
    const UPDATED_AT = null;

    protected $fillable=[
        'name',
        'status',
        'species',
        'type',
        'gender',
        'origin',
        'location',
        'image',
        'episode',
        'url'
    ];

    // información que no se envía a la API
    protected $hidden=[
        'created'
    ];
}
