<?php

namespace App\Http\Livewire\TipoEquipo;

use Livewire\Component;

class Edit extends Component
{
    public $tipoequipo;
    public function render()
    {
        return view('livewire.tipo-equipo.edit');
    }
}
