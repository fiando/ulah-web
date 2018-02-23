<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
  protected $table = 'pembayaran';
  protected $primaryKey = 'idpembayaran';
  public $timestamps = false;
}
