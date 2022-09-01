<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Eskul;

class EskulSeeder extends Seeder
{
    public function run()
    {
        Eskul::insert([
            [
                'nama' => 'Basket'
            ],
            [
                'nama' => 'Bulu Tangkis'
            ],
            [
                'nama' => 'Pramuka'
            ]
        ]);
    }
}
