<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','event_id', 'firstName', 'lastName', 'gender', 'status', 'city', 'country', 'phoneNumber', 'cohortJoin', 'experienceDesign', 'confirmationCode', 'paymentAmount', 'paymentOption'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
