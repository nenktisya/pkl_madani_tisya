<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\Admincontroller;

// Route::get('/', function () {
// return view('welcome');
// });

Route::get('/',[Admincontroller::class,'index']);
Route::get('/hello',[Admincontroller::class,'hello'])->name('dashboard');
Route::get('/banner',[Admincontroller::class,'banner'])->name('banner');
Route::get('/product',[Admincontroller::class,'product'])->name('product');
Route::get('/addbanner',[Admincontroller::class,'addbanner'])->name('addbanner');

