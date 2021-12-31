<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class RolKontrol
{

    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if($user->rol=="2")
          return $next($request);

        return redirect()->back();
    }
}
