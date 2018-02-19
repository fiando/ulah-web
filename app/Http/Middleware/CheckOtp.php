<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class CheckOtp
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
      $user = \App\User::where('status','aktif')->find(Auth::id());
      $otp = $user->otp;
      if ($otp == 1) {
        $otp_valid = $request->session()->get('otp_valid');
        if ($otp_valid != true) {
          return redirect('masuk_otp');
        }
      }
        return $next($request);
    }
}
