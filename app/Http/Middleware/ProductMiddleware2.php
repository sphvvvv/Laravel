<?php

namespace App\Http\Middleware;

use Closure;

class ProductMiddleware2
{
    public function handle($request, Closure $next)
    {
print __FILE__. "<br>";
        $response = $next($request);  //前処理

        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        $response->setContent($content);

        return $response;  //後処理
    }
}
