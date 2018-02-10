<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    //admin
    DB::table('users')->insert([
      'username' => 'admin',
      'level' => 'admin',
      'email' => 'admin@ulah.id',
      'password' => bcrypt('ulah'),
      'nama' => 'Admin Sekolah',
      'no_telp' => '085247313217',
      'alamat' => '',
      'idbank' => '',
      'no_rekening' => '',
      'status' => 'aktif'
    ]);

    $faker = Faker\Factory::create('id_ID');
    $idbank = array('002','008','009','014','022');
    $nis = 7001;

    // generate siswa
    for ($i=1; $i <= 20 ; $i++) {
      $nama = $faker->firstName;
      DB::table('users')->insert([
        'username' => $nis++,
        'level' => 'siswa',
        'email' => strtolower($nama.$i.'@gmail.com'),
        'password' => bcrypt('password'),
        'nama' => $nama,
        'no_telp' => $faker->numerify('08#7#34###3#'),
        'alamat' => $faker->streetAddress,
        'idbank' => $faker->randomElement($idbank),
        'no_rekening' => $faker->numerify('##########'),
        'status' => 'aktif'
      ]);
    }

    // generate ortu
    for ($i=1; $i <= 20 ; $i++) {
      $nama = $faker->firstName;
      DB::table('users')->insert([
        'username' => $faker->numerify('31######1#0#000#'),
        'level' => 'orang_tua',
        'email' => strtolower($nama.$i.'@gmail.com'),
        'password' => bcrypt('password'),
        'nama' => $nama,
        'no_telp' => $faker->numerify('08#7#34###3#'),
        'alamat' => $faker->streetAddress,
        'idbank' => $faker->randomElement($idbank),
        'no_rekening' => $faker->numerify('##########'),
        'status' => 'aktif'
      ]);
    }
  }
}
