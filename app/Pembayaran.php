<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
  protected $table = 'pembayaran';
  protected $primaryKey = 'idpembayaran';
  public $timestamps = false;
}
