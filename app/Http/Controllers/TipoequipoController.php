<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoequipo;
use App\Models\Tipoequipo;
use Illuminate\Http\Request;

class TipoequipoController extends Controller
{
    public function index(){
        $tipoequipos = Tipoequipo::all();
        return view('TipoEquipo.index',compact('tipoequipos'));
    }
    public function create(){
        return view('TipoEquipo.create');
    }
    public function store(StoreTipoequipo $request){
        $tiposervicio= Tipoequipo::create($request->all());
        return redirect()->route('tipoequipo.index');
    }
    public function show(){
        return view('TipoEquipo.show');
    }
    public function edit(Tipoequipo $tipoequipo){
        return view('TipoEquipo.edit',compact('tipoequipo'));
    }
    public function update(Tipoequipo $tipoequipo,StoreTipoequipo $request){
        $tipoequipo->update($request->all());
        return redirect()->route('tipoequipo.index');
    }
    public function destroy(Tipoequipo $tipoequipo){
        $tipoequipo->delete();
        return redirect()->route('tipoequipo.index');
    }
}
