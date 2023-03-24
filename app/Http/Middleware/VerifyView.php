<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VerifyView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $challenge = explode('-', $request->path());
        $challengeNumber = $challenge[array_key_last($challenge)];
        if (in_array('bonus', $challenge)) {
            $challengeView = 'bonus-challenges.bonus-challenge-' . $challengeNumber;
        } else {
            $challengeView = 'challenges.challenge-' . $challengeNumber;
        }
        if (!view()->exists($challengeView)) {
            return redirect(RouteServiceProvider::ERROR);
        }
        return $next($request);
    }
}
