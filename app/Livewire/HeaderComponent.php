<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class HeaderComponent extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.header-component',['services' => $services]);
    }
}
