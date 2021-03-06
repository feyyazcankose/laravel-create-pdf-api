<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Pdf;
class PdfUpload extends Controller
{
    public function upload(Request $request)
    {
        $user = Auth::user();


        //i,ü,ö,ğ,ç Formatlı
        $username=strtolower($user->name);
        $username=str_replace(' ','_',$username);
        $username=str_replace('ı','i',$username);
        $username=str_replace('İ','i',$username);
        $username=str_replace('ü','u',$username);
        $username=str_replace('Ü','u',$username);
        $username=str_replace('ö','o',$username);
        $username=str_replace('Ö','o',$username);
        $username=str_replace('ğ','g',$username);
        $username=str_replace('Ğ','g',$username);
        $username=str_replace('ç','c',$username);
        $username=str_replace('Ç','c',$username);



        if($request!=null)
        {

          $time=Carbon::now()->format('dmYs');
          $basvuru_tip=$request->tip;

          $filename=$username.'_'.$user->ogrenci.'_'.$time.'.'.$request->pdf->getClientOriginalExtension();
          //$yukle=$request->pdf->move(public_path('pdf/'.$basvuru_tip),$filename);
          //$yukle=$request->pdf->storeAs("public/pdf/".$basvuru_tip,$filename);

          /*$path=str_replace("file:///","",public_path());
          $path=$path.'\\pdf\\'.$basvuru_tip.'\\'.$filename;*/
          $durum="";
          $yukle=Storage::disk('google')->putFileAs('',$request->pdf, $filename);
          $url = Storage::disk('google')->url($filename);
          if($yukle)
          {
              $durum="başarılı";
              Pdf::create([
                "ogrenci_id"=>$user->_id,
                "filename"=>$filename,
                "basvuru_tipi"=>$basvuru_tip,
                "url"=>$url,
                'durum'=>1,
              ]);

          }
          else
            $durum="başarısız";
          $data=[
            "durum"=>$durum
          ];

          return view('basvuru.'.$basvuru_tip,$data);

        }

          return "Dosya Seçilmedi!";

    }
}
