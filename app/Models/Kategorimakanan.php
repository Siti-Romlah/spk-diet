<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategorimakanan extends Model
{
    use HasFactory;

    protected $table = 'tb_kategori_makanan';
    protected $fillable = [
        'nama_kategori'
    ];

    static $field = [
        'nama_kategori' => 'required'
    ];

    static $message = [
        'nama_kategori.required' => 'Inputan tidak boleh kosong !'
    ];

    public function makanan()
    {
        return $this->hasMany(Makanan::class, 'kategori_id', 'id');
    }
}
