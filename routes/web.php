<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserAuth;
// use App\Http\Controllers\RegisterController;

// Customer Profile Controller
use App\Http\Controllers\DataController;
use App\Models\profile;

// Customer Address Controller
use App\Http\Controllers\addresscontroller;
use App\Models\address;


// Admin Login Controller
use App\Http\Controllers\AdminAuth;
use App\Models\admin_login;

// User Login Controller
use App\Http\Controllers\signupController;
use App\Models\signup;

// Check_Address_Details in Cart Orders
use App\http\controllers\checkoutaddressController;
use App\Models\check_address;


use App\Http\Controllers\ProductController;

// Mail Send in Laravel
 use App\Http\Controllers\forgetmailController;
 use App\Models\forget_password;

use App\Mail\SendEmailUsingGmail;
use Illuminate\Support\Facades\Mail;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User Profile

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/account-recovery', function () {
    return view('account-recovery');
});

Route::get('/password-recovery', function () {
    return view('password-recovery');
});

Route::get('/recovery-password', function () {
    return view('recovery-password');
});

Route::get('/account-renew', function () {
    return view('account-renew');
});

Route::get('/download_app', function () {
    return view('download_app');
});

// Product List

Route::get('/welcome/darkfantasy', function () {
    return view('waghbakri');
});

// SignIn Login

Route::get("/user",[UserAuth::class,'userLogin']);

// Account Profile

Route::get('/account-profile', function () {
    return view('account-profile');
});

Route::get('/account-address', function () {
    return view('account-address');
});

Route::get('/account-order', function () {
    return view('account-order');
});

// Admin Profile

// Admin DB

Route::get('/admin-dashboard', [AdminAuth::class, 'login'])->name('login');
Route::get('/admin-dashboard', [AdminAuth::class, 'submit'])->name('submit');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/admin-dashboard', function () {
    return view('admin-dashboard');
});

Route::get('/admin/inventory', function(){
    return view('inventory');
});


// DB 

Route::get('/db', function () {
    return view('db');
});


// Customer Profile DB

Route::get('db', [DataController::class, 'index']);
Route::get('db', [DataController::class, 'account']);


// Customer Order DB

Route::get('data', [addresscontroller::class, 'default'])->name('default');
Route::get('data', [addresscontroller::class, 'send'])->name('send');

// Add Cart Product View

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/checkout_details', function(){
    return view('checkout_details');
});

Route::get('/checkout_shipping', function(){
    return view('checkout_shipping');
});

Route::get('/checkout_payment', function(){
    return view('checkout_payment');
});

Route::get('/chackout-review', function(){
    return view('chackout-review');
});

Route::get('/complete_order', function(){
    return view('complete_order');
});

Route::get('/order_tracking', function(){
    return view('order_tracking');
});

Route::get('/check_address',[checkoutaddressController::class,'check']);
Route::get('/check_address',[checkoutaddressController::class,'checkoutaddress']);

// Sign Up User Login

Route::get('/signup-message', [signupController::class, 'user'])->name('signup');
Route::get('/signup-message', [signupController::class, 'senddata'])->name('signup');

// Route::get('/account-recovery', [App\Http\Controllers\EmailController::class, 'create']);
//  Route::get('/account-recovery', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

// Route::get('/mail-send',function()
// { 
//     Mail::to('umangmodi003@gmail.com')->send(new SendEmailUsingGmail());

//     return "<h2> User Mail Send Successfully! </h2>";
// });

// SMTP Mail System 

Route::get('/mail-send',[forgetmailController::class,'sendEmail']);
Route::get('/password-recovery',[forgetmailController::class,'validateform']);

Route::get('/data_send',[shippping::class,'senddata']);

// Route::get('/mail-send',[forgetmailController::class,'editemail']);
// Route::get('/mail-send',[forgetmailController::class,'email']);


// Route::get('/db', function () {
//     return view('db');
// });

// Route::get('db','Register@store');


// Route::get('/header', function () {
//     return view('header');
// });

// Route::get('/footer', function () {
//     return view('footer');
// });

// Route::get('/mail', function (){
//      Mail::to('umangmodi003@gmail.com')
//       ->send(new HelloMail()); 
// });

// Cart Products

Route::get('/cart', [ProductController::class, 'cart'])->name('shopping.cart');
Route::get('/Product/{id}', [ProductController::class, 'addBooktoCart'])->name('cart');