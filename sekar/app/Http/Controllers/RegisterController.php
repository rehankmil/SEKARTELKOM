<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nik' => 'required|string|max:10|unique:users',
            'nama' => 'required|string|max:100',
            'no_telp' => 'required|string|max:11',
            'password' => 'required|string|min:6|confirmed',
            'id_posisi' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Membuat user baru
        $user = User::create([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'no_telp' => $request->input('no_telp'),
            'password' => Hash::make($request->input('password')),
            'id_posisi' => $request->input('id_posisi'),
            'id_role' => 1, // Set id_role to 1
        ]);

        // Redirect ke halaman yang diinginkan, misalnya dashboard
        return redirect('/dashboard')->with('success', 'Registrasi berhasil!');
    }
}
