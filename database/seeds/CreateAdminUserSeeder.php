<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Morilog\Jalali\Jalalian;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([

            'fullname' => 'arslan lotfiar',
            'email' => 'info@andishgostar.com',
            'password' => bcrypt('123456789'),
            'mobile' => '09183732103',
            'status' => 'active',
            'datereg' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s | %A  %d %B %Y '),
            'email_verification_token' => '',
            'email_verified' => 0,

        ]);


        $role =   Role::create(['name'=>'Super Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

      // dd( $user->assignRole([$role->id]));
    }
}
