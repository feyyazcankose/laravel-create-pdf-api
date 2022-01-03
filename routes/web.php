<?php


use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Userauth;
use App\Http\Controllers\PdfUpload;
use App\Http\Controllers\Director;
use App\Http\Controllers\PdfListele;
use App\Http\Controllers\PdfGuncelle;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\AdminKontrol;
use App\Http\Controllers\GoogleUpload;
use App\Http\Controllers\Profil;
use App\Http\Controllers\Rapor;




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

Route::middleware('auth')->get('/home', [AdminKontrol::class, 'home'])->name('home');
//Route::get('/auth', [Userauth::class, 'user']);


//Pdf oluşturma
Route::post('cappdf' ,[pdfController::class,"cappdf"])->name('create_cap');
Route::post('yazpdf' ,[pdfController::class,"yazpdf"])->name('create_yaz');
Route::post('derspdf' ,[pdfController::class,"derspdf"])->name('create_ders');
Route::post('dgspdf' ,[pdfController::class,"dgspdf"])->name('create_dgs');
Route::post('yataypdf' ,[pdfController::class,"yataypdf"])->name('create_yatay');

//Başvuruların yapılacığı rotalar
Route::get('basvur/cap',function (){return  view('basvuru.cap',["durum"=>"0"]);})->name("basvur_cap");
Route::get('basvur/yaz',function (){return  view('basvuru.yaz',["durum"=>"0"]);})->name("basvur_yaz");
Route::get('basvur/dgs',function (){return  view('basvuru.dgs',["durum"=>"0"]);})->name("basvur_dgs");
Route::get('basvur/yatay',function (){return  view('basvuru.yatay',["durum"=>"0"]);})->name("basvur_yatay");
Route::get('basvur/ders',function (){return  view('basvuru.ders',["durum"=>"0"]);})->name("basvur_ders");

//Companent
//Route::get('basvurular',function (){return  view('companent.basvurularim');})->name('basvurularim');
Route::get('basvur',[AdminKontrol::class, 'home'])->name('basvuru');

//PDF Yükleme
Route::post('pdfupload',[PdfUpload::class, 'upload'])->name('pdf_yukle');

//PDF Listeleme
//Route::get('sonuc' ,[PdfListele::class,"sonuclar"])->name('sonuc');
Route::get('basvuru/listele' ,[PdfListele::class,"listeleAuth"])->name('basvurularim');
Route::middleware('auth')->get('profil' ,[Profil::class,"profilListele"])->name('profil');







//Admin Hareketleri
Route::middleware('adminkontrol')->get('admin/raporlar' ,[Rapor::class,"raporlar"])->name('rapor');
Route::middleware('adminkontrol')->get('admin/kullanicilar' ,[Rapor::class,"kullanici"])->name('kullanici');
Route::middleware('adminkontrol')->get('basvuru/listele/{tip}' ,[PdfListele::class,"listele"]);
//PDF Güncelleme
Route::middleware('adminkontrol')->post('guncelle' ,[PdfGuncelle::class,"guncelle"])->name('guncelle');
