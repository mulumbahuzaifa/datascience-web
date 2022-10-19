<?php

use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\AdminAddCategoryComponent;
use App\Http\Livewire\AdminAddCouponsComponent;
use App\Http\Livewire\AdminAddHomeSliderComponent;
use App\Http\Livewire\AdminAddProductComponent;
use App\Http\Livewire\AdminAddVendorComponent;
use App\Http\Livewire\AdminBlogsComponent;
use App\Http\Livewire\AdminCategoriesComponent;
use App\Http\Livewire\AdminContactsComponent;
use App\Http\Livewire\AdminCouponsComponent;
use App\Http\Livewire\AdminEditBlogComponent;
use App\Http\Livewire\AdminEditCategoryComponent;
use App\Http\Livewire\AdminEditCouponsComponent;
use App\Http\Livewire\AdminEditHomeSliderComponent;
use App\Http\Livewire\AdminEditProductComponent;
use App\Http\Livewire\AdminEditVendorComponent;
use App\Http\Livewire\AdminHomeSliderComponent;
use App\Http\Livewire\AdminOrderDetailsComponent;
use App\Http\Livewire\AdminOrdersComponent;
use App\Http\Livewire\AdminProductComponent;
use App\Http\Livewire\AdminSettingsComponent;
use App\Http\Livewire\AdminVendorsComponent;
use App\Http\Livewire\BlogDetailsComponent;
use App\Http\Livewire\BlogsComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\OffersComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ThankYouComponent;
use App\Http\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeComponent::class);
Route::get('/about-us', AboutUsComponent::class)->name('about');
Route::get('/contact-us', ContactUsComponent::class)->name('contact');
Route::get('/products', ProductComponent::class)->name('products');
Route::get('/blogs', BlogsComponent::class)->name('blogs');
Route::get('/blog-details/{slug}', BlogDetailsComponent::class)->name('blog.details');
Route::get('/product/{slug}', ProductDetailsComponent::class)->name('product.detail');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/thank-you', ThankYouComponent::class)->name('thankyou');
Route::get('/cart', CartComponent::class)->name('cart');
Route::get('/wishlist', WishlistComponent::class)->name('wishlist');
Route::get('/offers', OffersComponent::class)->name('offers');
Route::get('/search', SearchComponent::class)->name('product.search');



//For Customer
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified'])->group(function(){
    // Route::get('/user/review/{property_id}', UserReviewComponent::class)->name('user.review');
});

//For Admin
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified' , 'authadmin'])->group(function(){
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/categories', AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/blogs', AdminBlogsComponent::class)->name('admin.blogs');

    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/blog/add', AdminBlogsComponent::class)->name('admin.addblog');

    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/blog/edit/{blog_slug}', AdminEditBlogComponent::class)->name('admin.editblog');

    Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}', AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

    Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
    Route::get('/admin/coupons/add', AdminAddCouponsComponent::class)->name('admin.addcoupon');
    Route::get('/admin/coupons/edit/{coupon_id}', AdminEditCouponsComponent::class)->name('admin.editcoupon');


    Route::get('/admin/vendors', AdminVendorsComponent::class)->name('admin.vendors');
    Route::get('/admin/vendors/add', AdminAddVendorComponent::class)->name('admin.addvendor');
    Route::get('/admin/vendors/edit/{vendor_slug}', AdminEditVendorComponent::class)->name('admin.editvendor');

    Route::get('/admin/contact-us', AdminContactsComponent::class)->name('admin.contact');
    Route::get('/admin/settings', AdminSettingsComponent::class)->name('admin.settings');

    Route::get('/admin/orders', AdminOrdersComponent::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}', AdminOrderDetailsComponent::class)->name('admin.orderdetails');
});