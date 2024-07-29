<?php

namespace App\Models;
use App\Models\Model;

class Makanan extends Model
{
    protected $table = 'tb_makanan';
    protected $fillable = [
        'id',
        'nama',
        'kalori',
        'protein',
        'karbohidrat',
        'lemak',
        // 'kategori_id', // Pastikan kolom ini ada di tabel tb_makanan
    ];

    static $field = [
        'nama' => 'required',
        'kalori' => 'required',
        'protein' => 'required',
        'karbohidrat' => 'required',
        'lemak' => 'required',
    ];

    static $message = [
        'nama.required' => 'Inputan tidak boleh kosong !',
        'kalori.required' => 'Inputan tidak boleh kosong !',
        'protein.required' => 'Inputan tidak boleh kosong !',
        'karbohidrat.required' => 'Inputan tidak boleh kosong !',
        'lemak.required' => 'Inputan tidak boleh kosong !',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategorimakanan::class, 'kategori_id', 'id');
    }
}
