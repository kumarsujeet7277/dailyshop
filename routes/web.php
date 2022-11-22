<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\ContactusComponent;
use App\Http\Livewire\AccountDetailComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\DetailComponent;
use App\Http\Livewire\NotFoundComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;

use App\Http\Livewire\User\UserDashboardComponent;


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

Route::get('/',HomeComponent::class);
Route::get('/cart',CartComponent::class);
Route::get('/checkout',CheckoutComponent::class);
Route::get('/wishlist',WishlistComponent::class);
Route::get('/contactus',ContactusComponent::class);
Route::get('/account-detail',AccountDetailComponent::class);
Route::get('/product',ProductComponent::class);
Route::get('/product-detail',DetailComponent::class);
Route::get('/not-found',NotFoundComponent::class);




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// for User Or Customer
Route::middleware(['auth:sanctum','verified'])->group(function (){
Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
}); 

// for Admin 
Route::middleware(['auth:sanctum','verified'])->group(function (){
Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
