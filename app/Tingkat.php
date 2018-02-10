<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tingkat extends Model
{
  protected $table = 'tingkat';
  protected $primaryKey = 'idtingkat';
  public $timestamps = false;
}
