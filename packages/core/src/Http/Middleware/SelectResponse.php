<?php

namespace Workshop\Core\Http\Middleware;

class SelectResponse
{
    public function handle($request, \Closure $next, ...$guards)
    {
        $responseType = $request['responseType'];

        if ($responseType && array_key_exists($responseType, config('core.response-types'))) {
            app()->bind(
                \Workshop\Core\Presenters\ItemPresenterInterface::class,
                config('core.response-types.' . $responseType)
            );
        }

        return $next($request);
    }
}
