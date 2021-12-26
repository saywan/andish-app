<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FactorUser extends Model
{
    public $table='factor_user';
    public $timestamps=true;

    protected $guarded = [];

    public function orders_factor_products()
    {
        return $this->hasMany('App\Models\FactorOrderUser','FactorId');
    }
}
