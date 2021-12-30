<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userauth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/auth', [Userauth::class, 'user']);


Route::get('cappdf' ,[App\Http\Controllers\pdfController::class,"cappdf"]
);
Route::get('yazpdf' ,[App\Http\Controllers\pdfController::class,"yazpdf"]
);
Route::get('derspdf' ,[App\Http\Controllers\pdfController::class,"derspdf"]
);
Route::get('dgspdf' ,[App\Http\Controllers\pdfController::class,"dgspdf"]
);
Route::get('yataypdf' ,[App\Http\Controllers\pdfController::class,"yataypdf"]
);
