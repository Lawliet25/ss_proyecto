<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exportsalum extends Model
{
    use HasFactory;
    protected $table='preregistro';
    protected $fillable=['Nombres','Apellidos','NIE','DUI','FechaRecepcion', 'Estado', 'PersonaRecibido', 'Grado','Observacion','DocumentoPdf','Turno','Jornada','Modalidad','Seccion','TipoIngreso','Año','CodigoSede','Sede'];
}
