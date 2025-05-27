<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $vista = null;
    public $title = null;
    
    public function mount(){
        $this->vista = 'dashboard';
        $this->title = "Dashboard - Panel Admin";
    }

    public function setSection($vista,$title){
        $this->vista = $vista;
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
