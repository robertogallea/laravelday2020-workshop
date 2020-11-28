<?php

namespace Workshop\Core\Http\Middleware;

class SelectResponse
{
    public function handle($request, \Closure $next, ...$guards)
    {
        $responseType = $request['responseType'];

        if ($responseType) {
            \Presenter::select($responseType);
        }

        return $next($request);
    }
}
