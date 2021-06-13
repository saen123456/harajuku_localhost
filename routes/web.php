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
Route::get('/accept', function(){
    return view('/page/accept');
});
Route::get('/manage_store01-1', function(){
    return view('/page/manage_store01-1');
});
Route::get('/manage_store02-1', function(){
    return view('/page/manage_store02-1');
});
Route::get('/manage_store02', function(){
    return view('/page/manage_store02');
});
Route::get('/manage_store03', function(){
    return view('/page/manage_store03');
});
Route::get('/manage_store04', function(){
    return view('/page/manage_store04');
});
Route::get('/send', function(){
    return view('/page/send');
});
Route::get('/succes', function(){
    return view('/page/succes');
});
Route::get('/test_box', function(){
    return view('/page/test_box');
});
