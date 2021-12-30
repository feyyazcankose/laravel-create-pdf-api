<?php


use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Userauth;
use App\Http\Controllers\PdfUpload;
use App\Http\Controllers\Director;
use App\Http\Controllers\PdfListele;

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
Route::post('cappdf' ,[pdfController::class,"cappdf"])->name('create_cap');
Route::post('yazpdf' ,[pdfController::class,"yazpdf"])->name('create_yaz');
Route::post('derspdf' ,[pdfController::class,"derspdf"])->name('create_ders');
Route::post('dgspdf' ,[pdfController::class,"dgspdf"])->name('create_dgs');
Route::post('yataypdf' ,[pdfController::class,"yataypdf"])->name('create_yatay');

//Başvuruların yapılacığı rotalar
Route::get('basvur/cap',function (){return  view('basvuru.cap',["durum"=>"0"]);});
Route::get('basvur/yaz',function (){return  view('basvuru.yaz');});
Route::get('basvur/dgs',function (){return  view('basvuru.dgs');});
Route::get('basvur/yatay',function (){return  view('basvuru.yatay');});
Route::get('basvur/ders',function (){return  view('basvuru.ders');});

//Companent
Route::get('basvurularim',function (){return  view('companent.basvurularim');})->name('basvurularim');




//PDF Yükleme
Route::post('pdfupload',[PdfUpload::class, 'upload'])->name('pdf_yukle');

//PDF Listeleme
Route::get('sonuc' ,[PdfListele::class,"liste"])->name('sonuc');
