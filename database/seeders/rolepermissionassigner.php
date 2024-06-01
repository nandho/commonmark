<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class rolepermissionassigner extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //asign permission into admin (super user)
        $role = Role::where('name','admin')->first();
        $role->givePermissionTo(Permission::all());


        
    }
}
