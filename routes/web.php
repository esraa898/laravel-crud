<?php

use App\Http\Controllers\BrandsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/brands',[BrandsController::class,'index'])->name('all.brands');
Route::get('/brands/create',[BrandsController::class,'Create'])->name('create');
Route::post('/brands/store',[BrandsController::class,'store'])->name('brand.store');
Route::post('brands/delete',[BrandsController::class,'delete'])->name('delete.brand');
Route::post('brands/edit',[BrandsController::class,'edit'])->name('edit.brand');
Route::post('brands/update',[BrandsController::class,'update'])->name('update.brand');
