<?php

namespace App\Http\Livewire\Reportes;

use App\Models\ServicioTecnico;
use Livewire\Component;

class Equipos extends Component
{
    public $equipos;
    public $fechainicio, $fechafin, $estado;
    public function mount()
    {
        $this->fechainicio = '';
        $this->fechafin = '';
    }
    public function render()
    {
        
        if(!$this->fechainicio == '' || !$this->fechafin == '' || !$this->estado==null) {
            if($this->estado==null) {
                $this->equipos = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$this->fechainicio, $this->fechafin])->get();
            }
            if($this->fechainicio == '' && $this->fechafin == ''){
                $this->estado=intval($this->estado);
                $this->equipos = ServicioTecnico::where('servicio_tecnicos.estado', '=', $this->estado)->get();
            }
            if(!$this->fechainicio == '' && !$this->fechafin == '' && !$this->estado==null){
                $this->estado=intval($this->estado);
                $this->equipos = ServicioTecnico::whereBetween('servicio_tecnicos.fechaentrada', [$this->fechainicio, $this->fechafin])->where('servicio_tecnicos.estado', '=', $this->estado)->get();
            }

        }else {
                $this->equipos = ServicioTecnico::all();
        }
        $equipos = $this->equipos;
        return view('livewire.reportes.equipos', compact($equipos));
    }
    public function resetear()
    {
        $this->fechainicio = '';
        $this->fechafin = '';
        $this->estado = null;
    }
}
