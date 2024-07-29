<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('Admin.Users.index');
    }
    public function store(Request $request){
        $tb_user = new User();
        $tb_user->nama = $request->input('nama');
        $tb_user->email = $request->input('email');
        $tb_user->password = $request->input('password');

        // $tb_user->handleUploadFoto();
        $tb_user->save();
        return redirect('base/user');
    }
}
