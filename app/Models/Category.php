<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Relación uno a muchos
    public function movements(){
        return $this->hasMany(Movement::class);
    }

    //Relación uno a muchos inversa
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
