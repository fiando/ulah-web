<?php

namespace App\Http\Middleware;

use Closure;

class CheckSiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $session = $request->session()->get('level');
      if ($session == 'siswa' || $session == 'orang_tua') {
        return $next($request);
      }
      return redirect('login');
    }
}
