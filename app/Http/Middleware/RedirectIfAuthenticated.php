<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($guard =='pejabat_penilai' && Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::PEJABAT_PENILAI_HOME);
            }
            if ($guard =='atasan_pejabat_penilai' && Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::ATASAN_PEJABAT_PENILAI_HOME);
            }
            if ($guard =='kepala_urusan_kepegawaian' && Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::KEPALA_URUSAN_KEPEGAWAIAN_HOME);
            }
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::PEJABAT_PENILAI_HOME);
            }
        }

        return $next($request);
    }
}
