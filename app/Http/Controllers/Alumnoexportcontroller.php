<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Alumnoexport;
use App\Exports\AlumnoSedeExport;
use App\Exports\AlumnoSedeExport2;
use App\Exports\AlumnoSedeExport3;
use App\Exports\AlumnoSedeExport4;
use App\Exports\AlumnoSedeExport11;
use App\Exports\AlumnoSedeExport12;
use App\Exports\AlumnoSedeExport13;
use App\Exports\AlumnoSedeExport14;

class Alumnoexportcontroller extends Controller
{
    public function AlumnoExport(){
        return Excel::download(new Alumnoexport,'alumnos.xlsx');
    }
    //Sede 1
    public function AlumnoSedeExport(){
        return Excel::download(new AlumnoSedeExport,'2020alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport2(){
        return Excel::download(new AlumnoSedeExport2,'2021alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport3(){
        return Excel::download(new AlumnoSedeExport3,'2022alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport4(){
        return Excel::download(new AlumnoSedeExport4,'2023alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport11(){
        return Excel::download(new AlumnoSedeExport11,'2020alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport12(){
        return Excel::download(new AlumnoSedeExport12,'2021alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport13(){
        return Excel::download(new AlumnoSedeExport13,'2022alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport14(){
        return Excel::download(new AlumnoSedeExport14,'2023alumnosSedesAños.xlsx');
    }


}
