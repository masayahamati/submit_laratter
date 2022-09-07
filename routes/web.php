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

Route::get('/',"App\Http\Controllers\TodothingController@showList")->name("showlist");
Route::get('/createlist',"App\Http\Controllers\TodothingController@createList")->name("createlist");
Route::post('/create',"App\Http\Controllers\TodothingController@Create")->name("create");
Route::get('/{id}',"App\Http\Controllers\TodothingController@detailList")->name("detaillist");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

