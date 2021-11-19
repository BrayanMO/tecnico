<?php

namespace App\Http\Livewire\ServicioTecnico;

use Livewire\Component;

class Create extends Component
{
    public $tiposervicios;
    public $tipoequipos;
    public function render()
    {
        return view('livewire.servicio-tecnico.create');
    }
}
