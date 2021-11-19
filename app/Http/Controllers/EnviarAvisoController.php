<?php

namespace App\Http\Controllers;

use App\Mail\EnviarAvisoMailable;
use App\Models\ServicioTecnico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviarAvisoController extends Controller
{
    //
    public function store($id){
        $user= ServicioTecnico::find($id);
        $correo = new EnviarAvisoMailable($user);
        Mail::to($user->emaildueno)->send($correo);
        // aqui se puede actualizar al usuario.
        return redirect()->route('serviciotecnico.listar');
    }
}
