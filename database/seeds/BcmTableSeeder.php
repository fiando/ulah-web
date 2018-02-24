<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\BCM\Nomor;
use App\BCM\HistoriPesan;
use App\BCM\Kategori;
use App\BCM\Unik;

class BcmTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $faker = Faker\Factory::create('id_ID');

    //tambah unik
    $kategori_arr = array('keluarga','teman','relasi','customer','organisasi','tim');

    for ($i=1; $i <= 10; $i++) {
      $unik = new Unik;
      $unik->akses = md5($i);
      $unik->save();

      //  tambah kategori
      for ($k=1; $k <= 6; $k++) {
        $kategori = new Kategori;
        $kategori->nama = $kategori_arr[$k-1];
        $kategori->idunik = $i;
        $kategori->save();

        //  tambah daftar nomor
        for ($j=1; $j <= 6; $j++) {
          $nomor = new Nomor;
          $nomor->nomor = $faker->numerify('08#7#34###3#');
          $nomor->idkategori = $k;
          $nomor->idunik = $i;
          $nomor->save();
        }
        for ($j=1; $j <= 3; $j++) {
          $histori = new HistoriPesan;
          $histori->pesan = "Pesan Broadcast {$kategori_arr[$k-1]} " . $k;
          $histori->idkategori = $k;
          $histori->idunik = $i;
          $histori->save();
        }
      }
    }
  }
}
