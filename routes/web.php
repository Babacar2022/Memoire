<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/', [HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect', [HomeController::class,'redirect']);
Route::get('/view_catagory', [AdminController::class,'view_catagory']);
Route::post('/add_catagory', [AdminController::class,'add_catagory']);
Route::get('/delete/{id}', [AdminController::class,'delete']);

// Route view_catagory2
Route::get('/view_catagory2', [AdminController::class,'view_catagory2']);
Route::post('/add_catagory2', [AdminController::class,'add_catagory2']);
Route::get('/delete2/{id}', [AdminController::class,'delete2']);

// Route view_catagory3
Route::get('/view_catagory3', [AdminController::class,'view_catagory3']);
Route::post('/add_catagory3', [AdminController::class,'add_catagory3']);
Route::post('/add_hos', [AdminController::class,'add_hos']);
Route::get('/update_hos/{id}', [AdminController::class,'update_hos']);


