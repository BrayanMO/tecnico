<?php

namespace App\Http\Livewire\ServicioTecnico;

use App\Models\Tipoequipo;
use App\Models\Tiposervicio;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Edit extends Component
{
    public $serviciotecnico;
    public $tipoequipo;
    public $tiposervicio;
    public function render()
    {
        $tipoequipo = Tipoequipo::all();
        $tiposervicio = Tiposervicio::all();
        return view('livewire.servicio-tecnico.edit')->with([
            'tipoequipo' => $tipoequipo,
            'tiposervicio' => $tiposervicio
        ]);
    }
   
}
