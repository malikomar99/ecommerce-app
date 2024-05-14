<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\productController::class, 'products'])->name('welcome');
Route::get('cart', [App\Http\Controllers\productController::class, 'cart'])->name('cart');
Route::get('about', [App\Http\Controllers\productController::class, 'about'])->name('about');
Route::get('/addtocart/{id}', [App\Http\Controllers\productController::class, 'addcart'])->name('addtocart');
Route::get('/addtocart/{id}', [App\Http\Controllers\productController::class, 'addcart'])->name('addtocart');
Route::get('removeitems/{id}', [App\Http\Controllers\productController::class, 'removeitems'])->name('removeitems');
Route::get('checkout', [App\Http\Controllers\OrderController::class, 'checkout'])->name('checkout');
Route::post('process-order', [App\Http\Controllers\OrderController::class, 'process_order'])->name('process.order');
Route::post('order', [App\Http\Controllers\OrderController::class, 'order'])->name('order');
            // admin routes
Route::group(['middleware'=>'auth'],function(){         
Route::get('admin/addproduct',[App\Http\Controllers\AdminController::class,'addproduct_form'])->name('addproduct_form');
Route::post('admin/addproduct',[App\Http\Controllers\AdminController::class,'addproduct'])->name('addproduct');
Route::get('admin/editproduct/{id}',[App\Http\Controllers\AdminController::class,'editproduct'])->name('editproduct');
Route::get('admin/products',[App\Http\Controllers\AdminController::class,'products'])->name('products');
Route::get('admin/orderitems',[App\Http\Controllers\AdminController::class,'orderitems'])->name('orderitems');
Route::post('admin/updateproduct',[App\Http\Controllers\AdminController::class, 'updateproduct'])->name("updateproduct");
Route::get('admin/dashboard',[App\Http\Controllers\AdminController::class, 'dashboard'])->name("dashboard");
Route::get('admin/customers',[App\Http\Controllers\AdminController::class, 'customers'])->name("customers");
Route::get('admin/sellingproduct',[App\Http\Controllers\OrderController::class, 'sellingproducts'])->name("sellingproduct");
Route::get('admin/deleteuser/{id}',[App\Http\Controllers\AdminController::class, 'deleteuser'])->name("deleteuser");
Route::get('admin/edituser/{id}',[App\Http\Controllers\AdminController::class, 'edituser'])->name("edituser");
Route::post('admin/updateuser',[App\Http\Controllers\AdminController::class, 'updateuser'])->name("updateuser");

Route::get('admin/deleteproduct/{id}',[App\Http\Controllers\AdminController::class, 'deleteproduct'])->name("deleteproduct");
}); 
 

