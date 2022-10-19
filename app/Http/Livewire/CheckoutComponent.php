<?php

namespace App\Http\Livewire;

use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Cart;
use Exception;
use Illuminate\Support\Facades\Mail;

// use Stripe;

class CheckoutComponent extends Component
{
    public $is_shipping_different;
    public $paymentmode;
    public $thankyou;


    public $card_no;
    public $exp_month;
    public $exp_year;
    public $cvc;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $location;
    public $city;
    public $country;
    public $zipcode;

    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_location;
    public $s_city;
    public $s_country;
    public $s_zipcode;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'location' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        if ($this->is_shipping_different) {
            $this->validateOnly($fields,[
                's_firstname' => 'required',
                's_lastname' => 'required',
                's_email' => 'required|email',
                's_mobile' => 'required|numeric',
                's_location' => 'required',
                's_city' => 'required',
                's_country' => 'required',
            ]);
        }
        if($this->paymentmode == 'card'){
            $this->validateOnly($fields, [
                'card_no' => 'required|numeric',
                'exp_month' => 'required|numeric',
                'exp_year' => 'required|numeric',
                'cvc' => 'required|numeric',
            ]);
        }
    }

    public function placeOrder()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'location' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        if($this->paymentmode == 'card'){
            $this->validate([
                'card_no' => 'required|numeric',
                'exp_month' => 'required|numeric',
                'exp_year' => 'required|numeric',
                'cvc' => 'required|numeric',
            ]);
        }
        $order = new Order();
        // $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->email = $this->email;
        $order->mobile = $this->mobile;
        $order->location = $this->location;
        $order->city = $this->city;
        $order->country = $this->country;
        $order->status = 'ordered';
        // $order->is_shipping_different = $this->is_shipping_different ? 1:0;
        $order->save();

        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        // if ($this-> is_shipping_different) {
        //     $this->validate([
        //         's_firstname' => 'required',
        //         's_lastname' => 'required',
        //         's_email' => 'required|email',
        //         's_mobile' => 'required|numeric',
        //         's_location' => 'required',
        //         's_city' => 'required',
        //         's_country' => 'required',
        //     ]);
        //     $shipping = new Shipping();
        //     $shipping->order_id = $order->id;
        //     $shipping->firstname = $this->s_firstname;
        //     $shipping->lastname = $this->s_lastname;
        //     $shipping->email = $this->s_email;
        //     $shipping->mobile = $this->s_mobile;
        //     $shipping->location = $this->s_location;
        //     $shipping->city = $this->s_city;
        //     $shipping->country = $this->s_country;
        //     $shipping->save();
        // }
        // if($this->paymentmode == 'cod' || $this->paymentmode =='paypal'){
        //     $this->makeTransaction($order->id, 'pending');
        //     $this->resetCart();
        // }
        // else if($this->paymentmode == 'card'){
        //     $stripe = Stripe::make(env('STRIPE_SECRET'));
        //     try{
        //         $token = $stripe->tokens()->create([
        //             'card' => [
        //                 'number' => $this->card_no,
        //                 'exp_month' => $this->exp_month,
        //                 'exp_year' => $this->exp_year,
        //                 'cvc' => $this->cvc,
        //             ]

        //         ]);
        //         if (!isset($token['id'])) {
        //             session()->flash('stripe_error', 'The stripe token was not generated correctly');
        //             $this->thankyou = 0;
        //         }
        //         $customer = $stripe->customers()->create([
        //             'name' => $this->firstname . '' . $this->lastname,
        //             'email' => $this->email,
        //             'phone' => $this->mobile,
        //             'address' => [
        //                 'location' => $this->location,
        //                 'postal_code' => $this->zipcode,
        //                 'city' => $this->city,
        //                 'state' => $this->province,
        //                 'country' => $this->country,
        //             ],
        //             'shipping' => [
        //                 'name' => $this->firstname . '' . $this->lastname,
        //                 'address' => [
        //                     'location' => $this->location,
        //                     'postal_code' => $this->zipcode,
        //                     'city' => $this->city,
        //                     'state' => $this->province,
        //                     'country' => $this->country,
        //                 ],
        //             ],
        //             'source' => $token['id']
        //         ]);
        //         $charge = $stripe->charges()->create([
        //             'customer' => $customer['id'],
        //             'currency' => 'USD',
        //             'amount' => session()->get('checkout')['total'],
        //             'description' => 'Payment for order no ' . $order->id
        //         ]);

        //         if($charge['status'] == 'succeeded'){
        //             $this->makeTransaction($order->id, 'approved');
        //             $this->resetCart();
        //         }
        //         else{
        //             session()->flash('stripe_error', 'Error in Transaction!');
        //             $this->thankyou = 0;
        //         }
        //     } catch(Exception $e){
        //         session()->flash('stripe_error',$e->getMessage());
        //         $this->thankyou = 0;
        //     }
        // }

        // $this->sendOrderConfirmationMail($order);
    }
    public function resetCart(){
        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    public function makeTransaction($order_id, $status){
        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->order_id = $order_id;
        $transaction->mode = $this->paymentmode;
        $transaction->status = $status;
        $transaction->save();
    }

    // public function sendOrderConfirmationMail($order){
    //     Mail::to($order->email)->send(new OrderMail($order));
    // }

    public function verifyForCheckout(){
        if(!Auth::check()){
            return redirect()->route('login') ;
        }
        else if($this->thankyou){
            return redirect()->route('thankyou');
        }
        else if(!session()->get('checkout')){
            return redirect()->route('product.cart');
        }
    }

    public function render()
    {
        $this->verifyForCheckout();
        $l_products = Product::inRandomOrder()->limit(6)->get();
        return view('livewire.checkout-component',['l_products' => $l_products]);
    }
}