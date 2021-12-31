<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;
use App\Models\User;


class Rapor extends Controller
{
    public function raporlar()
    {

      $bekleyen=count(Pdf::where("durum",1)->get());
      $onaylanan=count(Pdf::where("durum",2)->get());
      $red=count(Pdf::where("durum",3)->get());
      $toplamPdf=$bekleyen+$onaylanan+$red;


      $kullanici=count(User::where("rol","1")->get());


      $data=[
        "bekleyen"=>$bekleyen,
        "onay"=>$onaylanan,
        "red"=>$red,
        "toplam_pdf"=>$toplamPdf,
        "kullanici"=>$kullanici,
      ];

      return view("admin.rapor",$data);


    }

    public function kullanici()
    {
      $kullanicilar=User::where("rol","1")->get();

      foreach ($kullanicilar as $kullanici)
      $kullanici['basvuru_sayisi']=count(Pdf::where("ogrenci_id",$kullanici->_id)->get());

      return view("admin.kullanicilar")->with("kullanicilar",$kullanicilar);
    }

}
