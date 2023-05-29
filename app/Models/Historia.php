<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    use HasFactory;

    public function ubicaciones() {
        return $this->belongsTo(Ubicacion::class,'id_ubicacion');
    }

    
    public function categorias() {
        return $this->belongsTo(Categoria::class,'id_categoria');
    }

    
    public function users() {
        return $this->belongsTo(User::class,'id_user');
    }

    public function comentarios() {
        return $this->hasMany(Comentario::class,'id_comentario');
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
            'id_ubicacion',
            'id_categoria',
            'id_user',
            'id_comentario'    


   ];
}
