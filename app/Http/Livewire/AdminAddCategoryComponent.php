<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Property;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $icon;
    public $image;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ]);
    }
    public function storeCategory(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('categories', $imageName);
        $category->image = $imageName;
        $iconName = Carbon::now()->timestamp. '.' . $this->icon->extension();
        $this->icon->storeAs('icons', $iconName);
        $category->icon = $iconName;
        $category->save();
        return redirect()->route('admin.categories');
        session()->flash('message', 'Category has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-add-category-component');
    }
}