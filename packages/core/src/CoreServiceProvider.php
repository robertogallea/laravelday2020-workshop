<?php


namespace Workshop\Core;


use Illuminate\Support\ServiceProvider;
use Workshop\DBAccess\Repositories\DBItemRepository;
use Workshop\Domain\Repositories\ItemRepositoryInterface;

class CoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            $this->packagePath() . '/config/core.php' , 'core'
        );

        $this->publishes([
            $this->packagePath() . '/config/core.php' => config_path('core.php'),
        ]);

        $this->loadRoutesFrom($this->packagePath() . '/routes/web.php');

        $this->app->bind(
            ItemRepositoryInterface::class,
            config('core.repositories.items')
        );
    }

    public function boot()
    {

    }

    private function packagePath()
    {
        return __DIR__ . '/..';
    }
}
