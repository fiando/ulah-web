<?php

namespace App\BCM;

use Illuminate\Database\Eloquent\Model;

class HistoriPesan extends Model
{
  protected $table = 'bcm_histori_pesan';
  protected $primaryKey = 'idhistori_pesan';
  public $timestamps = false;
}
