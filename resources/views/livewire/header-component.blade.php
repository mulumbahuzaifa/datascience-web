<div>
     <!-- Header start  -->
     <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top social Start -->
                    <div class="col text-left header-top-left d-none d-lg-block">
                        <div class="header-top-social">
                            <span class="social-text text-upper">Follow us on:</span>
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Message Start -->
                    <div class="col text-center header-top-center">
                        <div class="header-top-message text-upper">
                            <span>Free Shipping</span>This Week Order Over - $75
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-lan-curr d-flex justify-content-end">
                            <!-- Currency Start -->
                            <div class="header-top-curr dropdown">
                                <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                        class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                    <li><a class="dropdown-item" href="#">EUR €</a></li>
                                </ul>
                            </div>
                            <!-- Currency End -->
                            <!-- Language Start -->
                            <div class="header-top-lan dropdown">
                                <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                        class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                                </ul>
                            </div>
                            <!-- Language End -->

                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col d-lg-none ">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                        src="{{ asset('assets/images/icons/user.svg') }}" class="svg_img header_svg" alt="" /></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    @if (Route::has('login'))
                                    @auth
                                    @if (Auth::user()->utype === 'ADM')
                                    <li><a class="dropdown-item" href="{{ route('admin.products') }}">Products</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.categories') }}">Categories</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.blogs') }}">Blogs</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.homeslider') }}">Slider</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.contact') }}">Contacts</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.coupons') }}">Coupons</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.orders') }}">Orders</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.homeslider') }}">Sliders</a></li>

                                    <li >
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                    </li>
                                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                    @else
                                      <li >
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                    </li>
                                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                    @endif
                                    @else
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    @endauth
                                    @endif
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->

                            @livewire('wishlist-count-component')
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->

                            @livewire('cart-count-component')

                            <!-- Header Cart End -->
                            <a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
                                <img src="{{ asset('assets/images/icons/category-icon.svg') }}" class="svg_img header_svg" alt="icon" />
                            </a>
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <img src="{{ asset('assets/images/icons/menu.svg') }}" class="svg_img header_svg" alt="icon" />
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="/"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Site Logo" /><img
                                        class="dark-logo" src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center">
                            @livewire('header-search-component')
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">

                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                            src="{{ asset('assets/images/icons/user.svg') }}" class="svg_img header_svg" alt="" /></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        @if (Route::has('login'))
                                        @auth
                                        @if (Auth::user()->utype === 'ADM')
                                        <li><a class="dropdown-item" href="{{ route('admin.vendors') }}">Vendors</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.products') }}">Products</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.categories') }}">Categories</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.blogs') }}">Blogs</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.homeslider') }}">Slider</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.contact') }}">Contacts</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.coupons') }}">Coupons</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.orders') }}">Orders</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.homeslider') }}">Sliders</a></li>
                                        <li >
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                        </li>
                                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                        @else
                                          <li >
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                        </li>
                                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                        @endif
                                        @else
                                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                        @endauth
                                        @endif
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                @livewire('wishlist-count-component')
                                <!-- Header Cart End -->
                                <!-- Header Cart Start -->

                                @livewire('cart-count-component')
                                <!-- Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="/"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Site Logo" /><img
                                    class="dark-logo" src="{{ asset('assets/images/logo/dark-logo.png') }}" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control ec-search-bar" placeholder="Search products..." type="text">
                                <button class="submit" type="submit"><img src="{{ asset('assets/images/icons/search.svg') }}"
                                        class="svg_img header_svg" alt="icon" /></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <a href="#" class="ec-header-btn ec-sidebar-toggle">
                                <img src="{{ asset('assets/images/icons/category-icon.svg') }}" class="svg_img header_svg" alt="icon" />
                            </a>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="dropdown position-static"><a href="javascript:void(0)">Categories</a>
                                    <ul class="mega-menu d-block">
                                        @php
                                        $collection = collect($categories);
                                            $sorted = collect($categories)->sortByDesc(function($category, $key) {
                                               return count($category['products']);
                                           });

                                           $top_categories = $sorted->take(4);
                                           $side_categories = $sorted->take(12)
                                        @endphp
                                        <li class="d-flex">
                                            @foreach ($top_categories  as $category)
                                                <ul class="d-block">
                                                    <li class="menu_title"><a href="javascript:void(0)">{{ $category->name }}</a></li>
                                                    @foreach ($category->products as $product)
                                                    <li><a href="{{ route('product.detail',['slug' =>$product->slug]) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endforeach
                                        </li>
                                        <li>
                                            <ul class="ec-main-banner w-100">
                                                @foreach ($top_categories  as $category)
                                                <li>
                                                    <a class="p-0" href="{{ route('product.category',['category_slug' => $category->slug]) }}"><img
                                                            class="img-responsive" src="{{ asset('assets/images/categories') }}/{{ $category->image }}"
                                                            alt="">
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('products') }}">Products</a>

                                </li>

                                <li ><a href="{{ route('blogs') }}">Blogs</a>
                                </li>

                                <li ><a href="{{ route('contact') }}">Contact Us</a>
                                </li>

                                <li><a href="{{ route('offers') }}">Hot Offers</a></li>
                                <li class="dropdown scroll-to"><a href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/icons/scroll.svg') }}" class="svg_img header_svg scroll" alt="" /></a>
                                    <ul class="sub-menu">
                                        <li class="menu_title">Scroll To Section</li>
                                        <li><a href="javascript:void(0)" data-scroll="collection" class="nav-scroll">Top Collection</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="categories" class="nav-scroll">Categories</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="offers" class="nav-scroll">Offers</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="vendors" class="nav-scroll">Top Vendors</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="services" class="nav-scroll">Services</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="arrivals" class="nav-scroll">New Arrivals</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="reviews" class="nav-scroll">Client Review</a></li>
                                        <li><a href="javascript:void(0)" data-scroll="insta" class="nav-scroll">Instagram Feed</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- ekka Mobile Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                @foreach ($top_categories  as $category)
                                <li>
                                    <a href="{{ route('product.category',['category_slug' => $category->slug]) }}">{{ $category->name }}</a>
                                    <ul class="sub-menu">
                                        @foreach ($category->products as $product)
                                        <li><a href="{{ route('product.detail',['slug' =>$product->slug]) }}">{{ $product->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                                <li><a class="p-0" href="{{ route('products') }}"><img class="img-responsive"
                                            src="{{ asset('assets/images/menu-banner/1.jpg') }}" alt=""></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('products') }}">Products</a>
                        </li>
                        <li><a href="{{ route('blogs') }}">Blogs</a>
                        </li>

                        <li ><a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        <li><a href="{{ route('offers') }}">Hot Offers</a></li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
        <!-- ekka mobile Menu End -->
    </header>
    <!-- Header End  -->

    <!-- ekka Cart Start -->
    @livewire('header-cart-component')
    <!-- ekka Cart End -->

         <!-- Category Sidebar start -->
         <div class="ec-side-cat-overlay"></div>
         <div class="col-lg-3 category-sidebar" data-animation="fadeIn">
             <div class="cat-sidebar">
                 <div class="cat-sidebar-box">
                     <div class="ec-sidebar-wrap">
                         <!-- Sidebar Category Block -->
                         <div class="ec-sidebar-block">
                             <div class="ec-sb-title">
                                 <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                             </div>
                             @foreach ($side_categories  as $category)
                             <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><img src="{{ asset('assets/images/categories') }}/{{ $category->image }}" class="svg_img" alt="drink" />{{ $category->name }}</div>
                                        <ul style="display: block;">
                                            {{-- @foreach ($category->products as $product)
                                            <li>
                                                <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Shirt <span title="Available Stock">- 25</span></a>
                                                </div>
                                            </li>
                                            @endforeach --}}
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                             @endforeach


                         </div>
                         <!-- Sidebar Category Block -->
                     </div>
                 </div>
                 <div class="ec-sidebar-slider-cat">
                     <div class="ec-sb-slider-title">Best Sellers</div>
                     <div class="ec-sb-pro-sl">
                         <div>
                             <div class="ec-sb-pro-sl-item">
                                 <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                             src="{{ asset('assets/images/product-image/1.jpg') }}" alt="product" /></a>
                                 <div class="ec-pro-content">
                                     <h5 class="ec-pro-title"><a href="product-left-sidebar.html">baby fabric shoes</a></h5>
                                     <div class="ec-pro-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                     </div>
                                     <span class="ec-price">
                                             <span class="old-price">$5.00</span>
                                     <span class="new-price">$4.00</span>
                                     </span>
                                 </div>
                             </div>
                         </div>
                         <div>
                             <div class="ec-sb-pro-sl-item">
                                 <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                             src="{{ asset('assets/images/product-image/2.jpg') }}" alt="product" /></a>
                                 <div class="ec-pro-content">
                                     <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's hoodies t-shirt</a></h5>
                                     <div class="ec-pro-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star"></i>
                                     </div>
                                     <span class="ec-price">
                                             <span class="old-price">$10.00</span>
                                     <span class="new-price">$7.00</span>
                                     </span>
                                 </div>
                             </div>
                         </div>
                         <div>
                             <div class="ec-sb-pro-sl-item">
                                 <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                             src="{{ asset('assets/images/product-image/3.jpg') }}" alt="product" /></a>
                                 <div class="ec-pro-content">
                                     <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls t-shirt</a></h5>
                                     <div class="ec-pro-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star"></i>
                                         <i class="ecicon eci-star"></i>
                                     </div>
                                     <span class="ec-price">
                                             <span class="old-price">$5.00</span>
                                     <span class="new-price">$3.00</span>
                                     </span>
                                 </div>
                             </div>
                         </div>
                         <div>
                             <div class="ec-sb-pro-sl-item">
                                 <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                             src="{{ asset('assets/images/product-image/4.jpg') }}" alt="product" /></a>
                                 <div class="ec-pro-content">
                                     <h5 class="ec-pro-title"><a href="product-left-sidebar.html">woolen hat for men</a></h5>
                                     <div class="ec-pro-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                     </div>
                                     <span class="ec-price">
                                             <span class="old-price">$15.00</span>
                                     <span class="new-price">$12.00</span>
                                     </span>
                                 </div>
                             </div>
                         </div>
                         <div>
                             <div class="ec-sb-pro-sl-item">
                                 <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                             src="{{ asset('assets/images/product-image/5.jpg') }}" alt="product" /></a>
                                 <div class="ec-pro-content">
                                     <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens purse</a></h5>
                                     <div class="ec-pro-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star"></i>
                                     </div>
                                     <span class="ec-price">
                                             <span class="old-price">$15.00</span>
                                     <span class="new-price">$12.00</span>
                                     </span>
                                 </div>
                             </div>
                         </div>
                         <div>
                             <div class="ec-sb-pro-sl-item">
                                 <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                             src="{{ asset('assets/images/product-image/6.jpg') }}" alt="product" /></a>
                                 <div class="ec-pro-content">
                                     <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy doctor kit</a></h5>
                                     <div class="ec-pro-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star"></i>
                                         <i class="ecicon eci-star"></i>
                                         <i class="ecicon eci-star"></i>
                                     </div>
                                     <span class="ec-price">
                                             <span class="old-price">$50.00</span>
                                     <span class="new-price">$45.00</span>
                                     </span>
                                 </div>
                             </div>
                         </div>
                         <div>
                             <div class="ec-sb-pro-sl-item">
                                 <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                             src="{{ asset('assets/images/product-image/7.jpg') }}" alt="product" /></a>
                                 <div class="ec-pro-content">
                                     <h5 class="ec-pro-title"><a href="product-left-sidebar.html">teddy bear baby toy</a></h5>
                                     <div class="ec-pro-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                     </div>
                                     <span class="ec-price">
                                             <span class="old-price">$35.00</span>
                                     <span class="new-price">$25.00</span>
                                     </span>
                                 </div>
                             </div>
                         </div>
                         <div>
                             <div class="ec-sb-pro-sl-item">
                                 <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                             src="{{ asset('assets/images/product-image/2.jpg') }}" alt="product" /></a>
                                 <div class="ec-pro-content">
                                     <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens hoodies blue</a></h5>
                                     <div class="ec-pro-rating">
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star fill"></i>
                                         <i class="ecicon eci-star"></i>
                                         <i class="ecicon eci-star"></i>
                                     </div>
                                     <span class="ec-price">
                                             <span class="old-price">$15.00</span>
                                     <span class="new-price">$13.00</span>
                                     </span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
</div>
