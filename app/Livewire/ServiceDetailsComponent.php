<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class ServiceDetailsComponent extends Component
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $service_id;

    public function mount($id){
        $this->id = $id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'service_id' => 'required'
        ]);
    }
    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'service_id' => 'required'
        ]);

        $appointment = new Appointment();
        $appointment->name = $this->name;
        $appointment->email = $this->email;
        $appointment->phone = $this->phone;
        $appointment->user_id = Auth::id();
        $appointment->service_id = $this->service_id;
        $appointment->save();
        // dd($appointment);
        session()->flash('message', 'Appointment has been created successfully!');

        return redirect()->back();
    }


    public function render()
    {
        $service = Service::where('id', $this->id)->first();
        $services = Service::all();

        return view('livewire.service-details-component',['service' => $service, 'services'=> $services])->layout('layouts.base');
    }
}
