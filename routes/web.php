<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StaticPagesController;

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

// Route::get('/cart', function () {
//     return view('pages.cart');
// });


Route::get('/', [IndexController::class, 'dashboard']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu', [MenuController::class, 'getAllMenu']);

// In routes/web.php or routes/api.php
Route::get('/auth/check', function () {
    return response()->json(['isLoggedIn' => Auth::check()]);
});


Auth::routes(['verify' => true]);
Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/add-to-cart', [OrderController::class, 'addToCart']);
    Route::get('/cart-data', [OrderController::class, 'getDataCart']);
    Route::post('/create-order', [OrderController::class, 'createOrder']);
    Route::get('/track-order-data', [OrderController::class, 'getDataTrackOrder']);

    Route::get('/track-order', [StaticPagesController::class, 'showTrackOrder']);
    Route::get('/cart', [StaticPagesController::class, 'showCart']);


});
