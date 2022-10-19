<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoriesComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Category has been deleted successfully');
    }


    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin-categories-component', ['categories'=>$categories]);
    }
}