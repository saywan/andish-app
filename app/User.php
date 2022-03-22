<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'fullname', 'mobile',  'email', 'codemeli', 'job', 'phone', 'brithday', 'accountno', 'cardnumber', 'namecard', 'sheba', 'password', 'status', 'datereg', 'two_auth', 'two_auth_action', 'email_verified', 'email_verification_token', 'mobile_encode','confirmation_mobile_code','lock_num','time_lock', 'number_send', 'email_subscription','address','debat_bill'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /*public function roles(){

        return $this->belongsTo('App\Models\roles');
    }*/
    public  function getIsAdminAttribute(){
        return $this->roles()->where('id',1)->exists();
    }
   /* protected $with =[
        'permissions',
        'roles'
    ];

    public function getPermissionAttribute()
    {
        return $this->getAllPermissions();
    }*/

}
