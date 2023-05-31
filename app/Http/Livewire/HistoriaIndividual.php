<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Historia;
use App\Models\Comentario;
class HistoriaIndividual extends Component
{
    public $miComentario;
    public $historiaId;

    public function render()
    {
        return view('livewire.historia-individual');
    }
    
    public function mostrarHistoria($id)
    {
        $this->historiaId=$id;
        $historia = Historia::findOrFail($id);
        $comentarios = $historia->comentarios; 

        return view('livewire.historia-individual', compact('historia', 'comentarios'));
    }
    public function agregarComentario()
{


    // Crea un nuevo comentario y asigna los valores
    $comentario = new Comentario();
    $comentario->comentario = $this->miComentario;
    $comentario->historia_id = $historiaId;
    $comentario->user_id = auth()->user()->id; // Asigna el ID del usuario actual, si tienes autenticación

    $comentario->save();

    // Limpia el campo de comentario después de guardar
    $this->miComentario = '';

    // Opcionalmente, puedes mostrar un mensaje de éxito o redirigir a otra página
    session()->flash('success', 'Comentario guardado exitosamente.');
}

}
