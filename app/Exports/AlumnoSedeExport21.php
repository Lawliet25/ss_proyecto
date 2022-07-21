<?php

namespace App\Exports;

use App\Models\Preregistro;
use App\Models\DatosAlumno;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlumnoSedeExport21 implements FromCollection,   WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      return Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos', 'preregistro.DUI',
              'datosalumnofr.Sexo', 'datosalumnofr.IdentidadGenero','datosalumnofr.FechaNacimiento','datosalumnofr.Nacionalidad',
              'datosalumnofr.EstadoFamiliar','datosalumnofr.MedioTransporte','datosalumnofr.DistanciaSede',
              'datosalumnofr.Trabaja','datosalumnofr.Retornado',
              'preregistro.Grado', 'preregistro.Año','preregistro.Sede','preregistro.Seccion','preregistro.Modalidad',
              'preregistro.Turno', 'preregistro.Jornada', 'preregistro.Estado',
              'datosalumnofr.NombresEncargado','datosalumnofr.ApellidosEncargado',
              'datosalumnofr.ParentescoEncargado', 'datosalumnofr.Direccion', 'datosalumnofr.Celular', 'datosalumnofr.Zona',
              'datosalumnofr.ConvivenciaFamiliar','datosalumnofr.NumFamiliares','datosalumnofr.CantidadHijos',
              'datosalumnofr.GradoCursado','datosalumnofr.AñoCursado','datosalumnofr.InstitucionAcademica','datosalumnofr.CentroEducativo',
              'datosalumnofr.FechaFR',
              )->where('Sede', 'LIKE','%Las Brisas%')->where('Año', 'LIKE', '2020')
              ->get();

    }

    public function headings(): array{
        return [
            'id',
            'NIE',
            'Nombres',
            'Apellidos',
            'DUI',
            'Sexo',
            'Identidad de género',
            'Fecha de nacimiento',
            'Nacionalidad',
            'Estado familiar',
            'Medio de transporte',
            'Distancia a sede',
            'Trabaja',
            'Retornado',
            'Grado',
            'Año',
            'Sede',
            'Sección',
            'Modalidad',
            'Turno',
            'Jornada',
            'Estado',
            'Nombres Encargado',
            'Apellidos Encargado',
            'Parentesco',
            'Dirección',
            'Celular',
            'Zona',
            'Convivencia Familiar',
            'Número de familiares',
            'Cantidad de hijos',
            'Grado Cursado',
            'Año Cursado',
            'Institucion Académica',
            'Centro Educativo',
            'Fecha de registro'
        ];
    }
}

?>
