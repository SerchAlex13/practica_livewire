<?php

namespace App\Http\Livewire\Cartas;

use Livewire\Component;
use App\Models\Carta;

class ShowCartas extends Component
{
    public function render()
    {
        $cartas = Carta::all();

        return view('livewire.cartas.show-cartas', compact('cartas'))->layout('layouts.base');
    }
}
