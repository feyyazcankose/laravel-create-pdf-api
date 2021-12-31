<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;

class PdfGuncelle extends Controller
{
    public function guncelle(Request $request)
    {
        Pdf::where('_id',$request->pdfid)->update([
          "durum"=>intval($request->durum),
        ]);

        return redirect()->back();

    }
}
