<?php

namespace App\Models\JobVacanyRequirement;

use Illuminate\Database\Eloquent\Model;

/**
 * Class JobVacanyRequirement.
 */
class JobVacanyRequirement extends Model
{
    protected $fillable = [
        'job_vacancy_id',
        'requirements_key',
        'requirements_value'
    ];
}