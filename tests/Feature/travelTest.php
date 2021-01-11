<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class travelTest extends TestCase
{
    use DatabaseTransactions;

    /**
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

        $response = $this->get('/contact/mail');        

        $user = factory(User::class)->create();

        $response = $this
            ->actingAs($user)
            ->get(route('home'));

        $response->assertStatus(200)
            ->assertViewIs('home');
        } 
}