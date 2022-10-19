<div>
      <!-- Ec breadcrumb start -->
      <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Wishlist</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="/">Home</a></li>
                                <li class="ec-breadcrumb-item active">Wishlist</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Wishlist page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <!-- Compare Content Start -->
                <div class="ec-wish-rightside col-lg-12 col-md-12">
                    <!-- Compare content Start -->
                    <div class="ec-compare-content">
                        <div class="ec-compare-inner">
                            <div class="row margin-minus-b-30">
                                @if (Cart::instance('wishlist')->count() > 0)
                                @foreach ( Cart::instance('wishlist')->content() as $item )
                                @php
                                    $witem = Cart::instance('wishlist')->content()->pluck('id');
                                    $citem = Cart::instance('cart')->content()->pluck('id');
                                @endphp
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product.detail', ['slug' => $item->model->slug]) }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('assets/img/products') }}/{{ $item->model->image  }}" alt="{{ $item->model->name  }}"  />
                                                    <img class="hover-image"
                                                        src="{{ asset('assets/img/products') }}/{{ $item->model->image  }}" alt="{{ $item->model->name  }}"  />
                                                </a>
                                                <span class="ec-com-remove ec-remove-wish"><a href="javascript:void(0)"  wire:click.prevent="removeFromWishlist('{{ $item->rowId }}')">×</a></span>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                        src="{{ asset('assets/images/icons/quickview.svg') }}" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <button title="Switch To Cart" class=" add-to-cart" wire:click.prevent="moveProductToCart({{ $item->rowId }})"><img
                                                            src="{{ asset('assets/images/icons/cart.svg') }}" class="svg_img pro_svg"
                                                            alt="" /> Switch To Cart</button>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ route('product.detail', ['slug' => $item->model->slug]) }}">{{ $item->model->name  }}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">{{ $item->model->short_description  }}</div>
                                            <span class="ec-price">
                                                @if ($item->model->sale_price)
                                                <span class="old-price">Ugx {{ number_format($item->model->sale_price)  }}</span>

                                                @endif
                                            <span class="new-price">Ugx {{ number_format($item->model->regular_price)  }}</span>
                                            </span>
                                            {{-- <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/7_1.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/7_1.jpg') }}" data-tooltip="Gray"><span
                                                                    style="background-color:#01f1f1;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img" data-src="{{ asset('assets/images/product-image/7_2.jpg') }}" data-src-hover="{{ asset('assets/images/product-image/7_2.jpg') }}" data-tooltip="Orange"><span
                                                                    style="background-color:#b89df8;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$12.00" data-new="$10.00" data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                    <h3 class="box-title">No items in Your Wishlist</h3>
                                @endif

                            </div>
                        </div>
                    </div>
                    <!--compare content End -->
                </div>
                <!-- Compare Content end -->
            </div>
        </div>
    </section>
</div>
