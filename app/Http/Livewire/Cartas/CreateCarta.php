<?php

namespace App\Http\Livewire\Cartas;

use App\Models\Carta;
use Livewire\Component;

class CreateCarta extends Component
{
    public $open = true;
    public $nombre, $descripcion;

    public function render()
    {
        return view('livewire.cartas.create-carta');
    }

    public function save()
    {
        Carta::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion
        ]);
    }
}
