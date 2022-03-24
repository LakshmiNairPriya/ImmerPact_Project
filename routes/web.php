<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\CustomerController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard',function(){
        return view('admin');
    });
    Route::get('/customerform','App\Http\Controllers\CustomerController@CustomerAdd');
    Route::post('/customercreate','App\Http\Controllers\CustomerController@CustomerCreate');
    Route::get('/customerlist','App\Http\Controllers\CustomerController@CustomerList');
    Route::get('editcustomer/{id}',[CustomerController::class,'editCustomer']);
    Route::put('updatecustomer/{id}',[CustomerController::class,'updateCustomer']);
    Route::get('/delete/{id}',[CustomerController::class,'deleteCustomer']);
}); 
