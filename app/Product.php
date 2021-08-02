<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','image','rent','deposit','rating','review'
    ];

    public function productSize(){
        return $this->hasMany(ProductSize::class);
    }

    public function reviewRating(){
        return $this->hasMany(Review::class);
    }
}
