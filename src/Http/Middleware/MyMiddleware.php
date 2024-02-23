<?php

namespace Bitfumes\Contact\Http\Middleware;

class MyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        dump('MyMiddleware');
        return $next($request);
    }
}
