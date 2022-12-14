<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        session()->flash('message', 'Product has been deleted successfully');
    }
    public function render()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        return view('livewire.admin-product-component', ['products' => $products]);
    }
}
