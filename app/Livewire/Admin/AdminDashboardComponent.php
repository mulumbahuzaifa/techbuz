<?php

namespace App\Livewire\Admin;

use App\Models\Appointment;
use App\Models\Service;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public $apts;
    public $statuses = [];
    public $comments = [];

    public function mount()
    {
        $this->apts = Appointment::with('service')->get();

        foreach ($this->apts as $appointment) {
            $this->statuses[$appointment->id] = $appointment->status;
            $this->comments[$appointment->id] = $appointment->comment;
        }
    }

    public function update()
    {
        foreach ($this->apts as $appointment) {
            $appointment->status = $this->statuses[$appointment->id];
            $appointment->comment = $this->comments[$appointment->id];
            $appointment->save();
        }

        session()->flash('success', 'Appointments updated successfully!');
    }

    public function render()
    {
        $appointments = Appointment::all();
        $services = Service::all();
        return view('livewire.admin.admin-dashboard-component',['appointments' => $appointments, 'services' => $services])->layout('layouts.base');
    }
}
