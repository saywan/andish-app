<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $table='permissions';
    public $timestamps=true;

    public function roles(){
        return $this->belongsToMany(Role::class,'role_permission');

    }
}
