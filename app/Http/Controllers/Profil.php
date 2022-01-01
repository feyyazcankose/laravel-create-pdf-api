<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profil extends Controller
{
    public function profilListele()
    {

        $user=Auth::user();
        return view('companent.profile',$user);
    }
}
