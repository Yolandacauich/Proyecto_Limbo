<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    use HasFactory;

    public function ubicaciones() {
        return $this->belongsTo(Ubicacion::class,'ubicacion_id');
    }

    
    public function categorias() {
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    
    public function users() {
        return $this->belongsTo(User::class,'user_id');

    }

    public function comentarios() {
        return $this->hasMany(Comentario::class);
    }

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
   protected $fillable = [
            'nombre_historia',
            'historia',
            'popularidad',
            'image',
            'video',
            'audio',
            'ubicacion_id',
            'categoria_id',
            'user_id',    


   ];
   
}
