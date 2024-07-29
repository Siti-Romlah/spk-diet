<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    function index(){
        $data['list_pengguna'] = Pengguna::all();
        return view('admin.pengguna.index', $data);
    }
    function show($id)
    {   
        $data['pengguna'] = Pengguna::findOrFail($id);
        return view('admin.pengguna.show', $data);
    }
}
