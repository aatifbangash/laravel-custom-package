<?php

namespace Bitfumes\Contact\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class MyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        dump('MyMiddleware');
        return $next($request);
    }
}
