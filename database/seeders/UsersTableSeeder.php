<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*DB::table('users')->insert([
          'name' => 'Hola',
          'email' => 'hola@gmail.com',
          'password' => bcrypt('secret'),
      ]);*/
      DB::table('users')->insert([
          'name' => 'Ingris Hernández',
          'email' => 'ingris.hernandez@udb.edu.sv',
          'password' => bcrypt('2022udbingris'),
      ]);

    }
}
