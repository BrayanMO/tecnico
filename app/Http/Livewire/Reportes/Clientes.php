<?php

namespace App\Http\Livewire\Reportes;

use App\Models\ServicioTecnico;
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
                $this->clientes = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$this->fechainicio, $this->fechafin])->get();
            }
            if($this->fechainicio == '' && $this->fechafin == ''){
                $this->estado=intval($this->estado);
                $this->clientes = ServicioTecnico::where('servicio_tecnicos.estado', '=', $this->estado)->get();
            }
            if(!$this->fechainicio == '' && !$this->fechafin == '' && !$this->estado==null){
                $this->estado=intval($this->estado);
                $this->clientes = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$this->fechainicio, $this->fechafin])->where('servicio_tecnicos.estado', '=', $this->estado)->get();
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
