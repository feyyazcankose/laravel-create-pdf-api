<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GoogleUpload extends Controller
{
    //
    function upload(Request $request)
    {
      $deneme =Storage::disk('google')->putFileAs('',$request->file, "Dosya.pdf");
      $url = Storage::disk('google')->url("Dosya.pdf");

    }
}
