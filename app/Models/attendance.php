<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    public $table = 'attendance';

    protected $guarded = [];

    protected $casts = [
        'browser' => 'array',
    ];

    public $timestamps = true;
}
