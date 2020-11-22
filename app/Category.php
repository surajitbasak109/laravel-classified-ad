<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
  
  public function adposts() {
    return $this->hasMany(Adpost::class);
  }
  
  public function children()
  {
    return $this->hasMany(Category::class, 'parent_id');
  }
}
