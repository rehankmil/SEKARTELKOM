<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nik' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('nik', $request->nik)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            switch ($user->id_role) {
                case 1:
                    return redirect('/dashboard');
                case 2:
                    return redirect('/dashboardadmin');
                case 3:
                    return redirect('/dashboardsuperadmin');
                default:
                    return redirect('/login')->withErrors(['loginError' => 'Role tidak valid.']);
            }
        } else {
            return redirect('/login')->withErrors(['loginError' => 'NIK atau kata sandi salah.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}