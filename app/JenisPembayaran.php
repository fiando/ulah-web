<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPembayaran extends Model
{
  protected $table = 'jenis_pembayaran';
  protected $primaryKey = 'idjenis_pembayaran';
  public $timestamps = false;
}
