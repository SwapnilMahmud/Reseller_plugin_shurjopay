<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShurjopayController;
use App\Http\Controllers\AdminController;
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
    return view('/login');
});

//Route for admin panel
// Route::get('pass',[AdminController::class,'updatepassword']);
Route::get('admin',[AdminController::class,'showData']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');
Route::group(['middleware'=>'admin_auth'],function(){
// Route::resource('transactiontables',AdminController::class);   
Route::get('admin_panel',[AdminController::class,'dashboard']);
//for datatable
Route::get('/bookd', function () {
    return view('bookd');
});
Route::resource('books', AdminController::class);
//for logout
Route::get('admin/logout',function(){
    session()->forget('ADMIN_LOGIN');
    session()->forget('ADMIN_ID');
    session()->flash('error','Logout sucessfully');
    return redirect('admin');
});

//datatable
Route::get('/fetch-employee', [AdminController::class, 'fetchemployee']);
Route::get('/transactiontables', function () {
    return view('transactiontables');
});

});
//Route for shurjoPay 
Route::get('/domainpay', [ShurjopayController::class, 'checkout']);
Route::get('/verify',[ShurjopayController::class, 'verify']);
Route::post('domain_return',[ShurjopayController::class, 'ReturnPay']);



// Route::get('/transactiontable',[AdminController::class,'showdata']);

