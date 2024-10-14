<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $lastLogin = $user->last_login;  // Récupère la date de dernière connexion

        return view('well', compact('lastLogin'));
    }
}
