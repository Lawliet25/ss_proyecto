<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preregistro extends Model
{
    use HasFactory;
    protected $table='preregistro';
    protected $fillable=['Nombres','Apellidos','NIE','DUI','FechaRecepcion', 'Estado', 'PersonaRecibido', 'Grado','Observacion','DocumentoPdf','Turno','Jornada','Modalidad','Seccion','TipoIngreso','Año','CodigoSede','Sede'];

    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }
}
