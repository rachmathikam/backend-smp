<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;

class CreateSiswaSeeder extends Seeder
{

    public function run()
    {
        Siswa::insert([
            'nama' => 'Rachmat Hikam',
            'alamat' => 'Jln.Guntur',
            'tempat_lahir' => 'Sumenep',
            'tanggal_lahir' => '2000-12-2',
            'gender' => 'laki-laki',
            'tahun_masuk' => '2020',
            'agama' => 'Islam',
            'user_id' => '4',
            'class_id'  => '1'
        ]);
    }
}
