<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['guard_name' => 'api', 'name' => 'edit pmb']);
        Permission::create(['guard_name' => 'api','name' => 'delete pmb']);
        Permission::create(['guard_name' => 'api','name' => 'add pmb']);
        Permission::create(['guard_name' => 'api','name' => 'show pmb']);

        Permission::create(['guard_name' => 'api','name' => 'edit jadwal']);
        Permission::create(['guard_name' => 'api','name' => 'delete jadwal']);
        Permission::create(['guard_name' => 'api','name' => 'add jadwal']);
        Permission::create(['guard_name' => 'api','name' => 'show jadwal']);


        Permission::create(['guard_name' => 'api','name' => 'edit krs']);
        Permission::create(['guard_name' => 'api','name' => 'delete krs']);
        Permission::create(['guard_name' => 'api','name' => 'add krs']);
        Permission::create(['guard_name' => 'api','name' => 'show krs']);

        Permission::create(['guard_name' => 'api','name' => 'edit khs']);
        Permission::create(['guard_name' => 'api','name' => 'delete khs']);
        Permission::create(['guard_name' => 'api','name' => 'add khs']);
        Permission::create(['guard_name' => 'api','name' => 'show khs']);

        Permission::create(['guard_name' => 'api','name' => 'edit jurusan']);
        Permission::create(['guard_name' => 'api','name' => 'delete jurusan']);
        Permission::create(['guard_name' => 'api','name' => 'add jurusan']);
        Permission::create(['guard_name' => 'api','name' => 'show jurusan']);

        Permission::create(['guard_name' => 'api','name' => 'edit dosen']);
        Permission::create(['guard_name' => 'api','name' => 'delete dosen']);
        Permission::create(['guard_name' => 'api','name' => 'add dosen']);
        Permission::create(['guard_name' => 'api','name' => 'show dosen']);

        Permission::create(['guard_name' => 'api','name' => 'edit mahasiswa']);
        Permission::create(['guard_name' => 'api','name' => 'delete mahasiswa']);
        Permission::create(['guard_name' => 'api','name' => 'add mahasiswa']);
        Permission::create(['guard_name' => 'api','name' => 'show mahasiswa']);

        Permission::create(['guard_name' => 'api','name' => 'edit backoffice']);
        Permission::create(['guard_name' => 'api','name' => 'delete backoffice']);
        Permission::create(['guard_name' => 'api','name' => 'add backoffice']);
        Permission::create(['guard_name' => 'api','name' => 'show backoffice']);


        Permission::create(['guard_name' => 'api','name' => 'edit soal']);
        Permission::create(['guard_name' => 'api','name' => 'delete soal']);
        Permission::create(['guard_name' => 'api','name' => 'add soal']);
        Permission::create(['guard_name' => 'api','name' => 'show soal']);


        Permission::create(['guard_name' => 'api','name' => 'edit jawaban']);
        Permission::create(['guard_name' => 'api','name' => 'delete jawaban']);
        Permission::create(['guard_name' => 'api','name' => 'add jawaban']);
        Permission::create(['guard_name' => 'api','name' => 'show jawaban']);


        Permission::create(['guard_name' => 'api','name' => 'edit nilai']);
        Permission::create(['guard_name' => 'api','name' => 'delete nilai']);
        Permission::create(['guard_name' => 'api','name' => 'add nilai']);
        Permission::create(['guard_name' => 'api','name' => 'show nilai']);

        Permission::create(['guard_name' => 'api','name' => 'edit pemb_akademik']);
        Permission::create(['guard_name' => 'api','name' => 'delete pemb_akademik']);
        Permission::create(['guard_name' => 'api','name' => 'add pemb_akademik']);
        Permission::create(['guard_name' => 'api','name' => 'show pemb_akademik']);

        Permission::create(['guard_name' => 'api','name' => 'edit pemb_skripsi']);
        Permission::create(['guard_name' => 'api','name' => 'delete pemb_skripsi']);
        Permission::create(['guard_name' => 'api','name' => 'add pemb_skripsi']);
        Permission::create(['guard_name' => 'api','name' => 'show pemb_skripsi']);

        Permission::create(['guard_name' => 'api','name' => 'edit gelombang']);
        Permission::create(['guard_name' => 'api','name' => 'delete gelombang']);
        Permission::create(['guard_name' => 'api','name' => 'add gelombang']);
        Permission::create(['guard_name' => 'api','name' => 'show gelombang']);


        // create roles and assign created permissions

        // this can be done as separate statements
        // $role = Role::create(['name' => 'backoffice']);
        // $role->givePermissionTo('edit articles');

        // // or may be done by chaining
        // $role = Role::create(['name' => 'moderator'])
        //     ->givePermissionTo(['add articles', 'show articles']);

        // $role = Role::create(['name' => 'super-admin']);
        // $role->givePermissionTo(Permission::all());
    }
}
