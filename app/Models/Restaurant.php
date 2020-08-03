<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{   

    protected $fillable = ['title', 'customers', 'employees', 'menu_id'];
    protected $attributes = [
       'title' => '',
       'customers' => 0,
       'employees' => 0,
       'menu_id' => 0
    ];

    public function menus()
    {
        return $this->belongsTo('App\Models\Menu', 'menu_id','id');
    }
 
}