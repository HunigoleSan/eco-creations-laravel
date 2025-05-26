<?php

namespace App\Livewire;

use Livewire\Component;

class ProductCardComponent extends Component
{
    public $pro;
    public $cart;

    protected $listeners = ['update'];


    public function mount($pro)
    {
        $this->pro = $pro;
        $this->cart = session('cartsession', []);
    }

    public function incrementar()
    {
        $this->pro['quantity']++;
        $this->dispatch('incrementar',$this->pro['id']);
    }

    public function decrementar()
    {   
        $this->pro['quantity']--;
        $this->dispatch('decrementar', $this->pro['id']);
    }
    public function eliminar(){
        $this->dispatch('productoEliminado', $this->pro['id']);
    }


    public function render()
    {
        return view('livewire.product-card-component');
    }
}
