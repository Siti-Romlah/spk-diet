<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::latest()->first(); // Mengambil data pengguna terbaru
        return view('template.web.hasil', compact('pengguna'));
    }

    public function hasil(Request $request)
    {
        // Data pengguna contoh (ini harusnya berasal dari model atau database)
        $data['pengguna'] = [
            [
                'nama' => 'Joko',
                'jk' => 'Laki-laki',
                'berat' => 80,
                'tinggi' => 165,
                'umur' => 30,
                'aktif' => 'Sangat Aktif',
            ],
            [
                'nama' => 'Juminten',
                'jk' => 'Perempuan',
                'berat' => 60,
                'tinggi' => 150,
                'umur' => 24,
                'aktif' => 'Ringan',
            ]
        ];

        //Nilai Aktivitas
        $tingkatAktivitas = [
            'Ringan' => 1.375,
            'Rendah' => 1.55,
            'Aktif' => 1.725,
            'Sangat Aktif' => 1.9
        ];

        // Perhitungan AKG
        foreach ($data['pengguna'] as $key => $isi) {
            $user[$key] = $isi;

            if ($isi['jk'] == 'Laki-laki') {
                $bmr = 10 * $isi['berat'] + 6.25 * $isi['tinggi'] - 5 * $isi['umur'] + 5;
            } else {
                $bmr = 10 * $isi['berat'] + 6.25 * $isi['tinggi'] - 5 * $isi['umur'] - 161;
            }

            $user[$key]['akg'] = $bmr * $tingkatAktivitas[$isi['aktif']];
        }

        return view('template.web.hasil', compact('user'));
    }
}
