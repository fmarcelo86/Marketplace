<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function testHomeTest() {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testOrderClientTest() {
        $response = $this->get('client/1');
        $response->assertStatus(200);
    }

    public function testGetAllOrdersTest() {
        $response = $this->get('orders');
        $response->assertStatus(200);
    }
}
