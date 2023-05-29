<?php
use App\Http\Controllers\productController;
use App\Http\Controllers\buyerController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\artistController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;


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
    return view('home',[
        'title' => 'Home'
    ]);
})->name('home');

// make route to browser page
Route::get('/browse',[productController::class,'showProductBrowse'] ,function () {
    return view('browse',[
        'title' => 'Browse'
    ]);
})->name('browser');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('dashboard/add',[productController::class,'randomCode'] ,function () {
    return view('addproduct');
})->middleware(['auth'])->name('addproduct');

Route::get('/browse/{code_product}',[productController::class,'showProductdetail'],function(){
    return view('productdetail');
})->middleware(['auth'])->name('productdetail');


// Artist ROUTE
Route::get('/dashboard/payment',[artistController::class,'paymentList'])->middleware(['auth'])->name('payment');
Route::post('/dashboard/payment',[artistController::class,'paymentStore'])->middleware(['auth'])->name('paymentPost');


// Buyer ROUTE
Route::get('dashboard/tracking',function () {
    return view('buyer.trackshipping');
})->middleware(['auth'])->name('trackshipping');

Route::get('dashboard/buyerpaymentlist',[buyerController::class,'showBuyerPayment'])->middleware(['auth'])->name('buyerpaymentlist');
Route::get('dashboard/paymentwarning',[buyerController::class,'paymentFinishAlert'])->middleware(['auth']);

Route::get('dashboard/buyerpaymentlist/{transaction_code}/confirm',[buyerController::class,'showBuyerPaymentDetail'])->middleware(['auth'])->name('buyerpaymentlistdetail');
Route::put('/update/{transaction_code}',[buyerController::class,'paymentUpdate'])->middleware(['auth'])->name('confirmPayment');



// admin ROUTE
Route::get('dashboard/userdata',[adminController::class,'showUser'],function () {
    return view('admin.adminUserdata');
})->middleware(['auth'])->name('adminUserdata');

Route::get('dashboard/paymentlist',[adminController::class,'showTransaction'],function () {
    return view('admin.paymentlist');
})->middleware(['auth'])->name('paymentlist');

Route::get('dashboard/admindata', [adminController::class,'showDataproduct'],function () {
    return view('showproductadmin');
})->middleware(['auth'])->name('showproductAdmin');

// admin and artist
Route::get('dashboard/printondemand',function () {
    return view('printOnDemand');
})->middleware(['auth'])->name('printondemand');

Route::get('dashboard/works', [productController::class,'index'],function () {
    return view('showproduct');
})->middleware(['auth'])->name('showproduct');




// For Backend
// for method post on addproduct page
Route::post('/dashboard/add',[productController::class,'store'])->name('insertdata');
// delete product
Route::get('/delete/{code_product}',[productController::class,'destroy'],'delete-data')->name('delete-data');

