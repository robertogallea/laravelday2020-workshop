<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Workshop\Core\CoreServiceProvider;
use Workshop\Core\Presenters\ItemPresenterInterface;
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

        $this->mockPresenter();
    }


    /** @test */
    public function it_shows_items()
    {
        $this->get('/')->assertOk();
    }

    private function mockPresenter(): void
    {
        $this->mock(ItemPresenterInterface::class, function ($mock) {
            $mock->shouldReceive('index')
                ->once()
                ->andReturn('a response');
        });
    }

    private function mockRepositories(): void
    {
        $this->mock(ItemRepositoryInterface::class, function ($mock) {
            $mock->shouldReceive('all')
                ->once()
                ->andReturn(Item::factory()->count(2)->create());
        });
    }


}
