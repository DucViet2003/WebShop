<?php

use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SlideController;
use App\Http\Controllers\admin\UploadController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\SlideFrontend;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/home',[frontendController::class,'index']);

Route::get('/slide', [SlideFrontend::class, 'showSlide'])->name('shop.part.slide');

Route::prefix('shop') ->group( function (){

Route::get('',[frontendController::class,'show_allhotproduct']);
Route::get('/product/{id}',[frontendController::class,'show_product']);
Route::get('/order_confirm',[OrderController::class,'show_orderconfirm']);
Route::get('/order_success',function () {return view('shop.order_success');});
Route::post('/cart/add',[frontendController::class,'add_cart']);
Route::get('/cart',[frontendController::class,'show_cart']);
// Route::get('/shop/cart',function () {return view('shop.cart');});
Route::get('/cart/count', function () {
    $cartCount = session()->get('cart') ? array_sum(array_column(session()->get('cart'), 'quantity')) : 0;
    return response()->json(['cartCount' => $cartCount]);
});

Route::get('/cart/delete/{id}',[frontendController::class,'delete_cart']);
Route::post('/cart/update',[frontendController::class,'update_cart']);
Route::post('/cart/send',[frontendController::class,'send_cart']);
});
Route::get('/login',[frontendController::class,'show_login'])-> name('login');
Route::post('/check_login',[frontendController::class,'check_login']);
Route::post('/logout', [frontendController::class, 'logout'])->name('logout');




Route::middleware('auth') ->group( function (){
    Route::prefix('admin') ->group( function (){
        Route::get('/',function () {return view('admin.home');}) ;
        Route::post('/product/add',[ProductController::class,'insert_product']);
        Route::get('/product/create',[ProductController::class,'add_product']);
        Route::get('/product/list',[ProductController::class,'list_product']);
        Route::get('/product/delete',[ProductController::class,'delete_product']);
        Route::get('/product/edit/{id}',[ProductController::class,'edit_product']);
        Route::post('/product/edit/{id}',[ProductController::class,'update_product']);

        Route::post('/slide/add',[SlideController::class,'insert_slide']);
        Route::get('/slide/create',[SlideController::class,'add_slide']);
        Route::get('/slide/list',[SlideController::class,'list_slide']);
        Route::get('/slide/delete',[SlideController::class,'delete_slide']);
        Route::get('/slide/edit/{id}',[SlideController::class,'edit_slide']);
        Route::post('/slide/edit/{id}',[SlideController::class,'update_slide']);
        Route::get('/order/delete',[OrderController::class,'delete_order']);
        Route::get('/order/list',[OrderController::class,'list_order']);
        Route::get('/order/detail/{order_detail}',[OrderController::class,'detail_order']);
    });
});
Route::post('/upload',[UploadController::class,'upload']);
Route::post('/uploads',[UploadController::class,'uploadImage']);
