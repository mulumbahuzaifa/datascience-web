<a href="{{ route('wishlist') }}" class="ec-header-btn ec-header-wishlist">
    <div class="header-icon"><img src="{{ asset('assets/images/icons/wishlist.svg') }}" class="svg_img header_svg" alt="" /></div>
    <span class="ec-header-count">{{ Cart::instance('wishlist')->count() }}</span>
</a>
