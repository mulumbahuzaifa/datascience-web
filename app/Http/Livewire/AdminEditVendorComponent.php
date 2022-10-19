<?php

namespace App\Http\Livewire;

use App\Models\Vendor;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminEditVendorComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $image;
    public $newImage;
    public $vendor_id;

    public function mount($vendor_slug){
        $vendor = Vendor::where('slug', $vendor_slug)->first();
         $this->name =$vendor->name;
         $this->slug =$vendor->slug;
         $this->description =$vendor->description;
         $this->image =$vendor->image;
         $this->vendor_id =$vendor->id;
    }

    public function generateslug(){
        $this->slug = Str::slug($this->name, '-');
    }


    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);
    }
    public function updateVendor(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        $vendor = Vendor::find($this->vendor_id);
        $vendor->name = $this->name;
        $vendor->slug = $this->slug;
        $vendor->description = $this->description;
        if($this->newImage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newImage->extension();
            $this->newImage->storeAs('vendors', $imageName);
            $vendor->image = $imageName;
        }
        $vendor->save();
        return redirect()->route('admin.vendors');
        session()->flash('message', 'Vendor has been created Successfully');
    }

    public function render()
    {
        return view('livewire.admin-edit-vendor-component');
    }
}