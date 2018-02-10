<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class PembayaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /*
      1. tagihan spp setiap bulan setiap siswa ( ada yang lunas, belum lunas )
      2.
     */
    public function run()
    {
      $faker = Faker\Factory::create('id_ID');
      $nis = 7001;
      $start_month = 6;

      for ($i=1; $i <= 20 ; $i++) { // 20 siswa
        for ($j=1; $j<= 9 ; $j++) { // pembayaran selama 9 bulan
          DB::table('pembayaran')->insert([ // pembayaran spp per bulan
            'nis' => $nis,
            'tgl_tagihan' => date("2017-0$j-01"),
            'tgl_bayar' => date("2017-0$j-10"),
            'status' => 'lunas',
            'idjenis_pembayaran' => '1',
            'idtahun_pelajaran' => '3',
          ]);
          if ($j == 3 || $j == 9) {  // pembayaran uts
            DB::table('pembayaran')->insert([
              'nis' => $nis,
              'tgl_tagihan' => date("2017-0$j-10"),
              'tgl_bayar' => date("2017-0$j-20"),
              'status' => 'lunas',
              'idjenis_pembayaran' => '3',
              'idtahun_pelajaran' => '3',
            ]);
          }
          if ($j == 6) {  // pembayaran ua
            DB::table('pembayaran')->insert([ // pembayaran uas
              'nis' => $nis,
              'tgl_tagihan' => date("2017-0$j-15"),
              'tgl_bayar' => date("2017-0$j-25"),
              'status' => 'lunas',
              'idjenis_pembayaran' => '4',
              'idtahun_pelajaran' => '3',
            ]);
          }
        }
        for ($j=10; $j<= 12 ; $j++) { // pembayaran selama 9 bulan
          DB::table('pembayaran')->insert([ // pembayaran spp per bulan
            'nis' => $nis,
            'tgl_tagihan' => date("2017-$j-01"),
            'tgl_bayar' => date("2017-$j-10"),
            'status' => $faker->randomElement(array('lunas','belum_lunas')),
            'idjenis_pembayaran' => '1',
            'idtahun_pelajaran' => '3',
          ]);

          if ($j == 12) {  // pembayaran ua
            DB::table('pembayaran')->insert([ // pembayaran uas
              'nis' => $nis,
              'tgl_tagihan' => date("2017-$j-15"),
              'tgl_bayar' => date("2017-$j-25"),
              'status' => $faker->randomElement(array('lunas','belum_lunas')),
              'idjenis_pembayaran' => '4',
              'idtahun_pelajaran' => '3',
            ]);
          }
        }
        $nis++;
      }
    }
}
