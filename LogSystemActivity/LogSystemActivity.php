<?php

namespace App\Models\LogSystemActivity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogSystemActivity.
 */
class LogSystemActivity extends Model
{
    protected $fillable = [
        'lable',
        'title',
        'description'
    ];
}