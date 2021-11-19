<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicioTecnico extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombredueno' => 'required',
            'apellidodueno' => 'required',
            'emaildueno' => 'required',
            'celulardueno' => 'required',
            'direcciondueno' => 'required',
            'idtipoequipo' => 'required',
            'marcaequipo' => 'required',
            'modeloequipo' => 'required',
            'idtiposervicio' => 'required',
            'fechaentrada' => 'required',
            'fechasalida' => 'required',
            'estado' => 'required',
            'precio' => 'required',
            'fallas' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'nombredueno' => 'nombre',
            'apellidodueno' => 'apellido',
            'emaildueno' => 'email',
            'celulardueno' => 'celular',
            'direcciondueno' => 'direccion',
            'idtipoequipo' => 'tipo equipo',
            'marcaequipo' => 'marca',
            'modeloequipo' => 'modelo',
            'idtiposervicio' => 'tipo servicio',
            'fechaentrada' => 'fecha entrada',
            'fechasalida' => 'fecha salida',
            'estado' => 'proceso',
            'precio' => 'precio',
            'fallas' => 'fallas'
        ];
    }
    public function messages()
    {
        return [
            'nombredueno.required' => 'debes ingresar el nombre',
            'apellidodueno.required' => 'debes ingresar el apellido',
            'emaildueno.required' => 'debes ingresar el email',
            'celulardueno.required' => 'debes ingresar el celular',
            'direcciondueno.required' => 'debes ingresar la direccion',
            'idtipoequipo.required' => 'debes ingresar el tipo equipo',
            'marcaequipo.required' => 'debes ingresar la marca',
            'modeloequipo.required' => 'debes ingresar el modelo',
            'idtiposervicio.required' => 'debes ingresar el tipo servicio',
            'fechaentrada.required' => 'debes ingresar la fecha entrada',
            'fechasalida.required' => 'debes ingresar la fecha salida',
            'estado.required' => 'debes ingresar el estado',
            'precio.required' => 'debes ingresar el precio',
            'fallas.required' => 'debes ingresar las fallas del equipo'
        ];
    }
}
