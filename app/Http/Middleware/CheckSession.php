<?php

namespace App\Http\Middleware;

use Closure;

class CheckSession
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
      if (!isset($session)) {
        return redirect('masuk');
      }
        return $next($request);
    }
}
