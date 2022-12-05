<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Session;
use Closure;

class Authenticate
{

    public function handle($request, Closure $next){
        if (! Session::has('user')){
            return redirect('/login');
        }
        return $next($request);
    }
}
