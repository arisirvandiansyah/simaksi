<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Guest
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (!Auth::user()) {
      return $next($request);
    } else {
      if (Auth::user()->role === 'Admin') {
        return redirect()->route('index.dashboard');
      } else if (Auth::user()->role === 'Pemohon') {
        return redirect()->route('index.beranda');
      }
    }
  }
}
