<?php

namespace App\Http\Livewire\Cartas;

use Livewire\Component;
use App\Models\Carta;

class ShowCartas extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';

    public function render()
    {
        $cartas = Carta::where('nombre', 'like', '%' . $this->search . '%')
                        ->orWhere('descripcion', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction)
                        ->get();

        return view('livewire.cartas.show-cartas', compact('cartas'))->layout('layouts.base');
    }

    public function order($sort)
    {
        if ($this->sort == $sort)
        {
            if ($this->direction == 'desc')
            {
                $this->direction = 'asc';
            }
            else
            {
                $this->direction = 'desc';
            }
        }
        else
        {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
