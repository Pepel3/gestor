<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    //Relación uno a muchos
    public function categories(){
        return $this->hasMany(Category::class);
    }
}
