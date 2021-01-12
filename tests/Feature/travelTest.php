<?php

namespace Tests\Feature;

use App\User;
use App\Models\Travel;
use App\Models\Contact;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class travelTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     * @return void
     */
    public function test_main()
    {        
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('mains.travel');
    
        $response = $this->get('/contact');

        $response->assertStatus(200)
            ->assertViewIs('mains.contact');
    }
    /**
     * @test
     * @return void
     */
    public function test_mail()
    {
        $contact = factory(Contact::class)->create();
        
        $response = $this->from('/contact')->post('/contact/mail',$contact->toArray())
            ->assertredirect();

        $this->assertDatabaseHas('contacts', ['id' => $contact->id]);
    }
    /**
     * @test
     * @return void
     */
    public function test_login()
    {
        $user = factory(User::class)->create();

        $response = $this
            ->actingAs($user)
            ->get(route('home'));

        $response->assertStatus(200)
            ->assertViewIs('home');
    }
    /**
     * @test
     * @return void
     */
    public function test_travel()
    {
        $travel = factory(Travel::class)->create();

        $response = $this
            ->get(route('detail', [$travel->id]));
        
        $response->assertStatus(200)
            ->assertViewIs('travel_pages.detail');
    }
    /**
     * @test
     * @return void
     */
    public function test_travelcreate()
    {
        $travel = factory(Travel::class)->create();

        $response = $this
        ->get(route('form'));
        
        $response->assertStatus(200)
            ->assertViewIs('travel_pages.form');

        $reqponse = $this->from('/travel/form')->post('/travel/create',$travel->toArray());

        $response->assertStatus(200);
        $this->assertDatabaseHas('travels', ['id' => $travel->id]);

    }
    /**
     * @test
     * @return void
     */
    public function test_travelupdate()
    {
        $travel = factory(Travel::class)->create();

        $response = $this
            ->get(route('edit', [$travel->id]));

        $response->assertStatus(200)
            ->assertViewIs('travel_pages.edit');

        $reqponse = $this->from('/travel/form')->post('/travel/create',$travel->toArray());

        $this->assertDatabaseHas('travels', ['id' => $travel->id]);
    }
    /**
     * @test
     * @return void
     */
    public function test_traveldelete()
    {
        $travel = factory(Travel::class)->create();

        $this->assertDatabaseHas('travels',['id' => $travel->id]);

        $response = $this->delete('travel/delete/' . $travel->toArray);
        
        $this->assertDatabaseMissing('travels', ['id' => $travel->toArray]);
    }
    /**
     * @test
     * @return void
     */
    public function test_travelplace()
    {
        $response = $this
            ->get('/travel/hoka_toho');
    
        $response->assertStatus(200)
            ->assertViewIs('travel_pages.place_parts.hoka_toho');
        
        $response = $this
            ->get('/travel/kanto');
    
        $response->assertStatus(200)
            ->assertViewIs('travel_pages.place_parts.kanto');
        
        $response = $this
            ->get('/travel/tubu');
    
        $response->assertStatus(200)
            ->assertViewIs('travel_pages.place_parts.tubu');
        
        $response = $this
            ->get('/travel/kansai');
    
        $response->assertStatus(200)
            ->assertViewIs('travel_pages.place_parts.kansai');
        
        $response = $this
            ->get('/travel/cyugoku');
    
        $response->assertStatus(200)
            ->assertViewIs('travel_pages.place_parts.cyugoku');
        
        $response = $this
            ->get('/travel/shikoku');
    
        $response->assertStatus(200)
            ->assertViewIs('travel_pages.place_parts.shikoku');
        
        $response = $this
            ->get('/travel/kyu_oki');
    
        $response->assertStatus(200)
            ->assertViewIs('travel_pages.place_parts.kyu_oki');
        }
}