<?php

namespace App\Http\Livewire\Cartas;

use App\Models\Carta;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCarta extends Component
{
    use WithFileUploads;

    public $open = true;
    public $nombre, $descripcion, $image;

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'image' => 'required|image|max:2048'
    ];

    public function render()
    {
        return view('livewire.cartas.create-carta')->layout('layouts.base');
    }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function save()
    {
        $this->validate();

        Carta::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion
        ]);

        $this->reset(['open', 'nombre', 'descripcion']);

        $this->emit('render'); // $this->emitTo('show-cartas', 'render');
        $this->emit('alert', 'Se creó la carta correctamente');
    }
    
}
