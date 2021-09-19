<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //relzione ristoranti-categorie
    public function restaurants(){
        return $this->belongsToMany('App\Restaurant');
    }
}
