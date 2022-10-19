<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class HeaderCartComponent extends Component
{
    public $haveCouponCode;
    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $taxAfterDiscount;
    public $totalAfterDiscount;
    protected $listeners = ['refreshComponent' => '$refresh'];


    public function increaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
            $this->emitTo('cart-count-component', 'refreshComponent');
        $this->emitTo('header-cart-component', 'refreshComponent');
        // $this->emitTo('cart-component', 'refreshComponent');
    }
    public function decreaseQuantity($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
            $this->emitTo('cart-count-component', 'refreshComponent');
        $this->emitTo('header-cart-component', 'refreshComponent');


    }

    public function destroy($rowId){
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component', 'refreshComponent');
        $this->emitTo('header-cart-component', 'refreshComponent');
        session()->flash('success_message', 'Item has been removed');
        // return redirect()->route('product.cart');
    }
    public function checkout(){
        if(Auth::check())
        {
            return redirect()->route('checkout');
        }else{
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout(){
        if(!Cart::instance('cart')->count() > 0){
            session()->forget('checkout');
            return;
        }
        if(session()->has('coupon'))
        {
            session()->put('checkout',[
                'discount' => $this->discount,
                'subtotal' => $this->subtotalAfterDiscount,
                'tax' => $this->taxAfterDiscount,
                'total' => $this->totalAfterDiscount,
            ]);
        }else{
            session()->put('checkout',[
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => Cart::instance('cart')->total(),
            ]);
        }
    }
    public function render()
    {
        if (session()->has('coupon')) {
            if (Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']) {
                session()->forget('coupon');
            }
            else{
                $this->calculateDiscount();
            }
        }
        $this->setAmountForCheckout();
        return view('livewire.header-cart-component');
    }
}