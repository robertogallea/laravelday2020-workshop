<?php


class SelectResponse
{
    public function handle($request, Closure $next, ...$guards)
    {
        $responseType = $request->viewType;

        if (in_array($responseType, config('core.response-types'))) {
            $this->app->bind(
                \Workshop\Core\Presenters\ItemPresenterInterface::class,
                config('core.response-types.' . $responseType)
            );
        }

        return $next;
    }
}
