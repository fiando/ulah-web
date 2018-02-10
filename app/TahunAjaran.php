<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
  protected $table = 'tahun_pelajaran';
  protected $primaryKey = 'idtahun_pelajaran';
  public $timestamps = false;
}
