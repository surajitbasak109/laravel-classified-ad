<?php
  
  namespace App;
  
  use Illuminate\Database\Eloquent\Model;
  
  class Adpost extends Model
  {
    protected $guarded = [];
    
    public function category()
    {
      return $this->belongsTo(Category::class, 'category_id', 'id');
    }
  
    public function user()
    {
      return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function country() {
      return $this->belongsTo(Country::class,'country_id', 'id');
    }
    
    public function state() {
      return $this->belongsTo(State::class, 'state_id', 'id');
    }
    
    public function city() {
      return $this->belongsTo(City::class, 'city_id', 'id');
    }
  }
