<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', function() {
    return view('register');
})->name('register')->middleware('checkOauth');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/message', function() {
    return view('message');
})->name('message');

Route::get('/cart', function(){
    return view('cart');
})->name('cart');


/**
 * Register Routes
 */
Route::controller(ClientController::class)->group(function() {
    Route::post('/register/create', 'store')->name('client.store');
    Route::get('/profile', 'profile')->name('client.profile')->middleware('isLogin');
});

/**
 * Oauth Routes
 */
Route::controller(OauthController::class)->group(function() {
    Route::post('/sign-in', 'signIn')->name('client.sign-in');
    Route::get('/sign-out', 'signOut')->name('client.sign-out');
});

/**
 * Booking Routes
 */
Route::controller(BookingController::class)->group(function() {
    Route::get('/booking/workspace', 'fetchWorkspace')->name('booking.workspcae')->middleware('isLogin');
    Route::post('/booking/select-packages', 'packageSelect')->name('booking.package-select');
    Route::get('/booking/package/{workspace_id}', 'package')->name('booking.package');
    Route::post('/booking/send-package', 'sendPackage')->name('booking.send-package');
    Route::get('/booking/search-availability/{workspace_id}/{package_id}', 'placeBooking')->name('booking.search-availability')->middleware('isLogin');
    Route::post('/booking/search', 'searchAvailability')->name('booking.search');
    Route::get('/booking/select-seat/{workspace_id}/{package_id}/{arrival}/{depature}/{in_time}/{out_time}', 'selectSeat')->name('booking.select-seat');
    Route::post('/booking/summery', 'viewBookingSummary')->name('booking.summery');
    Route::post('/booking/save', 'store')->name('booking.store');
});

/**
 * Foods order Routes
 */
Route::controller(OrderController::class)->group(function() {
    Route::get('/order/food-package', 'fetchAllShop')->name('order.select-package')->middleware('isLogin');
    Route::post('/order/send-order', 'store')->name('order.store');
    Route::post('/order/add-to-cart/{fp_id}', 'addtocart')->name('order.add-to-cart');
    Route::post('update-cart-item', 'updateCartQuantity')->name('order.update-cart');
    Route::get('/order/cart/delete/{fp_id}', 'removeCartItem')->name('order.delete');
    Route::get('/order/empty-cart', 'emptyCart')->name('order.empty-cart');
    Route::get('/order/food-gallery/{shop_id}', 'foodGallery')->name('order.food-gallery');
});
