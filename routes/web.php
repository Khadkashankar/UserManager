<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('user.index');
// });
// Route::post('/',[UserController::class,'index']);
// Route::post('/',[UserController::class,'register']);
Route::get('/',[UserController::class,'index'])->name('user.index');
Route::post('user/store',[UserController::class,'userStore'])->name('user.store');
Route::get('show',[UserController::class,'userShow']);
Route::get('delete/{id}',[UserController::class,'userDelete']);
Route::get('edit/{id}',[UserController::class,'userEdit']);
Route::post('addDetail/{id}',[UserController::class,'addDetail']);