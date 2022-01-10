<?php

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
    return view('saveip.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/insert", [App\Http\Controllers\userSaveController::class, "index"]);
Route::post('/saveip', [App\Http\Controllers\userSaveController::class, "saveIp"])->name("saveip");
//get show all
Route::get('/showall', [App\Http\Controllers\userSaveController::class, "ShowAll"])->name("showall");
//get for vote
Route::get('/vote', [App\Http\Controllers\userSaveController::class, "vote"])->name("vote");
