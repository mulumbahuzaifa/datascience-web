<div>


     <!-- Main Slider Start -->
     <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
         <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
             <!-- Main slider -->
             <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                <div class="ec-slide-item swiper-slide d-flex ec-slide-1" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ asset('assets/images/sliders') }}/{{ $slider->image }})">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">{{ $slider->title }}</h1>
                                    <h2 class="ec-slide-stitle">Sale Offer</h2>
                                    <p>{{ $slider->subtitle }}</p>
                                    <a href="{{ route('products') }}" class="btn btn-lg btn-secondary">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             </div>
             <div class="swiper-pagination swiper-pagination-white"></div>
             <div class="swiper-buttons">
                 <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div>
             </div>
         </div>
     </div>
     <!-- Main Slider End -->

     <!-- Product tab Area Start -->
     <section class="section ec-product-tab section-space-p" id="collection">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="section-title">
                         <h2 class="ec-bg-title">Our Top Collection</h2>
                         <h2 class="ec-title">Our Top Collection</h2>
                         <p class="sub-title">Browse The Collection of Top Products</p>
                     </div>
                 </div>

                 <!-- Tab Start -->
                 <div class="col-md-12 text-center">
                     <ul class="ec-pro-tab-nav nav justify-content-center">
                         <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all">For
                                 All</a></li>
                            @foreach ($categories as $category)
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-{{ $category->slug }}">For
                                {{ $category->name }}</a></li>
                            @endforeach

                     </ul>
                 </div>
                 <!-- Tab End -->
             </div>
             <div class="row">
                 <div class="col">
                     <div class="tab-content">
                         <!-- 1st Product tab start -->
                         <div class="tab-pane fade show active" id="tab-pro-for-all">
                             <div class="row">
                                 <!-- Product Content -->
                                 @foreach ($products as $product)
                                 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                     <div class="ec-product-inner">
                                         <div class="ec-pro-image-outer">
                                             <div class="ec-pro-image">
                                                 <a href="{{ route('product.detail',['slug' =>$product->slug]) }}" class="image">
                                                     <img class="main-image"
                                                         src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="Product" />
                                                     <img class="hover-image"
                                                         src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="Product" />
                                                 </a>
                                                 {{-- <span class="percentage">20%</span> --}}
                                                 <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                         src="{{ asset('assets/images/icons/quickview.svg') }}" class="svg_img pro_svg"
                                                         alt="" /></a>
                                                 <div class="ec-pro-actions">
                                                     <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{ asset('assets/images/icons/compare.svg') }}"
                                                             class="svg_img pro_svg" alt="" /></a>
                                                     <button title="Add To Cart" class="add-to-cart"><img
                                                             src="{{ asset('assets/images/icons/cart.svg') }}" class="svg_img pro_svg"
                                                             alt="" /> Add To Cart</button>
                                                     <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                             src="{{ asset('assets/images/icons/wishlist.svg') }}"
                                                             class="svg_img pro_svg" alt="" /></a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="ec-pro-content">
                                             <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $product->name }}</a></h5>
                                             <div class="ec-pro-rating">
                                                 <i class="ecicon eci-star fill"></i>
                                                 <i class="ecicon eci-star fill"></i>
                                                 <i class="ecicon eci-star fill"></i>
                                                 <i class="ecicon eci-star fill"></i>
                                                 <i class="ecicon eci-star"></i>
                                             </div>
                                             <span class="ec-price">
                                                 {{-- <span class="old-price">$27.00</span> --}}
                                             <span class="new-price">{{ $product->regular_price }}</span>
                                             </span>
                                             <div class="ec-pro-option">
                                                 {{-- <div class="ec-pro-color">
                                                     <span class="ec-pro-opt-label">Color</span>
                                                     <ul class="ec-opt-swatch ec-change-img">
                                                         <li class="active"><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/6_1.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/6_1.jpg') }}" data-tooltip="Gray"><span
                                                                     style="background-color:#e8c2ff;"></span></a></li>
                                                         <li><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/6_2.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/6_2.jpg') }}" data-tooltip="Orange"><span
                                                                     style="background-color:#9cfdd5;"></span></a></li>
                                                     </ul>
                                                 </div> --}}
                                                 {{-- <div class="ec-pro-size">
                                                     <span class="ec-pro-opt-label">Size</span>
                                                     <ul class="ec-opt-size">
                                                         <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                                         <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                         <li><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Large">X</a></li>
                                                         <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                     </ul>
                                                 </div> --}}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach

                                 <div class="col-sm-12 shop-all-btn"><a href="{{ route('products') }}">Shop All Collection</a></div>
                             </div>
                         </div>
                         <!-- ec 1st Product tab end -->
                         <!-- ec 2nd Product tab start -->
                         @foreach ($categories as $category)
                         <div class="tab-pane fade" id="tab-pro-for-{{ $category->slug }}">
                             <div class="row">
                                @if (count($category->products) != 0)

                                @foreach ($category->products as $product)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product.detail',['slug' =>$product->slug]) }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="Product" />
                                                </a>
                                                {{-- <span class="percentage">20%</span> --}}
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                        src="{{ asset('assets/images/icons/quickview.svg') }}" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{ asset('assets/images/icons/compare.svg') }}"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class="add-to-cart"><img
                                                            src="{{ asset('assets/images/icons/cart.svg') }}" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('assets/images/icons/wishlist.svg') }}"
                                                            class="svg_img pro_svg" alt="" /></a>
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
                                            <span class="ec-price">
                                                {{-- <span class="old-price">$27.00</span> --}}
                                            <span class="new-price">{{ $product->regular_price }}</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                {{-- <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/6_1.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/6_1.jpg') }}" data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/6_2.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/6_2.jpg') }}" data-tooltip="Orange"><span
                                                                    style="background-color:#9cfdd5;"></span></a></li>
                                                    </ul>
                                                </div> --}}
                                                {{-- <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Large">X</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="alert alert-danger" role="alert">No Products from this Category</div>
                                @endif

                                 <div class="col-sm-12 shop-all-btn"><a href="{{ route('products') }}">Shop All Collection</a></div>
                             </div>
                         </div>
                         @endforeach
                         <!-- ec 2nd Product tab end -->
                         <!-- ec 3rd Product tab start -->

                         <!-- ec 3rd Product tab end -->
                         <!-- ec 4th Product tab start -->

                         <!-- ec 4th Product tab end -->
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- ec Product tab Area End -->

     <!-- ec Banner Section Start -->
     <section class="ec-banner section section-space-p">
         <h2 class="d-none">Banner</h2>
         <div class="container">
             <!-- ec Banners Start -->
             <div class="ec-banner-inner">
                 <!--ec Banner Start -->
                 <div class="ec-banner-block ec-banner-block-2">
                     <div class="row">
                         <div class="banner-block col-lg-6 col-md-12 margin-b-30" data-animation="slideInRight">
                             <div class="bnr-overlay">
                                 <img src="{{ asset('assets/images/banner/2.jpg') }}" alt="" />
                                 <div class="banner-text">
                                     <span class="ec-banner-stitle">New Arrivals</span>
                                     <span class="ec-banner-title">mens<br> Sport shoes</span>
                                     <span class="ec-banner-discount">30% Discount</span>
                                 </div>
                                 <div class="banner-content">
                                     <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                 </div>
                             </div>
                         </div>
                         <div class="banner-block col-lg-6 col-md-12" data-animation="slideInLeft">
                             <div class="bnr-overlay">
                                 <img src="{{ asset('assets/images/banner/3.jpg') }}" alt="" />
                                 <div class="banner-text">
                                     <span class="ec-banner-stitle">New Trending</span>
                                     <span class="ec-banner-title">Smart<br> watches</span>
                                     <span class="ec-banner-discount">Buy any 3 Items & get <br>20% Discount</span>
                                 </div>
                                 <div class="banner-content">
                                     <span class="ec-banner-btn"><a href="#">Order Now</a></span>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- ec Banner End -->
                 </div>
                 <!-- ec Banners End -->
             </div>
         </div>
     </section>
     <!-- ec Banner Section End -->

     <!--  Category Section Start -->
     <section class="section ec-category-section section-space-p" id="categories">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="section-title">
                         <h2 class="ec-bg-title">Our Top Collection</h2>
                         <h2 class="ec-title">Top Categories</h2>
                         <p class="sub-title">Browse The Collection of Top Categories</p>
                     </div>
                 </div>
             </div>
             @php
             $collection = collect($categories);
                 $sorted = collect($categories)->sortByDesc(function($category, $key) {
                    return count($category['products']);
                });

                $top_categories = $sorted->take(4)
             @endphp

             <div class="row">
                 <!--Category Nav Start -->
                 <div class="col-lg-3">
                     <ul class="ec-cat-tab-nav nav">
                        @foreach ($top_categories  as $category)
                        <li class="cat-item">
                            <a class="cat-link {{ $top_categories[0]->id == $category->id ? 'active': '' }}" data-bs-toggle="tab" href="#tab-cat-{{ $category->id }}">
                                <div class="cat-icons"><img class="cat-icon" width="50" height="60" src="{{ asset('assets/images/icons') }}/{{ $category->icon }}" alt="cat-icon"><img class="cat-icon-hover" width="50" height="60" src="{{ asset('assets/images/icons') }}/{{ $category->icon }}" alt="cat-icon"></div>
                                <div class="cat-desc"><span>{{ $category->name }}</span><span>{{ count($category->products) }} Products</span></div>
                            </a>
                        </li>
                        @endforeach
                     </ul>

                 </div>
                 <!-- Category Nav End -->
                 <!--Category Tab Start -->
                 <div class="col-lg-9">
                     <div class="tab-content">
                         <!-- 1st Category tab end -->
                         @foreach ( $top_categories  as $category )
                         <div class="tab-pane fade show {{ $top_categories[0]->id == $category->id ? 'active': '' }}" id="tab-cat-{{ $category->id }}">
                            <div class="row">
                                <img src="{{ asset('assets/images/categories') }}/{{ $category->image }}" alt="{{ $category->name }}" />
                            </div>
                            <span class="panel-overlay">
                                <a href="#" class="btn btn-primary">View All</a>
                            </span>
                        </div>
                         @endforeach

                         <!-- 1st Category tab end -->

                     </div>
                     <!-- Category Tab End -->
                 </div>
             </div>
         </div>
     </section>
     <!-- Category Section End -->

     <!--  Feature & Special Section Start -->
     <section class="section ec-fre-spe-section section-space-p" id="offers">
         <div class="container">
             <div class="row">
                 <!--  Feature Section Start -->
                 <div class="ec-fre-section col-lg-6 col-md-6 col-sm-6 margin-b-30" data-animation="slideInRight">
                     <div class="col-md-12 text-left">
                         <div class="section-title">
                             <h2 class="ec-bg-title">Feature Items</h2>
                             <h2 class="ec-title">Feature Items</h2>
                         </div>
                     </div>

                     <div class="ec-fre-products">
                            @foreach ($featured_products as $product)
                         <div class="ec-fs-product">

                             <div class="ec-fs-pro-inner">
                                 <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                     <div class="ec-fs-pro-image">
                                         <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image"
                                            src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="Product" />
                                        </a>
                                         <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                 src="{{ asset('assets/images/icons/quickview.svg') }}" class="svg_img pro_svg"
                                                 alt="" /></a>
                                     </div>
                                 </div>
                                    <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                        <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html">{{ $product->name }}</a>
                                        </h5>
                                        <div class="ec-fs-pro-rating">
                                            <span class="ec-fs-rating-icon">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </span>
                                            <span class="ec-fs-rating-text">4 Review</span>
                                        </div>
                                        <div class="ec-fs-price">
                                            {{-- <span class="old-price">$549.00</span> --}}
                                            <span class="new-price">Ugx {{ $product->regular_price }}</span>
                                        </div>

                                        <div class="countdowntimer"><span id="ec-fs-count-1"></span></div>
                                        {{-- <div class="ec-fs-pro-desc">{{ $product->short_description }}
                                        </div> --}}
                                        <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                        <div class="ec-fs-pro-btn">
                                            <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                            <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                        </div>
                                    </div>
                             </div>
                         </div>

                             @endforeach


                     </div>
                 </div>
                 <!--  Feature Section End -->
                 <!--  Special Section Start -->
                 <div class="ec-spe-section col-lg-6 col-md-6 col-sm-6" data-animation="slideInLeft">
                     <div class="col-md-12 text-left">
                         <div class="section-title">
                             <h2 class="ec-bg-title">Limited Time Offer</h2>
                             <h2 class="ec-title">Limited Time Offer</h2>
                         </div>
                     </div>

                     <div class="ec-spe-products">
                         <div class="ec-fs-product">
                             <div class="ec-fs-pro-inner">
                                 <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                     <div class="ec-fs-pro-image">
                                         <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                 src="{{ asset('assets/images/product-image/8_1.jpg') }}" alt="Product" /></a>
                                         <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                 src="{{ asset('assets/images/icons/quickview.svg') }}" class="svg_img pro_svg"
                                                 alt="" /></a>
                                     </div>
                                 </div>
                                 <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                     <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html">Smart watch Firebolt</a>
                                     </h5>
                                     <div class="ec-fs-pro-rating">
                                         <span class="ec-fs-rating-icon">
                                             <i class="ecicon eci-star fill"></i>
                                             <i class="ecicon eci-star fill"></i>
                                             <i class="ecicon eci-star fill"></i>
                                             <i class="ecicon eci-star fill"></i>
                                             <i class="ecicon eci-star"></i>
                                         </span>
                                         <span class="ec-fs-rating-text">4 Review</span>
                                     </div>
                                     <div class="ec-fs-price">
                                         <span class="old-price">$200.00</span>
                                         <span class="new-price">$180.00</span>
                                     </div>
                                     <div class="countdowntimer"><span id="ec-fs-count-3"></span></div>
                                     <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and typesetting.
                                     </div>
                                     <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                     <div class="ec-fs-pro-btn">
                                         <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                         <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="ec-fs-product">
                             <div class="ec-fs-pro-inner">
                                 <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                     <div class="ec-fs-pro-image">
                                         <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                 src="{{ asset('assets/images/product-image/10_1.jpg') }}" alt="Product" /></a>
                                         <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                 src="{{ asset('assets/images/icons/quickview.svg') }}" class="svg_img pro_svg"
                                                 alt="" /></a>
                                     </div>
                                 </div>
                                 <div class="ec-fs-pro-content col-lg-6 col-md-6 col-sm-6">
                                     <h5 class="ec-fs-pro-title"><a href="product-left-sidebar.html">Casual Shoes Men</a>
                                     </h5>
                                     <div class="ec-fs-pro-rating">
                                         <span class="ec-fs-rating-icon">
                                             <i class="ecicon eci-star fill"></i>
                                             <i class="ecicon eci-star fill"></i>
                                             <i class="ecicon eci-star fill"></i>
                                             <i class="ecicon eci-star fill"></i>
                                             <i class="ecicon eci-star fill"></i>
                                         </span>
                                         <span class="ec-fs-rating-text">4 Review</span>
                                     </div>
                                     <div class="ec-fs-price">
                                         <span class="old-price">$120.00</span>
                                         <span class="new-price">$95.00</span>
                                     </div>

                                     <div class="countdowntimer"><span id="ec-fs-count-4"></span></div>
                                     <div class="ec-fs-pro-desc">Lorem Ipsum is simply dummy text the printing and typesetting.
                                     </div>
                                     <div class="ec-fs-pro-book">Total Booking: <span>25</span></div>
                                     <div class="ec-fs-pro-btn">
                                         <a href="#" class="btn btn-lg btn-secondary">Remind Me</a>
                                         <a href="#" class="btn btn-lg btn-primary">Book Now</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--  Special Section End -->
             </div>
         </div>
     </section>
     <!-- Feature & Special Section End -->

     <!--  Top Vendor Section Start -->
     <section class="section section-space-p" id="vendors">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="section-title">
                         <h2 class="ec-bg-title">Top Vendor</h2>
                         <h2 class="ec-title">Top Vendor</h2>
                         <p class="sub-title">Browse The Collection of <a href="catalog-multi-vendor.html">All Vendors.</a></p>
                     </div>
                 </div>
             </div>
             <div class="row margin-minus-t-15 margin-minus-b-15">
                @foreach ($vendors as $vendor)
                 <div class="col-sm-12 col-md-6 col-lg-3 ec_ven_content" data-animation="zoomIn">
                     <div class="ec-vendor-card">
                         <div class="ec-vendor-detail">
                             <div class="ec-vendor-avtar">
                                 <img src="{{ asset('assets/images/vendors') }}/{{ $vendor->image }}" alt="vendor img">
                             </div>
                             <div class="ec-vendor-info">
                                 <a href="#" class="name">{{ $vendor->name }}</a>
                                 <p class="prod-count">{{ count($vendor->products) }} Products</p>
                                 <div class="ec-pro-rating">
                                     <i class="ecicon eci-star fill"></i>
                                     <i class="ecicon eci-star fill"></i>
                                     <i class="ecicon eci-star fill"></i>
                                     <i class="ecicon eci-star fill"></i>
                                     <i class="ecicon eci-star"></i>
                                 </div>
                                 <div class="ec-sale">
                                     <p title="Weekly sales">Sales 954</p>
                                 </div>
                             </div>
                         </div>
                         <div class="ec-vendor-prod">
                            @foreach ($vendor->products as $product)
                            <div class="ec-prod-img">
                                <a href="{{ route('product.detail',['slug' =>$product->slug]) }}"><img src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="{{ $product->name }}"></a>
                            </div>
                            @endforeach
                         </div>
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>
     </section>
     <!--  Top Vendor Section End -->

     <!--  services Section Start -->
     <section class="section ec-services-section section-space-p" id="services">
         <h2 class="d-none">Services</h2>
         <div class="container">
             <div class="row">
                 <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                     <div class="ec_ser_inner">
                         <div class="ec-service-image">
                             <img src="{{ asset('assets/images/icons/service_1.svg') }}" class="svg_img" alt="" />
                         </div>
                         <div class="ec-service-desc">
                             <h2>Free Shipping</h2>
                             <p>Free shipping on all US order or order above $200</p>
                         </div>
                     </div>
                 </div>
                 <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                     <div class="ec_ser_inner">
                         <div class="ec-service-image">
                             <img src="{{ asset('assets/images/icons/service_2.svg') }}" class="svg_img" alt="" />
                         </div>
                         <div class="ec-service-desc">
                             <h2>24X7 Support</h2>
                             <p>Contact us 24 hours a day, 7 days a week</p>
                         </div>
                     </div>
                 </div>
                 <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                     <div class="ec_ser_inner">
                         <div class="ec-service-image">
                             <img src="{{ asset('assets/images/icons/service_3.svg') }}" class="svg_img" alt="" />
                         </div>
                         <div class="ec-service-desc">
                             <h2>30 Days Return</h2>
                             <p>Simply return it within 30 days for an exchange</p>
                         </div>
                     </div>
                 </div>
                 <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                     <div class="ec_ser_inner">
                         <div class="ec-service-image">
                             <img src="{{ asset('assets/images/icons/service_4.svg') }}" class="svg_img" alt="" />
                         </div>
                         <div class="ec-service-desc">
                             <h2>Payment Secure</h2>
                             <p>Contact us 24 hours a day, 7 days a week</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--services Section End -->

     <!--  offer Section Start -->
     <section class="section ec-offer-section section-space-p section-space-m">
         <h2 class="d-none">Offer</h2>
         <div class="container">
             <div class="row justify-content-end">
                 <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center ec-offer-content">
                     <h2 class="ec-offer-title">Sunglasses</h2>
                     <h3 class="ec-offer-stitle" data-animation="slideInDown">Super Offer</h3>
                     <span class="ec-offer-img" data-animation="zoomIn"><img src="{{ asset('assets/images/offer-image/1.png') }}" alt="offer image" /></span>
                     <span class="ec-offer-desc">Acetate Frame Sunglasses</span>
                     <span class="ec-offer-price">UGX 25,000</span>
                     <a class="btn btn-primary" href="{{ route('products') }}" data-animation="zoomIn">Shop Now</a>
                 </div>
             </div>
         </div>
     </section>
     <!-- offer Section End -->

     <!-- New Product Start -->
     <section class="section ec-new-product section-space-p" id="arrivals">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="section-title">
                         <h2 class="ec-bg-title">New Arrivals</h2>
                         <h2 class="ec-title">New Arrivals</h2>
                         <p class="sub-title">Browse The Collection of Top Products</p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <!-- New Product Content -->
                    @foreach ($latest_products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="flipInY">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="{{ route('product.detail',['slug' =>$product->slug]) }}" class="image">
                                        <img class="main-image"
                                            src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('assets/images/products') }}/{{ $product->image }}" alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="new">New</span>
                                    </span>
                                    <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                            src="{{ asset('assets/images/icons/quickview.svg') }}" class="svg_img pro_svg" alt="" /></a>
                                    <div class="ec-pro-actions">
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                                                src="{{ asset('assets/images/icons/compare.svg') }}" class="svg_img pro_svg" alt="" /></a>
                                        <button title="Add To Cart" class="add-to-cart"><img
                                                src="{{ asset('assets/images/icons/cart.svg') }}" class="svg_img pro_svg" alt="" /> Add To
                                            Cart</button>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                src="{{ asset('assets/images/icons/wishlist.svg') }}" class="svg_img pro_svg" alt="" /></a>
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
                                <span class="ec-price">
                                    <span class="old-price">$100.00</span>
                                <span class="new-price">{{ $product->regular_price }}</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/11_1.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/11_1.jpg') }}" data-tooltip="Gray"><span style="background-color:#dba4ff;"></span></a>
                                            </li>
                                            <li><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/11_2.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/11_2.jpg') }}" data-tooltip="Orange"><span
                                                        style="background-color:#ff4a77;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/11_3.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/11_3.jpg') }}" data-tooltip="Green"><span style="background-color:#c9ff55;"></span></a>
                                            </li>
                                            <li><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/11_4.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/11_4.jpg') }}" data-tooltip="Sky Blue"><span
                                                        style="background-color:#ffcc5e;"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


             </div>
         </div>
     </section>
     <!-- New Product end -->

     <!-- ec testmonial Start -->
     {{-- <section class="section ec-test-section section-space-ptb-100 section-space-m" id="reviews">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="section-title mb-0">
                         <h2 class="ec-bg-title">Testimonial</h2>
                         <h2 class="ec-title">Client Review</h2>
                         <p class="sub-title mb-3">What say client about us</p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="ec-test-outer">
                     <ul id="ec-testimonial-slider">
                         <li class="ec-test-item">
                             <img src="{{ asset('assets/images/testimonial/top-quotes.svg') }}" class="svg_img test_svg top" alt="" />
                             <div class="ec-test-inner">
                                 <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="{{ asset('assets/images/testimonial/1.jpg') }}" /></div>
                                 <div class="ec-test-content">
                                     <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                         to make a type specimen</div>
                                     <div class="ec-test-name">John Doe</div>
                                     <div class="ec-test-designation">General Manager</div>
                                     <div class="ec-test-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                     </div>
                                 </div>
                             </div>
                             <img src="{{ asset('assets/images/testimonial/bottom-quotes.svg') }}" class="svg_img test_svg bottom" alt="" />
                         </li>
                         <li class="ec-test-item ">
                             <img src="{{ asset('assets/images/testimonial/top-quotes.svg') }}" class="svg_img test_svg top" alt="" />
                             <div class="ec-test-inner">
                                 <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="{{ asset('assets/images/testimonial/2.jpg') }}" /></div>
                                 <div class="ec-test-content">
                                     <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                         to make a type specimen</div>
                                     <div class="ec-test-name">John Doe</div>
                                     <div class="ec-test-designation">General Manager</div>
                                     <div class="ec-test-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                     </div>
                                 </div>
                             </div>
                             <img src="{{ asset('assets/images/testimonial/bottom-quotes.svg') }}" class="svg_img test_svg bottom" alt="" />
                         </li>
                         <li class="ec-test-item">
                             <img src="{{ asset('assets/images/testimonial/top-quotes.svg') }}" class="svg_img test_svg top" alt="" />
                             <div class="ec-test-inner">
                                 <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="{{ asset('assets/images/testimonial/3.jpg') }}" /></div>
                                 <div class="ec-test-content">
                                     <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                         to make a type specimen</div>
                                     <div class="ec-test-name">John Doe</div>
                                     <div class="ec-test-designation">General Manager</div>
                                     <div class="ec-test-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                     </div>
                                 </div>
                             </div>
                             <img src="{{ asset('assets/images/testimonial/bottom-quotes.svg') }}" class="svg_img test_svg bottom" alt="" />
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </section> --}}
     <!-- ec testmonial end -->

     <!-- Ec Brand Section Start -->
     {{-- <section class="section ec-brand-area section-space-p">
         <h2 class="d-none">Brand</h2>
         <div class="container">
             <div class="row">
                 <div class="ec-brand-outer">
                     <ul id="ec-brand-slider">
                        @foreach ($vendors as $vendor)
                        <li class="ec-brand-item" data-animation="zoomIn">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('assets/images/vendors') }}/{{ $vendor->image }}" /></a></div>
                        </li>
                        @endforeach

                     </ul>
                 </div>
             </div>
         </div>
     </section> --}}
     <!-- Ec Brand Section End -->

     <!-- Ec Instagram Start -->
     {{-- <section class="section ec-instagram-section module section-space-p" id="insta">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="section-title">
                         <h2 class="ec-bg-title">Instagram Feed</h2>
                         <h2 class="ec-title">Instagram Feed</h2>
                         <p class="sub-title">Share your store with us</p>
                     </div>
                 </div>
             </div>
         </div>
         <div class="ec-insta-wrapper">
             <div class="ec-insta-outer">
                 <div class="container" data-animation="fadeIn">
                     <div class="insta-auto">
                         <!-- instagram item -->
                         <div class="ec-insta-item">
                             <div class="ec-insta-inner">
                                 <a href="#" target="_blank"><img src="{{ asset('assets/images/instragram-image/1.jpg') }}"
                                         alt="insta"></a>
                             </div>
                         </div>
                         <!-- instagram item -->
                         <div class="ec-insta-item">
                             <div class="ec-insta-inner">
                                 <a href="#" target="_blank"><img src="{{ asset('assets/images/instragram-image/2.jpg') }}"
                                         alt="insta"></a>
                             </div>
                         </div>
                         <!-- instagram item -->
                         <div class="ec-insta-item">
                             <div class="ec-insta-inner">
                                 <a href="#" target="_blank"><img src="{{ asset('assets/images/instragram-image/3.jpg') }}"
                                         alt="insta"></a>
                             </div>
                         </div>
                         <!-- instagram item -->
                         <div class="ec-insta-item">
                             <div class="ec-insta-inner">
                                 <a href="#" target="_blank"><img src="{{ asset('assets/images/instragram-image/4.jpg') }}"
                                         alt="insta"></a>
                             </div>
                         </div>
                         <!-- instagram item -->
                         <!-- instagram item -->
                         <div class="ec-insta-item">
                             <div class="ec-insta-inner">
                                 <a href="#" target="_blank"><img src="{{ asset('assets/images/instragram-image/5.jpg') }}"
                                         alt="insta"></a>
                             </div>
                         </div>
                         <!-- instagram item -->
                         <!-- instagram item -->
                         <div class="ec-insta-item">
                             <div class="ec-insta-inner">
                                 <a href="#" target="_blank"><img src="{{ asset('assets/images/instragram-image/6.jpg') }}"
                                         alt="insta"></a>
                             </div>
                         </div>
                         <!-- instagram item -->
                         <!-- instagram item -->
                         <div class="ec-insta-item">
                             <div class="ec-insta-inner">
                                 <a href="#" target="_blank"><img src="{{ asset('assets/images/instragram-image/7.jpg') }}"
                                         alt="insta"></a>
                             </div>
                         </div>
                         <!-- instagram item -->
                     </div>
                 </div>
             </div>
         </div>
     </section> --}}
     <!-- Ec Instagram End -->
</div>
