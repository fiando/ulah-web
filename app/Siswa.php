<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Siswa extends Model
{
  protected $table = 'siswa';
  protected $primaryKey = 'nis';
  public $timestamps = false;

  public function user()
  {
      return $this->hasOne('App\User','idusers','idusers');
  }

}
