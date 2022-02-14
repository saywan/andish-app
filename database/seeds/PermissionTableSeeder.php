<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            '/', 'index',
            'User','CreateUser',
            'Role','CreateRole',
            'ChangeStatusUser','Employee',
            'createEmployee','ChangeStatusEmployee',
            'ShowEditEmployee','Product',
            'CreateProduct', 'storeProduct',
            'getPriceProduct','ChangeStatusProduct',
            'ShowEditProduct', 'UpdateProduct',
            'GroupProduct', 'CreateGroupProduct',
            'storeGroupProduct', 'storeGroupProduct',
            'EditGroupProduct', 'UpdateProductGroup',
            'DeleteGroupProduct', 'ShowEditProduct',
            'role-list', 'role-create', 'role-edit',
            'role-delete', 'product-list',
            'product-create', 'product-edit',
            'product-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }



        $Employee=Role::create(['name'=>'Employee']);

        $EmployeePermission=[
            'CreateProduct', 'storeProduct',
            'getPriceProduct','ChangeStatusProduct',
            'ShowEditProduct', 'UpdateProduct',
            'GroupProduct', 'CreateGroupProduct',
            'storeGroupProduct', 'storeGroupProduct',
            'EditGroupProduct', 'UpdateProductGroup',
        ];
        foreach ($EmployeePermission as $itemPermissionEmp)
        {
            $Employee->givePermissionTo($itemPermissionEmp);
        }




    }
}
