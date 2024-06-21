<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $services = Service::all();

        return view('livewire.footer-component', ['services' => $services]);
    }
}
