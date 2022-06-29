<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SedesModel extends Model
{
    use HasFactory;
    protected $table='sedes';
    protected $fillable=['CodigoSede','Sede','Departamento','Municipio'];
}
