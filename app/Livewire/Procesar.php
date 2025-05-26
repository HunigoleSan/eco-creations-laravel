<?php

namespace App\Livewire;

use App\Models\Cliente;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;

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
            $this->insertVenta($clientExist->id,$validatedVen);
            session()->forget('cartsession');
            $this->dispatch('swal:success');
            return;
        }
        
        $cliente = Cliente::create($validatedCli);
        $this->insertVenta($cliente->id,$validatedVen);

        session()->forget('cartsession');
        $this->dispatch('swal:success');
        
        return;
    }

    public function insertVenta($clienteId,$venta) {
        $venta['codcli'] = $clienteId;
        $venta['metpagven'] = 'paypal';
        $venta['estven'] = 'pagado';
        $venta['fecven'] = Carbon::now();
        Venta::create($venta);
    }

    

    public function render()
    {
        return view('livewire.procesar');
    }
}
