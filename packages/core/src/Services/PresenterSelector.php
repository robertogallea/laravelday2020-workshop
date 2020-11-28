<?php


namespace Workshop\Core\Services;


class PresenterSelector
{
    public function select(string $responseType)
    {
        if (array_key_exists($responseType, config('core.response-types'))) {
            app()->bind(
                \Workshop\Core\Presenters\ItemPresenterInterface::class,
                config('core.response-types.' . $responseType)
            );
            return true;
        }

        return false;
    }
}
