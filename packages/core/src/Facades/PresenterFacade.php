<?php


namespace Workshop\Core\Facades;


use Illuminate\Support\Facades\Facade;

class PresenterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'presenter-selector';
    }
}
