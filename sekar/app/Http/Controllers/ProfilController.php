<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Posisi;

class ProfilController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $posisi = Posisi::find($user->id_posisi);

        return view('users/profil', ['user' => $user, 'posisi' => $posisi]);
    }
}
