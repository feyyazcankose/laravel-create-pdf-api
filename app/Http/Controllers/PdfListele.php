<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Pdf;
use App\Models\User;

class PdfListele extends Controller
{
  public function sonuclar()
  {
      $user = Auth::user();
      $basvurular=Pdf::where("ogrenci_id",$user->_id)
      ->where(function($query){
        $query->orWhere("durum",3)->orWhere("durum",2);
      })
      ->get();
      //return $basvurular[1]->basvuru_tipi;
      foreach ($basvurular as  $basvuru) {
        if($basvuru->durum==2)
          $basvuru["_durum"]="Onaylandı";
        else
          $basvuru["_durum"]="Reddedildi";


      }
      return view("companent.listele")->with('basvurular', $basvurular);;

  }

  public function beklemede()
  {

    $user = Auth::user();

        $basvurular=Pdf::where("ogrenci_id",$user->_id)
        ->where('durum', '=', 1)
        ->get();


      //dd($basvurular[0]);
      //return $basvurular[1]->basvuru_tipi;
      foreach ($basvurular as  $basvuru) {
        if($basvuru->durum==1)
          $basvuru["_durum"]="Beklemede";

      }
      return view("companent.listele")->with('basvurular', $basvurular);

  }

  public function listeleAuth()
  {
    $user = Auth::user();
    //Bekleme
    $bekleme=Pdf::where("ogrenci_id",$user->_id)->where('durum', '=', 1)->get();
    //Onaylandı
    $onay=Pdf::where("ogrenci_id",$user->_id)->where('durum', '=', 2)->get();
    //red
    $red=Pdf::where("ogrenci_id",$user->_id)->where('durum', '=', 3)->get();

    //Kulancı isimlerini alma

    //dd($bekleme);
    if($bekleme!=null)
    foreach ($bekleme as  $item) {
        $item["_durum"]="Beklemede";
    }

    if($onay!=null)
    foreach ($onay as  $item) {
        $item["_durum"]="Onaylandı";
    }

    if($red!=null)
    foreach ($red as  $item) {
        $item["_durum"]="Reddedildi";
    }


    $basvurular=[
      "bekleme"=>$bekleme,
      "onay"=>$onay,
      "red"=>$red,

    ];


    return view("companent.listele")->with('basvurular', $basvurular);



  }

  public function listele($tip)
  {
      $user = Auth::user();
      //Bekleme
      $bekleme=Pdf::where("basvuru_tipi",$tip)->where('durum', '=', 1)->get();
      //Onaylandı
      $onay=Pdf::where("basvuru_tipi",$tip)->where('durum', '=', 2)->get();
      //red
      $red=Pdf::where("basvuru_tipi",$tip)->where('durum', '=', 3)->get();

      //Kulancı isimlerini alma

      //dd($bekleme);
      if($bekleme!=null)
      foreach ($bekleme as  $item) {
          $item["ogrenci_name"]=User::where("_id",$item->ogrenci_id)->first()->name;
          $item["_durum"]="Beklemede";
      }

      if($onay!=null)
      foreach ($onay as  $item) {
          $item["ogrenci_name"]=User::where("_id",$item->ogrenci_id)->first()->name;
          $item["_durum"]="Onaylandı";
      }

      if($red!=null)
      foreach ($red as  $item) {
          $item["ogrenci_name"]=User::where("_id",$item->ogrenci_id)->first()->name;
          $item["_durum"]="Reddedildi";
      }


      $basvurular=[
        "bekleme"=>$bekleme,
        "onay"=>$onay,
        "red"=>$red,
        "basvuru_tipi"=>$tip
      ];


      return view("admin.listele")->with('basvurular', $basvurular);

  }



}
