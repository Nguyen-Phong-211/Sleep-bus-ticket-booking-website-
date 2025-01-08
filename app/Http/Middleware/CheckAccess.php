<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class CheckAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // $restrictedUrls = [
        //     'authu',
        //     'setting'
        // ];

        // if (in_array($request->path(), $restrictedUrls)) {
        //     abort(404);
        // }

        return $next($request);
    }
}
