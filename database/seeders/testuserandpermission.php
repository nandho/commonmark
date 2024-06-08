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
            'email'         => 'pmb@admin.com',
            'username'      => 'pmb',
            'password'      => bcrypt('12345678'),
        ]);

        $user->assignRole('admisi');
    }
}
