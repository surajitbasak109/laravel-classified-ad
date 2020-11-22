<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FontAwesomeIcon extends Model
{
    protected $fillable = [
      'name',
      'unicode'
    ];
  
  public $timestamps = false;
}
