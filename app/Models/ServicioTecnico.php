<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioTecnico extends Model
{
    use HasFactory;

    // relacion de uno a muchos 
    public function tiposervicio(){
        return $this->belongsTo(Tiposervicio::class,'idtiposervicio');
    }
    public function tipoequipo(){
        return $this->belongsTo(Tipoequipo::class,'idtipoequipo');
    }

    protected $table='servicio_tecnicos';
    protected $fillable=['nombredueno','apellidodueno', 
    'emaildueno',
    'celulardueno',
    'direcciondueno',
    'idtipoequipo',
    'marcaequipo' ,
    'modeloequipo',
    'idtiposervicio',
    'fallas',
    'solucion',
    'fechaentrada',
    'fechasalida',
    'estado' ,
    'precio',
    ];
    // add equipo-servicio
}
