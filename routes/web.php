<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\roleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//logo

    Route::get('addlogo',[adminController::class,'logo']);

    Route::post('logoaction',[adminController::class,'logoaction']);
    //delete logo
    Route::get('delete_logo/{id}',[adminController::class,'delete_logo'])->name('delete_logo');

    //status on of
    Route::get('status_on_of{id}',[adminController::class,'status_on_of']);

Route::get('/',[homeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[homeController::class,'redirect']);

Route::get('/catagory_view',[adminController::class,'catagory_view']);
Route::post('/add_catagory',[adminController::class,'add_catagory']);
Route::get('/delete_catagory/{id}',[adminController::class,'delete_catagory']);
Route::get('/add_product',[adminController::class,'add_product']);
Route::post('/add_db_product',[adminController::class,'add_db_product']);
Route::get('/show_product',[adminController::class,'show_product']);
Route::get('/product-delete/{id}',[adminController::class,'delete']);
Route::get('/product-update/{id}',[adminController::class,'update']);
Route::post('/product_update/{id}',[adminController::class,'product_update']);
Route::get('/pdf/{id}',[adminController::class,'pdf']);
Route::get('/search',[adminController::class,'search']);


Route::get('/product_details/{id}',[homeController::class,'product_details']);
Route::get('/add_cart/{id}',[homeController::class,'add_cart']);
Route::get('/show_cart',[homeController::class,'show_cart']);
Route::get('/cart_move/{id}',[homeController::class,'cart_move']);
Route::get('/cash_order',[homeController::class,'cash_order']);
Route::get('/strip/{totalPrice}',[homeController::class,'strip']);
Route::post('/stripe',[homeController::class, 'stripePost'])->name('stripe.post');

// search product
// Route::get('/search_product',[homeController::class, 'search_product']);
// all product

Route::get('/all_product',[homeController::class, 'all_product']);



// role management

Route::get('/role',[roleController::class, 'role'])->name('role');
Route::post('add/permission',[roleController::class, 'add_permission'])->name('add_permission');
Route::post('role/store',[roleController::class, 'role_store'])->name('role_store');
Route::post('role/assign',[roleController::class, 'role_assign'])->name('role_assign');



















