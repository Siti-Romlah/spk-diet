<?php

namespace Database\Seeders;


use App\Models\Makanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakananSeeder extends Seeder
{
    
        public function run()
        {
            Makanan::create([
                'nama' => 'tempe_goreng',
                'kalori' =>336,
                'protein' => 20,0,
                'karbohidrat' => 28,0,
                'lemak' => 7,8,
                
            ]);
    
            makanan::create([
                'nama' => 'nasi',
                'kalori' => 180,
                'protein' => 3,0,
                'karbohidrat' => 39,8,
                'lemak' => 0,3,
            ]);
    
            // Tambahkan data makanan lainnya
        }
    
    
}
