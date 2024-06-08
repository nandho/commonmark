<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('soals')->insert([
                'id' => Str::uuid()->toString(),
                'soal'=> Str::random(10),
                'pilihan1'=> Str::random(1),
                'pilihan2'=> Str::random(1),
                'pilihan3'=> Str::random(1),
                'pilihan4'=> Str::random(1),
                'kunci_jawaban'=> 'a',
            ]);
        }

    }
}
