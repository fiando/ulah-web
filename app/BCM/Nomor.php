<?php

namespace App\BCM;

use Illuminate\Database\Eloquent\Model;

class Nomor extends Model
{
  protected $table = 'bcm_nomor';
  protected $primaryKey = 'idkategori';
  public $timestamps = false;
}
