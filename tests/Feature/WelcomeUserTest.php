<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_welcome_nink_name_users()
    {
        $response = $this->get('/saludo/imanol/kini');

        $response->assertStatus(200)

        // lo que sale en pantalla
                 ->assertSee('Bienvenido: Imanol, tu nikname es: kini');
    }


    public function test_welcome_no_nink_name_users()
    {
        $response = $this->get('/saludo/imanol')

                    ->assertStatus(200)

                    ->assertSee('Bienvenido: Imanol');
    }
}
