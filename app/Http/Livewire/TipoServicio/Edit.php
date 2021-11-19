<?php

namespace App\Http\Livewire\TipoServicio;

use Livewire\Component;

class Edit extends Component
{
    public $tiposervicio;
    
    public function render()
    {
        return view('livewire.tipo-servicio.edit');
    }
}
