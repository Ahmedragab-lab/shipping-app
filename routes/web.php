<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Frontend;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function(){
        // as a guest ==============================================================================
        Route::get('/',[Frontend\FrontendController::class,'index'])->name('front');
        //==========================================================================================
        Auth::routes();
        //as a client ==============================================================================
        Route::resource('front',Frontend\FrontendController::class);
        Route::resource('allproducts',Frontend\AllProducts::class);
                                 //============================
        Route::middleware(['auth'])->group(function () {
        Route::get('addtocart',[Frontend\CartController::class,'addtocart'])->name('addtocart');
        Route::view('order', 'order-service')->name('order');
        Route::view('contactus', 'contactus')->name('contactus');
        });

        //as admin ==================================================================================
        Route::group(['middleware' => ['auth','Admin']], function() {
           Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
           Route::resource('users',App\Http\Controllers\UserController::class);
           Route::resource('roles',App\Http\Controllers\RoleController::class);
           Route::resource('cats',Admin\CatController::class);
           Route::resource('products',Admin\ProductController::class);
           Route::resource('client',Admin\ClientController::class);
           Route::resource('serv',Admin\ServiceController::class);
           Route::resource('tracking_steps',Admin\TrackingstepsController::class);
           Route::resource('feedback',Admin\ClientFeedbackController::class);
        });
    });
//===================================================================================================
