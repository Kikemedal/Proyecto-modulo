<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personajes extends Model
{
    public function usuarios(){
        return $this->belongsTo(usuarios::class);
    }
    use HasFactory;
}
