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
        Schema::table('departamento', function (Blueprint $table) {
            //
        });

        DB::table("departamento")
        ->insert(

        [
        "Departamento" => "Cabañas"
      ]);
        DB::table("departamento")->insert([
      "Departamento" => "Chalatenango"
      ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "Cuscatlán"
      ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "La Libertad"
      ]);
      DB::table("departamento")  ->insert(
      [
      "Departamento" => "La Paz"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "La Unión"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "Morazán"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "San Miguel"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "San Salvador"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "San Vicente"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "Santa Ana"
    ]);
    DB::table("departamento")  ->insert(
      [
      "Departamento" => "Sonsonate"
    ]);
    DB::table("departamento")  ->insert(
      [
      "Departamento" => "Usulután"
    ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departamento', function (Blueprint $table) {
            //
        });
    }
};
