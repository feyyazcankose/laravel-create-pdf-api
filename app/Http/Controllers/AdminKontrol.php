<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminKontrol extends Controller
{

    public function home()
    {

      $user = Auth::user();

      $rote=[];
      $title=[];

      if($user->rol==2){
        $rote=["rapor","basvuru"];
        $title=["Raporlar","Başvurular"];

      }
      else{
        $rote=["basvurularim","basvuru"];
        $title=["Gönderilen Formlar","Başvuru Oluştur"];

      }

      $data=[
        "rote"=>$rote,
        "title"=>$title
      ];
      return view("home")->with('data', $data);
    }


    public function basvurular()
    {

      $user = Auth::user();

      $rote=[];
      $button="";
      $basvurular=["ÇAP Başvurusu","Yaz Okulu Başvurusu","DGS Başvurusu","Ders İntikabı Başvurusu","Yatay Geçiş Başvurusu"];

      if($user->rol==2)
      {
        //$rote=["listele_cap","listele_yaz","listele_dgs","listele_ders","listele_yatay"];
        $rote=["cap","yaz","dgs","ders","yatay"];
        $button="Listele";

      }
      else
      {
        $rote=["basvur_cap","basvur_yaz","basvur_dgs","basvur_ders","basvur_yatay"];
        $button="Oluştur";
      }


      $data=[
        "rote"=>$rote,
        "basvurular"=>$basvurular,
        'button'=>$button,
        'rol'=>$user->rol
      ];
      return view("basvuru")->with('data', $data);
    }


}
