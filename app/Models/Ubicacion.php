<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    
    public function historias() {
        return $this->hasMany(Historia::class,'id_historia');
    }
        /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'ubicacion',
            'top', 
            'left', 
            'width', 
            'height'
        ];
    }
}
