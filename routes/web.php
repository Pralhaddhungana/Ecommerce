<?php


use App\Http\Controllers\PaymentController;
use App\Http\Controllers\checkOutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
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

Route::get('/', [HomeController::class, 'index']);

// Photo Routes
Route::get('/photo/create', [PhotoController::class, 'create']);
Route::post("/photo/store", [PhotoController::class, 'store']);

Route::get('/photo/{id}', [PhotoController::class, 'show']);


Route::view('/a', 'site.pages.home')->name('home');
Route::view('/photo/show', 'site.pages.show-photo');
Route::view('/cart', 'site.pages.cart-summary');
Route::view('/panel/downloads', 'site.pages.panel.downloads');

//cart routes
Route::post('/cart/save',[CartController::class,'save']);
Route::get('/cart/summary',[CartController::class,'summary']);
Route::delete('/cart/item/{id}',[CartController::class,'destroy']);

//checkout routes
Route::get('/checkout', [checkOutController::class,'index']);
Route::post('/checkout',[checkOutController::class,'saveEmail']);

//Payment route
Route::get('/payment',[PaymentController::class,'index']);

