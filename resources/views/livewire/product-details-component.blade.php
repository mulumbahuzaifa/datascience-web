<div>
        <!-- Ec breadcrumb start -->
        <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row ec_breadcrumb_inner">
                            <div class="col-md-6 col-sm-12">
                                <h2 class="ec-breadcrumb-title">Single Products</h2>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- ec-breadcrumb-list start -->
                                <ul class="ec-breadcrumb-list">
                                    <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="ec-breadcrumb-item active">Products</li>
                                </ul>
                                <!-- ec-breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec breadcrumb end -->

        <!-- Sart Single product -->
        <section class="ec-page-content section-space-p">
            <div class="container">
                <div class="row">
                    <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">

                        <!-- Single product content Start -->
                        <div class="single-pro-block">
                            <div class="single-pro-inner">
                                <div class="row">
                                    <div class="single-pro-img">
                                        <div class="single-product-scroll">
                                            <a class="ec-360-lbl" data-link-action="quickview" title="360 view" data-bs-toggle="modal" data-bs-target="#ec_360_view_modal">
                                            <img src="{{ asset('assets/images/icons/360-degrees.png') }}" alt="view image">
                                        </a>
                                            <div class="single-product-cover">
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="">
                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ asset('assets/images/product-360/1_2.jpg') }}" alt="">
                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ asset('assets/images/product-360/1_3.jpg') }}" alt="">
                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ asset('assets/images/product-360/1_4.jpg') }}" alt="">
                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ asset('assets/images/product-360/1_5.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="single-nav-thumb">
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="{{ asset('assets/images/product-360/1_2.jpg') }}" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="{{ asset('assets/images/product-360/1_3.jpg') }}" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="{{ asset('assets/images/product-360/1_4.jpg') }}" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="{{ asset('assets/images/product-360/1_5.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-pro-desc">
                                        <div class="single-pro-content">
                                            <h5 class="ec-single-title">{{ $product->name }}</h5>
                                            <div class="ec-single-rating-wrap">
                                                <div class="ec-single-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </div>
                                                <span class="ec-read-review"><a href="#ec-spt-nav-review">Be the first to
                                                        review this product</a></span>
                                            </div>
                                            <div class="ec-single-desc">{!! $product->short_description !!}</div>
                                            <div class="ec-single-desc">{!! $product->description !!}</div>

                                            <div class="ec-single-sales">
                                                <div class="ec-single-sales-inner">
                                                    <div class="ec-single-sales-title">sales accelerators</div>
                                                    <div class="ec-single-sales-visitor">real time <span>24</span> visitor right now!</div>
                                                    <div class="ec-single-sales-progress">
                                                        <span class="ec-single-progress-desc">Hurry up!left {{ $product->quantity }} in
                                                            stock</span>
                                                        <span class="ec-single-progressbar"></span>
                                                    </div>
                                                    <div class="ec-single-sales-countdown">
                                                        <div class="ec-single-countdown"><span id="ec-single-countdown"></span></div>
                                                        <div class="ec-single-count-desc">Time is Running Out!</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-single-price-stoke">
                                                <div class="ec-single-price">
                                                    <span class="ec-single-ps-title">As low as</span>
                                                    <span class="new-price">{{ $product->regular_price }}</span>
                                                </div>
                                                <div class="ec-single-stoke">
                                                    @if ($product->stock_status == "instock")
                                                    <span class="ec-single-ps-title">IN STOCK</span>
                                                    @else
                                                    <span class="ec-single-ps-title">OUT OF STOCK</span>
                                                    @endif
                                                    <span class="ec-single-sku">SKU#: {{ $product->SKU }}</span>
                                                </div>
                                            </div>

                                            <div class="ec-pro-variation">
                                                <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                    <span>SIZE</span>
                                                    <div class="ec-pro-variation-content">
                                                        <ul>
                                                            <li class="active"><span>7</span></li>
                                                            <li><span>8</span></li>
                                                            <li><span>9</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                                    <span>Color</span>
                                                    <div class="ec-pro-variation-content">
                                                        <ul>
                                                            <li class="active"><span style="background-color:#23839c;"></span></li>
                                                            <li><span style="background-color:#000;"></span></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            @php
                                                $witem = Cart::instance('wishlist')->content()->pluck('id');
                                                $citem = Cart::instance('cart')->content()->pluck('id');
                                            @endphp
                                            <div class="ec-single-qty">
                                                <div class="qty-plus-minus">
                                                    <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                                </div>
                                                <div class="ec-single-cart ">
                                                    @if ($citem->contains($product->id))

                                                    <button class="btn btn-primary">Remove From Cart</button>
                                                    @else
                                                    <button class="btn btn-primary">Add To Cart</button>
                                                    @endif
                                                </div>
                                                <div class="ec-single-wishlist">
                                                @if ($witem->contains($product->id))
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('assets/images/icons/wishlist.svg') }}" class="svg_img pro_svg"
                                                            alt="" wire:click.prevent="removeFromWishlist({{ $product->id }})"/></a>
                                                @else
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('assets/images/icons/wishlist.svg') }}" class="svg_img pro_svg"
                                                            alt="" wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"/></a>
                                                @endif

                                                </div>
                                                <div class="ec-single-quickview">
                                                    <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('assets/images/icons/quickview.svg') }}" class="svg_img pro_svg"
                                                            alt="" /></a>
                                                </div>
                                            </div>
                                            <div class="ec-single-social">
                                                <ul class="mb-0">
                                                    <li class="list-inline-item facebook"><a href="#"><i
                                                                class="ecicon eci-facebook"></i></a></li>
                                                    <li class="list-inline-item twitter"><a href="#"><i
                                                                class="ecicon eci-twitter"></i></a></li>
                                                    <li class="list-inline-item instagram"><a href="#"><i
                                                                class="ecicon eci-instagram"></i></a></li>
                                                    <li class="list-inline-item youtube-play"><a href="#"><i
                                                                class="ecicon eci-youtube-play"></i></a></li>
                                                    <li class="list-inline-item behance"><a href="#"><i
                                                                class="ecicon eci-behance"></i></a></li>
                                                    <li class="list-inline-item whatsapp"><a href="#"><i
                                                                class="ecicon eci-whatsapp"></i></a></li>
                                                    <li class="list-inline-item plus"><a href="#"><i
                                                                class="ecicon eci-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single product content End -->
                        <!-- Single product tab start -->
                        <div class="ec-single-pro-tab">
                            <div class="ec-single-pro-tab-wrapper">
                                <div class="ec-single-pro-tab-nav">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-details" role="tablist">Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info" role="tablist">More Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review" role="tablist">Reviews</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content  ec-single-pro-tab-content">
                                    <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                        <div class="ec-single-pro-tab-desc">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                                it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                            </p>
                                            <ul>
                                                <li>Any Product types that You want - Simple, Configurable</li>
                                                <li>Downloadable/Digital Products, Virtual Products</li>
                                                <li>Inventory Management with Backordered items</li>
                                                <li>Flatlock seams throughout.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="ec-spt-nav-info" class="tab-pane fade">
                                        <div class="ec-single-pro-tab-moreinfo">
                                            <ul>
                                                <li><span>Weight</span> 1000 g</li>
                                                <li><span>Dimensions</span> 35 ?? 30 ?? 7 cm</li>
                                                <li><span>Color</span> Black, Pink, Red, White</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="ec-spt-nav-review" class="tab-pane fade">
                                        <div class="row">
                                            <div class="ec-t-review-wrapper">
                                                <div class="ec-t-review-item">
                                                    <div class="ec-t-review-avtar">
                                                        <img src="{{ asset('assets/images/review-image/1.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="ec-t-review-content">
                                                        <div class="ec-t-review-top">
                                                            <div class="ec-t-review-name">Jeny Doe</div>
                                                            <div class="ec-t-review-rating">
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ec-t-review-bottom">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                                and scrambled it to make a type specimen.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-item">
                                                    <div class="ec-t-review-avtar">
                                                        <img src="{{ asset('assets/images/review-image/2.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="ec-t-review-content">
                                                        <div class="ec-t-review-top">
                                                            <div class="ec-t-review-name">Linda Morgus</div>
                                                            <div class="ec-t-review-rating">
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star-o"></i>
                                                                <i class="ecicon eci-star-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ec-t-review-bottom">
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                                and scrambled it to make a type specimen.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="ec-ratting-content">
                                                <h3>Add a Review</h3>
                                                <div class="ec-ratting-form">
                                                    <form action="#">
                                                        <div class="ec-ratting-star">
                                                            <span>Your rating:</span>
                                                            <div class="ec-t-review-rating">
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star-o"></i>
                                                                <i class="ecicon eci-star-o"></i>
                                                                <i class="ecicon eci-star-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="ec-ratting-input">
                                                            <input name="your-name" placeholder="Name" type="text" />
                                                        </div>
                                                        <div class="ec-ratting-input">
                                                            <input name="your-email" placeholder="Email*" type="email" required />
                                                        </div>
                                                        <div class="ec-ratting-input form-submit">
                                                            <textarea name="your-commemt" placeholder="Enter Your Comment"></textarea>
                                                            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details description area end -->
                    </div>
                    <!-- Sidebar Area Start -->
                    <div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Category Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Category</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        @foreach ($categories as $category)
                                        <li>
                                            <div class="ec-sidebar-block-item">{{ $category->name }}</div>
                                            <ul style="display: block;">
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>

                            <!-- Sidebar Category Block -->
                        </div>
                        <div class="ec-sidebar-slider">
                            <div class="ec-sb-slider-title">Best Sellers</div>
                            <div class="ec-sb-pro-sl">
                                @foreach ($popular_products as $product)
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="sidekka_pro_img"><img
                                                src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">UGx {{ number_format($product->sale_price) }}</span>
                                            <span class="new-price">UGx {{ number_format($product->regular_price) }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Area Start -->
                </div>
            </div>
        </section>
        <!-- End Single product -->

        <!-- Related Product Start -->
        <section class="section ec-releted-product section-space-p">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="ec-bg-title">Related products</h2>
                            <h2 class="ec-title">Related products</h2>
                            <p class="sub-title">Browse The Collection of Top Products</p>
                        </div>
                    </div>
                </div>
                <div class="row margin-minus-b-30">
                    <!-- Related Product Content -->
                    @foreach ($related_products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="{{ $product->name }}">
                                        <img class="main-image"
                                            src="{{ asset('assets/images/product-image/6_1.jpg') }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('assets/images/product-image/6_2.jpg') }}" alt="Product" />
                                    </a>
                                    <span class="percentage">20%</span>
                                    <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                            src="{{ asset('assets/images/icons/quickview.svg') }}" class="svg_img pro_svg"
                                            alt="" /></a>
                                    <div class="ec-pro-actions">
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{ asset('assets/images/icons/compare.svg') }}"
                                                class="svg_img pro_svg" alt="" /></a>
                                                @if ($citem->contains($product->id))
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                        src="{{ asset('assets/images/icons/cart.svg') }}" class="svg_img pro_svg"
                                                        alt="" /> Remove From Cart</button>
                                                        @else
                                                <button title="Add To Cart" class=" add-to-cart"><img
                                                        src="{{ asset('assets/images/icons/cart.svg') }}" class="svg_img pro_svg"
                                                        alt="" /> Add To Cart</button>
                                                        @endif
                                                    @if ($witem->contains($product->id))
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{ asset('assets/images/icons/wishlist.svg') }}"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                        @else
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{ asset('assets/images/icons/wishlist.svg') }}"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">{!! $product->short_description !!}</div>
                                <div class="ec-pro-list-desc">{!! $product->description !!}</div>
                                <span class="ec-price">
                                    @if ($product->sale_price)
                                    <span class="old-price">UGX {{ number_format($product->sale_price) }}</span>
                                    @endif
                                <span class="new-price">UGX {{ number_format($product->regular_price) }}</span>
                                </span>
                                {{-- <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/6_1.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/6_1.jpg') }}" data-tooltip="Gray"><span
                                                        style="background-color:#e8c2ff;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/6_2.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/6_2.jpg') }}" data-tooltip="Orange"><span
                                                        style="background-color:#9cfdd5;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Related Product end -->
</div>
@push('css')
    <link rel="stylesheet" href="path to your css">
@endpush
