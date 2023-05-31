<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Historia;

class CardVerE extends Component
{
    public $historias;

    public function mount()
    {
        // Obtener todas las historias de la base de datos
        $this->historias = Historia::all();
    }

    public function irAPaginaHistoria($Idhistoria)
    {
        return redirect()->to('/historia/' . $Idhistoria);
    }


    public function render()
    {
        return view('livewire.card-ver-e', [
            'historias' => $this->historias,
        ]);
    }
}
