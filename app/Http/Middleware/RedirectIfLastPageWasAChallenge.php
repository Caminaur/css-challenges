<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RedirectIfLastPageWasAChallenge
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
        $url = $request->url();
        $endpoint = explode(':8000', $url)['1'];
        $lastPage = Session::get('lastpage');

        // Verificamos que el URL visitado sea / o home
        if ($this->verifyURL($endpoint) && $lastPage != null) {
            // Redireccionamos al ultimo desafío
            return redirect(Session::get('lastpage'));
        }

        return $next($request);
    }


    /**
     *  Recieves an endpoint and returns a bool
     * 
     * @param String $endpoint
     * 
     * @return bool
     */
    private function verifyURL($endpoint)
    {
        return $endpoint == '' || $endpoint == '/home';
    }
}
