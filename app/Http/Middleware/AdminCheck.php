<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
    *
    * Handle an incoming request.*
    * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    */
public function handle(Request $request, Closure $next): Response{
    if (! $request->user()) {
        return redirect('login');}

        else if ($request->user()->usertype == 'admin') {
            return $next($request);
        }

        else if ($request->user()->usertype == 'user') {
            return redirect('member');

        }
        else{
            return redirect('dashboard');
        }
    }
}
