<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategorimakanan;
use App\Models\Makanan;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class MakananController extends Controller
{
    function index()
    {
        $data['makanan'] = Makanan::with('kategori')->get();

        // return $data;
        return view ('admin.makanan.index', $data);
    }
    function create()
    {
        return view('admin.makanan.create');
    }
    function store(Request $request)
    {

        $makanan = new Makanan;
        $makanan->nama = request('nama');
        $makanan->kategori = request('kategori');
        $makanan->kalori = request('kalori');
        $makanan->protein = request('protein');
        $makanan->karbohidrat = request('karbohidrat');
        $makanan->lemak = request('lemak');
        $makanan->save();
    
        return redirect('base/makanan')->with('success', 'Data berhasil disimpan');
    }

    function show($id)
    {
        $data['makanan'] = Makanan::with('kategori')->findOrFail($id);
        return view('admin.makanan.show', $data);
    }

    function edit($id)
    {
        $data['makanan'] = Makanan::with('kategori')->findOrFail($id);
        return view('admin.makanan.edit', $data);
    }

    function update(Makanan $makanan, $id)
    {
        $makanan = Makanan::findOrFail($id);
        $makanan->kategori = request('kategori');
        $makanan->nama = request('nama');
        $makanan->kalori = request('kalori');
        $makanan->protein = request('protein');
        $makanan->lemak = request('lemak');
        $makanan->karbohidrat = request('karbohidrat');
        $makanan->save();

        return redirect('base/makanan')->with('success', 'Data berhasil disimpan');
    }

    function destroy($id)
    {
        $makanan = Makanan::find($id);
        $makanan->delete();
        return redirect('base/makanan')->with('danger', 'Data Berhasil Dihapus');
    }
}
