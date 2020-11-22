<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  public function adposts() {
    return $this->hasMany(Adpost::class);
  }
}
