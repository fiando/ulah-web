<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
  protected $table = 'bank';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;
}
