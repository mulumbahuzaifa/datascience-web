<div>

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Shop</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="/">Home</a></li>
                                <li class="ec-breadcrumb-item">Shop Category</li>
                                <li class="ec-breadcrumb-item active">{{ $category_name }}</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Page detail section -->
    <section class="ec-bnr-detail margin-bottom-30 section-space-pt">
        <div class="ec-page-detail">
            <div class="container">
                <div class="ec-main-heading d-none">
                    <h2>Shop Category<span>Detail</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="ec-cat-bnr">
                            <a href="product-left-sidebar.html"><span></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="ec-page-description">
                            <h6>The Best deal on top brands</h6>
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged.
                                <p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End detail section -->

    <!-- Ec Shop page -->
    <section class="ec-page-content-bnr section-space-pb">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-9 col-md-12 order-lg-last order-md-first margin-b-30">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-6 ec-grid-list" wire:ignore>
                            <div class="ec-gl-btn">
                                <button class="btn btn-grid active"><img src="{{ 'assets/images/icons/grid.svg' }}"
                                        class="svg_img gl_svg" alt="" /></button>
                                <button class="btn btn-list"><img src="{{ 'assets/images/icons/list.svg' }}"
                                        class="svg_img gl_svg" alt="" /></button>
                            </div>
                        </div>
                        <div class="col-md-6 ec-sort-select">
                            <span class="sort-by">Sort by</span>
                            <div class="ec-select-inner">
                                <select name="ec-select" id="ec-select" wire:model="sorting">
                                    <option value="default" selected disabled>Default</option>
                                    <option value="date">Date</option>
                                    {{-- <option value="name">Name</option> --}}
                                    <option value="price">Price L-H</option>
                                    <option value="price_desc">Price H-L</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top End -->

                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner">
                            <div class="row">
                                @php
                                    $witem = Cart::instance('wishlist')->content()->pluck('id');
                                    $citem = Cart::instance('cart')->content()->pluck('id');
                                @endphp
                                @foreach ($products as $product)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product.detail',['slug' =>$product->slug]) }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                        src="{{ 'assets/images/icons/quickview.svg' }}" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="#" class="ec-btn-group compare" title="Compare"><img src="{{ 'assets/images/icons/compare.svg' }}"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    @if ($citem->contains($product->id))
                                                    <button title="Remove From Cart" class="add-to-cart active" wire:click.prevent="removeFromCart({{ $product->id }})"><img
                                                            src="{{ 'assets/images/icons/cart.svg' }}" class="svg_img pro_svg"
                                                            alt=""  /> Remove From Cart</button>
                                                    @else
                                                    <button title="Add To Cart" class="add-to-cart" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><img
                                                            src="{{ 'assets/images/icons/cart.svg' }}" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    @endif
                                                    @if ($witem->contains($product->id))
                                                    <a class="ec-btn-group wishlist active" title="Wishlist" wire:click.prevent="removeFromWishlist({{ $product->id }})" ><img
                                                            src="{{ 'assets/images/icons/wishlist.svg' }}"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    @else
                                                    <a class="ec-btn-group wishlist" title="Wishlist" wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><img
                                                            src="{{ 'assets/images/icons/wishlist.svg' }}"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ route('product.detail',['slug' =>$product->slug]) }}">{{ $product->name }}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">{!! $product->short_description !!}</div>
                                            <span class="ec-price">
                                                <span class="new-price">UGX {{ number_format($product->regular_price) }}</span>
                                            </span>
                                            {{-- <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="{{ 'assets/images/product-image/6_1.jpg' }}" data-src-hover="{{ 'assets/images/product-image/6_1.jpg' }}" data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="{{ 'assets/images/product-image/6_2.jpg' }}" data-src-hover="{{ 'assets/images/product-image/6_2.jpg' }}" data-tooltip="Orange"><span
                                                                    style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </div>
                        <!-- Ec Pagination End -->
                    </div>
                    <!--Shop content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside col-lg-3 col-md-12 order-lg-first order-md-last">
                    <div id="shop_sidebar">
                        <div class="ec-sidebar-heading">
                            <h1>Filter Products By</h1>
                        </div>
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Category Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Category</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        {{-- <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" checked /> <a href="#">All</a><span class="checked"></span>
                                            </div>
                                        </li> --}}
                                        @foreach ($categories as $category)
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" {{ $category->name == $category_name ? 'checked' : ''}}/> <a href="{{ route('product.category',['category_slug' => $category->slug]) }}">{{ $category->name }}</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        @endforeach

                                        {{-- <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" /> <a href="#">Watch</a><span class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" /> <a href="#">Cap</a><span class="checked"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li>
                                            <div class="ec-sidebar-block-item ec-more-toggle">
                                                <span class="checked"></span><span id="ec-more-toggle">More
                                                    Categories</span>
                                            </div>
                                        </li> --}}

                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Size Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Size</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" checked /><a href="#">S</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" /><a href="#">M</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" /> <a href="#">L</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" /><a href="#">XL</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" /><a href="#">XXL</a><span class="checked"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Color item -->
                            <div class="ec-sidebar-block ec-sidebar-block-clr">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Color</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#c4d6f9;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#ff748b;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#000000;"></span></div>
                                        </li>
                                        <li class="active">
                                            <div class="ec-sidebar-block-item"><span style="background-color:#2bff4a;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#ff7c5e;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#f155ff;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#ffef00;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#c89fff;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#7bfffa;"></span></div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item"><span style="background-color:#56ffc1;"></span></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Price Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Price</h3>
                                </div>
                                <div class="ec-sb-block-content es-price-slider">
                                    <div class="ec-price-filter">
                                        <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250" data-step="10"></div>
                                        <div class="ec-price-input">
                                            <label class="filter__label"><input type="text"
                                                    class="filter__input"></label>
                                            <span class="ec-price-divider"></span>
                                            <label class="filter__label"><input type="text"
                                                    class="filter__input"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop page -->
</div>
