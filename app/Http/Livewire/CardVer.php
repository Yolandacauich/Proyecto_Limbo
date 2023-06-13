<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Historia;
use App\Models\Comentario;
use Illuminate\Support\Facades\Redirect;

class CardVer extends Component
{
    public $historias;
    public $visiblehistorias = [];
    public $currentIndex = 0;
    public $itemsToShow = 3;

    public function mount()
    {
        $this->historias = Historia::where('categoria_id', 1)->get();
        $this->updateVisiblehistorias();
    }

    public function nextItems()
    {
        $this->currentIndex += $this->itemsToShow;
        $this->updateVisiblehistorias();
    }

    public function previousItems()
    {
        $this->currentIndex -= $this->itemsToShow;
        $this->updateVisiblehistorias();
    }

    private function updateVisiblehistorias()
    {
        $this->visiblehistorias = $this->historias->slice($this->currentIndex, $this->itemsToShow);
    }

    public function irAPaginaHistoria($idHistoria)
    {
        return Redirect::to('/historia/' . $idHistoria);
    }

    public function render()
    {
        return view('livewire.card-ver');
    }
}
