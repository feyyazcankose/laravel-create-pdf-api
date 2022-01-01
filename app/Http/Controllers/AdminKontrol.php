<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminKontrol extends Controller
{



    public function home()
    {

      $user = Auth::user();


      $basvurular=["ÇAP Başvurusu","Yaz Okulu Başvurusu","DGS Başvurusu","Ders İn. Başvurusu","Yatay Geçiş Başvurusu"];
      $icon=["fa fa-exchange-alt","fa fa-exchange-alt","fa fa-chalkboard-teacher","fa fa-copy","fa fa-check-double"];
      if($user->rol==2)
      {
        //$rote=["listele_cap","listele_yaz","listele_dgs","listele_ders","listele_yatay"];
        $rote=["cap","yaz","dgs","ders","yatay"];
        $button="Listele";

        $rote2=["rapor","basvuru"];
        $title=["Raporlar","Başvurular"];

      }
      else
      {
        $rote=["basvur_cap","basvur_yaz","basvur_dgs","basvur_ders","basvur_yatay"];
        $button="Oluştur";

        $rote2=["basvurularim","basvuru"];
        $title=["Gönderilen Formlar","Başvuru"];
      }



      $data=[
        "rote"=>$rote,
        "basvurular"=>$basvurular,
        'button'=>$button,
        'rol'=>$user->rol,
        'icon'=>$icon,
        'rote2'=>$rote2,
        'title'=>$title
      ];
      return view("home")->with('data', $data);
    }


}
