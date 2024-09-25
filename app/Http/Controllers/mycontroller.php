<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function index(){
        return view('Acceuil');
    }

    public function what(){
        return view('propos');
    }
}
