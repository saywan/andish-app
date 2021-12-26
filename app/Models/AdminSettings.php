<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminSettings extends Model
{
    public $table = 'admin_settings';

    protected $guarded = [];
    public $timestamps = false;
}
