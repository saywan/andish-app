<?php

use Illuminate\Database\Seeder;

class MenuPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            'menu_access',
            'menu_create',
            'menu_show',
            'menu_edit',
            'menu_delete',
        ];
        $ole = \Spatie\Permission\Models\Role::findById('Employee');

        foreach ($permission as $item) {
            \Spatie\Permission\Models\Permission::create([
                'name' => $item
            ]);

            $ole->givePermissionTo($permission);
        }
    }
}
