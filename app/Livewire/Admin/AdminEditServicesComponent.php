<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdminEditServicesComponent extends Component
{   
    use WithFileUploads;
    public $name;
    public $description;
    public $image;
    public $newImage;
    public $service_id;

    public function mount($service_id)
    {
        $service = Service::where('id', $service_id)->first();
        $this->name = $service->name;
        $this->description = $service->description;
        $this->image = $service->image;
        $this->service_id = $service->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'description' => 'required',
        ]);
    }

    public function updateService()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $service = Service::find($this->service_id);
        $service->name = $this->name;
        $service->description = $this->description;
        if ($this->newImage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs('services', $imageName);
            $service->image = $imageName;
        }

        $service->save();
        session()->flash('message', 'Service has been updated Successfully');
        return redirect()->route('admin.services');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-services-component')->layout('layouts.base');
    }
}
