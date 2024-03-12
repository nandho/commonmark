<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Services\GeneratingPassword;

class createsuperuser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = GeneratingPassword::generate();
        $data = User::create([
            'username'      => 'admin',
            'email'         => 'admin@akparda.ac.id',
            'password'      => bcrypt($password),
            'role'          => 'admin',
        ]);

        $data->save();

        print 'Username = admin ' . 'Password = ' . $password . '\n';
    }
}
