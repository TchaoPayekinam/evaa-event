<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;

    protected $table = 'payements';
    protected $primaryKey = 'id';
    protected $fillable = [
        'reference',
        'type',
        'date',
        'montant',
        'evenement_id',
    ];
}
