<?php
namespace App\Http\Controllers;

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

Route::get('/', [ManageController::class, 'index'])->name('home');
Route::get('/manage_money01',function(){
    return view('admin.manage_money01');
});
Route::get('/manage_money02',function(){
    return view('admin.manage_money02');
});
Route::get('/manage_money03',function(){
    return view('admin.manage_money03');
});
Route::get('/manage_order01',function(){
    return view('admin.manage_order01');
});
Route::get('/manage_order02',function(){
    return view('admin.manage_order02');
});
Route::get('/manage_order03',function(){
    return view('admin.manage_order03');
});
Route::get('/manage_order04',function(){
    return view('admin.manage_order04');
});
Route::get('/manage_store01',function(){
    return view('admin.manage_store01');
});
Route::get('/manage_store05',function(){
    return view('admin.manage_store05');
});
Route::get('/accept', function(){
    return view('/admin/accept');
});
Route::get('/manage_store01-1', function(){
    return view('/admin/manage_store01-1');
});
Route::get('/manage_store02-1', function(){
    return view('/admin/manage_store02-1');
});
Route::get('/manage_store02', function(){
    return view('/admin/manage_store02');
});
Route::get('/manage_store03', function(){
    return view('/admin/manage_store03');
});
Route::get('/manage_store04', function(){
    return view('/admin/manage_store04');
});
Route::get('/send', function(){
    return view('/admin/send');
});
Route::get('/succes', function(){
    return view('/admin/succes');
});
Route::get('/test_box', function(){
    return view('/admin/test_box');
});

//page user
Route::get('/about', function(){
    return view('/front/about');
});
Route::get('/allfoods', function(){
    return view('/front/allfoods');
});
Route::get('/cart', function(){
    return view('/front/cart');
});
Route::get('/checkout_1', function(){
    return view('/front/checkout_1');
});
Route::get('/checkout_2', function(){
    return view('/front/checkout_2');
});
Route::get('/checkout_3', function(){
    return view('/front/checkout_3');
});
Route::get('/config', function(){
    return view('/front/config');
});
Route::get('/config_css', function(){
    return view('/front/config_css');
});
Route::get('/contact', function(){
    return view('/front/contact');
});
Route::get('/delivery', function(){
    return view('/front/delivery');
});
Route::get('/event', function(){
    return view('/front/event');
});
Route::get('/event-detail', function(){
    return view('/front/event-detail');
});
Route::get('/faq', function(){
    return view('/front/faq');
});
Route::get('/footer', function(){
    return view('/front/footer');
});
Route::get('/forgetpassword', function(){
    return view('/front/forgetpassword');
});
Route::get('/header', function(){
    return view('/front/header');
});
Route::get('/header_home', function(){
    return view('/front/header_home');
});
Route::get('/header1', function(){
    return view('/front/header1');
});
Route::get('/index', function(){
    return view('/front/index');
});
Route::get('/index_2', function(){
    return view('/front/index_2');
});
Route::get('/login', function(){
    return view('/front/login');
});
Route::get('/menu-list', function(){
    return view('/front/menu-list');
});
Route::get('/menu-list2', function(){
    return view('/front/menu-list2');
});
Route::get('/product-detail2', function(){
    return view('/front/product-detail2');
});
Route::get('/product-details', function(){
    return view('/front/product-details');
});
Route::get('/productrecom_detail', function(){
    return view('/front/productrecom_detail');
});