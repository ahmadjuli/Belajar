<?php

namespace App\Models\Interview;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Interview.
 */
class Interview extends Model
{
    protected $fillable = [
        'job_app_id',
        'title',
        'description',
        'interview_date',
        'interview_location',
        'status',
        'create_by',
        'send_at'
    ];
}