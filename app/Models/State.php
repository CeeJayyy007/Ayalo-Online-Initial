<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function city(){
        return $this->hasMany(City::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    
    public function product(){
        return $this->hasOne(Product::class);
    }
}
