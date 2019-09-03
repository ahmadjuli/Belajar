<?php

namespace App\Models\FinalOffer;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FinalOffer.
 */
class FinalOffer extends Model
{
    protected $fillable = [
        'job_app_id',
        'join_date',
        'join_date',
        'status',
        'create_by',
        'send_at'
    ];
}