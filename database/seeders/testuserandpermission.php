<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class testuserandpermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //add some user to testing role and authorization in app
        //make super admin
        $user = User::create([
            'email'         => 'admin@admin.com',
            'username'      => 'Admin',
            'password'      => bcrypt('12345678'),
        ]);

        $user->assignRole('admin');
    }
}
