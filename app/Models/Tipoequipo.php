<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoequipo extends Model
{
    use HasFactory;
    protected $table='tipoequipos';
    protected $fillable=['description','slug'];
}
