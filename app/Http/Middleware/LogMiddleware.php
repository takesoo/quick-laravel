<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
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
        $filename = '/var/log/test.log';
        if (!file_exists($filename)) {
            touch($filename);
            chmod($filename, 0666);
            }
        file_put_contents($filename, date('Y-m-d H:i:s')."\n", FILE_APPEND);
        return $next($request);
    }
}
