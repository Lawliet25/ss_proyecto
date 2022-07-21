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
      Schema::table('sedes', function (Blueprint $table) {
          //
      });
      DB::table("sedes")
      ->insert(
      [
      "CodigoSede" => "E0562",
      "Sede" => "Bachillerato Virtual"
      ]);
      DB::table("sedes")
      ->insert(
      [
      "CodigoSede" => "E0572",
      "Sede" => "TNA-UNICEF"
      ]);
      DB::table("sedes")
      ->insert(
      [
      "CodigoSede" => "E0573",
      "Sede" => "TNA-Centro Escolar Las Brisas-Soyapango"
      ]);
      DB::table("sedes")
      ->insert(
      [
      "CodigoSede" => "E0574",
      "Sede" => "TNA-Complejo Educativo Joaquín Rodezno-San Salvador"
      ]);
      DB::table("sedes")
      ->insert(
      [
      "CodigoSede" => "E0575",
      "Sede" => "TNA-Centro Escolar Dolores C-Retes-San Miguel"
      ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
