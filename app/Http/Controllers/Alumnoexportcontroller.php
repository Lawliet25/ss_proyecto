<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Alumnoexport;

class Alumnoexportcontroller extends Controller
{
    public function AlumnoExport(){
        return Excel::download(new Alumnoexport,'alumnos.xlsx');
    }
}
