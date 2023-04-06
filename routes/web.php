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
    return view('index');
});

Route::get('/admin',[adminController::class,'index'])->name('admin-home');
Route::get('/admin/new-article',[adminController::class,'create'])->name('articles-create');
Route::post('/admin',[adminController::class,'store'])->name('articles-store');
