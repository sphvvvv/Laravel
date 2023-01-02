<?php

namespace App\Http\Middleware;

use Closure;

class ProductMiddleware
{
    public function handle($request, Closure $next)
    {
print __FILE__. "<br>";
        return $next($request);  //前処理
    }
}
