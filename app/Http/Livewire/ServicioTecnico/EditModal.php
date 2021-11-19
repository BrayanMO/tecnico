<?php

namespace App\Http\Livewire\ServicioTecnico;

use App\Models\ServicioTecnico;
use App\Models\Tipoequipo;
use App\Models\Tiposervicio;
use Livewire\Component;

class EditModal extends Component
{
    public $open=false;
    public $servicios;
    public function mount(ServicioTecnico $servicios){
        $this->servicios=$servicios;
    }

    public function render()
    {
        return view('livewire.servicio-tecnico.edit-modal');
    }
}
