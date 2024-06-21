<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServicesComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id){
        $product = Service::find($id);
        $product->delete();
        session()->flash('message', 'Service has been deleted successfully');
    }

    public function render()
    {
        $services = Service::paginate(12);
        return view('livewire.admin.admin-services-component',  ['services' => $services])->layout('layouts.base');
    }
}
