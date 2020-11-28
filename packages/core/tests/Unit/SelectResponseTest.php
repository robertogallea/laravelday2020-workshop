<?php


namespace Tests;


use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Workshop\Core\Http\Middleware\SelectResponse;
use Workshop\Core\Presenters\ItemPresenterInterface;

class SelectResponseTest extends \Orchestra\Testbench\TestCase
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

        // ItemPresenterInterface should not be bound
        // If it is, test fails
        try {
            resolve(ItemPresenterInterface::class);
            $this->assertTrue(false);
        } catch (BindingResolutionException $exception) {
            // Ok, we are good to go
        }

        \Config::set('core.response-types', ['mock' => get_class($mock)]);

        $request = new Request();

        $request->merge(['responseType' => 'mock']);

        (new SelectResponse())->handle($request, function ($request) {});

        $this->assertInstanceOf(ItemPresenterInterface::class, $mock);
    }
}
