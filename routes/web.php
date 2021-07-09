<?php

use App\Http\Livewire\LandingpageComponent;

use App\Http\Livewire\HomepageComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;

use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserPaymentComponent;


use App\Http\Livewire\AboutusComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\User\UserAddNewItemComponent;
use App\Http\Livewire\User\UserNotificationComponent;

use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;


use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\User\MyListedItemsComponent;
use App\Http\Livewire\User\MyRequestsComponent;

use App\Http\Livewire\User\RentalComponent;
use App\Http\Livewire\User\ReturnAnItemComponent;
use App\Http\Livewire\User\ReturnAnItemDetails;
use App\Http\Livewire\User\UserRequestSuccessfulComponent;
use App\Http\Livewire\User\UserRequestSummaryComponent;
use App\Http\Livewire\UserRegistrationComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',LandingpageComponent::class);

Route::get('/about-us',AboutusComponent::class)->name('aboutus');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



Route::get('register',UserRegistrationComponent::class)->name('register');
Route::post('custom-registration', [UserRegistrationComponent::class, 'customRegistration'])->name('register.custom'); 
Route::get('/homepage',HomepageComponent::class)->name('homepage');
Route::get('product/category/{category_slug}',CategoryComponent::class)->name('product.category');

Route::get('/search',SearchComponent::class)->name('search');
Route::get('/admin/orders',AdminOrderComponent::class)->name('admin.order');

// Route::post('search',[SearchComponent::class, 'submit'])->name('search');

// Route::livewire('search', 'search');

// Route::get('search', \App\Http\Livewire\search::class);

Route::get('product/details/{product_id}',ProductDetailsComponent::class)->name('product.details');



//For User/Customer
Route::middleware(['auth:sanctum','verified','auth'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/my_requests',MyRequestsComponent::class)->name('user.my_requests');

    Route::get('/user/rental/{request_id}',RentalComponent::class)->name('user.rental');

   
    Route::get('user/add_new_item',UserAddNewItemComponent::class)->name('user.add_new_item');
    Route::get('user/notifications',UserNotificationComponent::class)->name('user.notifications');
    Route::get('user/request-successful',UserRequestSuccessfulComponent::class)->name('user.request_successful');
    Route::get('user/request-summary/{product_id}',UserRequestSummaryComponent::class)->name('user.request-summary');

    Route::get('user/return_an_item',ReturnAnItemComponent::class)->name('user.return_an_item');
    Route::get('user/return_an_item_details',ReturnAnItemDetails::class)->name('user.return_an_item_details');
    Route::get('user/my-listed-items',MyListedItemsComponent::class)->name('user.my_listed_items');

    Route::get('user/payment',UserPaymentComponent::class)->name('user.payment'); 

   
  

   
});





//For Admin
Route::middleware(['auth:sanctum','verified','authAdmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('/admin/category',AdminCategoryComponent::class)->name('admin.category');
    Route::get('/admin/product',AdminProductComponent::class)->name('admin.product');
    
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');


});