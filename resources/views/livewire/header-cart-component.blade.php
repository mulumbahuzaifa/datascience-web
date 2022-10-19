<div>
<div class="ec-side-cart-overlay"></div>
<div id="ec-side-cart" class="ec-side-cart">
    <div class="ec-cart-inner">
        <div class="ec-cart-top">
            <div class="ec-cart-title">
                <span class="cart_title">My Cart</span>
                <button class="ec-close">×</button>
            </div>
            @if (Cart::instance('cart')->count() > 0)
            <ul class="eccart-pro-items">
                @foreach ( Cart::instance('cart')->content() as $item )
                <li>
                    <a href="{{ route('product.detail', ['slug' => $item->model->slug]) }}" class="sidekka_pro_img"><img
                            src="{{ asset('assets/images/products') }}/{{ $item->model->image  }}" alt="{{ $item->model->name  }}"></a>
                    <div class="ec-pro-content">
                        <a href="{{ route('product.detail', ['slug' => $item->model->slug]) }}" class="cart_pro_title">{{ $item->model->name  }}</a>
                        <span class="cart-price"><span>UGx {{ number_format($item->model->regular_price) }}</span> x 1</span>
                        <div class="qty-plus-minus">
                            <div class="ec_cart_qtybtn">
                                <div class="inc ec_qtybtn" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')" >+</div>
                                <div class="dec ec_qtybtn"  wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')">-</div>
                            </div>
                            <input class="qty-input" type="text" name="ec_qtybtn" data-min="1" data-max="100" value="{{ $item->qty }}"/>
                        </div>
                        <a href="javascript:void(0)" class="remove" wire:click.prevent="destroy('{{ $item->rowId }}')">×</a>
                    </div>
                </li>
                @endforeach
            </ul>
            @else
                <h3 class="box-title">No items in Cart</h3>
            @endif
        </div>
        <div class="ec-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody>
                        <tr>
                            <td class="text-left">Sub-Total :</td>
                            <td class="text-right">UGx {{ Cart::instance('cart')->subtotal() }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">VAT ({{ config('cart.tax') }}%) :</td>
                            <td class="text-right">UGx {{ number_format($taxAfterDiscount,2) }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total :</td>
                            <td class="text-right primary-color">{{  number_format($totalAfterDiscount,2) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn">
                <a href="{{ route('cart') }}" class="btn btn-primary">View Cart</a>
                <a href="{{ route('checkout') }}" class="btn btn-secondary">Checkout</a>
            </div>
        </div>
    </div>
</div>
</div>
