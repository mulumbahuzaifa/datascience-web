<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $image;
    public $user_id;

    public function mount(){
        $this->user_id = Auth::user()->id;
    }

    public function generateslug(){
        $this->slug = Str::slug($this->name, '-');
    }


    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:blogs',
            'description' => 'required',
            'image' => 'required',
        ]);
    }

    public function addBlog(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:blogs',
            'description' => 'required',
            'image' => 'required',
        ]);

        $blog = new Blog();
        $blog->name = $this->name;
        $blog->slug = $this->slug;

        $blog->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('blogs', $imageName);
        $blog->image = $imageName;
        $blog->user_id = $this->user_id;
        $blog->save();
        return redirect()->route('admin.blogs');
        session()->flash('message', 'Blog has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin-add-blog-component');
    }
}