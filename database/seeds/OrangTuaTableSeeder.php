<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class OrangTuaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create('id_ID');

      for ($i=21; $i <= 40 ; $i++) {
        DB::table('orang_tua')->insert([
          'idusers' => $i,
        ]);
      }
    }
}
