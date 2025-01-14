<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[UserController::class,'index'])->name('user.index');
Route::post('user/save',[UserController::class,'store'])->name('user.store');
Route::delete('user/hapus/{id}',[UserController::class,'destroy'])->name('user.destroy');