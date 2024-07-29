<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use App\Models\Makanan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('template.web.beranda');
    }

    public function store(Request $request)
    {
        $pengguna = new Pengguna;
        $pengguna->jenis_kelamin = request('jenis_kelamin');
        $pengguna->berat_badan = request('berat_badan');
        $pengguna->tinggi_badan = request('tinggi_badan');
        $pengguna->umur = request('umur');
        $pengguna->tingkat_aktivitas = request('tingkat_aktivitas');
        // return $pengguna;

        // $pengguna->save();

        $this->analyze($pengguna);

        return view('template.web.hasil')->with('success', 'Pengguna berhasil ditambahkan.');
    }
    function analyze($pengguna)
    {
        $jenis_kelamin = $pengguna->jenis_kelamin;
        $faktor_dasar = 0;
        $faktor_bb = 0;
        $faktor_tinggi = 0;
        $faktor_umur = 0;
        $faktor_stress = 1.1;
        $faktor_aktivitas = 0;
        $percent_protein = 0.15;
        $percent_lemak = 0.25;
        $percent_karbo = 0.60;

        if ($jenis_kelamin == 'laki-laki') {
            $faktor_dasar = 66;
            $faktor_bb = 13.7;
            $faktor_tinggi = 5;
            $faktor_umur = 6.8;
            if ($pengguna->tingkat_aktivitas == 'ringan') {
                $faktor_aktivitas = 1.00;
            } else if ($pengguna->tingkat_aktivitas == 'rendah') {
                $faktor_aktivitas = 1.11;
            } else if ($pengguna->tingkat_aktivitas == 'aktif') {
                $faktor_aktivitas = 1.25;
            } else if ($pengguna->tingkat_aktivitas == 'sangat_aktif') {
                $faktor_aktivitas = 1.48;
            }
        } else {
            $faktor_dasar = 655;
            $faktor_bb = 9.6;
            $faktor_tinggi = 1.85;
            $faktor_umur = 4.7;
            if ($pengguna->tingkat_aktivitas == 'ringan') {
                $faktor_aktivitas = 1.00;
            } else if ($pengguna->tingkat_aktivitas == 'rendah') {
                $faktor_aktivitas = 1.12;
            } else if ($pengguna->tingkat_aktivitas == 'aktif') {
                $faktor_aktivitas = 1.27;
            } else if ($pengguna->tingkat_aktivitas == 'sangat_aktif') {
                $faktor_aktivitas = 1.56;
            }
        }


        $basal = $faktor_dasar + ($faktor_bb * $pengguna->berat_badan) + ($faktor_tinggi * $pengguna->tinggi_badan) - ($faktor_umur * $pengguna->umur);

        $hasil = $basal * $faktor_aktivitas * $faktor_stress;

        $PxE = $hasil * $percent_protein / 4;
        $LxE = $hasil * $percent_lemak / 9;
        $KHxE = $hasil * $percent_karbo / 4;

        // dd($PxE, $LxE, $KHxE);

        // Makan Pagi
        $kalori_pagi = $hasil * 0.25;
        $protein_pagi = $PxE * 0.25;
        $lemak_pagi = $LxE * 0.25;
        $karbo_pagi = $KHxE * 0.25;

        $list_makanan_pagi = Makanan::where('kategori', 'Makanan Pagi')->get();

        $highest_score_pagi = null;
        $top_result_pagi = null;

        $A_pagi = [$kalori_pagi, $protein_pagi, $lemak_pagi, $karbo_pagi];
        foreach ($list_makanan_pagi as $makanan) {
            $B_pagi = [
                $makanan->kalori,  $makanan->protein, $makanan->lemak, (int) $makanan->karbohidrat
            ];

            $cosine = $this->cosineSimilarity($A_pagi, $B_pagi);

            if ($highest_score_pagi === null || $cosine > $highest_score_pagi) {
                $highest_score_pagi = $cosine;
                $top_result_pagi = [
                    'nama' => $makanan->nama,
                    'score' => $cosine
                ];
            }
        }

        // Makan Siang
        $kalori_siang = $hasil * 0.35;
        $protein_siang = $PxE * 0.35;
        $lemak_siang = $LxE * 0.35;
        $karbo_siang = $KHxE * 0.35;

        $list_makanan_siang = Makanan::where('kategori', 'Makanan Siang')->get();

        $highest_score_siang = null;
        $top_result_siang = null;

        $A_siang = [$kalori_siang, $protein_siang, $lemak_siang, $karbo_siang];
        foreach ($list_makanan_siang as $makanan) {
            $B_siang = [
                $makanan->kalori,  $makanan->protein, $makanan->lemak, (int) $makanan->karbohidrat
            ];

            $cosine = $this->cosineSimilarity($A_siang, $B_siang);

            if ($highest_score_siang === null || $cosine > $highest_score_siang) {
                $highest_score_siang = $cosine;
                $top_result_siang = [
                    'nama' => $makanan->nama,
                    'score' => $cosine
                ];
            }
        }

        // Makan Malam
        $kalori_malam = $hasil * 0.40;
        $protein_malam = $PxE * 0.40;
        $lemak_malam = $LxE * 0.40;
        $karbo_malam = $KHxE * 0.40;

        $list_makanan_malam = Makanan::where('kategori', 'Makanan Malam')->get();

        $highest_score_malam = null;
        $top_result_malam = null;

        $A_malam = [$kalori_malam, $protein_malam, $lemak_malam, $karbo_malam];
        foreach ($list_makanan_malam as $makanan) {
            $B_malam = [
                $makanan->kalori,  $makanan->protein, $makanan->lemak, (int) $makanan->karbohidrat
            ];

            $cosine = $this->cosineSimilarity($A_malam, $B_malam);

            if ($highest_score_malam === null || $cosine > $highest_score_malam) {
                $highest_score_malam = $cosine;
                $top_result_malam = [
                    'nama' => $makanan->nama,
                    'score' => $cosine
                ];
            }
        }

        // Menyimpan hasil ke sesi
        session([
            'protein' => $PxE,
            'lemak' => $LxE,
            'karbohidrat' => $KHxE,
            'top_result_pagi' => $top_result_pagi,
            'top_result_siang' => $top_result_siang,
            'top_result_malam' => $top_result_malam,
        ]);

        // Debug hasil
        // dd($top_result_pagi, $top_result_siang, $top_result_malam);

    }

    public function hasil()
    {
        return view('template.web.hasil');
    }

    public function form(Request $request)
    {
        dd($request->pengguna::all());
        // Simpan data pengguna ke database
        $pengguna = new Pengguna;
        $pengguna->jenis_kelamin = $request->jenis_kelamin;
        $pengguna->berat_badan = $request->berat_badan;
        $pengguna->tinggi_badan = $request->tinggi_badan;
        $pengguna->umur = $request->umur;
        $pengguna->tingkat_aktivitas = $request->tingkat_aktivitas;
        $pengguna->save();

        // Redirect ke halaman hasil dengan data pengguna
        return redirect('beranda/hasil')->with('pengguna', $pengguna);
    }

    function dotProduct($vecA, $vecB)
    {
        $dotProduct = 0;
        for ($i = 0; $i < count($vecA); $i++) {
            $dotProduct += $vecA[$i] * $vecB[$i];
        }
        return $dotProduct;
    }

    function magnitude($vec)
    {
        $sum = 0;
        for ($i = 0; $i < count($vec); $i++) {
            $sum += $vec[$i] * $vec[$i];
        }
        return sqrt($sum);
    }

    function cosineSimilarity($vecA, $vecB)
    {
        $dotProduct = $this->dotProduct($vecA, $vecB);
        $magnitudeA = $this->magnitude($vecA);
        $magnitudeB = $this->magnitude($vecB);
        return $dotProduct / ($magnitudeA * $magnitudeB);
    }
}
