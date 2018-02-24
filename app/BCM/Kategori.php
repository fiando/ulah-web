<?php

namespace App\BCM;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
  protected $table = 'bcm_kategori';
  protected $primaryKey = 'idkategori';
  public $timestamps = false;
}
