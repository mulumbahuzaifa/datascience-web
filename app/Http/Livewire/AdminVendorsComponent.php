<?php

namespace App\Http\Livewire;

use App\Models\Vendor;
use Livewire\Component;
use Livewire\WithPagination;

class AdminVendorsComponent extends Component
{
    use WithPagination;

    public function deleteVendor($id){
        $category = Vendor::find($id);
        $category->delete();
        session()->flash('message', 'Vendor has been deleted successfully');
    }

    public function render()
    {
        $vendors = Vendor::paginate(10);
        return view('livewire.admin-vendors-component', ['vendors' => $vendors]);
    }
}