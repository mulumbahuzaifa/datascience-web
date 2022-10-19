<?php

namespace App\Http\Livewire;

use App\Models\Vendor;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminAddVendorComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $image;

   public function generateslug(){
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:vendors',
            'description' => 'required',
            'image' => 'required',
        ]);
    }

    public function addVendor(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:vendors',
            'description' => 'required',
            'image' => 'required',
        ]);

        $vendor = new Vendor();
        $vendor->name = $this->name;
        $vendor->slug = $this->slug;
        $vendor->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('vendors', $imageName);
        $vendor->image = $imageName;
        $vendor->save();
        return redirect()->route('admin.vendors');
        session()->flash('message', 'Vendor has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-add-vendor-component');
    }
}