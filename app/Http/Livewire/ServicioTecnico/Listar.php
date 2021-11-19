<?php

namespace App\Http\Livewire\ServicioTecnico;

use App\Models\ServicioTecnico;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;


class Listar extends Component
{
    use WithPagination;
    public $estado = '';
    public $nombre = '';
    public $readyToLoad = false;
    protected $listeners=['delete'];
   
    public function updatingEstado(){
        $this->resetPage();
    }
    public function loadServicio(){
        $this->readyToLoad=true;
    }

    public function render()
    {
        if($this->readyToLoad){

            $serviciotecnicos = DB::table('servicio_tecnicos')
                ->join('tipoequipos', 'servicio_tecnicos.idtipoequipo', '=', 'tipoequipos.id')
                ->select('servicio_tecnicos.*', 'tipoequipos.description as tipoequipo')->paginate(20);
            // 
            if (isset($this->estado) or isset($this->nombre)) {
                if ($this->estado == '0') {
                    $serviciotecnicos = DB::table('servicio_tecnicos')
                        ->join('tipoequipos', 'servicio_tecnicos.idtipoequipo', '=', 'tipoequipos.id')
                        ->select('servicio_tecnicos.*', 'tipoequipos.description as tipoequipo')
                        ->where('estado', $this->estado)->paginate(20);
                } elseif ($this->estado == '1') {
                    $serviciotecnicos = DB::table('servicio_tecnicos')
                        ->join('tipoequipos', 'servicio_tecnicos.idtipoequipo', '=', 'tipoequipos.id')
                        ->select('servicio_tecnicos.*', 'tipoequipos.description as tipoequipo')
                        ->where('estado', $this->estado)->paginate(20);
                } else {
                    $serviciotecnicos = DB::table('servicio_tecnicos')
                        ->join('tipoequipos', 'servicio_tecnicos.idtipoequipo', '=', 'tipoequipos.id')
                        ->select('servicio_tecnicos.*', 'tipoequipos.description as tipoequipo')->paginate(20);
                }
                // nombre
                if ($this->nombre) {
                    $serviciotecnicos = DB::table('servicio_tecnicos')
                        ->join('tipoequipos', 'servicio_tecnicos.idtipoequipo', '=', 'tipoequipos.id')
                        ->select('servicio_tecnicos.*', 'tipoequipos.description as tipoequipo')
                        ->where('nombredueno', 'LIKE', '%'.$this->nombre.'%')->orwhere('apellidodueno', 'LIKE', '%'.$this->nombre.'%')->paginate(20);
                }
            }
            
            $serviciotecnicos =$serviciotecnicos;
        }else{
            $serviciotecnicos=[];
        }

        return view('livewire.servicio-tecnico.listar', compact('serviciotecnicos'));
    }

    public function delete(ServicioTecnico $servicio){
        $servicio->delete();
        
    }
}
