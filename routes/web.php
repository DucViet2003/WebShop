<?php

use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SlideController;
use App\Http\Controllers\admin\UploadController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\SlideFrontend;
use Illuminate\Support\Facades\Route;
Route::get('/home',[frontendController::class,'index']);
Route::get('/shop/product/{id}',[frontendController::class,'show_product']);
Route::get('/slide', [SlideFrontend::class, 'showSlide'])->name('shop.part.slide');

Route::get('/shop',[frontendController::class,'show_allhotproduct']);

Route::get('/shop/order_confirm',[frontendController::class,'show_orderconfirm']);
Route::get('/shop/order_success',function () {return view('shop.order_success');});


Route::post('/shop/cart/add',[frontendController::class,'add_cart']);
Route::get('/shop/cart',[frontendController::class,'show_cart']);
// Route::get('/shop/cart',function () {return view('shop.cart');});
Route::get('/shop/cart/delete/{id}',[frontendController::class,'delete_cart']);
Route::post('/shop/cart/update',[frontendController::class,'update_cart']);
Route::post('/shop/cart/send',[frontendController::class,'send_cart']);















Route::get('/admin',function () {return view('admin.home');});
Route::post('/admin/product/add',[ProductController::class,'insert_product']);
Route::get('/admin/product/create',[ProductController::class,'add_product']);
Route::get('/admin/product/list',[ProductController::class,'list_product']);
Route::get('/admin/product/delete',[ProductController::class,'delete_product']);
Route::get('/admin/product/edit/{id}',[ProductController::class,'edit_product']);
Route::post('/admin/product/edit/{id}',[ProductController::class,'update_product']);

Route::post('/admin/slide/add',[SlideController::class,'insert_slide']);
Route::get('/admin/slide/create',[SlideController::class,'add_slide']);
Route::get('/admin/slide/list',[SlideController::class,'list_slide']);
Route::get('/admin/slide/delete',[SlideController::class,'delete_slide']);
Route::get('/admin/slide/edit/{id}',[SlideController::class,'edit_slide']);
Route::post('/admin/slide/edit/{id}',[SlideController::class,'update_slide']);

Route::get('/admin/order/list',[OrderController::class,'list_order']);
Route::get('/admin/order/detail/{order_detail}',[OrderController::class,'detail_order']);
//upload
Route::post('/upload',[UploadController::class,'upload']);
Route::post('/uploads',[UploadController::class,'uploadImage']);
