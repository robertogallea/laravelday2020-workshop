<?php


namespace Tests;


use Illuminate\Http\Request;
use Workshop\Core\Http\Middleware\SelectResponse;
use Workshop\Core\Presenters\ItemPresenterInterface;

class SelectResponseTest extends TestCase
{
    /** @test */
    public function it_binds_presenter_type_to_request_get_parameter()
    {
        // mock Interface
        $mock = \Mockery::mock(
            ItemPresenterInterface::class,
            function ($mock) {
                $mock->shouldReceive('index');
            });

        \Config::set('core.response-types', ['mock' => get_class($mock)]);

        $request = new Request();

        $request->merge(['responseType' => 'mock']);

        (new SelectResponse())->handle($request, function ($request) use ($mock) {
            $this->assertEquals(get_class(resolve(ItemPresenterInterface::class)), get_class($mock));
        });
    }
}
