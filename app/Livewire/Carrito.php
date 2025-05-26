<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Carrito extends Component
{
    protected $listeners = [
        'agregarAlCarrito',
        'productoEliminado',
        'decrementar',
        'incrementar',
        'incrementarCantidad'
    ];

    public $animar = false ,$res = false;

    public $cart;

    public $total, $subtotal, $totalQuantity;

    public function mount()
    {
        $this->cart = session('cartsession', []);
        if(!empty($this->cart)){
            $this->resumen();
            $this->res = true;
        }else{
            $this->res = false;
            $this->animar = false;
        }
    }

    public function agregarAlCarrito($id)
    {
        $cart = session('cartsession', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $this->animar = true;
        } else {
            $product = Producto::findOrFail($id);

            $cart[$product->id] = [
                'id' => $product->id,
                'nompro' => $product->nompro,
                'imgpro' => $product->imgpro,
                'prepro' => $product->prepro,
                'quantity' => 1,
            ];
        }

        session(['cartsession' => $cart]);
        $this->cart = $cart;
        $this->resumen();
    }

    public function incrementar($id)
    {
        if (isset($this->cart[$id])) {
            $this->cart[$id]['quantity']++;
            session(['cartsession' => $this->cart]);
            $this->animar = true;
        }
        $this->resumen();
    }

    public function decrementar($id)
    {
        if (isset($this->cart[$id])) {
            $this->cart[$id]['quantity']--;

            if ($this->cart[$id]['quantity'] <= 0) {
                unset($this->cart[$id]);
                
            }

            session(['cartsession' => $this->cart]);
            $this->animar = true;
        }
        $this->resumen();
    }

    public function productoEliminado($id)
    {
        if (isset($this->cart[$id])) {
            unset($this->cart[$id]);
            session(['cartsession' => $this->cart]);
            $this->animar = true;
            
        }
        $this->resumen();
    }

    public function resumen(){
        $cart = session('cartsession',[]);
        if(empty($cart)){
            $this->res = false;
        }else{
            $total = 0;
            $quantity = 0;
            
            $this->res = true;
            foreach($cart as $c){
                $total += $c['prepro'] * $c['quantity'];
                $quantity += $c['quantity'];
            }
            $this->subtotal = number_format($total,2,'.');
            $this->totalQuantity = $quantity;
            $this->total = $this->subtotal;
        }
    }

    public function process(){
        
        return redirect()->route('procesar.index');
    }



    public function render()
    {
        return view('livewire.carrito');
    }
}
