<?php

use App\Http\Controllers\Admin\ComicsController;
use App\Http\Controllers\Guest\PageController;
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


// Guest Routes
Route::get('/', [PageController::class, 'index']);

//Admin Routes
Route::resource('admin', ComicsController::class);