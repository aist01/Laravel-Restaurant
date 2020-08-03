<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{   
    protected $fillable = ['title', 'photo','price', 'weight', 'meat', 'about'];
    protected $attributes = [
      'title' => '',
      'photo' => '',
      'price' => '',
      'weight' => '',
      'meat' => '',
      'about' => ''

    ];
    
    public function restaurants()
    {
        return $this->hasMany('App\Models\Restaurant', 'menu_id', 'id');
    }
 
}