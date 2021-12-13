<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTiposervicio;
use App\Models\Tiposervicio;
use Illuminate\Http\Request;

class TiposervicioController extends Controller
{
    public function index(){
        $tiposervicios= Tiposervicio::all();
        return view('TipoServicio.index',compact('tiposervicios'));
    }
    public function create(){
        return view('TipoServicio.create');
    }
    public function store(StoreTiposervicio $request){
        $tiposervicio= Tiposervicio::create($request->all());
        return redirect()->route('tiposervicio.index');
    }
    public function show(){
        return view('TipoServicio.show');
    }
    public function edit(Tiposervicio $tiposervicio){
        return view('TipoServicio.edit',compact('tiposervicio'));
    }
    public function update(Tiposervicio $tiposervicio, StoreTiposervicio $request){
        $tiposervicio->update($request->all());
        return redirect()->route('tiposervicio.index');
    }
    public function destroy(){
        return "destroy ";
    }
    public function error(){
        return view('TipoServicio.error');
    }
}
