<?php

namespace App\Http\Livewire\Reportes;

use App\Models\ServicioTecnico;
use Carbon\Carbon;
use Livewire\Component;

class Clientes extends Component
{
    public $clientes;
    public $fechainicio,$fechafin,$estado;
    public function mount(){
        $this->fechainicio='';
        $this->fechafin='';
    }
    public function render()
    {
        if(!$this->fechainicio=='' || !$this->fechafin=='' || !$this->estado==null){
            if($this->estado==null) {
                $fi = Carbon::parse($this->fechainicio)->format('Y-m-d 00:00:00');
                $ff = Carbon::parse($this->fechafin)->format('Y-m-d 23:59:59');
                $this->clientes = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$fi, $ff])->get();
            }
            if($this->fechainicio == '' && $this->fechafin == ''){
                $this->estado=intval($this->estado);
                $this->clientes = ServicioTecnico::where('servicio_tecnicos.estado', '=', $this->estado)->get();
            }
            if(!$this->fechainicio == '' && !$this->fechafin == '' && !$this->estado==null){
                $this->estado=intval($this->estado);
                $fi = Carbon::parse($this->fechainicio)->format('Y-m-d 00:00:00');
                $ff = Carbon::parse($this->fechafin)->format('Y-m-d 23:59:59');
                $this->clientes = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$fi, $ff])->where('servicio_tecnicos.estado', '=', $this->estado)->get();
            }

        }else {
                $this->clientes = ServicioTecnico::all();
        }
        $clientes=$this->clientes;
        return view('livewire.reportes.clientes',compact('clientes'));
    }
    public function resetear()
    {
        $this->fechainicio = '';
        $this->fechafin = '';
        $this->estado = null;
    }
    
}
