<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        // simula una peticion http a la url home
        $response = $this->get('/');

        // estado ok
        $response->assertStatus(200);
    }
}
