<?php

use App\Http\Controllers\YourController;
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
    return view('welcome');
});

// Route::post('/insert-data', 'YourController@insertData')->name('insert.data');
// Route::post('/insert-data'',[YourController::class,'insertData'])->name('insert.data');

Route::post('/insert-data',[YourController::class,'insertData'])->name('insert.data');
