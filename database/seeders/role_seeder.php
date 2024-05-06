<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['guard_name' => 'api','name'=>'admin']);
        Role::create(['guard_name' => 'api','name'=>'calonmahasiswa']);
        Role::create(['guard_name' => 'api','name'=>'mahasiswa']);
        Role::create(['guard_name' => 'api','name'=>'dosen']);
        Role::create(['guard_name' => 'api','name'=>'backoffice']);
    }
}
