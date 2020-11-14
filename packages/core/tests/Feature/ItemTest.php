<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase;
use Workshop\Core\CoreServiceProvider;
use Workshop\Domain\DomainServiceProvider;
use Workshop\Domain\Models\Item;
use Workshop\Domain\Repositories\ItemRepositoryInterface;

class ItemTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mockRepositories();

        $this->mockViews();
    }


    /** @test */
    public function it_shows_items()
    {
        $this->get('/')->assertOk();
    }

    protected function getPackageProviders($app)
    {
        return [
            CoreServiceProvider::class,
            DomainServiceProvider::class
        ];
    }

    private function mockViews(): void
    {
        \View::addNamespace('workshop', null);
        \View::shouldReceive('make')
            ->once()
            ->with('workshop::index', [], [])
            ->andReturnSelf()
            ->shouldReceive('with')
            ->once();
    }

    private function mockRepositories(): void
    {
        $this->app->bind(
            ItemRepositoryInterface::class,
            function () {
                return $this->mock(ItemRepositoryInterface::class, function ($mock) {
                    $mock->shouldReceive('all')
                        ->once()
                        ->andReturn(Item::factory()->count(2)->create());
                });
            });
    }


}
