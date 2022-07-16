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
        "Departamento" => "AHUACHAPÁN"
      ]);

        DB::table("departamento")
        ->insert(

        [
        "Departamento" => "CABAÑAS"
      ]);
        DB::table("departamento")->insert([
      "Departamento" => "CHALATENANGO"
      ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "CUSCATLÁN"
      ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "LA LIBERTAD"
      ]);
      DB::table("departamento")  ->insert(
      [
      "Departamento" => "LA PAZ"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "LA UNIÓN"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "MORAZÁN"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "SAN MIGUEL"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "SAN SALVADOR"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "SAN VICENTE"
    ]);
      DB::table("departamento")->insert(
      [
      "Departamento" => "SANTA ANA"
    ]);
    DB::table("departamento")  ->insert(
      [
      "Departamento" => "SONSONATE"
    ]);
    DB::table("departamento")  ->insert(
      [
      "Departamento" => "USULUTÁN"
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
