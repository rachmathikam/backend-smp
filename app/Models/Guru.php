<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $tabel = 'gurus';
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function raport()
    {
        return $this->belongsTo(Raport::class);
    }
}
