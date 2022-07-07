<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('municipio', function (Blueprint $table) {
            //
        });
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ahuachapán",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Apaneca",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Atiquizaya",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Concepción de Ataco",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Refugio",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Guaymango",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Jujutla",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Francisco Menéndez",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Lorenzo",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Pedro Puxtla",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tacuba",
        "id_departamento" => 1
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Turín",
        "id_departamento" => 1
        ]);

        //Cabañas
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Victoria",
        "id_departamento" => 2
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tejutepeque",
        "id_departamento" => 2
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Sensuntepeque",
        "id_departamento" => 2
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Isidro",
        "id_departamento" => 2
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Jutiapa",
        "id_departamento" => 2
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ilobasco",
        "id_departamento" => 2
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Guacotecti",
        "id_departamento" => 2
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Dolores",
        "id_departamento" => 2
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Cinquera",
        "id_departamento" => 2
        ]);
        //Chalatenango
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tejutla",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Rita",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Rafael",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Miguel de Mercedes",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Luis del Carmen",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San José las Flores",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San José Cancasque",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Isidro Labrador",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Ignacio",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Francisco Morazán",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Francisco Lempa",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Fernando",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Antonio los Ranchos",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Antonio de la Cruz",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Potonico",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ojos de Agua",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nueva Trinidad",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nueva Concepción",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nombre de Jesús",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Las Vueltas",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "La Reina",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "La Palma",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "La Laguna",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Paraíso",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Carrizal",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Dulce Nombre de María",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Concepción Quezaltepeque",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Comalapa",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Citalá",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Chalatenango",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Azacualpa",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Arcatao",
        "id_departamento" => 3
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Agua Caliente",
        "id_departamento" => 3
        ]);
        //Cuscatlán
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tenancingo",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Suchitoto",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Cruz Michapa",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Cruz Analquito",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Ramón",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Rafael Cedros",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Pedro Perulapán",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San José Guayabal",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Cristobal",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Bartolomé Perulapía",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Oratorio de Concepción",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Monte San Juan",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Rosario",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Carmen",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Cojutepeque",
        "id_departamento" => 4
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Candelaria",
        "id_departamento" => 4
        ]);
        //La Libertad
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Tecla",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Antiguo Cuscatlán",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Chiltiupán",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ciudad Arce",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Colón",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Comasagua",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Huizúcar",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Jayaque",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Jicalapa",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nuevo Cuscatlán",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Puerto de la Libertad",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Quezaltepeque",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Sacaoyo",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San José Villanueva",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Juan Opico",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Matías",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Pablo Tacachico",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Talnique",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tamanique",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Teotepque",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tepecoyo",
        "id_departamento" => 5
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Zaragoza",
        "id_departamento" => 5
        ]);
        //La Paz
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Zacatecoluca",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tapalhuaca",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santiago Nonualco",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa María Ostuma",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Rafael Obrajuelo",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Pedro Nonualco",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Pedro Masahuat",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Miguel Tepezontes",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Luis la Herradura",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Luis Talpa",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Juan Tepezontes",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Juan Talpa",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Juan Nonualco",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Francisco Chimaneca",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Emigdio",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Antonio Masahuat",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Paraíso de Osorio",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Olocuilta",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Mercedes la Ceiba",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Jerusalén",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Rosario",
        "id_departamento" => 6
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Cuyultitán",
        "id_departamento" => 6
        ]);
        //La Unión
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Yucuaquín",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Yayantique",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Rosa de Lima",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San José",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Alejo",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Polorós",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Pasaquina",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nueva Esparta",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Meanguera del Golfo",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Lislique",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "La Unión",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Intipucá",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Sauce",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Carmen",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Conchagua",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Concepción de Oriente",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Bolívar",
        "id_departamento" => 7
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Anamorós",
        "id_departamento" => 7
        ]);
        //Morazám
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Yoloaiquín",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Yamabal",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Torola",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Sociedad",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Sensembra",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Simón",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Isidro",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Francisco Gotera",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Fernando",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Carlos",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Perquín",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Osicala",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Meanguera",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Lolotiquillo",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Jocoro",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Joateca",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Guatajiagua",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Gualococti",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Rosario",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Divisadero",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Delicias de Concepción",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Corinto",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Chilanga",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Cacaopera",
        "id_departamento" => 8
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Arambala",
        "id_departamento" => 8
        ]);
        //San Miguel
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Uluazapa",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Sesori",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Rafael Oriente",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Miguel",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Luis de la Reina",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Jorge",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Gerardo",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Antonio del Mosco",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Quelepa",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nuevo Edén de San Juan",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nueva Guadalupe",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Moncagua",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Lolotique",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Tránsito",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Comacarán",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ciudad Barrios",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Chirilagua",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Chinameca",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Chapeltique",
        "id_departamento" => 9
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Carolina",
        "id_departamento" => 9
        ]);
        //San Salvador
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tonacatepeque",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Soyapango",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santo Tomás",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santiago Texacuangos",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Salvador",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Martín",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Marcos",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Rosario de Mora",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Panchimalco",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Mejicanos",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nejapa",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ilopango",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Paisnal",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Guazapa",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ciudad Delgado",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Cuscatancingo",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ayutuxtepeque",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Aguilares",
        "id_departamento" => 10
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Apopa",
        "id_departamento" => 10
        ]);
        //San Vicente
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Verapaz",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tecoluca",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tepetitán",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santo Domingo",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Clara",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Vicente",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Sebastián",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Ildefonso",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Lorenzo",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Esteban Catarina",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Cayetano Istepeque",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Apastepeque",
        "id_departamento" => 11
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Guadalupe",
        "id_departamento" => 11
        ]);
        //Santa Ana
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Rosa Guachipilín",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Texistepeque",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santiago de la Frontera",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Ana",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Congo",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Masahuat",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Antonio Pajonal",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Metapán",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Sebastián Salitrillo",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Porvenir",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Coatepeque",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Chalchuapa",
        "id_departamento" => 12
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Candelaria de la Frontera",
        "id_departamento" => 12
        ]);
        //Sonsonate
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Sonzacate",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Isabel Ishuatán",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santo Domingo de Guzmán",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Sonsonate",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Catarina Masahuat",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Julián",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Antonio del Monte",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nahuizalco",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Salcoatitán",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Juayúa",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Izalco",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Caluco",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Cuisnahuat",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Armenia",
        "id_departamento" => 13
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Acajutla",
        "id_departamento" => 13
        ]);
        //Usulután
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Usulután",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Tecapán",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santiago de María",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa María",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Santa Elena",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Francisco Javier",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Dionisio",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Buenaventura",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "San Agustín",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Puerto El Triunfo",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ozatlán",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Nueva Granada",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Mercedes Umaña",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Jucuarán",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Jucuapa",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Jiquilisco",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Estanzuelas",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Ereguayquín",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "El Triunfo",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Concepción Batres",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "California",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Berlín",
        "id_departamento" => 14
        ]);
        DB::table("municipio")
        ->insert(
        [
        "Municipio" => "Alegría",
        "id_departamento" => 14
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('municipio', function (Blueprint $table) {
            //
        });
    }
};
