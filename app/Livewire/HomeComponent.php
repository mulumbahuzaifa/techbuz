<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $service_id;

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
        $services = Service::inRandomOrder()->get();
        return view('livewire.home-component',['services' => $services])->layout('layouts.base');
    }
}
