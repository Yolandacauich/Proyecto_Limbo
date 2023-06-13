<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function historias() {
        return $this->belongsTo(historia::class);
    }

    public function users() {
        return $this->belongsTo(User::class,'user_id');
    }

 
}
