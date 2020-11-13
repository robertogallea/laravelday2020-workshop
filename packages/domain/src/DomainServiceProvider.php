<?php


namespace Workshop\Domain;


use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom($this->packagePath() . '/database/migrations/');
    }

    private function packagePath()
    {
        return __DIR__ . '/..';
    }
}
