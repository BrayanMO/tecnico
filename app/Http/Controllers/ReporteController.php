<?php

namespace App\Http\Controllers;

use App\Models\ServicioTecnico;
use App\Models\Tiposervicio;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class ReporteController extends Controller
{
    //
    public function clientes()
    {
        $clientes = ServicioTecnico::all();
        return view('Reportes.clientes', compact('clientes'));
    }
    public function equipos()
    {
        $equipos = DB::table('servicio_tecnicos')
            ->join('tipoequipos', 'servicio_tecnicos.idtipoequipo', '=', 'tipoequipos.id')
            ->select('servicio_tecnicos.*', 'tipoequipos.description as tipoequipo')
            ->get();
        return view('Reportes.equipos', compact('equipos'));
    }
    public function ganancias()
    {
        $clientes = Tiposervicio::all();
        return view('Reportes.clientes', compact('clientes'));
    }

    public function pdfclienteall()
    {
        $estado=null;
        $fechainicio=Carbon::parse(now())->format('Y-m-d H:i:s');
        $fechafin=Carbon::parse(now())->format('Y-m-d H:i:s');
        $clientes = ServicioTecnico::all();
        $pdf = PDF::loadView('reporte.reporte', compact('clientes','fechainicio', 'fechafin', 'estado'));
        return $pdf->stream('pdfclientes.pdf');
    }
    public function pdfclientefecha($fechainicio, $fechafin)
    {
        $estado=null;
        $clientes = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$fechainicio, $fechafin])->get();
        $pdf = PDF::loadView('reporte.reporte', compact('clientes','fechainicio', 'fechafin', 'estado'));
        return $pdf->stream('pdfclientes.pdf');
    }
    public function pdfclienteestado($estado){
        $fechainicio=Carbon::parse(now())->format('Y-m-d H:i:s');
        $fechafin=Carbon::parse(now())->format('Y-m-d H:i:s');
        if($estado==0){
            $clientes = ServicioTecnico::where("estado", "=", 0)->get();
        }else{
            $clientes= ServicioTecnico::where('estado', '=', $estado)->get();
        }
        $pdf = PDF::loadView('reporte.reporte', compact('clientes','fechainicio', 'fechafin', 'estado'));
        return $pdf->stream('pdfclientes.pdf');
    }
    public function pdfclientetodos($fechainicio,$fechafin,$estado){
        if($estado==0){

            $clientes= ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$fechainicio, $fechafin])->where('estado', '=', 0)->get();
        }else{
            $clientes = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$fechainicio, $fechafin])->where('estado', '=', 1)->get();
        }
        $pdf = PDF::loadView('reporte.reporte', compact('clientes','fechainicio', 'fechafin', 'estado'));
        return $pdf->stream('pdfclientes.pdf');
    }

    public function pdfequiposall(){
        $estado=null;
        $fechainicio=Carbon::parse(now())->format('Y-m-d H:i:s');
        $fechafin=Carbon::parse(now())->format('Y-m-d H:i:s');
        $equipos = ServicioTecnico::all();
        $pdf = PDF::loadView('reporte.reporteequipo', compact('equipos', 'fechainicio', 'fechafin', 'estado'));
        return $pdf->stream('pdfequipos.pdf');
    }
    public function pdfequiposfecha($fechainicio, $fechafin)
    {
        $estado=null;
        $equipos = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$fechainicio, $fechafin])->get();
        $pdf = PDF::loadView('reporte.reporteequipo', compact('equipos', 'fechainicio', 'fechafin', 'estado'));
        return $pdf->stream('pdfequipos.pdf');
    }
    public function pdfequipoestado($estado){
        $fechainicio=Carbon::parse(now())->format('Y-m-d H:i:s');
        $fechafin=Carbon::parse(now())->format('Y-m-d H:i:s');
        if($estado==0){
            $equipos = ServicioTecnico::where("estado", "=", 0)->get();
        }else{
            $equipos = ServicioTecnico::where('estado', '=', $estado)->get();
        }
        $pdf = PDF::loadView('reporte.reporteequipo', compact('equipos', 'fechainicio', 'fechafin', 'estado'));
        return $pdf->stream('pdfequipos.pdf');
    }
    public function pdfequipostodos($fechainicio,$fechafin,$estado){
        if($estado==0){
            $equipos = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$fechainicio, $fechafin])->where('estado', '=', 0)->get();
        }else{
            $equipos = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$fechainicio, $fechafin])->where('estado', '=', 1)->get();
        }
            $pdf = PDF::loadView('reporte.reporteequipo', compact('equipos', 'fechainicio', 'fechafin', 'estado'));
        return $pdf->stream('pdfequipos.pdf');
    }
}
