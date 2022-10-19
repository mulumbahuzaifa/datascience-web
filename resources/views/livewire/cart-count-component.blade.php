<a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
    <div class="header-icon"><img src="{{ asset('assets/images/icons/cart.svg') }}" class="svg_img header_svg" alt="" /></div>
    <span class="ec-header-count cart-count-lable">{{ Cart::instance('cart')->count() }}</span>
</a>
