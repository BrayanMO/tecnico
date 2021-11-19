<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalesController extends Controller
{
    public function home(){
        return view('dashboard');
    }
    public function servicios() {
        return view('Principales.servicios');
    }
    public function reportes() {
        return view('Principales.reportes');
    }
}
