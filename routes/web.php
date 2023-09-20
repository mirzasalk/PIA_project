<?php

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

Route::get('/kursevi', function () {
    return view('kursevi',[
        'naslov'=>"Poslednji kursevi",
        "kursevi"=> Course::all()
    ]);
});
Route::get('/kurs/{kurs}', function (Course $kurs) {
    return view('kurs',[
        "kurs"=> $kurs
    ]);
});
Route::get('/', function () {
    return view('layout');
});
