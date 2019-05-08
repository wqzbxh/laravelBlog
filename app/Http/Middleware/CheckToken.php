<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;


class CheckToken
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

        $serverToken = Cache::get('token');
        $clientToken = $request->cookie('token');
        if(!empty($clientToken) && $serverToken != $clientToken){
            return redirect()->to('http://local.laravel.top:8848/login');
        }
        return $next($request);
    }
}
