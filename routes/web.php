<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ChatagoryController;


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
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


Route::get('/product/view',[ProductController::class,'view'])->name('view.product');
Route::get('/product/from',[ProductController::class,'from'])->name('from.product');
Route::post('/product/store',[ProductController::class,'store'])->name('store.product');


// operation chetagory
 Route::get('/chatagory/view',[ChatagoryController::class,'view'])->name('view.chatagory');
 Route::get('/chatagory/from',[ChatagoryController::class,'from'])->name('from.chatagory');
 Route::post('/chatagory/store',[ChatagoryController::class,'store'])->name('store.chatagory');
