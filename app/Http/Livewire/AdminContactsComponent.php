<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContactsComponent extends Component
{
    use WithPagination;

    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();
        session()->flash('message', 'Contact form has been deleted successfully');
    }
    public function render()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->paginate(12);
        return view('livewire.admin-contacts-component',['contacts'=> $contacts]);
    }
}