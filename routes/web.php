<?php

use App\Http\Controllers\KursContoller;
use App\Models\Course;
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

Route::get('/kursevi', [KursContoller::class, "getAll"]);

Route::get('/kurs/{kurs}', [KursContoller::class, "getById"] );

Route::get('/', function () {
    return view('layout');
});
