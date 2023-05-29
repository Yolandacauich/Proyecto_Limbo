<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function historias() {
        return $this->belongsTo(historia::class,'id_historia');
    }

    public function users() {
        return $this->belongsTo(User::class,'id_user');
    }

          /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'comentario',
        'id_historia',
        'id_user'


];
}
