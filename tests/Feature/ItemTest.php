<?php

namespace Tests\Feature;

use App\Models\Item;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ItemTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_shows_items()
    {
        $items = Item::factory()->count(2)->create();

        $this->get('/')
            ->assertSee($items[0]->name)
            ->assertSee($items[0]->description)
            ->assertSee($items[1]->name)
            ->assertSee($items[1]->description);
    }
}
