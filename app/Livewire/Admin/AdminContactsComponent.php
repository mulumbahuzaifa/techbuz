<?php

namespace App\Livewire\Admin;
use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContactsComponent extends Component
{   
    use WithPagination;
    
    public function deleteContact($id){
        $product = Contact::find($id);
        $product->delete();
        session()->flash('message', 'Message has been deleted successfully');
    }
    
    public function render()
    {
        $contacts = Contact::paginate(12);
        return view('livewire.admin.admin-contacts-component',
        [
            'contacts'=> $contacts
        ]
        )->layout('layouts.base');
    }
}
