<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group that
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::any('/destroy', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');

Route::get('/edit/{id}', [CustomerController::class, 'editpage'])->name('edit');
Route::any('/update/', [CustomerController::class, 'updatepage'])->name('update');
Route::get('/customers', [customerController::class, 'index'])->name('customers');
Route::post('/add_customers', [customerController::class, 'addcustomers'])->name('add_customers');

