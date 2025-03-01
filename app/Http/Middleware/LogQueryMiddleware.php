<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LogQueryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        DB::listen(function ($query) {
            $sql = $query->sql;
            $bindings = json_encode($query->bindings);

            if (stripos($sql, 'insert into') === 0) {
                $action = 'INSERT';
            } elseif (stripos($sql, 'update') === 0) {
                $action = 'UPDATE';
            } elseif (stripos($sql, 'delete from') === 0) {
                $action = 'DELETE';
            } else {
                $action = 'OTHER';
            }

            Log::info("Thao tác: $action | SQL: $sql | Dữ liệu: $bindings");
        });

        return $next($request);
    }
}
