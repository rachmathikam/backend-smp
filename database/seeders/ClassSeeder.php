<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ClassSeeder extends Seeder
{

    public function run()
    {
        DB::table('classes')->insert([
            [
                'nama' => 'X1 A'
            ],
            [
                'nama' => 'X A'
            ],
            [
                'nama' => 'X1I A'
            ]
        ]);
    }
}
