<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    public function owner(){
        return $this->belongsTo(User::class,'owner_id');
    }

    public function renter(){
        return $this->belongsTo(User::class,'renter_id');
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
