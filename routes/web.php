<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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
    return view('admin.admin-image');
});

Route::get('/admin',[adminController::class,'index'])->name('admin-home');
Route::get('/admin/new-article',[adminController::class,'create'])->name('articles-create');
Route::post('/admin',[adminController::class,'store'])->name('articles-store');
Route::get('/admin/{id}', [adminController::class,'show'])->name('articles.show');
Route::get('/admin/delete/{id}',[adminController::class,'delete'])->name('articles.delete');
Route::get('/admin/edit/{id}',[adminController::class,'edit'])->name('articles.edit');
Route::post('/admin/update/{id}',[adminController::class,'update'])->name('articles-update');




