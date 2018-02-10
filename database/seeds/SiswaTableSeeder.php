<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create('id_ID');
      $nis = 7001;
      $idorang_tua = 21;

      for ($i=1; $i <= 20 ; $i++) {
        DB::table('siswa')->insert([
          'nis' => $nis++,
          'akses_pembayaran' => true,
          'idusers' => $i,
          'idtingkat' => $faker->numberBetween(1,3),
          'idkategori' => $faker->numberBetween(1,3),
          'idorang_tua' => $idorang_tua++
        ]);
      }
    }
}
