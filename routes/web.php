<?php


use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Userauth;
use App\Http\Controllers\PdfUpload;

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
//Route::get('/auth', [Userauth::class, 'user']);


//Pdf oluşturma
Route::post('cappdf' ,[App\Http\Controllers\pdfController::class,"cappdf"])->name('create_cap');
Route::post('yazpdf' ,[App\Http\Controllers\pdfController::class,"yazpdf"])->name('create_yaz');
Route::post('derspdf' ,[App\Http\Controllers\pdfController::class,"derspdf"])->name('create_ders');
Route::post('dgspdf' ,[App\Http\Controllers\pdfController::class,"dgspdf"])->name('create_dgs');
Route::post('yataypdf' ,[App\Http\Controllers\pdfController::class,"yataypdf"])->name('create_yatay');

//Başvuruların yapılacığı rotalar
Route::get('basvur/cap',function (){return  view('basvuru.cap');});
Route::get('basvur/yaz',function (){return  view('basvuru.yaz');});
Route::get('basvur/dgs',function (){return  view('basvuru.dgs');});
Route::get('basvur/yatay',function (){return  view('basvuru.yatay');});
Route::get('basvur/ders',function (){return  view('basvuru.ders');});


//PDF Yükleme
Route::post('pdfupload',[PdfUpload::class, 'upload'])->name('pdf_yukle');
