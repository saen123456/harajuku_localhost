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
Route::get('/voucher', function(){
    return view('/front/voucher');
});
Route::get('/tracking-shipping-3', function(){
    return view('/front/tracking-shipping-3');
});
Route::get('/tracking-shipping-2', function(){
    return view('/front/tracking-shipping-2');
});
Route::get('/tracking-shipping-1', function(){
    return view('/front/tracking-shipping-1');
});
Route::get('/tracking', function(){
    return view('/front/tracking');
});
Route::get('/topdeal-details', function(){
    return view('/front/topdeal-details');
});
Route::get('/topdeal_detail2', function(){
    return view('/front/topdeal_detail2');
});
Route::get('/test-tracking', function(){
    return view('/front/test-tracking');
});
Route::get('/testbenz', function(){
    return view('/front/testbenz');
});
Route::get('/restaurent', function(){
    return view('/front/restaurent');
});
Route::get('/restaurant', function(){
    return view('/front/restaurant');
});
Route::get('/register2', function(){
    return view('/front/register2');
});
Route::get('/register_rider', function(){
    return view('/front/register_rider');
});
Route::get('/register_profile', function(){
    return view('/front/register_profile');
});
Route::get('/register_index_rider', function(){
    return view('/front/register_index_rider');
});
Route::get('/register', function(){
    return view('/front/register');
});
Route::get('/regis_vendor2', function(){
    return view('/front/regis_vendor2');
});
Route::get('/regis_vendor', function(){
    return view('/front/regis_vendor');
});
Route::get('/promotion_detail', function(){
    return view('/front/promotion_detail');
});
Route::get('/promotion_item', function(){
    return view('/front/promotion_item');
});
Route::get('/promotion_food', function(){
    return view('/front/promotion_food');
});
Route::get('/promotion_detail2', function(){
    return view('/front/promotion_detail2');
});
Route::get('/promotion-detail', function(){
    return view('/front/promotion-detail');
});
Route::get('/promotion', function(){
    return view('/front/promotion');
});
Route::get('/profile', function(){
    return view('/front/profile');
});
Route::get('/productrecom_detail2', function(){
    return view('/front/productrecom_detail2');
});

