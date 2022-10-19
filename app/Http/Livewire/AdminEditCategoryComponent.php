<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newImage;
    public $icon;
    public $newIcon;

    public function mount($category_slug){
        $this->category_slug = $category_slug;
        $category = Category::where('slug', $category_slug)->first();
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->image =$category->image;
        $this->icon =$category->icon;
    }
    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
        ]);
    }
    public function updateCategory(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        if($this->newImage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newImage->extension();
            $this->newImage->storeAs('categories', $imageName);
            $category->image = $imageName;
        }
        if($this->newIcon){
            $iconName = Carbon::now()->timestamp. '.' . $this->newIcon->extension();
            $this->newIcon->storeAs('icons', $iconName);
            $category->icon = $iconName;
        }
        $category->save();
        return redirect()->route('admin.categories');
        session()->flash('message', 'Category has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin-edit-category-component');
    }
}