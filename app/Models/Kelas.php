<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $guarded = [];

    public function raport()
    {
        return $this->belongsTo(Raport::class);
    }

}
