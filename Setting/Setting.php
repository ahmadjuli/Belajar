<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting.
 */
class Setting extends Model
{
    protected $fillable = [
        'setting_key',
        'setting_value'
    ];
}