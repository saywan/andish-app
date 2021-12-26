<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    public $table = 'attendance';
    protected $fillable = [
        'userId', 'login_date', 'IP', 'browser','type'
    ];

    protected $casts = [
        'browser' => 'array',
    ];

    public $timestamps = true;
}
