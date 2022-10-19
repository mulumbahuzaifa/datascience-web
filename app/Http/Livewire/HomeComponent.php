<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Vendor;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Vendor\VendorRepository;
use Livewire\Component;
use Cart;


class HomeComponent extends Component
{
    protected $categoryRepository;
    protected $vendorRepository;

    protected $listeners = ['refreshComponent' => '$refresh'];
    public function mount(CategoryRepository $categoryRepository, VendorRepository $vendorRepository){
        $this->categoryRepository = $categoryRepository;
        $this->vendorRepository = $vendorRepository;
    }

    public function store($product_id, $product_name, $product_price){
        Cart::instance('cart')->add($product_id, $product_name,1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added to cart');
        $this->emitTo('cart-count-component', 'refreshComponent');
        $this->emitTo('header-cart-component', 'refreshComponent');
        // return redirect()->route('product.cart');
    }

    public function addToWishlist($product_id, $product_name, $product_price){
        Cart::instance('wishlist')->add($product_id, $product_name,1, $product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');

    }

    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component', 'refreshComponent');
                // $this->emitTo('products-component', 'refreshComponent');
            }
        }

    }
    public function removeFromCart($product_id){
        foreach(Cart::instance('cart')->content() as $witem)
        {
            if ($witem->id == $product_id) {
                Cart::instance('cart')->remove($witem->rowId);
                $this->emitTo('cart-count-component', 'refreshComponent');
                $this->emitTo('header-cart-component', 'refreshComponent');
                // $this->emitTo('products-component', 'refreshComponent');
            }
        }

    }



    public function render()
    {
        $featured_products = Product::where('featured', 1)->inRandomOrder()->limit(8)->get();
        $blogs = Blog::orderBy('created_at', 'DESC')->get()->take(3);
        $latest_products = Product::orderBy('created_at', 'DESC')->get()->take(8);
        $products =  Product::get();
        // $vendors =  Vendor::get();
        // $categories =  Category::orderBy('id', 'ASC')->get();
        $sliders = HomeSlider::where('status', 1)->get();
        $data = array(
            'categories' => $this->categoryRepository->findAll(),'vendors' => $this->vendorRepository->findAll()
        );

        return view('livewire.home-component',['featured_products' => $featured_products , 'sliders' => $sliders, 'blogs' => $blogs, 'latest_products' => $latest_products, 'products' => $products])->with($data);
    }
}