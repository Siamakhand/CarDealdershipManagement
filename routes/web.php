<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CarController;
use App\Http\Controllers\admin\SellController;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\EmployesController;
use App\Http\Controllers\admin\AnalyticsController;

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
    return view('master');
})->name('master');

/*  cars routing    */

Route::get('/car/view',[CarController::class,'view'])-> name('car.view');
Route::get('/car/add',[CarController::class,'add'])-> name('car.add');
Route::post('/car/show',[CarController::class,'show'])->name('car.show');
Route::get('/car/available',[CarController::class,'available'])-> name('car.available');
Route::get('/car/sold',[CarController::class,'sold'])-> name('car.sold');
Route::get('/car/category',[CarController::class,'category'])-> name('car.category');

// edit car
Route::get('/form/edit/car/{id}',[CarController::class,'form'])->name('car.form');
Route::put('/form/edit/car/{id}',[CarController::class,'edit'])->name('car.edit');
Route::get('/form/delete/car/{id}',[CarController::class,'delete'])->name('car.delete');



// analytics 
Route::get('/analytics',[AnalyticsController::class,'view'])-> name('analytics.view');

/* Customers */
Route::get('/customers',[CustomerController::class,'view'])-> name('customers.view');

/* Booking */
Route::get('/Booking',[BookingController::class,'view'])-> name('booking.view');

/* Sells */
Route::get('/Sells/form',[SellController::class,'view'])-> name('sell.view');
Route::get('/Sells/list',[SellController::class,'add'])-> name('sell.List');
Route::post('/Sells/show',[SellController::class,'show'])-> name('sell.show');

/*  employes routing    */
Route::get('/employee/form',[EmployesController::class,'view'])-> name('employee.view');
Route::get('/employee/list',[EmployesController::class,'add'])-> name('employee.list');
Route::post('/employee/show',[EmployesController::class,'show'])->name('employee.show');

// edit employee
Route::get('/form/edit/employee/{id}',[EmployesController::class,'form'])->name('employee.form');
Route::put('/form/edit/employee/{id}',[EmployesController::class,'edit'])->name('employee.edit');
Route::get('/form/delete/employee/{id}',[EmployesController::class,'delete'])->name('employee.delete');

/* payment history */
Route::get('/payment',[PaymentController::class,'view'])-> name('payment.view');


