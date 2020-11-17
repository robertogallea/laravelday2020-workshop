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
    }

    private function packagePath()
    {
        return __DIR__ . '/..';
    }
}
