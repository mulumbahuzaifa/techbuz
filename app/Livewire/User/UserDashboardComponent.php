<?php

namespace App\Livewire\User;

use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public $appointments;
    public $user_comment = [];

    public function mount()
    {
        $this->appointments = Appointment::where('user_id', Auth::id())->with('service')->get();

        foreach ($this->appointments as $appointment) {
            $this->user_comment[$appointment->id] = $appointment->user_comment;
        }
    }

    public function submitComment($appointmentId)
    {
        $appointment = Appointment::findOrFail($appointmentId);
        $appointment->user_comment = $this->user_comment[$appointmentId];
        $appointment->save();

        session()->flash('success', 'Comment submitted successfully!');
    }

    public function render()
    {
        return view('livewire.user.user-dashboard-component')->layout('layouts.base');
    }
}
