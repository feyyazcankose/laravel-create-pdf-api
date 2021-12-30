<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Userauth extends Controller
{
    public function user()
    {
      $user = Auth::user();
      //dd($user);
      return $user->_id;
    }
}
