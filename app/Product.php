<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = ['name', 'id_author', 'id_categories', 'price', 'image'];
    public function categories(){
        return $this->belongsTo('App\Category');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public  function imagedetail(){
        return $this-> hasMany('App\Product_image');
    }

}
