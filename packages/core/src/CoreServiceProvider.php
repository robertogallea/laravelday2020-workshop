<?php


namespace Workshop\Core;


use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom($this->packagePath() . '/routes/web.php');
    }

    private function packagePath()
    {
        return __DIR__ . '/..';
    }
}
