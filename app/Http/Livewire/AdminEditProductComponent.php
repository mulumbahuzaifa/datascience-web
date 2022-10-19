<?php

namespace App\Http\Livewire;

use App\Models\Aminity;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $regular_price;
    public $sale_price;
    public $stock_status;
    public $featured;
    public $quantity;
    public $short_description;
    public $description;
    public $image;
    public $category_id;
    public $newImage;
    public $product_id;
    public $vendor_id;
    public $SKU;


    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount($product_slug){
        $product = Product::where('slug', $product_slug)->first();
         $this->name =$product->name;
         $this->slug =$product->slug;
         $this->SKU =$product->SKU;
         $this->regular_price =$product->regular_price;
         $this->sale_price =$product->sale_price;
         $this->stock_status =$product->stock_status;
         $this->featured =$product->featured;
         $this->quantity =$product->quantity;
         $this->short_description =$product->short_description;
         $this->description =$product->description;
         $this->image =$product->image;
         $this->category_id =$product->category_id;
         $this->vendor_id =$product->vendor_id;
         $this->product_id =$product->id;


    }



    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'regular_price' => 'required|numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'short_description' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'vendor_id' => 'required',
        ]);
    }

    public function updateProduct(){

        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'regular_price' => 'required|numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'short_description' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'vendor_id' => 'required',
        ]);

        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->stock_status = $this->stock_status;
        $product->SKU = $this->SKU;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        if($this->newImage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newImage->extension();
            $this->newImage->storeAs('products', $imageName);
            $product->image = $imageName;
        }

        $product->category_id = $this->category_id;
        $product->vendor_id = $this->vendor_id;
        $product->save();

        return redirect()->route('admin.products');
        session()->flash('message', 'Product has been updated Successfully');
    }

    public function render()
    {
        $categories = Category::get();
        $vendors = Category::get();
        $product = Product::where('slug', $this->slug)->first();
        return view('livewire.admin-edit-product-component', ['vendors' => $vendors, 'categories' => $categories]);
    }
}