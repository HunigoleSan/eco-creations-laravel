<?php

namespace App\Livewire;

use Livewire\Component;

class Procesar extends Component
{
    public $cart = [];
    public $total = 0;

    public function mount()
    {
        $cart = session('cartsession', []);
        $this->cart = $cart;

        $this->total = 0;
        foreach ($this->cart as $item) {
            $price = $item['prepro'] ?? 0;
            $quantity = $item['quantity'] ?? 1;
            $this->total += $price * $quantity;
        }
    }

    public function render()
    {
        return view('livewire.procesar', [
            'total' => $this->total,
        ]);
    }

    public function realizarCompra()
    {
        $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'celular' => 'required|numeric',
            'dni' => 'required|numeric',
            'direccion' => 'required',
            'numberCode' => 'required',
            'fecha' => 'required',
            'code' => 'required',
        ]);

        if (count($this->cart) === 0) {
            session()->flash('message', 'Tu carrito está vacío.');
            return;
        }

        session()->forget('cartsession');
        $this->cart = [];
        $this->total = 0;

        session()->flash('message', 'Compra realizada con éxito.');
    }

}
