<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class travelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('mains.travel');

        $response = $this->get('/contact');

        $response->assertStatus(200)
            ->assertViewIs('mains.contact');
        }
}
