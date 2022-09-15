<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    //Relación uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
}

