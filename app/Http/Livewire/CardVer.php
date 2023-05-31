<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Historia;

class CardVer extends Component
{
    public $historias;
    public $visiblehistorias = [];
    public $currentIndex = 0;
    public $itemsToShow = 3;

    public function mount()
    {
        $this->historias = Historia::all();
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

    public function irAPaginaHistoria($Idhistoria)
    {
        return redirect()->to('/historia/' . $Idhistoria);
    }
    public function render()
    {
        return view('livewire.card-ver');
    }
}
