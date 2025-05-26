<?php

namespace App\Livewire;

use App\Models\Cliente;
use App\Models\DetalleVenta;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;

use function Livewire\store;

class Procesar extends Component
{
    public $cart;

    protected Venta $venta;

    public $nomcli, $apecli, $dnicli, $celcli, $ciudad, $distrito, $dircli;
    public $tipcomven, $fecven, $fecsalven, $metpagven, $number_code, $fecha, $code;


    public function mount()
    {
        $cart = session('cartsession', []);
        if (!empty($cart)) {
            $this->cart = $cart;
        }
    }

    public function insertClient()
    {

        $validatedCli = $this->validate([
            'nomcli' => 'required|max:30',
            'apecli' => 'required|max:45',
            'dnicli' => 'required|max:15',
            'ciudad' => 'required',
            'distrito' => 'required',
            'dircli' => 'required|max:15',
            'celcli' => 'required',
        ]);

        $validatedVen = $this->validate([
            'tipcomven' => 'required',
            'fecven' => 'nullable',
            'fecsalven' => 'nullable'
        ]);


        $clientExist = Cliente::where('dnicli', $validatedCli['dnicli'])->first();
        if ($clientExist) {
            $venta = $this->insertVenta($clientExist->id,$validatedVen);
            $this->insertDetalleVenta($venta, $this->cart);
            session()->forget('cartsession');
            $this->dispatch('swal:success');
            return;
        }
        
        $cliente = Cliente::create($validatedCli);
        $venta = $this->insertVenta($cliente->id,$validatedVen);

        $this->insertDetalleVenta($venta, $this->cart);
        session()->forget('cartsession');
        $this->dispatch('swal:success');
        
        return;
    }

    public function insertVenta($clienteId,$venta) {
        $venta['codcli'] = $clienteId;
        $venta['metpagven'] = 'paypal';
        $venta['estven'] = 'pagado';
        $venta['fecven'] = Carbon::now();
        $venta = Venta::create($venta);
        return $venta;

    }

    public function insertDetalleVenta($venta,$productos){
        $ventid = $venta->id;
        
        foreach($productos as $pro){

            $precio = (string) $pro['prepro'];
            $cantidad = (string) $pro['quantity'];
            $subtotal = bcmul($precio, $cantidad, 2);
            $detail = new DetalleVenta();
            $detail->codven = $ventid;
            $detail->codprod = $pro['id'];
            $detail->cantidad = (int) $cantidad;
            $detail->precio = (float) $precio;
            $detail->subtotal = $subtotal;
            $detail->fecdetven = Carbon::now();
            $detail->save();
            
        }
    }
    

    public function render()
    {
        return view('livewire.procesar');
    }
}
