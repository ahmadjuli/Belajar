<?php

namespace App\Models\JobVacany;

use Illuminate\Database\Eloquent\Model;

/**
 * Class JobVacany.
 */
class JobVacany extends Model
{
    protected $fillable = [
        'title',
        'description',
        'division_id',
        'department_id',
        'level_id',
        'status'
    ];
}