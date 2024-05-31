<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Pastikan ada view dengan nama auth/login.blade.php
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nik', 'password');
        
        // Log request input
        Log::info('Login attempt', $credentials);

        $user = DB::table('users')->where('nik', $credentials['nik'])->first();
        
        // Log user data
        Log::info('User found', ['user' => $user]);

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::loginUsingId($user->id_users);

            if ($user->flag == 1) {
                return redirect()->route('dashboardadmin');
            } elseif ($user->flag == 2) {
                return redirect()->route('dashboard');
            } else {
                Auth::logout();
                return redirect()->route('login')->withErrors(['loginError' => 'Status akun tidak valid']);
            }
        }

        return redirect()->route('login')->withErrors(['loginError' => 'NIK atau kata sandi salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
