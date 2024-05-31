<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KartuController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        return view('users/kartu', ['user' => $user]);
    }
}
