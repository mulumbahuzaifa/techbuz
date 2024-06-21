<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdminAddServicesComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $image;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|unique:services',
            'description' => 'required',
        ]);
    }

    public function addService()
    {
        $this->validate([
            'name' => 'required|unique:services',
            'description' => 'required',
        ]);

        $service = new Service();
        $service->name = $this->name;
        $service->description = $this->description;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('services', $imageName);
        $service->image = $imageName;
        $service->save();
        session()->flash('message', 'Service has been created Successfully');
        return redirect()->route('admin.services');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-services-component')->layout('layouts.base');
    }
}
