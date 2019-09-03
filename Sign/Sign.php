<?php

namespace App\Models\Sign;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sign.
 */
class Sign extends Model
{
    protected $fillable = [
        'job_app_id',
        'meetup_date',
        'meetup_location',
        'status',
        'create_by',
        'send_at'
    ];
}