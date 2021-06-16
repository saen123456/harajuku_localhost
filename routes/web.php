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

//Route::get('/', [ManageController::class, 'index'])->name('home');
// Route::get('/',function(){
//     return view('front.index');
// });
Route::get('/', [HomeController::class, 'home_view']);

Route::get('/manage',function(){
    return view('admin.manage');
});
Route::get('/manage_money01',function(){
    return view('admin.manage_money01');
});
Route::get('/manage_money02',function(){
    return view('admin.manage_money02');
});
Route::get('/manage_money03',function(){
    return view('admin.manage_money03');
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
Route::get('/accept', function(){
    return view('/admin/accept');
});
Route::get('/manage_store01-1', function(){
    return view('/admin/manage_store01-1');
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
Route::get('/delivery', function(){
    return view('/front/delivery');
});

//admin-leader
Route::get('/manage_banner', [AdminLeaderController::class, 'manage_banner_view']);
Route::post('/uploadbanner', [AdminLeaderController::class, 'upload_banner'])->name('banner.upload.post');
Route::post('/updatebanner/{id}', [AdminLeaderController::class, 'update_banner'])->name('banner.update.post');
Route::get('/deletebanner/{id}', [AdminLeaderController::class, 'delete_banner'])->name('banner.delete.post');

Route::get('/manage_store02', [AdminShopController::class, 'manage_store02_view']);
Route::post('/manage_store02/insert', [AdminShopController::class, 'insert_food']);
Route::get('/getfoodinfo/{id}', [AdminShopController::class, 'getfoodinfo']);

Route::get('/manage_order01', [ManageController::class, 'index_lv_1']);
Route::get('/manage_order01/update/{id}', [ManageController::class, 'update_lv_1']);

Route::get('/manage_order02', [ManageController::class, 'index_lv_2']);
Route::get('/manage_order02/update/{id}', [ManageController::class, 'update_lv_2']);

Route::get('/manage_order03', [ManageController::class, 'index_lv_3']);
Route::get('/manage_order03/update/{id}', [ManageController::class, 'update_lv_3']);
Route::get('/manage_order04', [ManageController::class, 'index_lv_4']);

Route::get('/manage_store02-1/update/{id}', [AdminShopController::class, 'update_food']);
Route::post('/manage_store02-1/updatedb/{id}', [AdminShopController::class, 'update_food_db']);

Route::get('/manage_store02/delete/{id}', [AdminShopController::class, 'store_delete']);



