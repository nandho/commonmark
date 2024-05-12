<?php

namespace Database\Seeders;

use App\Models\backoffice;
use App\Models\divisiModel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class creating_minimum_user_testing extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creating divisi, backoffice, mahasiswa, jurusan, user,
        $divisi = new divisiModel();

        $divisi->divisi = 'admisi';
        $divisi->save();
        $divisi1Id = $divisi->id;

        $divisi->divisi = 'keuangan';
        $divisi->save();
        $divisi2Id = $divisi->id;
        //done creating division
        
        //creating user
        $user = new User;
        $user->username = 'stryn';
        $user->email = 'arif@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user1Id = $user->id;
        $user->assignRole('backoffice');

        $user = new User;
        $user->username = 'stryn2';
        $user->email = 'arif2@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user2Id = $user->id;
        $user->assignRole('backoffice');


        $backoffice = new backoffice();
        $backoffice->nama_lengkap = 'stryn';
        $backoffice->jabatan = $divisi1Id;
        $backoffice->nip = '2345678';
        $backoffice->email = 'arif@gmail.com';
        $backoffice->no_hp = '0823232323232';
        $backoffice->id_akun = $user1Id;
        $backoffice->save();

        $backoffice = new backoffice();
        $backoffice->nama_lengkap = 'stryn2';
        $backoffice->jabatan = $divisi2Id;
        $backoffice->nip = '9123456';
        $backoffice->email = 'arif2@gmail.com';
        $backoffice->no_hp = '0823232323232';
        $backoffice->id_akun = $user2Id;
        $backoffice->save();

        //giving role into user
    }
}
