<?php

namespace App\Models\Offer;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Offer.
 */
class Offer extends Model
{
    protected $fillable = [
        'job_app_id',
        'title',
        'letter',
        'salary',
        'status',
        'create_by',
        'send_at'
    ];
}