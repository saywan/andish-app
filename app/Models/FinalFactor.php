<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinalFactor extends Model
{
    use SoftDeletes;

    public $table = 'final_factor';

    public $timestamps = true;

    protected $casts = [
        'factor_items_id' => 'array'
    ];

    protected $guarded = [];


}
