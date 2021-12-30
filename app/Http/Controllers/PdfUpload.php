<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class PdfUpload extends Controller
{
    public function upload(Request $request)
    {
        $user = Auth::user();
        $time=Carbon::now()->format('dmYs');

        //i,ü,ö,ğ,ç Formatlı
        $username=str_replace(' ','_',strtolower($user->name));
        $username=str_replace('ı','i',$username);
        $username=str_replace('ü','u',$username);
        $username=str_replace('ö','o',$username);
        $username=str_replace('ğ','g',$username);
        $username=str_replace('ç','c',$username);



        $filename=$username.'_'.$user->ogrenci.'_'.$time.'.'.$request->pdf->getClientOriginalExtension();
        $yukle=$request->pdf->move(public_path('pdf/'.$request->tip),$filename);

        if($yukle)
          return "Başarılı";

        return "Başarısız";

    }
}
