<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EditProfilePembeliController;
use App\Http\Controllers\LihatMyOrderController;
use App\Http\Controllers\UploadGambarController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\DashboardPembeliController;
use App\Http\Controllers\UkuranBajuController;
use App\Http\Controllers\EditProfilePenjahitController;
use App\Http\Controllers\DashboardPenjahitController;
use App\Http\Controllers\AddCartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerOrderController;
use App\Http\Controllers\ViewUkuranBajuController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<marquee>Halo, Selamat datang di tutorial laravel www.malasngoding.com</marquee>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart','showCart');
    Route::get('/cart/hapus/{id}','hapus');
});
Route::controller(EditProfilePembeliController::class)->group(function () {
    Route::get('/profilepembeli','profile');
    Route::get('/profilepembeli/view/{id}','view');
    Route::get('/profilepembeli/edit/{id}','edit');
    Route::post('/profilepembeli/update','update');
});
Route::controller(EditProfilePenjahitController::class)->group(function () {
    Route::get('/profilepenjahit','profile');
    Route::get('/profilepenjahit/view/{id}','view');
    Route::get('/profilepenjahit/edit/{id}','edit');
    Route::post('/profilepenjahit/update','update');
});

Route::controller(LihatMyOrderController::class)->group(function () {
    Route::get('/myorder','myOrder');
});

Route::controller(UploadGambarController::class)->group(function () {
    Route::get('/uploadproduct','upload');
    Route::post('/upload/proses','proses_upload');
    Route::get('/upload/hapus/{id}', 'hapus');
});

//Route::middleware([
  //  'auth:sanctum',
    //config('jetstream.auth_session'),
  //  'verified'
//])->group(function () {
  //  Route::get('/dashboard', function () {
  //      return view('dashboard');
  //  })->name('dashboard');
//});

Route::get('/dashboard', [GeneralController::class,'redirectAfterLogin'])->middleware(['auth','verified'])->name('dashboard');


Route::controller(DashboardPembeliController::class)->group(function () {
    Route::get('/dashboardpembeli','dashboard');
    Route::get('/dashboardpembeli/cari','cari');
    Route::get('/viewbaju/{id}','view')->name("viewbaju");
    Route::get('/ukuranbaju/{id}','ukuran');
    Route::get('/dashboardpembeli/filter/{id}','filter');

});
//Route::controller(UkuranBajuController::class)->group(function () {
    //Route::get('/ukuranbaju','index');
    //Route::get('/viewbaju/{id}','view');
//});

Route::controller(DashboardPenjahitController::class)->group(function () {
    Route::get('/dashboardpenjahit','dashboard');
    Route::get('/dashboardpenjahit/cari','cari');
    Route::get('/viewbajupenjahit/{id}','view');
    Route::get('/ukuranbaju/{id}','ukuran')->name('ukuranbaju');
    Route::get('/dashboardpenjahit/filter/{id}','filter');
});

Route::controller(AddCartController::class)->group(function () {
    Route::post('/cart/proses','cart');
});
Route::controller(UkuranBajuController::class)->group(function () {
    Route::post('/ukuran/proses','ukuran');

});
Route::controller(CheckoutController::class)->group(function () {
    Route::get('/checkout','checkout');
    Route::post('/checkout/proses','payment');

});
Route::controller(CustomerOrderController::class)->group(function () {
    Route::get('/customerorder','viewCustomerOrder');
    Route::get('/customerorders/{id}','customer');

});
Route::controller(ViewUkuranBajuController::class)->group(function () {
    Route::get('/viewukuran/{id}','ukuranBaju');
    Route::post('/order/proses','status');


});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');
