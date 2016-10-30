<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
  protected $fillable = [
      'name', 'adres', 'wonplaats', 'code',
  ];

  protected $hidden = [
      'ip',
  ];
}
