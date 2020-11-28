<?php


namespace Tests;


use Workshop\Core\Presenters\ItemPresenterInterface;

class nePresenterFacadeTest extends TestCase
{
    /** @test */
    public function it_changes_presenter()
    {
        // mock Interface
        $mock = \Mockery::mock(
            ItemPresenterInterface::class,
            function ($mock) {
                $mock->shouldReceive('index');
            });

        \Config::set('core.response-types', ['mock' => get_class($mock)]);

        \Presenter::select('mock');

        $this->assertEquals(get_class(resolve(ItemPresenterInterface::class)), get_class($mock));
    }

}
