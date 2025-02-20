<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('ajax',[AjaxController::class,'index'])->name('index.home');
Route::post('ajax',[AjaxController::class,'ajax'])->name('ajax');

