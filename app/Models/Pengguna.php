<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = "tb_pengguna";
    protected $fillable = [
        'jenis_kelamin',
        'berat_badan',
        'tinggi_badan',
        'umur',
        'tingkat_aktivitas',
    ];
    
}
