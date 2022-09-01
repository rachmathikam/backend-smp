<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    use HasFactory;

    protected $table = 'raport';

    protected $guarded = [];

    public function guru()
    {
        return $this->hasMany(Guru::class,'guru_id');
    }

    public function kelas()
    {
        return $this->hasOne(Kelas::class,'class_id');
    }

    public function siswa()
    {
        return $this->hasOne(Siswa::class,'siswa_id');
    }

    public function mapel()
    {
        return $this->hasMany(MataPelajaran::class,'mapel_id');
    }

    public function eskul()
    {
        return $this->hasMany(Eskul::class,'eskul_id');
    }
}
