<?php

namespace App\Http\Livewire\TipoServicio;

use App\Models\Tiposervicio;
use Livewire\Component;
use Throwable;

class Show extends Component
{
    public $open_edit=false;
    public $tiposervicios;
    public $tipose;
    protected $listeners=['delete'];
    protected $rules=[
        'tipose.description'=>'required'
    ];
    public function render()
    { 
        $tiposervicios = Tiposervicio::all();
        return view('livewire.tipo-servicio.show',compact($tiposervicios));
    }
    public function delete(Tiposervicio $tiposervicio){
        try {
            $tiposervicio->delete();
            return redirect()->route('tiposervicio.index');
        } catch (Throwable $error) {
            report($error);
            $this->open_edit=true;
            return false;
        }

        
    }
    public function edit($id){
        $this->tipose= Tiposervicio::find($id);
        $this->open_edit=true;
    }
}
