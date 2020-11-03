<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test */
    public function it_should_return_products()
    {
        $response = $this->get('stores/2/products');

        $response->assertStatus(Response::HTTP_OK);

        $response->assertJsonStructure([[
            'id',
            'title',
            'price',
            'inventory',
            'variant',
        ]]);
    }

    /** @test */
    function it_should_fail_when_unavailable_platform_is_called(){
        $response = $this->get('stores/3/products');

        $response->assertStatus(Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
