<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase;
use Workshop\Core\CoreServiceProvider;
use Workshop\Domain\DomainServiceProvider;
use Workshop\Domain\Models\Item;
use Workshop\Domain\Repositories\ItemRepositoryInterface;
use Workshop\Ui\UiServiceProvider;

class ItemTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();


    }


    /** @test */
    public function it_shows_items()
    {
        $this->app->bind(
            ItemRepositoryInterface::class,
            function() {
                return $this->mock(ItemRepositoryInterface::class, function ($mock) {
                    $mock->shouldReceive('all')
                        ->once()
                        ->andReturn(Item::factory()->count(2)->create());
                });;
            });


        $this->get('/')
            ->assertOk();
    }

    protected function getPackageProviders($app)
    {
        return [
            CoreServiceProvider::class,
            DomainServiceProvider::class,
            UiServiceProvider::class
        ];
    }


}
