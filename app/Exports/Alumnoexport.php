<?php

namespace App\Exports;

use App\Models\Preregistro;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Alumnoexport implements FromCollection,   WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Preregistro::all(
            'id',
            'Nombres',
            'Apellidos',
            'NIE',
            'DUI',
            'Estado',
            'Grado',
            'Observacion',
            'PersonaRecibido',
            'FechaRecepcion',
            'DocumentoPdf',
            'Turno',
            'Jornada',
            'Modalidad',
            'Seccion',
            'TipoIngreso',
            'Año',
            'CodigoSede',
            'Sede'
        );
    }

    public function headings(): array{
        return [
            'id',
            'Nombres',
            'Apellidos',
            'NIE',
            'DUI',
            'Estado',
            'Grado',
            'Observacion',
            'PersonaRecibido',
            'FechaRecepcion',  
            'DocumentoPdf',
            'Turno',
            'Jornada',
            'Modalidad',
            'Seccion',
            'TipoIngreso',
            'Año',
            'CodigoSede',
            'Sede'
        ];
    }
}
