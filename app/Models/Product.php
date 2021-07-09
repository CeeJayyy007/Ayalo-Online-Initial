<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function request(){
        return $this->hasMany(Request::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
    }


}
