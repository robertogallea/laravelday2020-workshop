<?php


namespace Tests;


use Workshop\Core\CoreServiceProvider;
use Workshop\Core\Facades\PresenterFacade;

class TestCase extends \Orchestra\Testbench\TestCase
{


    protected function getPackageProviders($app) {
        return [
            CoreServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Presenter' => PresenterFacade::class,
        ];
    }
}
