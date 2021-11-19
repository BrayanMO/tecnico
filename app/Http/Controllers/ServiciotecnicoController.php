<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServicioTecnico;
use App\Models\ServicioTecnico;
use App\Models\Tipoequipo;
use App\Models\Tiposervicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiciotecnicoController extends Controller
{
    public function index(){
        $tipoequipos = Tipoequipo::all();
        $tiposervicios= Tiposervicio::all();
        return view('ServicioTecnico.index')->with([
            'tipoequipos' => $tipoequipos,
            'tiposervicios' => $tiposervicios,
        ]);
    }
    public function create(){
        return view('ServicioTecnico.create');
    }
    public function store(StoreServicioTecnico $request){
        $serviciotecnico = new ServicioTecnico();
        $serviciotecnico->nombredueno = $request->nombredueno;
        $serviciotecnico->apellidodueno = $request->apellidodueno;
        $serviciotecnico->emaildueno = $request->emaildueno;
        $serviciotecnico->celulardueno = $request->celulardueno;
        $serviciotecnico->direcciondueno = $request->direcciondueno;
        $serviciotecnico->idtipoequipo = $request->idtipoequipo;
        $serviciotecnico->marcaequipo = $request->marcaequipo;
        $serviciotecnico->modeloequipo = $request->modeloequipo;
        $serviciotecnico->idtiposervicio = $request->idtiposervicio;
        $serviciotecnico->fallas = $request->fallas;
        $serviciotecnico->solucion = $request->solucion;
        $serviciotecnico->fechaentrada = $request->fechaentrada;
        $serviciotecnico->fechasalida = $request->fechasalida;
        $serviciotecnico->estado = $request->estado;
        $serviciotecnico->precio = $request->precio;
        $serviciotecnico->save();
        return redirect()->route('serviciotecnico.listar');
        
    }
    public function show(){
        return view('ServicioTecnico.show');
    }
    public function edit($serviciotecnico){
        // $serviciotecnico1= ServicioTecnico::join("tipoequipos as e","e.id","=","servicio_tecnicos.idtipoequipo")
        // ->join("tiposervicios as s","s.id","=","servicio_tecnicos.idtiposervicio")
        // ->select("servicio_tecnicos.*","e.description as equipo","s.description as servicio")
        // ->where("servicio_tecnicos.id","=",$serviciotecnico)
        // ->get();
        $serviciotecnico= ServicioTecnico::find($serviciotecnico);
        $tipoequipo = Tipoequipo::all();
        $tiposervicio = Tiposervicio::all();
        return view('ServicioTecnico.edit')->with([
            'tipoequipo' => $tipoequipo,
            'tiposervicio' => $tiposervicio,
            'serviciotecnico' => $serviciotecnico
        ]);
    }
    public function update(StoreServicioTecnico $request, ServicioTecnico $serviciotecnico){
        $serviciotecnico->nombredueno = $request->nombredueno;
         $serviciotecnico->apellidodueno = $request->apellidodueno;
         $serviciotecnico->emaildueno = $request->emaildueno;
         $serviciotecnico->celulardueno = $request->celulardueno;
         $serviciotecnico->direcciondueno = $request->direcciondueno;
         $serviciotecnico->idtipoequipo = $request->idtipoequipo;
         $serviciotecnico->marcaequipo = $request->marcaequipo;
         $serviciotecnico->modeloequipo = $request->modeloequipo;
         $serviciotecnico->idtiposervicio = $request->idtiposervicio;
         $serviciotecnico->fallas = $request->fallas;
         $serviciotecnico->solucion = $request->solucion;
         $serviciotecnico->fechaentrada = $request->fechaentrada;
         $serviciotecnico->fechasalida = $request->fechasalida;
         $serviciotecnico->estado = $request->estado;
         $serviciotecnico->precio = $request->precio;
         $serviciotecnico->save();
         return redirect()->route('serviciotecnico.listar'); 
    }
    public function destroy(){
        return "destroy servicio tecnico";
    }

    public function listar(){
        $serviciotecnicos = DB::table('servicio_tecnicos')
        ->join('tipoequipos', 'servicio_tecnicos.idtipoequipo', '=', 'tipoequipos.id')
        ->select('servicio_tecnicos.*', 'tipoequipos.description as tipoequipo')->paginate(30);
        return view('ServicioTecnico.listar',compact('serviciotecnicos'));
    }
}
