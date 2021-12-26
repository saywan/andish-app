<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminSettings extends Model
{
    public $table = 'admin_settings';
    protected $fillable = [
        'site_title', 'ERC20', 'TRC20','wallet_pass',
    ];
    public $timestamps = false;
}
