<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Posisi;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $user->load('posisi'); // Ensure posisi relationship is loaded

        return view('profile', [
            'user' => $user,
        ]);
    }
}
