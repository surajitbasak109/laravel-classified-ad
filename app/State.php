<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  public function adposts() {
    return $this->hasMany(Adpost::class);
  }
}
