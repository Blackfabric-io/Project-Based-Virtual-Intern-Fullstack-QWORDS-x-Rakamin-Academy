<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_product_listing_page()
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
        $response->assertViewIs('products.index');
        $response->assertSee('Our Products');
    }

    /** @test */
    public function it_displays_hosting_products()
    {
        $response = $this->get('/products');

        $response->assertSee('Cloud Hosting');
        $response->assertSee('VPS');
    }

    /** @test */
    public function it_shows_product_details()
    {
        $response = $this->get('/products/cloud-hosting');

        $response->assertStatus(200);
        $response->assertViewIs('products.show');
        $response->assertSee('Cloud Hosting');
        $response->assertSee('Features');
        $response->assertSee('Price');
    }
}
