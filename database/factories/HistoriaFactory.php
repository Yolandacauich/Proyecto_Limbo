<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HistoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id_categoria'=> $categoria->id,
            'id_ubicacion' => $ubicacion->id,
            'id_user'=> $user->id,
            'id_comentario'=> $comentario->id,
        ];
    }
}
