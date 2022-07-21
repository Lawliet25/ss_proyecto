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
use App\Exports\AlumnoSedeExport21;
use App\Exports\AlumnoSedeExport22;
use App\Exports\AlumnoSedeExport23;
use App\Exports\AlumnoSedeExport24;
use App\Exports\AlumnoSedeExport31;
use App\Exports\AlumnoSedeExport32;
use App\Exports\AlumnoSedeExport33;
use App\Exports\AlumnoSedeExport34;
use App\Exports\AlumnoSedeExport41;
use App\Exports\AlumnoSedeExport42;
use App\Exports\AlumnoSedeExport43;
use App\Exports\AlumnoSedeExport44;

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
    public function AlumnoSedeExport21(){
        return Excel::download(new AlumnoSedeExport21,'2020alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport22(){
        return Excel::download(new AlumnoSedeExport22,'2021alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport23(){
        return Excel::download(new AlumnoSedeExport23,'2022alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport24(){
        return Excel::download(new AlumnoSedeExport24,'2023alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport31(){
        return Excel::download(new AlumnoSedeExport31,'2020alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport32(){
        return Excel::download(new AlumnoSedeExport32,'2021alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport33(){
        return Excel::download(new AlumnoSedeExport33,'2022alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport34(){
        return Excel::download(new AlumnoSedeExport34,'2023alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport41(){
        return Excel::download(new AlumnoSedeExport41,'2020alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport42(){
        return Excel::download(new AlumnoSedeExport42,'2021alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport43(){
        return Excel::download(new AlumnoSedeExport43,'2022alumnosSedesAños.xlsx');
    }
    public function AlumnoSedeExport44(){
        return Excel::download(new AlumnoSedeExport44,'2023alumnosSedesAños.xlsx');
    }



}
