<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'nama' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Mengenkripsi kata sandi
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
