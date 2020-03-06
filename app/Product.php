<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'title', 'price', 'description', 'image'];


    public function categories() {

        return $this->morphToMany('App\Category', 'categoryable');

    }
}
