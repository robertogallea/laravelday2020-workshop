<?php


namespace Workshop\Domain;


use Illuminate\Support\ServiceProvider;
use Workshop\DBAccess\Repositories\DBItemRepository;
use Workshop\Domain\Repositories\ItemRepositoryInterface;

class DomainServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrationsFrom($this->packagePath() . '/database/migrations/');

        $this->app->bind(
            ItemRepositoryInterface::class,
            DBItemRepository::class
        );
    }

    private function packagePath()
    {
        return __DIR__ . '/..';
    }
}
