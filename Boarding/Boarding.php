<?php

namespace App\Models\Boarding;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Boarding.
 */
class Boarding extends Model
{
    protected $fillable = [
        'boarding_at',
        'status'
    ];
}