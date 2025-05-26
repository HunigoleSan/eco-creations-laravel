<?php

namespace App\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public $pro;
    
    public function mount($pro)
    {
        $this->pro = $pro;
    }

    public function enviarId($id)
    {
        $this->dispatch('agregarAlCarrito', $id)->to('carrito');
        
    }



    public function render()
    {
        return view('livewire.product-card');
    }
}
