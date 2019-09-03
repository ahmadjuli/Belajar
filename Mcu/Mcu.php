<?php

namespace App\Models\Mcu;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mcu.
 */
class Mcu extends Model
{
    protected $fillable = [
        'job_app_id',
        'title',
        'letter',
        'mcu_date',
        'mcu_location',
        'status',
        'create_by',
        'send_at'
    ];
}