<?php


namespace Workshop\Ui;


use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadViewsFrom($this->packagePath() . '/resources/views', 'workshop');
    }

    private function packagePath()
    {
        return __DIR__ . '/..';
    }
}
