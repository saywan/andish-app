<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public $table='roles';
    public $timestamps=true;

   public function permissions(){
       return $this->belongsToMany(Permission::class,'role_permission');

   }
   public  function allRolePermissions(){
       return $this->belongsToMany(Permission::class,'role_permission');
   }

}
