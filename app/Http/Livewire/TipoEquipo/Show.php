<?php

namespace App\Http\Livewire\TipoEquipo;

use App\Models\Tipoequipo;
use Livewire\Component;
use Throwable;

class Show extends Component
{
    public $open_edit=false;
    protected $listeners=['delete'];
    public $tipoequipos;
    public function render()
    {
        $tipoequipos = Tipoequipo::all();
        return view('livewire.tipo-equipo.show',compact('tipoequipos'));
    }
    public function delete(Tipoequipo $tipoequipo){
        try {
            //code...
            $tipoequipo->delete();
             return redirect()->route('tipoequipo.index');
        } catch (Throwable $error) {
            //throw $th;
            report($error);
            $this->open_edit=true;
            return false;
        }
        
    }
}
