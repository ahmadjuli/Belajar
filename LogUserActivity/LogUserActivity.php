<?php

namespace App\Models\LogUserActivity;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogUserActivity.
 */
class LogUserActivity extends Model
{
    protected $fillable = [
        'user_id',
        'lable',
        'title',
        'description'
    ];
}