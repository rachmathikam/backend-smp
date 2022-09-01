<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class CreateGuruSeeder extends Seeder
{

    public function run()
    {
        Guru::insert([
            [
                'nip' => '126732634343',
                'nama' => 'Yasin',
                'alamat' => 'Jln.Guntur',
                'tempat_lahir' => 'Sumenep',
                'tanggal_lahir' => '1990-12-2',
                'gender' => 'laki-laki',
                'no_telp' => '088437643',
                'agama' => 'Islam',
                'user_id' => '3',
            ],
            [
                'nip' => '126732632133',
                'nama' => 'Budiman',
                'alamat' => 'Jln.Meranggi',
                'tempat_lahir' => 'Sumenep',
                'tanggal_lahir' => '1995-12-2',
                'gender' => 'laki-laki',
                'no_telp' => '08943774363',
                'agama' => 'Islam',
                'user_id' => '2',
            ]
        ]);
    }
}
