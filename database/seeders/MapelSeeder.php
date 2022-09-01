<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataPelajaran;

class MapelSeeder extends Seeder
{

    public function run()
    {
       MataPelajaran::insert([
            [
                'guru_id'   => '1',
                'nama'      => 'Matematika'
            ],
            [
                'guru_id'   => '2',
                'nama'      => 'Bahasa Ingris'
            ],
        ]);
    }
}
