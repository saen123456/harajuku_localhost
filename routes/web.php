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