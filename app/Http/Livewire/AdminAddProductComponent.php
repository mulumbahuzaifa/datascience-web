<?php

namespace App\Http\Livewire;

use App\Models\Aminity;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Vendor;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $regular_price;
    public $sale_price;
    public $stock_status;
    public $featured;
    public $quantity;
    public $SKU;
    public $short_description;
    public $description;
    public $image;
    public $category_id;
    public $vendor_id;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount(){
        $this->stock_status = 'instock';
        $this->featured = 0;

    }
    public function generateslug(){
        $this->slug = Str::slug($this->name, '-');
    }


    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:products',
            'regular_price' => 'required|numeric',
            'stock_status' => 'required',
            'SKU' => 'required',
            'quantity' => 'required|numeric',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'vendor_id' => 'required',
        ]);
    }

    public function addProduct(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'regular_price' => 'required|numeric',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category_id' => 'required',
            'vendor_id' => 'required',
            'SKU' => 'required',
        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->vendor_id = $this->vendor_id;
        $product->save();


        session()->flash('message', 'Product has been created Successfully');
        return redirect()->route('admin.products');
    }

    public function render()
    {
        $categories = Category::get();
        $vendors = Vendor::get();
        return view('livewire.admin-add-product-component', ['categories' => $categories, 'vendors' => $vendors]);
    }
}