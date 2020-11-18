<?php


namespace Workshop\Ui;


use Illuminate\Support\ServiceProvider;
use Workshop\Core\Presenters\ItemPresenterInterface;
use Workshop\Ui\Presenters\HtmlItemPresenter;

class UiServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadViewsFrom($this->packagePath() . '/resources/views', 'workshop');

        $this->app->bind(
            ItemPresenterInterface::class,
            config('core.presenters.items')
        );
    }

    private function packagePath()
    {
        return __DIR__ . '/..';
    }
}
