<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function Acceuil(){
        return view('Acceuil');
    }
}
