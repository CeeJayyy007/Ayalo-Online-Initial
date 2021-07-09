<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'state_id',
        'user_id',
        'product_id',
      
    ];

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    
    public function product(){
        return $this->hasOne(Product::class);
    }
}
