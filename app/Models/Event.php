<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'lieu',
        'description',
        'frais_inscription',
        'frais_formation',
        'date_deb',
        'date_fin',
    ];
   
}
