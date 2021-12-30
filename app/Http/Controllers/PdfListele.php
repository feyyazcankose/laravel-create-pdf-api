<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Pdf;

class PdfListele extends Controller
{
  public function liste()
  {
      $user = Auth::user();
      $basvurular=Pdf::where("ogrenci_id",$user->_id)->get();
      //dd($basvurular[0]);
      //return $basvurular[1]->basvuru_tipi;
      foreach ($basvurular as  $basvuru) {
        if($basvuru->durum==1)
          $basvuru["_durum"]="Beklemede";
        elseif($basvuru->durum==2)
          $basvuru["_durum"]="Onaylandı";
        else
          $basvuru["_durum"]="Reddedildi";


      }
      return view("companent.sonuclar")->with('basvurular', $basvurular);;

  }
}
