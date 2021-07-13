<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminOperator
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->level == 'admin' || Auth::user()->level == 'operator') {
            return $next($request);
        }
        
        return redirect('/');
    }
}
