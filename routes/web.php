<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PDFController;

// use App\Http\Controllers\Auth;
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
    //  echo "f";
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
//     Route::get('admin/home', [HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');


// Route::get('/makequiz', [QuizController::class, 'index'])->name('makequiz.index');

// Route::get('/create', [QuizController::class, 'create'])->name('makequiz.create');

// Route::post('/store', [QuizController::class, 'store'])->name('makequiz.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('layouts.inc.admin-navbar');





Route::get('/forget-password', [ForgotPasswordController::class,'getEmail']);

Route::post('/forget-passwords', [ForgotPasswordController::class,'postEmail'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class,'getPassword']);

Route::post('/reset-password', [ResetPasswordController::class,'updatePassword']);

// Route::post('forgot-password', [ForgotPasswordController::class, 'passwordResetmail'])->name('password.reset.mail');
//product
Route::get('/add-product',[ProductController::class,'addProduct'])->name('product.addproduct');

Route::post('/save-product',[ProductController::class,'saveProduct'])->name('saveProduct');

Route::get('/show-product', [ProductController::class, 'showproduct'])->name('product.showproduct');

Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('editProduct');

Route::put('/update-product/{id}',[ProductController::class,'updateProduct'])->name('updateProduct');

Route::delete('/delete-product/{id}',[ProductController::class,'deleteProduct'])->name('deleteProduct');

//order

Route::get('/add-order',[OrderController::class,'addorder'])->name('order.addorder');

Route::post('/save-order',[OrderController::class,'saveorder'])->name('saveorder');

Route::get('/show-order', [OrderController::class, 'showorder'])->name('order.showorder');

Route::get('/edit-order/{id}',[OrderController::class,'editOrder'])->name('editOrder');

Route::put('/update-order/{id}',[OrderController::class,'updateOrder'])->name('updateOrder');

Route::delete('/delete-order/{id}',[OrderController::class,'deleteOrder'])->name('deleteOrder');

Route::get('generate-invoice-pdf/{id}', [OrderController::class,'generateInvoicePDF']);
