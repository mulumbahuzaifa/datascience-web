<div class="header-search">
    <form class="ec-btn-group-form" action="{{ route('product.search') }}">
        <input class="form-control ec-search-bar" name="search"  value="{{ $search }}" placeholder="Search products..." type="text">
        <button class="submit" type="submit">
            <img src="{{ asset('assets/images/icons/search.svg') }}"
                class="svg_img header_svg" alt="" />
            </button>
    </form>
</div>
