<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Historia;
use App\Models\Comentario;
use Illuminate\Http\Request;

class HistoriaIndividual extends Component
{
    public $historia;
    public $comentario;
    public $historiaId;

    public function mount($historiaId)
    {
        $this->historiaId = $historiaId;
        $this->historia=Historia::find($historiaId);
    }

    public function render()
    {
        return view('livewire.historia-individual');
    }

    public function agregarComentario()
    {
        $comentario = new Comentario();
        $comentario->comentario = $this->comentario;
        $comentario->historia_id = $this->historia->id;
        $comentario->user_id = auth()->user()->id;
        $comentario->save();


        $this->comentario = '';
    }
}
