<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Preregistro;

class DatosAlumno extends Model
{
    use HasFactory;
    protected $table='datosalumnofr';
    protected $fillable=['Sexo','FechaNacimiento','Nacionalidad','EstadoFamiliar','MedioTransporte', 'DistanciaSede',
    'Trabaja', 'Ocupacion','Discapacidad','TipoDiscapacidad', 'Retornado', 'PaisRetornado','ConvivenciaFamiliar',
    'DependenciaEconomica','NumFamiliares','Enfermedades','Medicamentos','FechaFR','IdentidadGenero','EspecifiqueConv',
    'EspecifiqueEcon', 'NombresEncargado','ApellidosEncargado','ParentescoEncargado','LugarTrabajoEncargado','TelefonoEncargado',
    'DUIEncargado', 'ProfesionEncargado', 'DireccionEncargado', 'Cantidad','Edad1','Sexo1','Edad2','Sexo2', 'Edad3', 'Sexo3',
    'Edad4','Sexo4', 'InstitucionAcademica','AñoCursado','GradoCursado','CentroEducativo','DatosAdicionales', 'Direccion','Zona','TelefonoResidencia',
    'TelefonoTrabajo','Celular','Email', 'Departamento', 'Municipio', 'PersonaRegistro',
    'id_preregistro'];

    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
}

}
