<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = ['firstName', 'lastName', 'gender', 'email', 'city', 'country', 'phoneNumber', 'cohortJoin', 'experienceDesign', 'paymentOption'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
