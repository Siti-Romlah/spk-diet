<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginProcess(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Autentikasi pengguna dengan kredensial (email dan password)
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika login berhasil
            return redirect('base/home')->with('success', 'Login Berhasil');
        } else {
            // Jika login gagal
            return back()
                ->withErrors(['email' => 'Login Gagal, Silahkan cek email dan password Anda']) // Menampilkan pesan error
                ->withInput() // Menyertakan input kembali
                ->with('error', 'Email atau password Anda salah.'); // Pesan tambahan (opsional)
        }
    }
}
