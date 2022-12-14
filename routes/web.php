<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/booking',  [AdminController::class,'create']);

Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
});

// Route::post('dashboard',[AdminController::class,'store'])->name('estate.store');
Route::post('estate',[AdminController::class,'store'])->name('estate.store');
Route::resource("/view.dashboard", AdminController::class);
